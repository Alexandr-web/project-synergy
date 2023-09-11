export default class ValidForm {
    constructor(selectorForm, options, callbackWhenAllCompleted, callbackWhenFailed) {
        this.selectorForm = selectorForm;
        this.options = options;
        this.validClassName = "form__input--valid";
        this.invalidClassName = "form__input--invalid";
        this.form = document.querySelector(selectorForm);
        this.allComplete = false;
        this.callbackWhenAllCompleted = callbackWhenAllCompleted;
        this.callbackWhenFailed = callbackWhenFailed;
        this.completeNames = [];
        this.failedNames = [];
    }

    _getElementByName(name) {
        return document.querySelector(`${this.selectorForm} [name=${name}]`);
    }

    checkMin(min, value) {
        return value.trim().length >= min;
    }

    checkMax(max, value) {
        return value.trim().length <= max;
    }

    checkEmail(value) {
        return /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/.test(value);
    }

    checkEqual(val1, val2) {
        return val1 === val2;
    }

    isFile(value) {
        return value instanceof File;
    }

    isNumber(value) {
        return !Object.is(Number(value), NaN);
    }

    lettersOnly(value) {
        return /^[\s|а-я|\s|a-z]+$/i.test(value);
    }

    _getElementsFromOptions() {
        return Object.keys(this.options).map((name) => this._getElementByName(name));
    }

    _getOptions(onlyTypeFile = false) {
        return Object.keys(this.options)
            .filter((name) => (this._getElementByName(name).type === "file" && onlyTypeFile) || !onlyTypeFile)
            .reduce((acc, name) => {
                acc.push({
                    name,
                    element: this._getElementByName(name),
                    options: this.options[name],
                });

                return acc;
            }, []);
    }

    checkAll(name, value) {
        const options = this.options[name];
        const res = {};

        for (const option in options) {
            const optVal = options[option];

            switch (option) {
                case "min":
                    res[option] = this.checkMin(optVal, value);
                    break;
                case "max":
                    res[option] = this.checkMax(optVal, value);
                    break;
                case "equal":
                    res[option] = this.checkEqual(optVal, value);
                    break;
                case "email":
                    res[option] = this.checkEmail(value);
                    break;
                case "file":
                    res[option] = this.isFile(value);
                    break;
                case "numberOnly":
                    res[option] = this.isNumber(value);
                    break;
                case "lettersOnly":
                    res[option] = this.lettersOnly(value);
                    break;
            }
        }

        return Object.values(res).every(Boolean);
    }

    _setValidElement(element) {
        element.classList.remove(this.invalidClassName);
        element.classList.add(this.validClassName);
    }

    _setInvalidElement(element) {
        element.classList.remove(this.validClassName);
        element.classList.add(this.invalidClassName);
    }

    _inputIsComplete(name, element) {
        const findIndexName = this.failedNames.indexOf(name);

        if (findIndexName !== -1) {
            this.failedNames.splice(findIndexName, 1);
        }

        if (!this.completeNames.includes(name)) {
            this.completeNames.push(name);
        }

        element && this._setValidElement(element);
    }

    _inputIsFailed(name, element) {
        const findIndexName = this.completeNames.indexOf(name);

        if (findIndexName !== -1) {
            this.completeNames.splice(findIndexName, 1);
        }

        if (!this.failedNames.includes(name)) {
            this.failedNames.push(name);
        }

        element && this._setInvalidElement(element);
    }

    _checkAllStatesOnCompleted() {
        this.allComplete = this.completeNames.length === Object.keys(this.options).length;
    }

    _checkValueInput(element, name, options) {
        let checkIsComplete = true;

        if (!options.optional || element.value.trim().length) {
            checkIsComplete = this.checkAll(name, element.value);
        }

        checkIsComplete ? this._inputIsComplete(name, element) : this._inputIsFailed(name, element);

        this._checkAllStatesOnCompleted();
    }

    _checkValueFile(name, options, e) {
        const file = e.target.files[0];

        let checkIsComplete = true;

        if (!options.optional) {
            checkIsComplete = this.checkAll(name, file);
        }

        checkIsComplete ? this._inputIsComplete(name) : this._inputIsFailed(name);

        this._checkAllStatesOnCompleted();
    }

    _setEventInputs() {
        this._getOptions().forEach(({ name, element, options, }) => {
            element.addEventListener("input", this._checkValueInput.bind(this, element, name, options));
            element.addEventListener("blur", this._checkValueInput.bind(this, element, name, options));
        });

        this._getOptions(true).forEach(({ name, element, options, }) => {
            element.addEventListener("change", (e) => this._checkValueFile(name, options, e));
        });
    }

    _setEventSubmitForm() {
        this.form.addEventListener("submit", (e) => {
            e.preventDefault();

            this._getOptions().forEach(({ name, element, options, }) => {
                this._checkValueInput(element, name, options);
            });

            this._getOptions(true).forEach(({ name, options, }) => {
                if (options.optional) {
                    this._inputIsComplete(name);
                }
            });

            this._checkAllStatesOnCompleted();

            if (this.allComplete) {
                const fd = new FormData(this.form);

                this.callbackWhenAllCompleted instanceof Function && this.callbackWhenAllCompleted(fd);
            } else {
                this.callbackWhenFailed instanceof Function && this.callbackWhenFailed(e);
            }
        });
    }

    _setEventResetForm() {
        this.form.addEventListener("reset", () => {
            this._getOptions().forEach(({ element, }) => {
                element.classList.remove(this.validClassName);
                element.classList.remove(this.invalidClassName);

                this.completeNames = [];
                this.failedNames = [];

                this.allComplete = false;
            });
        });
    }

    init() {
        this._setEventInputs();
        this._setEventSubmitForm();
        this._setEventResetForm();
    }
}
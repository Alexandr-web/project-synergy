export default class CustomSelect {
    constructor(selectorSelect, callbackWhenChanged) {
        this.select = document.querySelector(selectorSelect);
        this.title = this.select.querySelector(".custom-select__title");
        this.options = this.select.querySelectorAll(".custom-select__option");
        this.value = "";
        this.callbackWhenChanged = callbackWhenChanged;
    }

    _setTitle(text) {
        this.title.textContent = text;
        this.value = text;

        this.callbackWhenChanged instanceof Function && this.callbackWhenChanged(text);
    }

    _setActiveOption(idxActiveOption) {
        this.options.forEach((option) => option.classList.remove("custom-select__option--active"));
        this.options[idxActiveOption].classList.add("custom-select__option--active");
    }

    _setChooseOptions() {
        this.options.forEach((option, idx) => {
            option.addEventListener("click", () => {
                const dataValue = option.dataset.optionValue;

                this._setTitle(dataValue);
                this._setActiveOption(idx);
            });
        });
    }

    init() {
        this._setTitle(this.options[0].dataset.optionValue);
        this._setActiveOption(0);
        this._setChooseOptions();

        return this;
    }
}
export default class Alert {
    constructor(selectorAlert = ".alert", selectorBtnClose = ".alert .btn-close", selectorText = ".alert p") {
        this.alert = document.querySelector(selectorAlert);
        this.btnClose = document.querySelector(selectorBtnClose);
        this.text = document.querySelector(selectorText);
        this.classForShow = "d-block";
        this.classForHide = "d-none";
        this.classesByType = [
            { type: "error", name: "alert-danger", },
            { type: "success", name: "alert-success", }
        ];
    }

    _removeClassesByType() {
        this.classesByType.forEach(({ name, }) => this.alert.classList.remove(name));
    }

    _getClassAlertByType(type) {
        const findClass = this.classesByType.find(({ type: classType, }) => classType === type) || {};

        this._removeClassesByType();

        return findClass.name || "";
    }

    _setEventForBtnClose() {
        this.btnClose.addEventListener("click", this.hide.bind(this));
    }

    show(type, text) {
        this.alert.classList.add(this.classForShow);
        this.alert.classList.remove(this.classForHide);
        this.alert.classList.add(this._getClassAlertByType(type));

        this.text.textContent = text;
    }

    hide() {
        this.alert.classList.remove(this.classForShow);
        this.alert.classList.add(this.classForHide);
    }

    init() {
        this._setEventForBtnClose();

        return this;
    }
}
export default class ModalWindow {
    constructor(selectorModalWindow = ".modal", selectorBtnClose = ".modal .btn-close", classNameForOpen = "d-block") {
        this.modalWindow = document.querySelector(selectorModalWindow);
        this.btnClose = document.querySelector(selectorBtnClose);
        this.classNameForOpen = classNameForOpen;
        this.document = document.body;
    }

    _setBtnCloseEvent() {
        this.btnClose.addEventListener("click", this.hide.bind(this));
    }

    show() {
        this.document.style.overflow = "hidden";
        this.modalWindow.classList.add(this.classNameForOpen);
    }

    hide() {
        this.document.style.overflow = "auto";
        this.modalWindow.classList.remove(this.classNameForOpen);
    }

    init() {
        this._setBtnCloseEvent();

        return this;
    }
}
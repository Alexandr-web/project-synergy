export default class ModalWindow {
    constructor(selectorModalWindow = ".modal", selectorBtnClose = ".btn-close", classNameForOpen = "d-block") {
        this.modalWindow = document.querySelector(selectorModalWindow);
        this.btnClose = document.querySelector(selectorBtnClose);
        this.classNameForOpen = classNameForOpen;
    }

    _setBtnCloseEvent() {
        this.btnClose.addEventListener("click", () => {
            this.modalWindow.classList.remove(this.classNameForOpen);
        });
    }

    show() {
        this.modalWindow.classList.add(this.classNameForOpen);
    }

    init() {
        this._setBtnCloseEvent();
    }
}
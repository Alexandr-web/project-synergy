import ModalWindow from "../classes/ui/ModalWindow";

export default (btnSelector, event = "dblclick", ...args) => {
    const btns = document.querySelectorAll(btnSelector);

    if (!btns.length) {
        return;
    }

    const modalWindow = new ModalWindow(...args).init();

    btns.forEach((btn) => btn.addEventListener(event, () => modalWindow.show()));
};
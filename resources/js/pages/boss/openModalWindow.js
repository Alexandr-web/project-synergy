import ModalWindow from "../../classes/ui/ModalWindow";

export default () => {
    const btns = document.querySelectorAll(".js-student-btn");

    if (!btns.length) {
        return;
    }

    const modalWindow = new ModalWindow().init();

    btns.forEach((btn) => {
        btn.addEventListener("dblclick", () => modalWindow.show());
    });
};
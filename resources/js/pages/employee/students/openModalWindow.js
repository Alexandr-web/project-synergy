import ModalWindow from "../../../classes/ui/ModalWindow";

export default () => {
    const studentsList = document.querySelectorAll(".js-student-btn");

    if (!studentsList.length) {
        return;
    }

    const modalWindow = new ModalWindow().init();

    studentsList.forEach((btn) => {
        btn.addEventListener("dblclick", () => {
            modalWindow.show();
        });
    });
};
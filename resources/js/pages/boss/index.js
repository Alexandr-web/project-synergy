import openModalWindowByClick from "../../scripts/openModalWindowByClick";
import setRedirectBack from "../../scripts/setRedirectBack";

window.addEventListener("load", () => {
    setRedirectBack();
    openModalWindowByClick(".js-employee-btn");
});
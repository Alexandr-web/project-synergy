import openModalWindowByClick from "../../scripts/openModalWindowByClick";
import setRedirectBack from "../../scripts/setRedirectBack";
import tabs from "../../scripts/tabs";

window.addEventListener("load", () => {
    setRedirectBack();
    tabs();
    openModalWindowByClick(".js-employee-btn");
});
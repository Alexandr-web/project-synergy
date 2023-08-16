import filter from "./filter";
import search from "./search";
import openModalWindowByClick from "../../../scripts/openModalWindowByClick";
import tabs from "../../../scripts/tabs";
import setRedirectBack from "../../../scripts/setRedirectBack";

window.addEventListener("load", () => {
    setRedirectBack();
    filter();
    search();
    openModalWindowByClick(".js-student-btn");
    tabs();
});
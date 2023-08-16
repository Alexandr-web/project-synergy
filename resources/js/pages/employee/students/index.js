import filter from "./filter";
import search from "./search";
import openModalWindowByClick from "../../../scripts/openModalWindowByClick";
import tabs from "../../../scripts/tabs";

window.addEventListener("load", () => {
    filter();
    search();
    openModalWindowByClick(".js-student-btn");
    tabs();
});
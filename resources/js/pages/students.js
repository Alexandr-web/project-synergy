import initTabs from "../scripts/tabs";
import initCustomScrollBar from "../scripts/initCustomScrollBar";
import initSearchStudent from "../scripts/searchStudent";

window.addEventListener("load", () => {
    initTabs();
    initCustomScrollBar();
    initSearchStudent();
});
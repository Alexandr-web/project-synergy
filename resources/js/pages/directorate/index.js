import initTabs from "../../scripts/tabs";
import initCustomScrollBar from "../../scripts/initCustomScrollBar";
import initSearchStudent from "../../scripts/searchStudent";
import initEventLoop from "./eventLoop";

window.addEventListener("load", () => {
    initTabs();
    initCustomScrollBar();
    initSearchStudent();
    initEventLoop();
});
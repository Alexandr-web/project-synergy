import initTabs from "../../scripts/tabs";
import initCustomScrollBar from "../../scripts/initCustomScrollBar";
import initSearchStudent from "../../scripts/searchStudent";
import initEventLoop from "./eventLoop";
import deleteJWTFromCookie from "../../scripts/deleteJWTFromCookie";

window.addEventListener("load", () => {
    initTabs();
    initCustomScrollBar();
    initSearchStudent();
    initEventLoop();
    deleteJWTFromCookie();
});
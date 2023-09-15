import initTabs from "../../scripts/tabs";
import initCustomScrollBar from "../../scripts/initCustomScrollBar";
import initSearchStudent from "../../scripts/searchStudent";
import deleteJWTFromCookie from "../../scripts/deleteJWTFromCookie";

window.addEventListener("load", () => {
    initTabs();
    initCustomScrollBar();
    initSearchStudent();
    deleteJWTFromCookie();
});
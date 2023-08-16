import loadFiles from "./loadFiles";
import tabs from "../../../scripts/tabs";
import setRedirectBack from "../../../scripts/setRedirectBack";

window.addEventListener("load", () => {
    setRedirectBack();
    loadFiles();
    tabs();
});
import filter from "./filter";
import search from "./search";
import openModalWindow from "./openModalWindow";

window.addEventListener("load", () => {
    filter();
    search();
    openModalWindow();
});
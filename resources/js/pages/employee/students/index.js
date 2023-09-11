import filter from "./filter";
import search from "./search";
import tabs from "../../../scripts/tabs";

window.addEventListener("load", () => {
    filter();
    search();
    tabs();
});
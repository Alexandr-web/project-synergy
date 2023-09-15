import filter from "./filter";
import search from "./search";
import tabs from "../../../scripts/tabs";
import deleteJWTFromCookie from "../../scripts/deleteJWTFromCookie";

window.addEventListener("load", () => {
    filter();
    search();
    tabs();
    deleteJWTFromCookie();
});
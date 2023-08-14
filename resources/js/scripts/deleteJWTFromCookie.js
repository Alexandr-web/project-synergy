import Cookie from "js-cookie";
import Route from "../classes/ui/Route";

window.addEventListener("load", () => {
    const btn = document.querySelector("#logout-btn");

    if (!btn) {
        return;
    }

    btn.addEventListener("click", () => {
        Cookie.remove("token");

        new Route().redirect("/auth/login");
    });
});
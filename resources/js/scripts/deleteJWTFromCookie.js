import CurrentUser from "../classes/ui/CurrentUser";
import Route from "../classes/ui/Route";

export default () => {
    const btn = document.querySelector("#logout-btn");

    if (!btn) {
        return;
    }

    btn.addEventListener("click", () => {
        new CurrentUser().removeFromCookie();

        return new Route().redirect("/auth");
    });
};
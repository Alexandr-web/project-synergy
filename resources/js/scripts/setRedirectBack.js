import Route from "../classes/ui/Route";

export default () => {
    const btn = document.querySelector(".js-btn-back");

    if (!btn) {
        return;
    }

    btn.addEventListener("click", () => new Route().back());
};
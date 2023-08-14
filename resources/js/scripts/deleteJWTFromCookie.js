import Cookie from "js-cookie";

window.addEventListener("load", () => {
    const btn = document.querySelector("#logout-btn");

    if (!btn) {
        return;
    }

    btn.addEventListener("click", () => Cookie.remove("token"));
});
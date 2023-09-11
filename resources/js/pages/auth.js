import Route from "../classes/ui/Route";

window.addEventListener("load", () => {
    const form = document.querySelector("#login-form");

    if (!form) {
        return;
    }

    const route = new Route();

    form.addEventListener("submit", (e) => {
        e.preventDefault();

        const fd = new FormData(form);
        const role = route.getQuery("role");

        fd.set("role", role);

        fd.forEach((val, name) => console.log(`${name}: ${val}`));
    });
});
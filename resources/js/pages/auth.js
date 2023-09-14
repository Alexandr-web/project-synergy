import Route from "../classes/ui/Route";
import ValidForm from "../classes/ui/ValidForm";
import Auth from "../classes/request/Auth";

window.addEventListener("load", () => {
    const form = document.querySelector("#login-form");

    if (!form) {
        return;
    }

    const options = {
        username: { min: 6, },
        password: { min: 6, },
    };

    const route = new Route();

    const callbackWhenAllCompleted = (fd) => {
        const role = route.getQuery("role");

        fd.set("role", role);

        new Auth()
            .login(fd)
            .then((data) => console.log(data))
            .catch((err) => {
                throw err;
            });
    };

    new ValidForm("#login-form", options, callbackWhenAllCompleted).init();
});
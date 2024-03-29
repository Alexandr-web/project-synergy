import Route from "../classes/ui/Route";
import ValidForm from "../classes/ui/ValidForm";
import Auth from "../classes/request/Auth";
import CurrentUser from "../classes/ui/CurrentUser";
import Cookie from "js-cookie";

function redirectByRole(role, route) {
    let path = "";

    switch (role) {
        case "directorate":
            path = "/directorate";
            break;
        case "student":
            path = "/students/1/attestation-sheet";
            break;
        case "supervisor":
            path = "/supervisor/employees";
            break;
    }

    return route.redirect(path);
}

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

        new Auth()
            .login(fd)
            .then(({ res, err, }) => {
                if (!res) {
                    alert("Произошла ошибка сервера");

                    console.error(err);

                    return;
                }

                if (res.error && res.error === "invalid_grant") {
                    alert("Неверно записан логин или пароль");

                    return;
                }

                const { expires_in, refresh_expires_in, access_token, refresh_token, } = res;
                const currentUser = new CurrentUser();

                Cookie.set("role", role);

                currentUser.addTokenToCookie("token", access_token, expires_in);
                currentUser.addTokenToCookie("refresh_token", refresh_token, refresh_expires_in);

                return redirectByRole(role, route);
            }).catch((err) => {
                throw err;
            });
    };

    new ValidForm("#login-form", options, callbackWhenAllCompleted).init();
});
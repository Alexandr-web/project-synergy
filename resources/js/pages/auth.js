import Route from "../classes/ui/Route";
import ValidForm from "../classes/ui/ValidForm";
import Auth from "../classes/request/Auth";
import CurrentUser from "../classes/ui/CurrentUser";
import Student from "../classes/request/Student";
import Cookie from "js-cookie";

function redirectByRole(role, route, userId) {
    let path = "";

    switch (role) {
        case "directorate":
            path = "/directorate";
            break;
        case "student":
            path = `/students/${userId}/attestation-sheet`;
            break;
        case "supervisor":
            path = `/supervisor/${userId}/employees`;
            break;
    }

    return route.redirect(path);
}

function setTokensFromRequest({ expires_in, refresh_expires_in, access_token, refresh_token, }) {
    const currentUser = new CurrentUser();

    currentUser.addTokenToCookie("access_token", access_token, expires_in);
    currentUser.addTokenToCookie("refresh_token", refresh_token, refresh_expires_in);
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
    const role = route.getQuery("role");

    const callbackWhenAllCompleted = (fd) => {
        Cookie.set("role", role);

        if (role === "student") {
            new Student()
                .authorization(fd)
                .then(({ res, err, }) => {
                    if (!res) {
                        alert("Произошла ошибка сервера");

                        console.error(err);

                        return;
                    }

                    if (res.error_code === 3) {
                        alert("Неверно записан логин или пароль");

                        return;
                    }

                    const { token, data, } = res;
                    const { info: [{ studentId, }], sso, } = data;

                    Cookie.set("token", token);

                    setTokensFromRequest(sso);

                    return redirectByRole(role, route, studentId);
                }).catch((err) => {
                    throw err;
                });
        } else if (["supervisor", "directorate"].includes(role)) {
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

                    setTokensFromRequest(res);

                    return redirectByRole(role, route, 1);
                }).catch((err) => {
                    throw err;
                });
        }
    };

    new ValidForm("#login-form", options, callbackWhenAllCompleted).init();
});
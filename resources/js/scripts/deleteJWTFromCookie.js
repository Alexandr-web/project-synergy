import Route from "../classes/ui/Route";
import Auth from "../classes/request/Auth";
import CurrentUser from "../classes/ui/CurrentUser";
import Cookie from "js-cookie";

export default () => {
    const btn = document.querySelector("#logout-btn");

    if (!btn) {
        return;
    }

    btn.addEventListener("click", () => {
        const accessToken = Cookie.get("access_token");
        const refreshToken = Cookie.get("refresh_token");

        new Auth()
            .logout({ refresh_token: refreshToken, }, accessToken)
            .then(({ status, }) => {
                if (status === 200) {
                    new CurrentUser().removeDataFromCookie();

                    return new Route().redirect("/auth");
                }
            }).catch((err) => {
                throw err;
            });
    });
};
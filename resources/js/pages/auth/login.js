import ValidForm from "../../classes/ui/ValidForm";
import Auth from "../../classes/request/Auth";
import Alert from "../../classes/ui/Alert";
import Route from "../../classes/ui/Route";
import Cookie from "js-cookie";

export default () => {
    const alert = new Alert().init();
    const options = {
        login: {
            min: 6,
            max: 16,
        },
        password: { min: 8, },
    };
    const callbackWhenAllCompleted = (fd) => {
        new Auth()
            .login(fd)
            .then((data) => {
                alert.show("success", "Вход выполнен успешно!");

                Cookie.set("token", "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJyb2xlIjoiZW1wbG95ZWUiLCJkYXRhX3VzZXIiOnsibmFtZSI6IkFsZXhhbmRyIiwiYWdlIjoxMjgsImlkIjoxfX0.Qej8xXuHwN0rEibL9N4oAxj_zLzi6SgiB69Ff4h_u0o");

                new Route().redirect();
            }).catch((err) => {
                throw err;
            });
    };
    const callbackWhenFailed = () => {
        alert.show("error", "Все поля должны быть заполнены правильно");
    };

    new ValidForm("#form-login", options, callbackWhenAllCompleted, callbackWhenFailed).init();
};
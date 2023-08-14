import ValidForm from "../../classes/ui/ValidForm";
import Auth from "../../classes/request/Auth";
import Alert from "../../classes/ui/Alert";
import Route from "../../classes/ui/Route";

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
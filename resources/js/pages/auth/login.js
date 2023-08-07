import ValidForm from "../../classes/ui/ValidForm";
import Auth from "../../classes/request/Auth";

export default () => {
    const options = {
        login: {
            min: 6,
            max: 16,
        },
        password: {
            min: 8,
        },
    };
    const callbackWhenAllCompleted = (fd) => {
        new Auth()
            .login(fd)
            .then((data) => console.log(data))
            .catch((err) => {
                throw err;
            });
    };

    new ValidForm("#form-login", options, callbackWhenAllCompleted).init();
};
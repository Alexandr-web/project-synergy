import Request from "./Request";

export default class Auth extends Request {
    constructor() {
        super();
    }

    login(fd) {
        const url = `${this.HOST}/auth/login`;

        return this.send(url, "POST", { body: fd, });
    }
}
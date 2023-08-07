import Request from "./Request";

export default class Manager extends Request {
    login(fd) {
        const url = `${this.HOST}/manager/login`;

        return this.send(url, "POST", {
            body: fd,
            headers: { "Accept-Type": "application/json", },
        });
    }
}
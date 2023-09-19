import Request from "./Request";

export default class Student extends Request {
    constructor() {
        super();
    }

    authorization(fd) {
        const url = `${this.HOST}/students/authorization`;

        return this.send(url, "POST", { body: fd, });
    }
}
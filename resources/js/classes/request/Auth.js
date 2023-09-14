import Request from "./Request";

export default class Auth extends Request {
    constructor() {
        super();

        this.host = "https://id2.synergy.ru";
        this.clientId = "hakaton";
        this.clientSecret = "qsNhxarJL8o3f008EusCOTuBZnCpRhyp";
        this.grantType = "password";
        this.realm = "synergy";
    }

    login(fd) {
        const url = `${this.host}/auth/realms/${this.realm}/protocol/openid-connect/token`;

        fd.set("client_id", this.clientId);
        fd.set("client_secret", this.clientSecret);
        fd.set("grant_type", this.grantType);

        return this.send(url, "POST", {
            headers: {
                "Content-Type": "application/x-www-form-urlencoded",
            },
            body: fd,
        });
    }
}
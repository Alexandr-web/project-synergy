import Cookie from "js-cookie";

export default class Request {
    constructor() {
        this.TOKEN = Cookie.get("token") || "";
    }

    _getBodyLength(body) {
        if (typeof body === "string") {
            return body.length;
        }

        if (body instanceof FormData) {
            return [...body.keys()].length;
        }

        return Object.keys(body).length;
    }

    send(url, method, options = {}) {
        const incomingHeaders = options.headers || {};
        const body = options.body || {};
        const headers = {
            ...incomingHeaders,
            "X-Requested-With": "XMLHttpRequest",
        };
        const config = {
            method,
            headers,
            body: this._getBodyLength(body) ? body : undefined,
        };

        return fetch(url, config)
            .then((data) => data.json())
            .catch((error) => {
                console.error(error);
                return { message: error.error_description, error: error.error, };
            });
    }
}
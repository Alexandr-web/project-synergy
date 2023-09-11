export default class Route {
    constructor() {
        this.location = window.location;
        this.history = window.history;
    }

    getQuery(param) {
        const query = this.location.search.substring(1);
        const vars = query.split("&");

        for (let i = 0; i < vars.length; i++) {
            const pair = vars[i].split("=");

            if (pair[0] === param) {
                return pair[1];
            }
        }

        return "";
    }

    redirect(url = "/") {
        this.location.href = url;
    }

    go(to) {
        this.history.go(to);
    }

    back() {
        this.history.back();
    }
}
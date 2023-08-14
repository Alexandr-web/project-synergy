export default class Route {
    constructor() {
        this.location = window.location;
        this.history = window.history;
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
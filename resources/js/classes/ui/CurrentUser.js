import jwtDecode from "jwt-decode";
import Cookie from "js-cookie";

export default class CurrentUser {
    getData() {
        const token = Cookie.get("token");

        return jwtDecode(token);
    }

    removeFromCookie() {
        Cookie.remove("token");
        Cookie.remove("role");
    }

    addToCookie(token, expires) {
        Cookie.set("token", token, { expires, });
    }
}
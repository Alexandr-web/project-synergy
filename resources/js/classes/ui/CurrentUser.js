import jwtDecode from "jwt-decode";
import Cookie from "js-cookie";

export default class CurrentUser {
    getData() {
        const token = Cookie.get("token");

        return jwtDecode(token);
    }

    removeDataFromCookie() {
        Cookie.remove("token");
        Cookie.remove("refresh_token");
        Cookie.remove("role");
    }

    addTokenToCookie(name, token, expires) {
        Cookie.set(name, token, { expires, });
    }
}
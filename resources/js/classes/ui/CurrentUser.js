import Cookie from "js-cookie";
import jwtDecode from "jwt-decode";

export default class CurrentUser {
    removeDataFromCookie() {
        Cookie.remove("access_token");
        Cookie.remove("refresh_token");
        Cookie.remove("role");
        Cookie.remove("token");
    }

    getData(token) {
        return jwtDecode(Cookie.get(token));
    }

    addTokenToCookie(name, token, expires) {
        Cookie.set(name, token, { expires, });
    }
}
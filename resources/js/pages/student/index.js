import sendAttestationSheet from "./sendAttestationSheet";
import deleteJWTFromCookie from "../../scripts/deleteJWTFromCookie";

window.addEventListener("load", () => {
    sendAttestationSheet();
    deleteJWTFromCookie();
});
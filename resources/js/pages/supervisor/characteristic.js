import sendCharacteristic from "../../scripts/sendCharacteristic";
import sendResultsMeeting from "../../scripts/sendResultsMeeting";
import deleteJWTFromCookie from "../../scripts/deleteJWTFromCookie";

window.addEventListener("load", () => {
    sendCharacteristic();
    sendResultsMeeting();
    deleteJWTFromCookie();
});
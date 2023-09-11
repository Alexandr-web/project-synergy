import sendCharacteristic from "./sendCharacteristic";
import sendResultsMeeting from "./sendResultsMeeting";

window.addEventListener("load", () => {
    sendCharacteristic();
    sendResultsMeeting();
});
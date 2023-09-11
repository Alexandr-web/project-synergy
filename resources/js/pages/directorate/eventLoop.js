import renderEvent from "../../scripts/renderEvent";

export default () => {
    const select = document.querySelector("#event-loop-select");

    if (!select) {
        return;
    }

    select.addEventListener("change", () => {
        const val = select.value;

        console.log(val);
    });
};
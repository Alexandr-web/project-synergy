import HTMLTableInCSV from "../classes/ui/HTMLTableInCSV";

export default function (selectorBtn = "", selectorTable = "") {
    const btn = document.querySelector(selectorBtn);

    if (!btn) {
        return;
    }

    btn.addEventListener("click", () => {
        const htmlTableInCSV = new HTMLTableInCSV(selectorTable).init();

        htmlTableInCSV.download();
    });
}
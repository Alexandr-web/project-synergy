import xlsx from "xlsx";

export default class Table {
    constructor(selectorTable, selectorBtnDownload, selectorBtnSave, selectorInputUpload) {
        this.table = document.querySelector(selectorTable);
        this.btnDownload = document.querySelector(selectorBtnDownload);
        this.btnSave = document.querySelector(selectorBtnSave);
        this.inputUpload = document.querySelector(selectorInputUpload);
    }

    htmlTableToExcel() {
        const file = xlsx.utils.table_to_book(this.table);

        xlsx.write(file, { bookType: "xlsx", bookSST: true, type: "base64", });
        xlsx.writeFile(file, "file.xlsx", { bookSST: true, type: "base64", });
    }

    _setEventForBtnDownload() {
        if (!this.btnDownload) {
            return;
        }

        this.btnDownload.addEventListener("click", this.htmlTableToExcel.bind(this));
    }

    _getElementTable(htmlResult) {
        const block = document.createElement("div");

        block.innerHTML = htmlResult;

        return block.querySelector("table");
    }

    _setEventForUploadInput() {
        if (!this.inputUpload) {
            return;
        }

        this.inputUpload.addEventListener("change", (e) => {
            const reader = new FileReader();

            reader.readAsArrayBuffer(e.target.files[0]);

            reader.addEventListener("load", () => {
                this.inputUpload.classList.add("is-valid");
                this.inputUpload.classList.remove("is-invalid");

                const data = new Uint8Array(reader.result);
                const wb = xlsx.read(data, { type: "array", });
                const htmlStr = xlsx.write(wb, { type: "string", bookType: "html", });
                const table = this._getElementTable(htmlStr);

                this.table.innerHTML = table.innerHTML;
            });

            reader.addEventListener("error", () => {
                this.inputUpload.classList.remove("is-valid");
                this.inputUpload.classList.add("is-invalid");

                throw reader.error;
            });
        });
    }

    init() {
        this._setEventForBtnDownload();
        this._setEventForUploadInput();
    }
}
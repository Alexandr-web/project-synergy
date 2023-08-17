import xlsx from "xlsx";
import Alert from "./Alert";
import NothingText from "./NothingText";

export default class Table {
    constructor(selectorTable, selectorBtnDownload, selectorBtnSave, selectorInputUpload) {
        this.table = document.querySelector(selectorTable);
        this.btnDownload = document.querySelector(selectorBtnDownload);
        this.btnSave = document.querySelector(selectorBtnSave);
        this.inputUpload = document.querySelector(selectorInputUpload);

        this.alert = new Alert().init();
        this.nothingText = new NothingText();
        this.selectorTable = selectorTable;
    }

    _htmlTableToExcel() {
        const cells = this.table.querySelectorAll("td");

        this._removeAttributesCells(cells);

        const updatedTable = document.querySelector(this.selectorTable);
        const file = xlsx.utils.table_to_book(updatedTable);

        xlsx.write(file, { bookType: "xlsx", bookSST: true, type: "base64", });
        xlsx.writeFile(file, "file.xlsx", { bookSST: true, type: "base64", });
    }

    _removeAttributesCells(cells) {
        cells.forEach((el) => {
            el.removeAttribute("data-v");
            el.removeAttribute("data-t");
            el.removeAttribute("id");
        });
    }

    _setEventForBtnDownload() {
        if ([this.btnDownload, this.table].some((el) => !el)) {
            return;
        }

        this.btnDownload.addEventListener("click", this._htmlTableToExcel.bind(this));
    }

    _getElementTable(htmlResult) {
        const block = document.createElement("div");

        block.innerHTML = htmlResult;

        const table = block.querySelector("table");
        const cells = table.querySelectorAll("td");

        cells.forEach((el) => el.setAttribute("contenteditable", ""));

        return block.querySelector("table");
    }

    _renderTable(reader) {
        const data = new Uint8Array(reader.result);
        const wb = xlsx.read(data, { type: "array", });
        const htmlStr = xlsx.write(wb, { type: "string", bookType: "html", });
        const table = this._getElementTable(htmlStr);

        this.table.innerHTML = table.innerHTML;

        this.alert.show("success", "Файл был успешно загружен");
        this.nothingText.hide();
    }

    _handlerErrorByUploadFile(reader) {
        this.alert.show("error", `Произошла ошибка при загрузке файла: "${reader.error}"`);

        throw reader.error;
    }

    _setEventForUploadInput() {
        if (!this.inputUpload) {
            return;
        }

        this.inputUpload.addEventListener("change", (e) => {
            const reader = new FileReader();
            const file = e.target.files[0];

            if (file.type !== "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet") {
                this.alert.show("error", "Файл с таким расширением не поддерживается");
            }

            reader.readAsArrayBuffer(file);

            reader.addEventListener("load", this._renderTable.bind(this, reader));
            reader.addEventListener("error", this._handlerErrorByUploadFile.bind(this, reader));
        });
    }

    init() {
        this._setEventForBtnDownload();
        this._setEventForUploadInput();
    }
}
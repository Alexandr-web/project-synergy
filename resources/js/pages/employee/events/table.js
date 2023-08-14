import Table from "../../../classes/ui/Table";

export default () => {
    new Table("#event-table", ".js-btn-download", ".js-btn-save", ".js-upload-table-input").init();
};
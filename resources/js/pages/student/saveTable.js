import Sheet from "../../classes/ui/Sheet";

export default () => {
    const callbackAfterClick = (data) => console.log(data);

    new Sheet("Аттестационный лист студента программы Кадровый резерв", ".js-save-table", "#attestation-sheet-table", callbackAfterClick).init();
};
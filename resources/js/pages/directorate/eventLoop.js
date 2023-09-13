import renderEvent from "../../scripts/renderEvent";
import CustomSelect from "../../classes/ui/CustomSelect";

export default () => {
    new CustomSelect("#event-loop-select", (text) => {
        console.log(text);
    }).init();
};
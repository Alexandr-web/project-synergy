import ValidForm from "../classes/ui/ValidForm";
import renderStudent from "./renderStudent";
import CustomSelect from "../classes/ui/CustomSelect";

export default (selectorSearchForm = "#search-student-form") => {
    const form = document.querySelector(selectorSearchForm);

    if (!form) {
        return;
    }

    const yearEducation = new CustomSelect("#year-education-select").init();
    const subdivision = new CustomSelect("#subdivision-select").init();
    const options = {
        search: { min: 6, },
        "is-foreigner": { optional: true, },
        "is-complete": { optional: true, },
        status: { optional: true, },
        education: { optional: true, },
    };

    const callbackWhenAllCompleted = (fd) => {
        fd.set("year-education", yearEducation.value);
        fd.set("subdivision", subdivision.value);

        fd.forEach((val, key) => console.log(`${key}: ${val}`));
    };

    new ValidForm(selectorSearchForm, options, callbackWhenAllCompleted).init();
};
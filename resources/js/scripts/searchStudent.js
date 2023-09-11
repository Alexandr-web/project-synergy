import ValidForm from "../classes/ui/ValidForm";
import renderStudent from "./renderStudent";

export default (selectorSearchForm = "#search-student-form") => {
    const form = document.querySelector(selectorSearchForm);

    if (!form) {
        return;
    }

    const options = {
        search: { min: 6, },
        "year-admission": { optional: true, },
        "is-foreigner": { optional: true, },
        "is-complete": { optional: true, },
        status: { optional: true, },
        education: { optional: true, },
        subdivision: { optional: true, },
    };

    const callbackWhenAllCompleted = (fd) => {
        fd.forEach((val, key) => console.log(`${key}: ${val}`));
    };

    new ValidForm(selectorSearchForm, options, callbackWhenAllCompleted).init();
};
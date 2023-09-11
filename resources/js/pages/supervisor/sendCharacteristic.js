import ValidForm from "../../classes/ui/ValidForm";

export default () => {
    const form = document.querySelector("#manager-characteristic");

    if (!form) {
        return;
    }

    const options = {
        "date-fill": { min: 3, },
        name: { min: 3, },
        department: { min: 3, },
        job: { min: 3, },
        "work-date": { min: 3, },
        achievements: { min: 3, },
        strengths: { min: 3, },
        remarks: { min: 3, },
        "personal-qualities": { min: 3, },
        "proximal-development": { min: 3, },
        "competencies-for-development": { min: 3, },
        perspectives: { min: 3, },
    };

    const callbackWhenAllCompleted = (fd) => {
        fd.forEach((val, name) => console.log(`${name}: ${val}`));
    };

    new ValidForm("#manager-characteristic", options, callbackWhenAllCompleted).init();
};
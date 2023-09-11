import ValidForm from "../../classes/ui/ValidForm";

export default () => {
    const form = document.querySelector("#attestation-sheet-form");

    if (!form) {
        return;
    }

    const options = {
        "date-fill": { min: 3, },
        name: { min: 3, },
        department: { min: 3, },
        course: { min: 3, },
        achievements: { min: 3, },
        "unfulfilled-plans": { min: 3, },
        "developed-skills": { min: 3, },
        "skills-for-development": { min: 3, },
        mentor: { min: 3, },
        "acquired-skills-from-mentor": { min: 3, },
        "who-is-leader": { min: 3, },
        "random-fellow-traveler": { min: 3, },
        "skillful-employees": { min: 3, },
        "leader-employee": { min: 3, },
        "future-perspectives": { min: 3, },
        "improvements-in-my-department": { min: 3, },
        "new-services": { min: 3, },
        "new-business-directions": { min: 3, },
        "improvements": { min: 3, },
        "best-directions": { min: 3, },
        "my-directions": { min: 3, },
        "my-profitable-directions": { min: 3, },
        "my-suggestions": { min: 3, },
    };

    const callbackWhenAllCompleted = (fd) => {
        fd.forEach((val, name) => console.log(`${name}: ${val}`));
    };

    new ValidForm("#attestation-sheet-form", options, callbackWhenAllCompleted).init();
};
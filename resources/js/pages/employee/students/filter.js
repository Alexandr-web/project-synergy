import ValidForm from "../../../classes/ui/ValidForm";

export default () => {
    const form = document.querySelector("#form-filters");

    if (!form) {
        return;
    }

    const options = {
        admission: {
            min: 4,
            max: 4,
            numberOnly: true,
            optional: true,
        },
        subdivision: {
            min: 3,
            optional: true,
        },
    };
    const callbackWhenAllCompleted = (fd) => {
        console.log("All completed!", fd);
    };

    new ValidForm("#form-filters", options, callbackWhenAllCompleted).init();
};
import ValidForm from "../../../classes/ui/ValidForm";

export default () => {
    if (!document.querySelector("#form-filters")) {
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
        status: { optional: true, },
        education: { optional: true, },
        foreigner: { optional: true, },
        "meeting-is-complete": { optional: true, },
    };
    const callbackWhenAllCompleted = (fd) => {
        console.log("All completed!", fd);
    };

    new ValidForm("#form-filters", options, callbackWhenAllCompleted).init();
};
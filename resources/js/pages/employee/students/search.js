import ValidForm from "../../../classes/ui/ValidForm";

export default () => {
    const form = document.querySelector("#form-search");

    if (!form) {
        return;
    }

    const options = {
        search: {
            min: 3,
            max: 35,
            lettersOnly: true,
        },
    };
    const callbackWhenAllCompleted = (fd) => {
        console.log("All completed!", fd);
    };

    new ValidForm("#form-search", options, callbackWhenAllCompleted).init();
};
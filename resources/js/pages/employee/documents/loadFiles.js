export default () => {
    const inputs = document.querySelectorAll(".js-document-upload-input");

    inputs.forEach((input) => {
        const document = input.dataset.document;

        input.addEventListener("change", (e) => {
            const file = e.target.files[0];
            const reader = new FileReader();

            reader.readAsDataURL(file);

            reader.addEventListener("load", () => {
                console.log("Load!", reader.result);
                input.classList.add("is-valid");
                input.classList.remove("is-invalid");
            });

            reader.addEventListener("error", () => {
                input.classList.remove("is-valid");
                input.classList.add("is-invalid");

                throw reader.error;
            });
        });
    });
};
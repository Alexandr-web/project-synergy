import Alert from "../../../classes/ui/Alert";

function uploadIsValid(input, alert) {
    input.classList.add("is-valid");
    input.classList.remove("is-invalid");

    alert.show("success", "Файл успешно загружен");
}

function uploadIsInvalid(input, alert) {
    input.classList.remove("is-valid");
    input.classList.add("is-invalid");

    alert.show("error", "Произошла ошибка при загрузке файла");
}

export default () => {
    const inputs = document.querySelectorAll(".js-document-upload-input");

    if (!inputs.length) {
        return;
    }

    const alert = new Alert().init();

    inputs.forEach((input) => {
        const document = input.dataset.document;

        input.addEventListener("change", (e) => {
            const file = e.target.files[0];
            const reader = new FileReader();

            reader.readAsDataURL(file);

            reader.addEventListener("load", () => {
                console.log("Load!", reader.result, document);

                uploadIsValid(input, alert);
            });

            reader.addEventListener("error", () => {
                uploadIsInvalid(input, alert);

                throw reader.error;
            });
        });
    });
};
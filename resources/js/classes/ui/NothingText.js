export default class NothingText {
    constructor(selectorText = "#nothing-text") {
        this.elText = document.querySelector(selectorText);
    }

    show() {
        this.elText.classList.remove("d-none");
        this.elText.classList.add("d-flex");
    }

    hide() {
        this.elText.classList.remove("d-flex");
        this.elText.classList.add("d-none");
    }
}
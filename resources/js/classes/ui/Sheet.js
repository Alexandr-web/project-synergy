export default class Sheet {
    constructor(sheetName, selectorBtnToSave, selectorTable, callbackAfterClick) {
        this.name = sheetName;
        this.callbackAfterClick = callbackAfterClick;
        this.btnToSave = document.querySelector(selectorBtnToSave);
        this.table = document.querySelector(selectorTable);
        this.answersEls = this.table.querySelectorAll("[data-answer]");
        this.questionsEls = this.table.querySelectorAll("[data-question]");
        this.data = [];
    }

    setEventForBtnSave() {
        if (!this.btnToSave) {
            return this;
        }

        this.btnToSave.addEventListener("click", () => {
            this.questionsEls.forEach((questionEl) => {
                const question = questionEl.dataset.question;
                const questionIsHead = Boolean(questionEl.dataset.questionHead);
                const answerId = questionEl.dataset.targetAnswer;
                const answersEls = document.querySelectorAll(`[data-answer-id="${answerId}"]`);
                const answers = [...answersEls].reduce((acc, el) => {
                    acc.push(el.dataset.answer);
                    return acc;
                }, []);

                this.data.push({ question, answers, isHead: questionIsHead, });
            });

            if (this.callbackAfterClick instanceof Function) {
                this.callbackAfterClick({ name: this.name, data: this.data, });
            }
        });

        return this;
    }

    setEventForAnswers() {
        if (![this.answersEls.length, this.questionsEls.length].some(Boolean)) {
            return this;
        }

        this.answersEls.forEach((answerEl) => {
            answerEl.addEventListener("input", () => {
                answerEl.dataset.answer = answerEl.innerText.trim();
            });
        });

        return this;
    }

    init() {
        this.setEventForBtnSave();
        this.setEventForAnswers();

        return this;
    }
}
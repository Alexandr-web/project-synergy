export default class Tabs {
    constructor(selectorOpenBtn = ".accordion-button", selectorBody = ".accordion-collapse") {
        this.openBtns = document.querySelectorAll(selectorOpenBtn);
        this.body = document.querySelectorAll(selectorBody);
        this.data = [];
    }

    _fillData() {
        this.openBtns.forEach((btn) => {
            const target = btn.dataset.tabTarget;
            const body = document.querySelector(`[data-tab-body="${target}"]`);

            this.data.push({
                btn,
                body,
                target,
                show: false,
            });
        });
    }

    _changeShowStateAtItem(targetName, val) {
        const findIdxTab = this.data.findIndex(({ target, }) => target === targetName);

        this.data[findIdxTab].show = val;
        this._changeView(this.data[findIdxTab]);
    }

    _changeView({ body, btn, show, }) {
        if (show) {
            btn.classList.remove("collapsed");
            body.classList.add("show");
        } else {
            btn.classList.add("collapsed");
            body.classList.remove("show");
        }
    }

    _setEventBtns() {
        this.data.map(({ btn, target, show, }) => {
            let showState = show;

            btn.addEventListener("click", () => {
                showState = !showState;

                this._changeShowStateAtItem(target, showState);
            });
        });
    }

    init() {
        this._fillData();
        this._setEventBtns();
    }
}
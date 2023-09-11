export default class Tabs {
    constructor(selectorOpenBtn = "[data-tab-target]", selectorBody = "[data-tab-body]") {
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

    _whenOpenTab(btn, body) {
        btn.classList.remove("collapsed");
        body.classList.add("show");
    }

    _whenCloseTab(btn, body) {
        btn.classList.add("collapsed");
        body.classList.remove("show");
    }

    _changeView({ body, btn, show, }) {
        show ? this._whenOpenTab(btn, body) : this._whenCloseTab(btn, body);
    }

    _setEventBtns() {
        this.data.forEach(({ btn, target, show, }) => {
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
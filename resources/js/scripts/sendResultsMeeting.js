export default () => {
    const cells = document.querySelectorAll(".table__body-td[data-cell]");

    if (!cells.length) {
        return;
    }

    const btnSend = document.querySelector("#save-data-meeting-btn");

    btnSend.addEventListener("click", () => {
        const res = [...cells].reduce((acc, cell) => {
            const cellData = cell.dataset.cell;
            const value = cell.textContent;

            acc[cellData] = value;

            return acc;
        }, {});

        console.log(res);
    });
};
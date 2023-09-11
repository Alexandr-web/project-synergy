export default (data) => {
    const list = document.querySelector(".students-list");

    if (!list) {
        return;
    }

    data.forEach((item) => {
        list.innerHTML += `
        <li class="student">
            <a class="student__link" href="/students/1">${item.name}</a>
        </li>
        `;
    });
};
export default (data) => {
    const list = document.querySelector(".events-list");

    if (!list) {
        return;
    }

    data.forEach((item) => {
        list.innerHTML += `
        <li class="event-card">
            <header class="event-card__header">
                <h3 class="event-card__title">${item.title}</h3>
                <h4 class="event-card__date">${item.date}</h4>
            </header>
            <div class="event-card__main">
                <h3 class="event-card__name">${item.subtitle}</h3>
                <h6 class="event-card__address">${item.address}</h6>
            </div>
        </li>
        `;
    });
};
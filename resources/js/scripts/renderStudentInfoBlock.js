export default (data) => {
    const list = document.querySelector(".student-info__list");

    if (!list) {
        return;
    }

    data.forEach((item) => {
        list.innerHTML += `
        <div class="student-info">
            <div class="student-info__block">
                <img class="student-info__avatar" src="${item.avatar}" alt="${item.name}">
            </div>
            <div class="student-info__block">
                <h2 class="student-info__title">${item.name}</h2>
                <ul class="student-info__list">
                    <li class="student-info__list-item">
                        <span class="student-info__list-item-name">Статус:</span>
                        ${item.status}
                    </li>
                    <li class="student-info__list-item">
                        <span class="student-info__list-item-name">Дата рождения:</span>
                        ${item.date}
                    </li>
                    <li class="student-info__list-item">
                        <span class="student-info__list-item-name">Номер телефона:</span>
                        <ul class="student-info__sublist">
                            <li class="student-info__sublist-item">${item.phone}</li>
                            <li class="student-info__sublist-item">${item.phone}</li>
                        </ul>
                    </li>
                    <li class="student-info__list-item">
                        <span class="student-info__list-item-name">Рабочая почта:</span>
                        ${item.email}
                    </li>
                    <li class="student-info__list-item">
                        <span class="student-info__list-item-name">Гражданство:</span>
                        ${item.citizenship}
                    </li>
                    <li class="student-info__list-item">
                        <span class="student-info__list-item-name">Адрес проживания:</span>
                        ${item.address}
                    </li>
                    <li class="student-info__list-item">
                        <span class="student-info__list-item-name">Год поступления:</span>
                        ${item.yearAdmission}
                    </li>
                    <li class="student-info__list-item">
                        <span class="student-info__list-item-name">Контактные данные родителей:</span>
                        <ul class="student-info__sublist">
                            <li class="student-info__sublist-item">${item.mother.name}</li>
                            <li class="student-info__sublist-item">${item.mother.phone}</li>
                            <li class="student-info__sublist-item">${item.father.name}</li>
                            <li class="student-info__sublist-item">${item.father.phone}</li>
                        </ul>
                    </li>
                    <li class="student-info__list-item">
                        <span class="student-info__list-item-name">Город:</span>
                        ${item.city}
                    </li>
                    <li class="student-info__list-item">
                        <span class="student-info__list-item-name">Подразделение:</span>
                        ${item.subdivision}
                    </li>
                    <li class="student-info__list-item">
                        <span class="student-info__list-item-name">Должность:</span>
                        ${item.job}
                    </li>
                    <li class="student-info__list-item">
                        <span class="student-info__list-item-name">Площадка:</span>
                        ${item.place}
                    </li>
                    <li class="student-info__list-item">
                        <span class="student-info__list-item-name">Прямой руководитель:</span>
                        <ul class="student-info__sublist">
                            <li class="student-info__sublist-item">${item.supervisor.name}</li>
                            <li class="student-info__sublist-item">${item.supervisor.phone}</li>
                            <li class="student-info__sublist-item">${item.supervisor.phone}</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        `;
    });
};
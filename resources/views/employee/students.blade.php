@extends('layouts.employee')

@section('title', 'Студенты')

@section('content')
<h2>Список студентов</h2>
<div class="modal" tabindex="-1">
  <div class="modal-dialog" style="max-width: 50%">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Карточка студента</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-tab-target="tab-id-0">
                Главная
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-tab-body="tab-id-0">
              <div class="accordion-body">
                <table class="table table-bordered m-0" border="1" cellspacing="0" cellpadding="0">
                  <tr>
                    <td>ФИО</td>
                    <td>Яковлев Александр Николаевич</td>
                  </tr>
                  <tr>
                    <td>Портретное фото</td>
                    <td>
                      <img class="rounded" src="https://img.freepik.com/free-photo/happy-young-female-student-holding-notebooks-from-courses-smiling-camera-standing-spring-clothes-against-blue-background_1258-70161.jpg?w=2000" alt="Фотография студента" style="max-width: 100px">
                    </td>
                  </tr>
                  <tr>
                    <td>Статус</td>
                    <td>Уволен</td>
                  </tr>
                  <tr>
                    <td>Дата рождения</td>
                    <td>11.10.2004</td>
                  </tr>
                  <tr>
                    <td>Номер телефона (+внутренний)</td>
                    <td>7961567321</td>
                  </tr>
                  <tr>
                    <td>Рабочая почта</td>
                    <td>alex@mail.ru</td>
                  </tr>
                  <tr>
                    <td>Гражданство (гражданство и приписка «Иностранец», если гражданство не РФ)</td>
                    <td>РФ</td>
                  </tr>
                  <tr>
                    <td>Фактический адрес проживания</td>
                    <td>ул. Большой коптевский проезд дом 7</td>
                  </tr>
                  <tr>
                    <td>Год поступления</td>
                    <td>2004</td>
                  </tr>
                  <tr>
                    <td>Контактные данные родителей: ФИО, номер телефона, город</td>
                    <td>Мать: Иванова Мария Ивановна;</td>
                  </tr>
               </table>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-tab-target="tab-id-1">
                Сотрудник
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-tab-body="tab-id-1">
              <div class="accordion-body">
                <table class="table table-bordered m-0" border="1" cellspacing="0" cellpadding="0">
                  <tr>
                    <td>Структурное подразделение</td>
                    <td>Структурное подразделение 2313</td>
                  </tr>
                  <tr>
                    <td>Должность</td>
                    <td>Должность 2131</td>
                  </tr>
                  <tr>
                    <td>Площадка на которой работает</td>
                    <td>Площадка на которой работает 2131</td>
                  </tr>
                  <tr>
                    <td>
                      Прямой руководитель: ФИО,
                      номер телефона (+внутренний),
                      рабочая почта
                    </td>
                    <td>ИВАНОВ ИВАН ИВАНОВИЧ 93820913810</td>
                  </tr>
                  <tr>
                    <td>Чек бокс</td>
                    <td>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="meeting-is-complete">
                        <label class="form-check-label" for="meeting-is-complete">Встреча прошла успешно</label>
                      </div>                    
                    </td>
                  </tr>
                  <tr>
                    <td>Характеристика от руководителя</td>
                    <td>
                      <table class="table table-bordered m-0" border="1" cellspacing="0" cellpadding="0">
                        <tr>
                          <td>1. Дата заполнения (чч.мм.гг.):</td>
                          <td>11.10.2004</td>
                        </tr>
                        <tr>
                          <td>2. ФИО студента:</td>
                          <td>Иванов Иван Иванович</td>
                        </tr>
                        <tr>
                          <td>3. Структурное подразделение (Департамент):</td>
                          <td>Структурное подразделение 1321</td>
                        </tr>
                        <tr>
                          <td>4. Занимаемая студентом должность:</td>
                          <td>Веб разработчик</td>
                        </tr>
                        <tr>
                          <td>5. Период работы на данной позиции:</td>
                          <td>3 года</td>
                        </tr>
                        <tr>
                          <td>6. Основные достижения за время работы:</td>
                          <td>Съел яблоко</td>
                        </tr>
                        <tr>
                          <td>7. Сильные стороны и развитые компетенции:</td>
                          <td>Умеет есть яблоко</td>
                        </tr>
                        <tr>
                          <td>8. Замечания и упущения в работе:</td>
                          <td>Не выкинул огрызок яблока</td>
                        </tr>
                        <tr>
                          <td>9. Проявленные личные качества:</td>
                          <td>Внимательный, чуткий, вежливый</td>
                        </tr>
                        <tr>
                          <td>10. Зоны ближайшего развития:</td>
                          <td>Что это такое</td>
                        </tr>
                        <tr>
                          <td>11. Компетенции, которые необходимо развить в среднесрочной перспективе:</td>
                          <td>JavaScript, Nuxt, Vue</td>
                        </tr>
                        <tr>
                          <td>12. Карьерные и экспертные перспективы:</td>
                          <td>Нет</td>
                        </tr>
                     </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Обратная связь по встрече</td>
                    <td>
                      <table class="table table-bordered m-0">
                        <thead>
                          <tr>
                            <th>Выполнено:</th>
                            <th>В работе:</th>
                            <th>Процесс реализации не запущен:</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Что-то</td>
                            <td>Что-нибудь</td>
                            <td>Да</td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Перспективы развития</td>
                    <td>
                      <table class="table table-bordered m-0">
                        <thead>
                          <tr>
                            <th>Направление:</th>
                            <th>Подразделение:</th>
                            <th>Приоритет сохранения:</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Что-то</td>
                            <td>Что-нибудь</td>
                            <td>Да</td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
               </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<nav class="navbar bg-body-tertiary rounded-1">
    <div class="container-fluid">
      <form id="form-search" class="d-flex w-100" role="search">
        <input class="form-control me-2" type="text" name="search" placeholder="Поиск по ФИО" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Поиск</button>
      </form>
    </div>
</nav>
<div class="d-flex mt-3">
    <aside class="position-sticky bg-body-tertiary p-2 rounded-1" style="width: 25%">
        <div class="container">
            <h3>Фильтры</h3>
            <form id="form-filters">
                <div class="mb-3">
                  <label for="admission" class="form-label">Год поступления</label>
                  <input type="text" name="admission" class="form-control" id="admission">
                </div>
                <div class="mb-3">
                    <label for="subdivision" class="form-label">Структурное подразделение</label>
                    <input type="text" name="subdivision" class="form-control" id="subdivision">
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Статус</label>
                    <select class="form-select" id="status" aria-label="status" name="status">
                      <option value="fired">Уволен</option>
                      <option value="working">Работает</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="education" class="form-label">Обучение</label>
                    <select class="form-select" id="education" aria-label="education" name="education">
                      <option value="bak">БАК</option>
                      <option value="vvo">ВВО</option>
                      <option value="mag">МАГ</option>
                      <option value="asp">АСП</option>
                      <option value="mva">МВА</option>
                    </select>
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" name="foreigner" id="foreigner">
                  <label class="form-check-label" for="foreigner">Иностранец</label>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" name="meeting-is-complete" id="meeting-is-complete">
                    <label class="form-check-label" for="meeting-is-complete">Встреча проведена</label>
                </div>
                <div class="d-flex align-items-center justify-content-center">
                    <button type="submit" class="btn btn-primary d-block me-2">Применить</button>
                    <button type="reset" class="btn btn-outline-primary">Очистить</button>
                </div>
            </form>
        </div>
    </aside>
    <ul class="list-group ms-3 w-100 rounded-1">
        <li class="js-student-btn list-group-item fs-3">Яковлев Александр Николаевич</li>
        <li class="js-student-btn list-group-item fs-3">Иванов Иван Иванович</li>
        <li class="js-student-btn list-group-item fs-3">Иванов Иван Иванович</li>
    </ul>
</div>
@endsection

@section('scripts')
  @vite(['resources/js/pages/employee/students/index.js'])
@endsection
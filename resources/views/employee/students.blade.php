@extends('layouts.employee')

@section('title', 'Студенты')

@section('content')
<x-alert />
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
            <div class="accordion-collapse collapse show" data-tab-body="tab-id-0">
              <div class="accordion-body">
                <table id="main-student-table" class="table table-bordered m-0" border="1" cellspacing="0" cellpadding="0">
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
            <div class="accordion-collapse collapse show" data-tab-body="tab-id-1">
              <div class="accordion-body">
                <table id="employee-table" class="table table-bordered m-0" border="1" cellspacing="0" cellpadding="0">
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
                        <input type="checkbox" class="form-check-input" id="meeting-ended">
                        <label class="form-check-label" for="meeting-ended">Встреча прошла</label>
                      </div>                    
                    </td>
                  </tr>
                  <tr>
                    <td>Характеристика от руководителя</td>
                    <td>
                      <table id="characteristics-table" class="table table-bordered m-0" border="1" cellspacing="0" cellpadding="0">
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
                      <table id="meetings-table" class="table table-bordered m-0">
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
                      <table id="development-prospects-table" class="table table-bordered m-0">
                        <thead>
                          <tr>
                            <th data-target-answer="0" data-question-head="" data-question="Направление:">Направление:</th>
                            <th data-target-answer="1" data-question-head="" data-question="Подразделение:">Подразделение:</th>
                            <th data-target-answer="2" data-question-head="" data-question="Приоритет сохранения:">Приоритет сохранения:</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td data-answer="Что-то" data-answer-id="0" contenteditable="">Что-то</td>
                            <td data-answer="Что-нибудь" data-answer-id="1" contenteditable="">Что-нибудь</td>
                            <td data-answer="Да" data-answer-id="2" contenteditable="">Да</td>
                          </tr>
                        </tbody>
                      </table>
                      <button class="btn btn-outline-primary d-block mx-auto mt-3" id="btn-save-development-prospects-table">Сохранить</button>
                    </td>
                  </tr>
               </table>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-tab-target="tab-id-2">
                Студент
              </button>
            </h2>
            <div class="accordion-collapse collapse show" data-tab-body="tab-id-2">
              <div class="accordion-body">
                <table id="student-table" class="table table-bordered m-0" border="1" cellspacing="0" cellpadding="0">
                  <tr>
                    <td>Программы обучения</td>
                    <td>Подгружается из АКАДЫ</td>
                  </tr>
                  <tr>
                    <td>Группы обучения</td>
                    <td>Подгружается из АКАДЫ</td>
                  </tr>
                  <tr>
                    <td>Академические задолженности по каждой программе</td>
                    <td>Подгружается из АКАДЫ</td>
                  </tr>
                  <tr>
                    <td>Дипломная работа</td>
                    <td>Подгружается вручную</td>
                  </tr>
                  <tr>
                    <td>Аттестационный лист студента</td>
                    <td>
                      <table id="attestation-sheet-table" class="table table-bordered m-0" border="1" cellspacing="0" cellpadding="0">
                          <tr>
                              <td>1. Дата заполнения (чч.мм.гг.):</td>
                              <td>11.10.2004</td>
                          </tr>
                          <tr>
                              <td>2. Ваше Имя Фамилия Отчество:</td>
                              <td>Иванов Иван Иванович</td>
                          </tr>
                          <tr>
                              <td>3. Структурное подразделение (Департамент):</td>
                              <td>Департамент</td>
                          </tr>
                          <tr>
                              <td>4. Ваш Курс:</td>
                              <td>Курс</td>
                          </tr>
                          <tr>
                              <td>5. Перечислите ваши измеримые достижения за отчетный период:</td>
                              <td>12345</td>
                          </tr>
                          <tr>
                              <td>6. Какие планы вам не удалось осуществить и почему?</td>
                              <td>12345</td>
                          </tr>
                          <tr>
                              <td>7. Какие компетенции, навыки и умения вы развивали за отчетный период?</td>
                              <td>12345</td>
                          </tr>
                          <tr>
                              <td>8. Какие компетенции, навыки и умения вы собираетесь развивать в будущем периоде?</td>
                              <td>12345</td>
                          </tr>
                          <tr>
                              <td>9. Кто ваш наставник?</td>
                              <td>12345</td>
                          </tr>
                          <tr>
                              <td>10. Чему вы научились под руководством вашего наставника?</td>
                              <td>12345</td>
                          </tr>
                          <tr>
                              <td>11. Кого из ваших сокурсников вы считаете лидером, которого можно ставить в пример и равняться на него?</td>
                              <td>12345</td>
                          </tr>
                          <tr>
                              <td>12. Кто из ваших сокурсников оказался «случайным попутчиком» для программы Кадровый резерв и Корпорации?</td>
                              <td>12345</td>
                          </tr>
                          <tr>
                              <td>13. Укажите сотрудников Корпорации, от которых вы получаете ценные знания и рекомендации?:</td>
                              <td>12345</td>
                          </tr>
                          <tr>
                              <td>14. Кого из сотрудников Корпорации вы считаете Лидером, которого можно ставить в пример и равняться на него?</td>
                              <td>12345</td>
                          </tr>
                          <tr>
                              <td>15. Какие карьерные перспективы вы перед собой видите?</td>
                              <td>12345</td>
                          </tr>
                          <tr>
                              <td>16. Какие улучшения необходимо сделать в вашем отделе, департаменте и Корпорации в целом для повышения эффективности деятельности?</td>
                              <td>12345</td>
                          </tr>
                          <tr>
                              <td>17. Какие новые продукты и услуги Клиентам вы предлагаете создать в Корпорации?</td>
                              <td>12345</td>
                          </tr>
                          <tr>
                              <td>18. Какие новые направления бизнеса вы предлагаете открыть в Корпорации?</td>
                              <td>12345</td>
                          </tr>
                          <tr>
                              <td>19. Какие улучшения в системе подготовки программы "Кадровый резерв" необходимо осуществить?</td>
                              <td>12345</td>
                          </tr>
                          <tr>
                              <td>20. Какие направления набора абитуриентов на программу "Кадровый резерв" вы считаете наиболее эффективными?</td>
                              <td>12345</td>
                          </tr>
                          <tr>
                              <td>21. Выберите направления, в которых вы видите свое дальнейшее развитие в Корпорации?</td>
                              <td>12345</td>
                          </tr>
                          <tr>
                              <td>22. В каком департаменте вы сможете принести Корпорации ощутимую пользу и результат </td>
                              <td>12345</td>
                          </tr>
                          <tr>
                              <td>23. Сформулируйте в свободной форме ваши предложения высшему руководству по обеспечению устойчивого развития корпорации.</td>
                              <td>12345</td>
                          </tr>
                      </table>
                    </td>
                  </tr>
               </table>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-tab-target="tab-id-3">
                Документы
              </button>
            </h2>
            <div class="accordion-collapse collapse show" data-tab-body="tab-id-3">
              <div class="accordion-body">
                <table id="documents-table" class="table table-bordered m-0" border="1" cellspacing="0" cellpadding="0">
                  <tr>
                    <td>Паспорт</td>
                    <td>
                      <a class="js-document-btn btn btn-outline-warning me-2" href="url-file" download="file-name" data-btn="download" data-document="passport">Скачать</a>
                    </td>
                  </tr>
                  <tr>
                    <td>Договоры</td>
                    <td>
                      <ul class="list-group">
                        <li class="list-group-item d-flex align-items-center justify-content-between">
                            <div class="w-50">
                                Трудовой договор
                            </div>
                            <a class="js-document-btn btn btn-outline-warning me-2" href="url-file" download="file-name" data-btn="download" data-document="employment-contract">Скачать</a>
                        </li>
                        <li class="list-group-item d-flex align-items-center justify-content-between">
                            <div class="w-50">
                                Договор на оказание платных услуг
                            </div>
                            <a class="js-document-btn btn btn-outline-warning me-2" href="url-file" download="file-name" data-btn="download" data-document="paid-services">Скачать</a>
                        </li>
                        <li class="list-group-item d-flex align-items-center justify-content-between">
                            <div class="w-50">
                                Ученический договор
                            </div>
                            <a class="js-document-btn btn btn-outline-warning me-2" href="url-file" download="file-name" data-btn="download" data-document="student-agreement">Скачать</a>
                        </li>
                        <li class="list-group-item d-flex align-items-center justify-content-between">
                            <div class="w-50">
                                Договор С3 на скидку
                            </div>
                            <a class="js-document-btn btn btn-outline-warning me-2" href="url-file" download="file-name" data-btn="download" data-document="contract-c3">Скачать</a>
                        </li>
                      </ul>
                    </td>
                  </tr>
               </table>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-tab-target="tab-id-3">
                Служба режима
              </button>
            </h2>
            <div class="accordion-collapse collapse show" data-tab-body="tab-id-3">
              <div class="accordion-body">
                <table id="mode-service-table" class="table table-bordered m-0" border="1" cellspacing="0" cellpadding="0">
                  <tr>
                    <td>Характеристика от службы режима</td>
                    <td>
                      Подгружается вручную
                    </td>
                  </tr>
                  <tr>
                    <td>Рапорта</td>
                    <td>
                      Подгружается вручную
                    </td>
                  </tr>
                  <tr>
                    <td>СЗ</td>
                    <td>
                      Подгружается вручную
                    </td>
                  </tr>
                  <tr>
                    <td>Спортивные достижения</td>
                    <td>
                      <table id="sport-achievements-table" class="table table-bordered m-0">
                        <thead>
                          <tr>
                            <th data-question="Название мероприятия:" data-question-head="" data-target-answer="0">Название мероприятия:</th>
                            <th data-question="Результат:" data-question-head="" data-target-answer="1">Результат:</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td data-answer="Что-то" data-answer-id="0" contenteditable="">Что-то</td>
                            <td data-answer="Что-нибудь" data-answer-id="0" contenteditable="">Что-нибудь</td>
                          </tr>
                          <tr>
                            <td data-answer="Что-то" data-answer-id="1" contenteditable="">Что-то 2</td>
                            <td data-answer="Что-нибудь" data-answer-id="1" contenteditable="">Что-нибудь 2</td>
                          </tr>
                        </tbody>
                      </table>
                      <button class="btn btn-outline-primary d-block mx-auto mt-3" id="btn-save-sport-achievements-table">Сохранить</button>
                    </td>
                  </tr>
                  <tr>
                    <td>Творческие способности</td>
                    <td>
                      <table id="art-skills-table" class="table table-bordered m-0">
                        <thead>
                          <tr>
                            <th data-question="Навыки на момент поступления:" data-question-head="" data-target-answer="0">Навыки на момент поступления:</th>
                            <th data-question="Развитие на программе:" data-question-head="" data-target-answer="1">Развитие на программе:</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td data-answer="Что-нибудь" data-answer-id="0" contenteditable="">Что-нибудь</td>
                            <td data-answer="Что-то" data-answer-id="0" contenteditable="">Что-то</td>
                          </tr>
                          <tr>
                            <td data-answer="Что-нибудь" data-answer-id="1" contenteditable="">Что-то 2</td>
                            <td data-answer="Что-то" data-answer-id="1" contenteditable="">Что-нибудь 2</td>
                          </tr>
                        </tbody>
                      </table>
                      <button class="btn btn-outline-primary d-block mx-auto mt-3" id="btn-save-art-skills-table">Сохранить</button>
                    </td>
                  </tr>
               </table>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-tab-target="tab-id-4">
                Достижения
              </button>
            </h2>
            <div class="accordion-collapse collapse show" data-tab-body="tab-id-4">
              <div class="accordion-body">
                <table id="achievements-table" class="table table-bordered m-0" border="1" cellspacing="0" cellpadding="0">
                  <tr>
                    <td>В рамках копрорации</td>
                    <td>
                      <table id="corporation-achievements-table" class="table table-bordered m-0">
                        <thead>
                          <tr>
                            <th data-question="Название" data-question-head="" data-target-answer="0">Название</th>
                            <th data-question="Описание" data-question-head="" data-target-answer="1">Описание</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td data-answer="Что-то" data-answer-id="0" contenteditable="">Что-то</td>
                            <td data-answer="Что-нибудь" data-answer-id="0" contenteditable="">Что-нибудь</td>
                          </tr>
                          <tr>
                            <td data-answer="Что-то 2" data-answer-id="1" contenteditable="">Что-то 2</td>
                            <td data-answer="Что-нибудь 2" data-answer-id="1" contenteditable="">Что-нибудь 2</td>
                          </tr>
                        </tbody>
                      </table>
                      <button class="btn btn-outline-primary d-block mx-auto mt-3" id="btn-save-achievements-table">Сохранить</button>
                    </td>
                  </tr>
               </table>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-tab-target="tab-id-5">
                Волонтерство
              </button>
            </h2>
            <div class="accordion-collapse collapse show" data-tab-body="tab-id-5">
              <div class="accordion-body">
                <table id="volunteering-table" class="table table-bordered m-0" border="1" cellspacing="0" cellpadding="0">
                  <tr>
                    <td>Участие во внеучебной деятельности</td>
                    <td>
                      <table id="extracurricular-activities-table" class="table table-bordered m-0">
                        <thead>
                          <tr>
                            <th data-question="Название" data-question-head="" data-target-answer="0">Название</th>
                            <th data-question="Описание" data-question-head="" data-target-answer="1">Описание</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td data-answer="Что-то" data-answer-id="0" contenteditable="">Что-то</td>
                            <td data-answer="Что-нибудь" data-answer-id="0" contenteditable="">Что-нибудь</td>
                          </tr>
                          <tr>
                            <td data-answer="Что-то 2" data-answer-id="1" contenteditable="">Что-то 2</td>
                            <td data-answer="Что-нибудь 2" data-answer-id="1" contenteditable="">Что-нибудь 2</td>
                          </tr>
                        </tbody>
                      </table>
                      <button class="btn btn-outline-primary d-block mx-auto mt-3" id="btn-save-extracurricular-activities-table">Сохранить</button>
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
<nav class="navbar bg-body-tertiary rounded-1 sticky-top">
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
        <li class="js-student-btn list-group-item fs-5">Яковлев Александр Николаевич</li>
        <li class="js-student-btn list-group-item fs-5">Иванов Иван Иванович</li>
        <li class="js-student-btn list-group-item fs-5">Иванов Иван Иванович</li>
    </ul>
</div>
@endsection

@section('scripts')
  @vite(['resources/js/pages/employee/students/index.js'])
@endsection
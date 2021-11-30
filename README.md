
## About GCTTJS

## Install
- npm install --scripts-prepend-node-path=auto
- composer install
- php artisan key:generate
- php artisan migrate
- php artisan db:seed

## Project start localhost
- php artisan serve
- php -S localhost:8888 -t public

## Help video
- https://www.youtube.com/watch?v=pyOcSEkG4Q0&t=194s&ab_channel=LaravelBusiness

## Package

- https://github.com/cybercog/laravel-ban

## Roles(как работает)
- Идет обращение в title->'user_' данные беруться с базы данных (permissions.sql) в seeds PermissionsTableSeeder.php, далее идет обращение и проверка через abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden'); в App/Http/Controllers/*Controller.php
## Функционал
### Секретариат
- Список детей (Ф.И.О и другие данные)
- Список (основная страница)
- Архив (Отчисленные/Обучающиеся)
### Персонал
- (1)Список (Search%Like)(Read/Update)/ (2)Штатное расписание (CRUD)/ (3)Добавить сотрудника (CRUD)
- (1.1) Поиск /Ф.И.О / (1.3)Архив
- (1.1) Общие сведения(1.1.1) / Фото (1.1.2) / Документы (1.1.3) / Образование (1.1.4)/ Портфолио / Отпуска / Удалить сотрудника
- (1.1.1) Общая информация - Ф.И.О / Пол / Дата рождения
- (1.1.1) Контактная информация - Домашний адрес / Электронная почта / Домашний телефон / Сотовый телефон
- (1.1.1) Информация о работе - Табельный номер / Квалификационнная группа (Руководящий/Педагог/Вспомогательный/Обслуживающий)
- (1.1.1) Соискатель/ Аспирант (Check)
- (1.1.1) Дата начала трудовой деятельности (DropDown - Прерывания ТД: Дата начала / Дата окончания / Комментарий )
- (1.1.1) Дата начала пед.деятельности (DropDown - Прерывания ТД: Дана начала / Дата окончания / Комментарий )
- (1.1.1) Дата окончания пед.деятельности
- (1.1.1) Дата начала работы в организации
- (1.1.1) Неполная занятость(Check)
- (1.1.1) Пенсионер по выслуге лет
- (1.1.2) Добавить фото / загрузить / Обновить
- (1.1.3) ИНН / СНИЛС / Серия и номер паспорта, кем выдан / Дата выдачи паспорта / Серия и номер полиса / Дата выдачи полиса / Компания страхователь
- (1.1.4) Образование (1.1.4.1) добавление ++++
- (1.1.4.1) Образовательное учреждение / Документ об образовании(DropDown) (1.1.4.1.1) / Серия и номер документа / Дата выдачи / Уровень образования (1.1.4.1.2)/ Форма обучения (1.1.4.1.3)/ Специальность(База данных специальностей - DropDown ) (1.1.4.1.4)/ Квалификация / Отличие(Check) / Пед. образование
- (1.1.4.1.1) Диплом / Аттестат / Удостоверение / Свидетельство / Сертификат / Справка
- (1.1.4.1.2) Дошкольное / Начальное / Основное / Среднее / Средне профессиональное / Высшее профессиональное / Высшее техническое / Незаконченное среднее общее / Незаконченное высшее профессинальное / Неполное высшее / Послевузовское / Среднее техническое / Дополнительное 
- (1.1.4.1.3) Очное / Очно-Заочное (вечернее) / Заочное 
- (1.1.4.1.4) 010107 Практическая психология(КОД: ВУЗ)?
- (1.1.5) Курсы повышения квалификации
- (1.1.5.2) Наименование курсов / Тип курсов(DropDown) (1.1.4.2.1)/ Место проведения / Документ об образовании(DropDown) (1.1.4.2.2)/ Серия и номер документа / Дата выдачи / Квалификация(DropDown) (1.1.4.2.3)/ Количество часов / Педагогическое образование(Check)
- (1.1.5.2.1) Переподготовка / Повышение квалификации / Профессиональная переподготовка / Длительное обучение / Семинар / Краткосрочное обучние / Стажировка
- (1.1.5.2.2) Диплом / Аттестат / Удостоверение / Свидетельство / Сертификат / Справка
- (1.1.5.2.3) Заполняется самостоятельно
- (1.1.6) Звания, награды, степени
- (1.1.6.3) Наименование / Тип (1.1.4.3.1)/ Тип награды (1.1.4.3.2)/ Дата выдачи
- (1.1.6.3.1) Награда / Почетное звание / Ученая степень
- (1.1.6.3.2) Государственная / Отраслевая / Областная
- (1.1.7) Портфолио
- (1.1.7.1) Публикации (1.1.5.1.2)
- (1.1.7.1.2) Наименование издания / год издания / Где опубликованно(ссылка на публикацию) / Прикрепить свидеьельство(FilesAdd)
- (1.1.7.2) Участие в мероприятиях
- (1.1.7.2.1) Название мероприятия / Вид мероприятия (1.1.5.2.1.1)/ Уровень проведения (1.1.5.2.1.2)/ Форма участия (1.1.5.2.1.3)/ Статус (1.1.5.2.1.4)/ Название конкурсного мероприятия / Результат / Год участия / Прикрепить свидетельство
- (1.1.7.2.1.1) Выставка / Конкурс / Конференция / Мастер-класс / Семинар 
- (1.1.7.2.1.2) Муниципальный / Федеральный / Международный / Всероссийский 
- (1.1.7.2.1.3) Очно / Заочно
- (1.1.7.2.1.4) Победитель / Лауреат / Участник
- (1.1.8) Отпуска 
- (1.1.8.1) Добавлние отпуска
- (1.1.8.1.1) Тип отпуска
- (1.1.8.1.1.1) Ежегодный (основной) оплачиваемый отпуск
- (1.1.8.1.1.2) Ежегодный дополнительный оплачиваемый отпуск (в т.ч учебный)
- (1.1.8.1.1.3) Отпуск без сохранения заработной платы
- (1.1.8.1.1.4) Отпуск по беременности и родам(декретный отпуск)
- (1.1.8.1.1.5) Отпуск по уходу за ребенком
- (1.1.8.2) Дата начала отпуска (DataSelect)
- (1.1.8.3) Дата окончания отпуска (DataSelect)
- (1.1.9) Удалить сотрудника
- (1.1.9.1) Удалить без приказа(Check) (удаляет дубликат или ошибочные данные)
- (1.1.9.2) Дата приказа об увольнении
- (1.1.9.3) Номер приказа об увольнении
- (1.1.9.4) Основание увольнения(TextBar)

### Обучающиеся
- (1.2.1) Движения обучающегося
- (1.2.1.1) Table(Объединение / Программа - Педагог(Ф.И.О) / Зачислен с (DataShow) / Отчислен с (DataShow))
- (1.2.2) Личные данные
- (1.2.2.1) Кем заявитель приходится ребёнку(DropDown)(1.2.2.1.1)
- (1.2.2.1.1) Мать / Отец / Попечитель / Орган опеки и попечительства / Приемный родитель / Руководитель воспитательного, лечебного и иного учерждения, в котором ребенок находиться на полном государственном обеспечении / Иной законный представитель
- (1.2.2.2) Ф.И.О 
- (1.2.2.3) Дата рождения
- (1.2.2.4) Пол
- (1.2.2.5) Гражданство (Россия и т.д)
- (1.2.2.6) Место рождения
- (1.2.2.7) # СНИЛС
- (1.2.2.8) Контактный телефон
- (1.2.2.9) Электронная почта
- (1.2.3) Наличие патологий (подтверждается документами) CheckBox
- (1.2.3.1) Нарушение зрения / Нарушение речи / Нарушение слуха / Нарушение опроно-двигательного аппарата / Нарушение интеллекта / Аллергия / Туберкузная интоксикация / Сложный дефект / Сахарный диабет / Расстройство аутистического спектра / Умственная отсталость / Задержка психического развитися (ЗПР) /Врожденный порок сердца / Гемофилия
- (1.2.4) Статус ребенка CheckBox
- (1.2.4.1) Сирота / Опекаемый / Приёмный / Ребенок оставщийся без попечения родителей / в детском доме по заявлению родителей 
- (1.2.5) Профучет
- (1.2.5.1) Постановка на учет в ПДН / Постанавлен на ВШК / Уклоняется от учебы / На учете в наркологическом диспансере
- (1.2.6) Адрес ()
- (1.2.7) Документы (добавить документ) Button->NewForms(Тип документа)(1.2.7.1)
- (1.2.7.1) Свидетельство о рождении (1.2.7.1.1)
- (1.2.7.1.1) Серия свидтетельства о рождении
- (1.2.7.1.2) Серия (Номер)
- (1.2.7.1.3) Дата выдачи документа
- (1.2.7.1.4) Место выдачи
- (1.2.7.1.5) Документы (UploadFilesButton)
- (1.2.7.1.6) Комментарий
- (1.2.7.2) Паспорт гражданина РФ (1.2.7.2.1)
- (1.2.7.2.1) Серия
- (1.2.7.2.2) Номер
- (1.2.7.2.3) Дата выдачи документа
- (1.2.7.2.4) Кем выдан
- (1.2.7.2.5) Документы (UploadFilesButton)
- (1.2.7.2.6) Комметарий
- (1.2.8) Портфолио - добавить достижение(HoverBar)((1.2.8.1))
- (1.2.8.1) Описание (CommentText)
- (1.2.8.2) Документ(FileUplad) Поддерживаемые форматы .JPG, .JPEG, .PNG, .GIF, .DOC, .PDF

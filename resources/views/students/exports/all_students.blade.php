<table>
    <thead>
    <tr>
        <th>Номер сертификата ПФДО</th>
        <th>Имя (ребенка)</th>
        <th>Фамилия (ребенка)</th>
        <th>Отчество (ребенка)</th>
        <th>Пол</th>
        <th>Дата рождения</th>
        <th>Населенный пункт</th>
        <th>Адрес регистрации</th>
        <th>Класс/Курс</th>
        <th>Место учебы</th>
        <th>Ф.И.О родителя</th>
        <th>Email (электронная почта)</th>
        <th>Номер телефона (родителя)</th>
        <th>Выберите направление из списка куда ваш ребенок уже ходил</th>
        <th>Выберите направление из списка</th>
        <th>Комментарий к форме (не обязательно)</th>
        <th>Прошел проверку</th>
        <th>Заявка в обработке</th>
    </tr>
    </thead>
    <tbody>
    @foreach($students as $student)
        <tr>
            <td>{{ $student->inputsCertificate }}</td>
            <td>{{ $student->first_name }}</td>
            <td>{{ $student->surname }}</td>
            <td>{{ $student->patronymic }}</td>
            <td>{{ $student->gender }}</td>
            <td>{{ $student->data_of_birth }}</td>
            <td>{{ $student->home_address_1 }}</td>
            <td>{{ $student->home_address_2 }}</td>
            <td>{{ $student->class_education }}</td>
            <td>{{ $student->location_education }}</td>
            <td>{{ $student->parents }}</td>
            <td>{{ $student->email_address_0 }}</td>
            <td>{{ $student->telephone_mobile }}</td>
            <td>{{ $student->old_arrow }}</td>
            <td>{{ $student->arrows }}</td>
            <td>{{ $student->comments }}</td>
            <td>{{ $student->verified }}</td>
            <td>{{ $student->accepted }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

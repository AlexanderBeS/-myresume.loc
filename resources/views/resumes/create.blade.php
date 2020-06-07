@extends('layouts.main')

@section('title', 'Создать резюме')

@section('content')
<form action="{{ route('resumes.store') }}" method="post" style="width: 50%; margin: 0 auto;" enctype="multipart/form-data">
    @csrf
    <h1>Общая информация</h1>

    <div class="form-group">
        <div class="mb-4">
            <label for="position">Должность, на которой вы хотите работать*:</label>
            <textarea class="form-control" name="position" rows="2" required></textarea>
        </div>

        <div class="mb-4">
            <label for="city">Желаемый город работы*:</label>
            <input type="text" class="form-control" name="city" required>
        </div>

        <div class="mb-4">
            <label for="employment_type">Вид занятости*:</label>
            <select class="form-control mb-4" name="employment_type" required>
                <option value="1">полная занятость</option>
                <option value="2">неполная занятость</option>
                <option value="3">удаленная работа</option>
            </select>
        </div>

        <div class="row mb-4">
            <label for="salary" class="col-2">Зарплата</label>
            <input type="number" class="form-control col-2" name="salary">
            <p class="col-2">грн в месяц</p>
        </div>

        <div class="mb-4">
            <label for="job_category">Категория для размещения*:</label>
            <select class="form-control" name="job_category" required>
                <option value="1">IT, компьютеры, интернет</option>
                <option value="2">Администрация, руководство среднего звена</option>
                <option value="3">Бухгалтерия, аудит</option>
                <option value="4">Гостинично-ресторанный бизнес, туризм</option>
                <option value="5">Дизайн, творчество</option>
                <option value="6">Красота, фитнес, спорт</option>
                <option value="7">Культура, музыка, шоу-бизнес</option>
                <option value="8">Логистика, склад, ВЭД</option>
                <option value="9">Маркетинг, реклама, PR</option>
                <option value="10">Медицина, фармацевтика</option>
                <option value="11">Недвижимость</option>
                <option value="12">Образование, наука</option>
                <option value="13">Охрана, безопасность</option>
                <option value="14">Продажи, закупки</option>
                <option value="15">Рабочие специальности, производство</option>
                <option value="16">Розничная торговля</option>
                <option value="17">Секретариат, делопроизводство, АХО</option>
                <option value="18">Сельское хозяйство, агробизнес</option>
                <option value="19">СМИ, издательство, полиграфия</option>
                <option value="20">Страхование</option>
                <option value="21">Строительство, архитектура</option>
                <option value="22">Сфера обслуживания</option>
                <option value="23">Телекоммуникации и связь</option>
                <option value="24">Топ-менеджмент, руководство высшего звена</option>
                <option value="25">Транспорт, автобизнес</option>
                <option value="26">Управление персоналом, HR</option>
                <option value="27">Финансы, банк</option>
                <option value="28">Юриспруденция</option>
                <option value="29">Другие сферы деятельности</option>
            </select>
        </div>


        <div class="mb-4">
            <label for="avatar">Загрузить аватар:</label>
            <input type="file" name="avatar" id="avatar">
        </div>
    </div>

    <h1>Опыт работы</h1>
    <div class="form-group">

        <div class="mb-4">
            <label for="experience">Опыт работы</label>
            <textarea class="form-control" name="experience" rows="3"></textarea>
        </div>

        <div class="mb-4">
            <label for="last_job">Добавьте последнее место работы.(Название компании, Город, Должность, Сфера деятельности компании)</label>
            <textarea class="form-control" name="last_job" rows="3"></textarea>
        </div>

        <div class="mb-4">
            <label for="job_date_start">Период работы с:</label>
            <input type="date" id="job_date_start" name="job_date_start">

            <label for="job_date_finish">по*:</label>
            <input type="date" id="job_date_finish" name="job_date_finish">
        </div>

        <div class="mb-4">
            <label for="exampleFormControlTextarea12">Обязанности и достижения на этой должности:</label>
            <textarea class="form-control" name="duties" rows="3"></textarea>
        </div>

        <div class="mb-4">
            <input type="checkbox" class="" name="no_experience" id="no_experience" value="1">
            <label class="form-check-label" for="no_experience">У меня нет опыта работы</label>
        </div>
    </div>

    <h1>Образование</h1>
    <div class="form-group">
        <div class="mb-4">
            <label for="education_lvl">Добавьте ваш наивысший уровень образования:</label>
            <textarea class="form-control" name="education_lvl" rows="3"></textarea>
        </div>

        <div class="mb-4">
            <label for="type_education_lvl">Уровень образования:</label>
            <select class="form-control" name="type_education_lvl">
                <option value="" selected> - выбрать - </option>
                <option value="1">высшее</option>
                <option value="2">неоконченное высшее</option>
                <option value="3">среднее специальное</option>
                <option value="4">среднее</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="institution">Учебное заведение: (Факультет,специальность, Город)</label>
            <textarea class="form-control" name="institution" rows="3"></textarea>
        </div>

        <div class="mb-4">
            <label for="education_date_start">Период обучения с:</label>
            <input type="date" id="education_date_start" name="education_date_start">
            <label for="education_date_finish">по:</label>
            <input type="date" id="education_date_finish" name="education_date_finish">
        </div>
    </div>



    <h1>Дополнительная информация</h1>
    <div class="form-group">
        <legend class="col-form-label">Настройки видимости резюме*</legend>
        <div class="col-9">
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="resume_visibility" value="1" checked>
                    Размещено на сайте
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="resume_visibility" value="0">
                    Скрыто
                </label>
            </div>
        </div>
    </div>



    <button type="submit" class="btn btn-success">Сохранить</button>
</form>



@endsection


<!--

Общая информация
Должность, на которой вы хотите работать*:
Желаемый город работы*:
Вид занятости*:
полная занятость
неполная занятость
удаленная работа
Зарплата:
 грн в месяц

Категория для размещения*:
IT, компьютеры, интернет
Администрация, руководство среднего звена
Бухгалтерия, аудит
Гостинично-ресторанный бизнес, туризм
Дизайн, творчество
Красота, фитнес, спорт
Культура, музыка, шоу-бизнес
Логистика, склад, ВЭД
Маркетинг, реклама, PR
Медицина, фармацевтика
Недвижимость
Образование, наука
Охрана, безопасность
Продажи, закупки
Рабочие специальности, производство
Розничная торговля
Секретариат, делопроизводство, АХО
Сельское хозяйство, агробизнес
СМИ, издательство, полиграфия
Страхование
Строительство, архитектура
Сфера обслуживания
Телекоммуникации и связь
Топ-менеджмент, руководство высшего звена
Транспорт, автобизнес
Управление персоналом, HR
Финансы, банк
Юриспруденция
Другие сферы деятельности

--------
Опыт работы
Добавьте последнее место работы. Остальные можно будет добавить, когда завершите создание резюме.
У меня нет опыта работы
Название компании*:
Город*:
Должность*:
Сфера деятельности компании*:
Период работы с*:

по*:

Обязанности и достижения на этой должности:
---------
Образование
Добавьте ваш наивысший уровень образования. Остальные можно будет добавить, когда завершите создание резюме.
Уровень образования*:

Учебное заведение*:
Факультет, специальность*:
Город*:
Период обучения с*:

по*:

Подробнее об этом образовании:
--------------

Дополнительная информация
Настройки видимости резюме*
Размещено на сайте
Скрыть мои личные данные
Не показывать в резюме мои имя, фамилию, адрес, телефон, эл. почту, текущее место работы, фотографию, социальные сети.
Скрыто

-->


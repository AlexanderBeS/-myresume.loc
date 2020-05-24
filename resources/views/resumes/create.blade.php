@extends('layouts.main')

@section('content')
<form action="{{ route('resumes.store') }}" method="post">
    @csrf
    <textarea name="content"></textarea>
    <button type="submit">Create resume</button>
</form>









<form style="width: 50%;    margin: 0 auto;">
    <h1>Общая информация</h1>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Должность, на которой вы хотите работать*:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>

        <label for="exampleFormControlTextarea2">Желаемый город работы*:</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea2">


        <label for="exampleFormControlSelect3">Вид занятости*:</label>
        <select class="form-control" id="exampleFormControlSelect3">
            <option>полная занятость</option>
            <option>неполная занятость</option>
            <option>удаленная работа</option>
        </select>


        <label for="exampleFormControlTextarea4">Зарплата</label>
        <input type="text" class="form-control" id="exampleFormControlTextarea4"> грн в месяц



        <label for="exampleFormControlSelect5">Категория для размещения*:</label>
        <select class="form-control" id="exampleFormControlSelect5">
            <option>IT, компьютеры, интернет</option>
            <option>Администрация, руководство среднего звена</option>
            <option>Бухгалтерия, аудит</option>
            <option>Гостинично-ресторанный бизнес, туризм</option>
            <option>Дизайн, творчество</option>
            <option>Красота, фитнес, спорт</option>
            <option>Культура, музыка, шоу-бизнес</option>
            <option>Логистика, склад, ВЭД</option>
            <option>Маркетинг, реклама, PR</option>
            <option>Медицина, фармацевтика</option>
            <option>Недвижимость</option>
            <option>Образование, наука</option>
            <option>Охрана, безопасность</option>
            <option>Продажи, закупки</option>
            <option>Рабочие специальности, производство</option>
            <option>Розничная торговля</option>
            <option>Секретариат, делопроизводство, АХО</option>
            <option>Сельское хозяйство, агробизнес</option>
            <option>СМИ, издательство, полиграфия</option>
            <option>Страхование</option>
            <option>Строительство, архитектура</option>
            <option>Сфера обслуживания</option>
            <option>Телекоммуникации и связь</option>
            <option>Топ-менеджмент, руководство высшего звена</option>
            <option>Транспорт, автобизнес</option>
            <option>Управление персоналом, HR</option>
            <option>Финансы, банк</option>
            <option>Юриспруденция</option>
            <option>Другие сферы деятельности</option>
        </select>
    </div>

    <h1>Опыт работы</h1>
    <div class="form-group">
        <label for="exampleFormControlTextarea6">Опыт работы</label>
        <textarea class="form-control" id="exampleFormControlTextarea6" rows="3"></textarea>

        <label for="exampleFormControlTextarea7">Добавьте последнее место работы.(Название компании, Город, Должность, Сфера деятельности компании)</label>
        <textarea class="form-control" id="exampleFormControlTextarea7" rows="3"></textarea>

        <label for="birthday">Период работы с*:</label>
        <input type="date" id="birthday" name="birthday">

        <label for="birthday1">по*:</label>
        <input type="date" id="birthday1" name="birthday1">

        <label for="exampleFormControlTextarea12">Обязанности и достижения на этой должности:</label>
        <textarea class="form-control" id="exampleFormControlTextarea12" rows="3"></textarea>

        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">У меня нет опыта работы</label>
    </div>

    <h1>Образование</h1>
    <div class="form-group">
        <label for="exampleFormControlTextarea13">Добавьте ваш наивысший уровень образования.</label>
        <textarea class="form-control" id="exampleFormControlTextarea13" rows="3"></textarea>



        <label for="exampleFormControlSelect6">Уровень образования*:</label>
        <select class="form-control" id="exampleFormControlSelect6">
            <option value=""> - выбрать - </option>
            <option value="66">высшее</option>
            <option value="67">неоконченное высшее</option>
            <option value="68" selected>среднее специальное</option>
            <option value="69">среднее</option>
        </select>


        <label for="exampleFormControlTextarea15">Учебное заведение*: (Факультет,специальность, Город)</label>
        <textarea class="form-control" id="exampleFormControlTextarea15" rows="3"></textarea>
        <label for="birthday3">Период обучения с*:</label>
        <input type="date" id="birthday" name="birthday">

        <label for="birthday4">по*:</label>
        <input type="date" id="birthday1" name="birthday1">
    </div>



    <h1>Дополнительная информация</h1>
    <div class="form-group">
        <legend class="col-form-label">Настройки видимости резюме*</legend>
        <div class="col-9">
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="legendRadio" id="legendRadio1" value="1">
                    Размещено на сайте
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="legendRadio" id="legendRadio2" value="2" checked>
                    Скрыто
                </label>
            </div>
        </div>
    </div>
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


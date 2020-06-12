<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $resume->position }}</title>
</head>
<body>




<div class="container">
    <h1>Общая информация</h1>

    <div class="form-group">
        @if ($resume->avatar)
            <div class="mb-4">
                <img src="{{Storage::url($resume->avatar)}}" class="img-thumbnail rounded" style="max-width: 100px; max-height: 100px;"/>
            </div>
        @endif

        @if ($resume->position)
        <div class="mb-4">
            <p>Должность: {{ $resume->position }}</p>
        </div>
        @endif

        @if ($resume->city)
        <div class="mb-4">
            <p>Город: {{ $resume->city }}</p>
        </div>
        @endif

        @if ($resume->employment_type)
        <div class="mb-4">
            <p>Вид занятости:
                {{ $resume->employment_type == 1 ? "полная занятость":"" }}
                {{ $resume->employment_type == 2 ? "неполная занятость":"" }}
                {{ $resume->employment_type == 3 ? "удаленная работа":"" }}
            </p>
        </div>
        @endif

        @if ($resume->salary)
        <div class="mb-4">
            <p>Зарплата: {{ $resume->salary }} грн.</p>
        </div>
        @endif

        @if ($resume->job_category)
        <div class="mb-4">
            <p>Категория:
                {{ $resume->job_category == 1 ? "IT, компьютеры, интернет":"" }}
                {{ $resume->job_category == 2 ? "Администрация, руководство среднего звена":"" }}
                {{ $resume->job_category == 3 ? "Бухгалтерия, аудит":"" }}
                {{ $resume->job_category == 4 ? "Гостинично-ресторанный бизнес, туризм":"" }}
                {{ $resume->job_category == 5 ? "Дизайн, творчество":"" }}
                {{ $resume->job_category == 6 ? "Красота, фитнес, спорт":"" }}
                {{ $resume->job_category == 7 ? "Культура, музыка, шоу-бизнес":"" }}
                {{ $resume->job_category == 8 ? "Логистика, склад, ВЭД":"" }}
                {{ $resume->job_category == 9 ? "Маркетинг, реклама, PR":"" }}
                {{ $resume->job_category == 10 ? "Медицина, фармацевтика":"" }}
                {{ $resume->job_category == 11 ? "Недвижимость":"" }}
                {{ $resume->job_category == 12 ? "Образование, наука":"" }}
                {{ $resume->job_category == 13 ? "Охрана, безопасность":"" }}
                {{ $resume->job_category == 14 ? "Продажи, закупки":"" }}
                {{ $resume->job_category == 15 ? "Рабочие специальности, производство":"" }}
                {{ $resume->job_category == 16 ? "Розничная торговля":"" }}
                {{ $resume->job_category == 17 ? "Секретариат, делопроизводство, АХО":"" }}
                {{ $resume->job_category == 18 ? "Сельское хозяйство, агробизнес":"" }}
                {{ $resume->job_category == 19 ? "СМИ, издательство, полиграфия":"" }}
                {{ $resume->job_category == 20 ? "Страхование":"" }}
                {{ $resume->job_category == 21 ? "Строительство, архитектура":"" }}
                {{ $resume->job_category == 22 ? "Сфера обслуживания":"" }}
                {{ $resume->job_category == 23 ? "Телекоммуникации и связь":"" }}
                {{ $resume->job_category == 24 ? "Топ-менеджмент, руководство высшего звена":"" }}
                {{ $resume->job_category == 25 ? "Транспорт, автобизнес":"" }}
                {{ $resume->job_category == 26 ? "Управление персоналом, HR":"" }}
                {{ $resume->job_category == 27 ? "Финансы, банк":"" }}
                {{ $resume->job_category == 28 ? "Юриспруденция":"" }}
                {{ $resume->job_category == 29 ? "Другие сферы деятельности":"" }}
            </p>
        </div>
        @endif
    </div>

    <h1>Опыт работы</h1>
    <div class="form-group">
        @if ($resume->experience)
        <div class="mb-4">
            <p> Опыт работы: {{ $resume->experience }}</p>
        </div>
        @endif

        @if ($resume->last_job)
        <div class="mb-4">
            <p>Последнее место работы {{ $resume->last_job }}</p>
        </div>
        @endif

        @if ($resume->job_date_start)
        <div class="mb-4">
            <p>Период работы с: {{ $resume->job_date_start }} по: {{ $resume->job_date_finish }}</p>
        </div>
        @endif

        @if ($resume->duties)
        <div class="mb-4">
            <p>Обязанности и достижения на этой должности: {{ $resume->duties }}</p>
        </div>
        @endif

        @if ($resume->no_experience)
        <div class="mb-4">
            <p> У меня нет опыта работы</p>
        </div>
        @endif
    </div>

    <h1>Образование</h1>here are many variation
    <div class="form-group">
        @if ($resume->education_lvl)
        <div class="mb-4">
            <p>Наивысший уровень образования: {{ $resume->education_lvl }}</p>
        </div>
        @endif

        @if ($resume->type_education_lvl)
        <div class="mb-4">
            <p> Уровень образования:
                {{ $resume->type_education_lvl == 1 ? "высшее":"" }}
                {{ $resume->type_education_lvl == 2 ? "неоконченное высшее":"" }}
                {{ $resume->type_education_lvl == 3 ? "среднее специальное":"" }}
                {{ $resume->type_education_lvl == 4 ? "среднее":"" }}
            </p>
        </div>
        @endif

        @if ($resume->institution)
        <div class="mb-4">
            <p>Учебное заведение: {{ $resume->institution }}</p>
        </div>
        @endif

        @if ($resume->education_date_start)
        <div class="mb-4">
            <p>Период обучения с: {{ $resume->education_date_start  }} по: {{ $resume->education_date_finish }}</p>
        </div>
        @endif
    </div>
</div>

</body>
</html>

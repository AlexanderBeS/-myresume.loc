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
            <p>Вид занятости: {{ $resume->employment_type }}</p>
        </div>
        @endif

        @if ($resume->salary)
        <div class="mb-4">
            <p>Зарплата: {{ $resume->salary }} грн.</p>
        </div>
        @endif

        @if ($resume->job_category)
        <div class="mb-4">
            <p>Категория: {{ $resume->job_category }}</p>
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
            <p> У меня нет опыта работы {{ $resume->no_experience }}</p>
        </div>
        @endif
    </div>

    <h1>Образование</h1>
    <div class="form-group">
        @if ($resume->education_lvl)
        <div class="mb-4">
            <p>Наивысший уровень образования: {{ $resume->education_lvl }}</p>
        </div>
        @endif

        @if ($resume->type_education_lvl)
        <div class="mb-4">
            <p> Уровень образования: {{ $resume->type_education_lvl }}</p>
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

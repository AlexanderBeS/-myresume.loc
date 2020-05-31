@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Общая информация</h1>

    <div class="form-group">
        <div class="mb-4">
            <p>Должность: {{ $resume->position }}</p>
        </div>

        <div class="mb-4">
            <p>Город: {{ $resume->city }}</p>
        </div>

        <div class="mb-4">
            <p>Вид занятости: {{ $resume->employment_type }}</p>
        </div>

        <div class="mb-4">
            <p>Зарплата: {{ $resume->salary }} грн.</p>
        </div>

        <div class="mb-4">
            <p>Категория: {{ $resume->job_category }}</p>
        </div>
    </div>

    <h1>Опыт работы</h1>
    <div class="form-group">

        <div class="mb-4">
            <p> Опыт работы: {{ $resume->experience }}</p>
        </div>

        <div class="mb-4">
            <p>Последнее место работы {{ $resume->last_job }}</p>
        </div>

        <div class="mb-4">
            <p>Период работы с: {{ $resume->job_date_start }} по: {{ $resume->job_date_finish }}</p>
        </div>

        <div class="mb-4">
            <p>Обязанности и достижения на этой должности: {{ $resume->duties }}</p>
        </div>

        <div class="mb-4">
            <p> У меня нет опыта работы {{ $resume->no_experience }}</p>
        </div>
    </div>

    <h1>Образование</h1>
    <div class="form-group">
        <div class="mb-4">
            <p>Наивысший уровень образования: {{ $resume->education_lvl }}</p>
        </div>

        <div class="mb-4">
            <p> Уровень образования: {{ $resume->type_education_lvl }}</p>
        </div>

        <div class="mb-4">
            <p>Учебное заведение: {{ $resume->institution }}</p>
        </div>

        <div class="mb-4">
            <p>Период обучения с: {{ $resume->education_date_start  }} по: {{ $resume->education_date_finish }}</p>
        </div>
    </div>
</div>
@endsection

@extends('layouts.main')

@section('title', 'Редактирование резюме')


@section('content')
<div class="pt-4">
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>

<form class="pt-4" action="{{ route('resumes.update', ['resume' => $resume->id]) }}" style="width: 50%; margin: 0 auto;" method="post" enctype="multipart/form-data">
    @csrf
    @method('patch')
    <h1>Общая информация</h1>

    <div class="form-group">
        <div class="mb-4">
            <label for="position">Должность, на которой вы хотите работать*:</label>
            <textarea class="form-control" name="position" rows="2" required>{{ (Request::old('position') == null) ? $resume->position : Request::old('position') }}</textarea>
        </div>

        <div class="mb-4">
            <label for="city">Желаемый город работы*:</label>
            <input type="text" class="form-control" name="city" required value="{{ (Request::old('city') == null) ? $resume->city : Request::old('city') }}">
        </div>

        <div class="mb-4">
            <label for="employment_type">Вид занятости*:</label>
            <select class="form-control mb-4" name="employment_type" required>
                <option value="1" {{ (Request::old("employment_type") == 1 ? "selected": $resume->employment_type == 1 ? "selected":"") }}>полная занятость</option>
                <option value="2" {{ (Request::old("employment_type") == 2 ? "selected": $resume->employment_type == 2 ? "selected":"") }}>неполная занятость</option>
                <option value="3" {{ (Request::old("employment_type") == 3 ? "selected": $resume->employment_type == 3 ? "selected":"") }}>удаленная работа</option>
            </select>
        </div>

        <div class="row mb-4">
            <label for="salary" class="col-2">Зарплата</label>
            <input type="number" class="form-control col-2" name="salary" value="{{ (Request::old('salary') == null) ? $resume->salary : Request::old('salary') }}">
            <p class="col-2">грн в месяц</p>
        </div>

        <div class="mb-4">
            <label for="job_category">Категория для размещения*:</label>
            <select class="form-control" name="job_category" required>
                <option value="1" {{ (Request::old("job_category") == 1) ? "selected": ($resume->job_category === 1) ? 'selected' : '' }}>IT, компьютеры, интернет</option>
                <option value="2" {{ (Request::old("job_category") == 2) ? "selected": ($resume->job_category === 2) ? 'selected' : '' }}>Администрация, руководство среднего звена</option>
                <option value="3" {{ (Request::old("job_category") == 3) ? "selected": ($resume->job_category === 3) ? 'selected' : '' }}>Бухгалтерия, аудит</option>
                <option value="4" {{ (Request::old("job_category") == 4) ? "selected": ($resume->job_category === 4) ? 'selected' : '' }}>Гостинично-ресторанный бизнес, туризм</option>
                <option value="5" {{ (Request::old("job_category") == 5) ? "selected": ($resume->job_category === 5) ? 'selected' : '' }}>Дизайн, творчество</option>
                <option value="6" {{ (Request::old("job_category") == 6) ? "selected": ($resume->job_category === 6) ? 'selected' : '' }}>Красота, фитнес, спорт</option>
                <option value="7" {{ (Request::old("job_category") == 7) ? "selected": ($resume->job_category === 7) ? 'selected' : '' }}>Культура, музыка, шоу-бизнес</option>
                <option value="8" {{ (Request::old("job_category") == 8) ? "selected": ($resume->job_category === 8) ? 'selected' : '' }}>Логистика, склад, ВЭД</option>
                <option value="9" {{ (Request::old("job_category") == 9) ? "selected": ($resume->job_category === 9) ? 'selected' : '' }}>Маркетинг, реклама, PR</option>
                <option value="10" {{ (Request::old("job_category") == 10) ? "selected": ($resume->job_category === 10) ? 'selected' : '' }}>Медицина, фармацевтика</option>
                <option value="11" {{ (Request::old("job_category") == 11) ? "selected": ($resume->job_category === 11) ? 'selected' : '' }}>Недвижимость</option>
                <option value="12" {{ (Request::old("job_category") == 12) ? "selected": ($resume->job_category === 12) ? 'selected' : '' }}>Образование, наука</option>
                <option value="13" {{ (Request::old("job_category") == 13) ? "selected": ($resume->job_category === 13) ? 'selected' : '' }}>Охрана, безопасность</option>
                <option value="14" {{ (Request::old("job_category") == 14) ? "selected": ($resume->job_category === 14) ? 'selected' : '' }}>Продажи, закупки</option>
                <option value="15" {{ (Request::old("job_category") == 15) ? "selected": ($resume->job_category === 15) ? 'selected' : '' }}>Рабочие специальности, производство</option>
                <option value="16" {{ (Request::old("job_category") == 16) ? "selected": ($resume->job_category === 16) ? 'selected' : '' }}>Розничная торговля</option>
                <option value="17" {{ (Request::old("job_category") == 17) ? "selected": ($resume->job_category === 17) ? 'selected' : '' }}>Секретариат, делопроизводство, АХО</option>
                <option value="18" {{ (Request::old("job_category") == 18) ? "selected": ($resume->job_category === 18) ? 'selected' : '' }}>Сельское хозяйство, агробизнес</option>
                <option value="19" {{ (Request::old("job_category") == 19) ? "selected": ($resume->job_category === 19) ? 'selected' : '' }}>СМИ, издательство, полиграфия</option>
                <option value="20" {{ (Request::old("job_category") == 20) ? "selected": ($resume->job_category === 20) ? 'selected' : '' }}>Страхование</option>
                <option value="21" {{ (Request::old("job_category") == 21) ? "selected": ($resume->job_category === 21) ? 'selected' : '' }}>Строительство, архитектура</option>
                <option value="22" {{ (Request::old("job_category") == 22) ? "selected": ($resume->job_category === 22) ? 'selected' : '' }}>Сфера обслуживания</option>
                <option value="23" {{ (Request::old("job_category") == 23) ? "selected": ($resume->job_category === 23) ? 'selected' : '' }}>Телекоммуникации и связь</option>
                <option value="24" {{ (Request::old("job_category") == 24) ? "selected": ($resume->job_category === 24) ? 'selected' : '' }}>Топ-менеджмент, руководство высшего звена</option>
                <option value="25" {{ (Request::old("job_category") == 25) ? "selected": ($resume->job_category === 25) ? 'selected' : '' }}>Транспорт, автобизнес</option>
                <option value="26" {{ (Request::old("job_category") == 26) ? "selected": ($resume->job_category === 26) ? 'selected' : '' }}>Управление персоналом, HR</option>
                <option value="27" {{ (Request::old("job_category") == 27) ? "selected": ($resume->job_category === 27) ? 'selected' : '' }}>Финансы, банк</option>
                <option value="28" {{ (Request::old("job_category") == 28) ? "selected": ($resume->job_category === 28) ? 'selected' : '' }}>Юриспруденция</option>
                <option value="29" {{ (Request::old("job_category") == 29) ? "selected": ($resume->job_category === 29) ? 'selected' : '' }}>Другие сферы деятельности</option>
            </select>
        </div>


        <div class="mb-4">
            <div class="col-4">
                @if ($resume->avatar)
                    <label for="old_avatar">Текущий аватар:</label>
                    <img  name="old_avatar" src="{{Storage::url($resume->avatar)}}" class="img-thumbnail rounded" style="max-width: 100px; max-height: 100px;"/>
                @endif
            </div>
            <div class="col-4">
                <label for="avatar">Загрузить аватар:</label>
                <input type="file" name="avatar" id="avatar">
            </div>
        </div>
    </div>

    <h1>Опыт работы</h1>
    <div class="form-group">

        <div class="mb-4">
            <label for="experience">Опыт работы</label>
            <textarea class="form-control" name="experience" rows="3">{{ (Request::old('experience') == null) ? $resume->experience : Request::old('experience') }}</textarea>
        </div>

        <div class="mb-4">
            <label for="last_job">Добавьте последнее место работы.(Название компании, Город, Должность, Сфера деятельности компании)</label>
            <textarea class="form-control" name="last_job" rows="3">{{ (Request::old('last_job') == null) ? $resume->last_job : Request::old('last_job') }}</textarea>
        </div>

        <div class="mb-4">
            <label for="job_date_start">Период работы с:</label>
            <input type="date" id="job_date_start" name="job_date_start" value="{{ (Request::old('job_date_start') == null) ? $resume->job_date_start : Request::old('job_date_start') }}">

            <label for="job_date_finish">по*:</label>
            <input type="date" id="job_date_finish" name="job_date_finish" value="{{ (Request::old('job_date_finish') == null) ? $resume->job_date_finish : Request::old('job_date_finish') }}">
        </div>

        <div class="mb-4">
            <label for="duties">Обязанности и достижения на этой должности:</label>
            <textarea class="form-control" name="duties" rows="3">{{ (Request::old('duties') == null) ? $resume->duties : Request::old('duties') }}</textarea>
        </div>

        <div class="mb-4">
            <input type="checkbox" class="" name="no_experience" id="no_experience" value="1" {{ (Request::old('no_experience')) ? 'checked': isset($resume->no_experience) ? 'checked' : '' }}>
            <label class="form-check-label" for="no_experience">У меня нет опыта работы</label>
        </div>
    </div>

    <h1>Образование</h1>
    <div class="form-group">
        <div class="mb-4">
            <label for="education_lvl">Добавьте ваш наивысший уровень образования:</label>
            <textarea class="form-control" name="education_lvl" rows="3">{{ (Request::old('education_lvl') == null) ? $resume->education_lvl : Request::old('education_lvl') }}</textarea>
        </div>

        <div class="mb-4">
            <label for="type_education_lvl">Уровень образования:</label>
            <select class="form-control" name="type_education_lvl">
                <option value="" > - выбрать - </option>
                <option value="1" {{ (Request::old("type_education_lvl") == 1) ? "selected": ($resume->type_education_lvl === 1) ? 'selected' : '' }}>высшее</option>
                <option value="2" {{ (Request::old("type_education_lvl") == 2) ? "selected": ($resume->type_education_lvl === 2) ? 'selected' : '' }}>неоконченное высшее</option>
                <option value="3" {{ (Request::old("type_education_lvl") == 3) ? "selected": ($resume->type_education_lvl === 3) ? 'selected' : '' }}>среднее специальное</option>
                <option value="4" {{ (Request::old("type_education_lvl") == 4) ? "selected": ($resume->type_education_lvl === 4) ? 'selected' : '' }}>среднее</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="institution">Учебное заведение: (Факультет,специальность, Город)</label>
            <textarea class="form-control" name="institution" rows="3">{{ (Request::old('institution') == null) ? $resume->institution : Request::old('institution') }}</textarea>
        </div>

        <div class="mb-4">
            <label for="education_date_start">Период обучения с:</label>
            <input type="date" id="education_date_start" name="education_date_start" value="{{ (Request::old('education_date_start') == null) ? $resume->education_date_start : Request::old('education_date_start') }}">
            <label for="education_date_finish">по:</label>
            <input type="date" id="education_date_finish" name="education_date_finish" value="{{ (Request::old('education_date_finish') == null) ? $resume->education_date_finish : Request::old('education_date_finish')}}">
        </div>
    </div>



    <h1>Дополнительная информация</h1>
    <div class="form-group">
        <legend class="col-form-label">Настройки видимости резюме*</legend>
        <div class="col-9">
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="resume_visibility"
                           value="1" {{ (Request::old('resume_visibility') == 1) ? 'checked': ($resume->resume_visibility === 1) ? 'checked' : '' }}>
                    Размещено на сайте
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="resume_visibility" value="0"
                            {{ (Request::old('resume_visibility') == 0) ? 'checked': ($resume->resume_visibility === 0) ? 'checked' : '' }}>
                    Скрыто
                </label>
            </div>
        </div>
    </div>



    <button type="submit" class="btn btn-success">Обновить</button>
</form>



@endsection
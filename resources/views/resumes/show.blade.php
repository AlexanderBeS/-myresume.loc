@extends('layouts.main')

@section('title', 'Просмотр резюме')

@section('content')

@include('resumes.pdf')

<div class="row">
    @if (!$resume->deleted_at)
        <a href="{{ route('resumes.edit', ['resume' => $resume->id]) }}" class="btn btn-primary col mb-1">Редактировать</a>
    @endif
    <div class="w-100"></div>
    <a href="{{ route('resumes.download', $resume->id) }}" class="btn btn-primary col mb-1">Скачать PDF</a>
</div>


@endsection

@extends('layouts.main')

@section('title', 'Создать резюме')

@section('content')

@include('resumes.pdf')

<div class="container pt-4">
    @if (!$resume->deleted_at)
        <a href="{{ route('resumes.edit', ['resume' => $resume->id]) }}" class="btn btn-primary col-2 mb-1">Редактировать</a>
    @endif
    <div class="w-100"></div>
    <a href="{{ route('resumes.download', $resume->id) }}" class="btn btn-primary col mb-1 col-2">Скачать PDF</a>
</div>


@endsection

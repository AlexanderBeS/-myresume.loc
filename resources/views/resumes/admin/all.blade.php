@extends('layouts.main')

@section('title', 'Admin')

@section('content')

    <div class="row justify-content-center">
        @foreach($resumes as $resume)
            <div class="card mb-2 mr-2 col-3">
                <div class="card-body">
                    <div class="row">

                        @if ($resume->deleted_at)
                        <p style="color:red" class="col-10">
                            УДАЛЕНО {{ $resume->deleted_at }}
                        </p>
                        @endif
                        <p style="color:red" class="col-10">
                            userid: {{ $resume->user_id }}
                        </p>


                        <h5 class="card-title col-10">
                            <a href="{{ route('resumes.show', ['resume' => $resume->id]) }}">{{ $resume->position }}</a>
                        </h5>
                        <form class="col-2" method="post" action="{{ route('resumes.admin.destroy', ['id' => $resume->id]) }}">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn-danger">X</button>
                        </form>
                    </div>

                    <div class="row">
                        <p class="card-text col-6">{{ $resume->city }}</p>
                        <p class="card-text col-6">{{ $resume->salary}}  грн.</p>
                    </div>

                    <div class="row">
                        @if (!$resume->deleted_at)
                            <a href="{{ route('resumes.edit', ['resume' => $resume->id]) }}" class="btn btn-primary col mb-1">Редактировать</a>
                        @endif
                        <div class="w-100"></div>
                        <a href="{{ route('resumes.download', $resume->id) }}" class="btn btn-primary col mb-1">Скачать PDF</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="row justify-content-center">
        <div class="col-3">
            <a href="{{ route('resumes.create') }}" class="btn btn-primary">Создать новое резюме</a>
        </div>
    </div>

@endsection
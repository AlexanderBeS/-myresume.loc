@extends('layouts.main')

@section('content')

@foreach($resumes as $resume)
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <div class="row">
                <h5 class="card-title col-10">
                    <a href="{{ route('resumes.show', ['resume' => $resume->id]) }}">{{ $resume->position }}</a>
                </h5>
                <form class="col-2" method="post" action="{{ route('resumes.destroy', ['resume' => $resume->id]) }}">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn-danger">X</button>
                </form>
            </div>

            <div class="row">
                <p class="card-text col-6">{{ $resume->city }}</p>
                <p class="card-text col-6">{{ $resume->salary}}  грн.</p>
            </div>

            <a href="{{ route('resumes.edit', ['resume' => $resume->id]) }}" class="btn btn-primary">Редактировать</a>
        </div>
    </div>
@endforeach







<a href="{{ route('resumes.create') }}">Создать новое резюме</a>
@endsection
@extends('layouts.main')

@section('content')

    @foreach($resumes as $resume)
        <li>
            <a href="{{ route('resumes.show', ['resume' => $resume->id]) }}">{{ $resume->content }}</a>
            <a href="{{ route('resumes.edit', ['resume' => $resume->id]) }}">Edit</a>
            <form method="post" action="{{ route('resumes.destroy', ['resume' => $resume->id]) }}">
                @method('delete')
                @csrf
                <button type="submit">X</button>
            </form>
        </li>
    @endforeach







<a href="{{ route('resumes.create') }}">Create new resume</a>
@endsection
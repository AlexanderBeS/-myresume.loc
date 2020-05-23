@extends('layouts.main')

@section('content')

<form action="{{ route('resumes.update', ['resume' => $resume->id]) }}" method="post">
    @csrf
    @method('patch')
    <textarea name="content">{{ $resume->content }}</textarea>
    <button type="submit">Update resume</button>
</form>



@endsection
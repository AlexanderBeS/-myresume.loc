@extends('layouts.main')

@section('content')
<form action="{{ route('resumes.store') }}" method="post">
    @csrf
    <textarea name="content"></textarea>
    <button type="submit">Create resume</button>
</form>
@endsection
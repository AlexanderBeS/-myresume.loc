@extends('layouts.main')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>Это дополнение к основной боковой панели.</p>
@endsection

@section('content')
    <p>Это содержимое тела страницы.</p>
@endsection
@extends('layouts.main')



@section('content')

@include('layouts.priveleges')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Добро пожаловать на сайт по созданию резюме!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

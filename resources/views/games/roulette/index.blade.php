@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h1>Roulette</h1>
                        <hr>
                        @include('games.roulette._game')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

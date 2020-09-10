@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h1>Roulette</h1>
                        <hr>
                        <roulette-game id="roulette-game">

                        </roulette-game>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

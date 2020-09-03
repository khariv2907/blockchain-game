@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h1>Рулетка</h1>
                    <a href="{{ route('game::roulette') }}">Грати!</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

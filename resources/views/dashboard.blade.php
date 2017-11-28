@extends('layouts.app')

@section('content')
    <div class="col-lg-3">
        <div class="panel panel-info">
            <div class="panel-heading text-center">
                Entradas publicadas
            </div>
            <div class="panel-body">
                <h1 class="text-center">{{ $post_count }}</h1>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="panel panel-danger">
            <div class="panel-heading text-center">
                Entradas sin publicar
            </div>
            <div class="panel-body">
                <h1 class="text-center">{{ $trashed_count }}</h1>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="panel panel-success">
            <div class="panel-heading text-center">
                Usuarios
            </div>
            <div class="panel-body">
                <h1 class="text-center">{{ $users_count }}</h1>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="panel panel-success">
            <div class="panel-heading text-center">
                Categorías
            </div>
            <div class="panel-body">
                <h1 class="text-center">{{ $categories_count }}</h1>
            </div>
        </div>
    </div>

@endsection

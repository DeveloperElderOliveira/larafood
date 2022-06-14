@extends('adminlte::page')

@section('title', 'Cadastrar Novo Plano')

@section('content_header')
    <h1>Cadastrar Novo Plano</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form class="form" action="{{route('plans.store')}}" method="POST">
                @csrf

               @include('admin.pages.plans._partials.form')
            </form>
        </div>
    </div>
@stop
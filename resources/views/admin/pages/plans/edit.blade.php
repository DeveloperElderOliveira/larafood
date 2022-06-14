@extends('adminlte::page')

@section('title', "Editar o Plano {$plan->name}")

@section('content_header')

    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href=" {{route('admin.index')}} ">Dashboard</a></li>
        <li class="breadcrumb-item"><a href=" {{route('plans.index')}} ">Planos</a></li>
        <li class="breadcrumb-item active"><a href=" {{route('plans.edit', $plan->url)}} ">Editar Plano</a></li>
    </ol>

    <h1>Editar o plano {{$plan->name}} </h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form class="form" action="{{route('plans.update', $plan->url)}}" method="POST">
                @csrf
                @method('PUT')

                @include('admin.pages.plans._partials.form')
            </form>
        </div>
    </div>
@stop
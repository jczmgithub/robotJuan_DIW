@extends('layouts.master')

@section('title', 'DomoTek')

@section('titulo')
    <h1 id="jumbotronLanding">RBX1</h1>
    <h2 class="colorTxtX">Saca el máximo partido de tu brazo robot</h2>
@stop

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <p>Oops! Something went wrong</p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <a href="#contact">Rellena correctamente el formulario</a>
        </div>
    @endif

    @include('includes.sections')

    @include('includes.video')

    @include('includes.contact')

@stop


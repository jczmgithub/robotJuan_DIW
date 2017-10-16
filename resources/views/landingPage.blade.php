@extends('layouts.master')

@section('title', 'DomoTek')

@section('titulo')
    <h1>DomoTek</h1>
    <p>DomoTek es una empresa de impresión 3D, escaneado y prototipado 3D.
        <br>Te ofrecemos un servicio de impresión rápido y eficaz.</p>
@stop

@section('content')

    @include('includes.carrousel')

    @include('includes.sections')

    @if ($errors->any())
        <div class="alert alert-danger">
            <p>Oops! Something went wrong</p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="datosBBDD" method="post">
        {!! csrf_field() !!}
        Guardar en BBDD: <input type="text" name="datos"><br>
        <input type="submit">
    </form>
    <hr/>

    @include('includes.contact')

@stop


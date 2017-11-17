@extends('layouts.master')

@section('title', 'DomoTek')

@section('titulo')
    <h1>DomoTek</h1>
    <p>DomoTek es una empresa de impresión 3D, escaneado y prototipado 3D.
        <br>Te ofrecemos un servicio de impresión rápido y eficaz.</p>
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

    @include('includes.video')

    {{--
    @include('includes.carrousel')
    --}}

    @include('includes.sections')

    @include('includes.contact')

@stop


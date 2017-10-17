@extends('layouts.master')

@section('title', 'DomoTek')

@section('titulo')

    @if ($errors->any())
        <div class="alert alert-danger">
            <p>Oops! Something went wrong</p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @else
        <p>mensaje enviado correctamente</p>
    @endif

@stop




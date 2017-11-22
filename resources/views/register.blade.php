@extends('layouts.master')

@section('title', 'DomoTek')

@section('titulo')
    <h1>Registrate</h1>
@stop

@section('content')
    <div id="register" class="container-fluid">
        <form action="nuevoRegistro" method="post">
            {!! csrf_field() !!}
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" placeholder="Enter name" name="nombre">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
                <label for="usuario">Usuario:</label>
                <input type="text" class="form-control" id="usuario" placeholder="Enter username" name="usuario">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
            </div>
            <br>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
@stop


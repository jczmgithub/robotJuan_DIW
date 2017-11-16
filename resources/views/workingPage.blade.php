@extends('layouts.master')

@section('title', 'Working...')

@section('titulo')

    <h1>Pagina en construccion</h1>

@stop

@section('content')

    <img style="margin: auto" src="images/prueba.gif" class="img-responsive" alt="Prueba">

    <audio id="mySoundClip">
        <source src="audio/working.mp3"/>
    </audio>

    <script>
        window.onload = function(){
            var audio = document.getElementById("mySoundClip");
            audio.play();
        };
    </script>

@stop
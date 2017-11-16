@extends('layouts.master')

@section('title', 'Working...')

@section('titulo')

    <h1>Pagina en construccion</h1>

@stop

@section('content')

    <div id="construccion">

    </div>

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
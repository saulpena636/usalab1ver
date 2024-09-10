@extends('layouts.main')

@section('cssp')
    <link href="{{ asset('css/thanks.css') }}" type="text/css" rel="stylesheet">
@endsection

@section('title', 'Gracias ❤️')

@section('content')
    <div class="thanksContent">
        <img class="thanksimg" src="{{ asset('photos/thanksimg.png') }}" alt="" srcset="">
        <div class="thanksp">¡Gracias por confiar en UsaLab!<br>Estamos emocionados de colaborar contigo y llevar tu proyecto al siguiente nivel</div>
    </div>
@endsection
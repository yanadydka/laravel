@extends('layouts.main_layout')

@section('content')
    <h1>МастерОк</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod pellentesque condimentum. Nullam eu
        pulvinar diam. Praesent eget magna sapien. Nunc sagittis laoreet faucibus. Aliquam fringilla elementum
        sollicitudin.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod pellentesque condimentum. Nullam eu
        pulvinar diam. Praesent eget magna sapien. Nunc sagittis laoreet faucibus. Aliquam fringilla elementum
        sollicitudin.</p>
    <a href="{{ route('register') }}">
        <button class="btn-register disp-block in-center">Регистрация</button>
    </a>
@endsection

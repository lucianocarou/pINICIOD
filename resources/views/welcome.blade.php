@extends('layouts.app')

@section('title', 'Home Page que armé yo')

@section('content')
    <h1>Bienvenido al Home Page! (el mío, welcome.blade.php)</h1>
    <p>This is the main content of the home page.</p>
    <p>This is the main content of the home page.</p>
    <p>This is the main content of the home page.</p>
    <p>This is the main content of the home page.</p>

    <button>Grabar</button>
    <button>Cargar</button>
@endsection

@section('scripts')
    <script src="/js/home-specific.js"></script>
@endsection
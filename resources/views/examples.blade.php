@extends('template')

@section('contenido')
<div class="container mx-auto px-4">
    <h1 class="text-3xl">
        Listado de Ejemplos
    </h1>
    <hr class="my-4">

    <x-flash>Mensaje de OK</x-flash>
    <x-flash type="error">Mensaje de Error</x-flash>
    <x-flash type="info">Mensaje de Información</x-flash>
    <x-flash type="warning">Mensaje de Advertencia</x-flash>
</div>

@endsection
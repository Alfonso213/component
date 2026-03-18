@extends('template')

@section('contenido')
<x-nav class="mb-4">
    <x-nav.link href="#">Ejemplos</x-nav.link>
    <x-nav.link href="#">Documentación</x-nav.link>
    <x-nav.link href="#">Soporte</x-nav.link>

    <x-nav.link href="/login" class="rounded-full px-3 py-1 bg-gray-900 text-white">Login</x-nav.link>
    <x-nav.link href="/register" class="rounded-full px-3 py-1 bg-white-900 border-2 border-gray-900 text-black">Register</x-nav.link>
</x-nav>

<div class="container mx-auto px-4">
    <h1 class="text-3xl">
        Listado de Ejemplos
    </h1>
    <hr class="my-4">

    <x-flash>Mensaje de OK</x-flash>
    <x-flash type="error">Mensaje de Error</x-flash>
    <x-flash type="info">Mensaje de Información</x-flash>
    <x-flash type="warning">Mensaje de Advertencia</x-flash>

    <hr class="my-4">

    <div class="grid grid-cols-2 sm:grid-cols3 gap-4">
        <x-nav.card
        img="https://images.unsplash.com/photo-1496247749665-49cf5b1022e9?"
        date="Septiembre, 2002"
        title="Lorem inpsum dolor sit amet, consetetur"
        content="Lorem inpsum dolor sit amet, consetetur....Lorem inpsum dolor sit amet, consetetur"
        ></x-nav.card>

        <x-nav.card
        img="https://images.unsplash.com/photo-1588011930968-eadac80e6a5a?"
        date="Septiembre, 2002"
        title="Lorem inpsum dolor sit amet, consetetur"
        content="Lorem inpsum dolor sit amet, consetetur....Lorem inpsum dolor sit amet, consetetur"
        ></x-nav.card>

        <x-nav.card
        img="https://images.unsplash.com/photo-1717386255773-1e3037c81788?"
        date="Septiembre, 2002"
        title="Lorem inpsum dolor sit amet, consetetur"
        content="Lorem inpsum dolor sit amet, consetetur....Lorem inpsum dolor sit amet, consetetur"
        ></x-nav.card>

        <x-nav.card
        img="https://images.unsplash.com/photo-1516937941344-00b4e0337589?"
        date="Septiembre, 2002"
        title="Lorem inpsum dolor sit amet, consetetur"
        content="Lorem inpsum dolor sit amet, consetetur....Lorem inpsum dolor sit amet, consetetur"
        ></x-nav.card>

        <x-nav.card
        img="https://images.unsplash.com/photo-1496247749665-49cf5b1022e9?"
        date="Septiembre, 2002"
        title="Lorem inpsum dolor sit amet, consetetur"
        content="Lorem inpsum dolor sit amet, consetetur....Lorem inpsum dolor sit amet, consetetur"
        ></x-nav.card>

        <x-nav.card
        img="https://images.unsplash.com/photo-1516216628859-9bccecab13ca?"
        date="Septiembre, 2002"
        title="Lorem inpsum dolor sit amet, consetetur"
        content="Lorem inpsum dolor sit amet, consetetur....Lorem inpsum dolor sit amet, consetetur"
        ></x-nav.card>
    </div>
</div>

@endsection
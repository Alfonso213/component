@extends('template')
 @section('title', 'Register')
@section('contenido')
<x-wrapper>
    <x-slot name="tittle">Registro de usuario</x-slot>
            <form action="">
                <div>
                    <x-label>Nombre</x-label>
                    <x-input type="text" name="Nombre"/>
                </div>
                <div>
                    <x-label>Apellidos</x-label>
                    <x-input type="text" name="lastname"/>
                </div>
                <div>
                    <x-label>Email</x-label>
                    <x-input type="text" name="email"/>
                </div>
                <div>
                    <x-label>Fecha de nacimiento</x-label>
                    <x-input type="date" name="birthdate"/>
                </div>
                <div>
                    <x-label>Contraseña</x-label>
                    <x-input type="password" name="password"/>
                </div>

                <div class="flex items-center gap-4 justify-end mt-8">
                   <x-link href="/login">
                        Iniciar Sesion
                    </x-link>
                    <x-button>Registrarse</x-button>
                </div>
            </form>
</x-wrapper>
@endsection

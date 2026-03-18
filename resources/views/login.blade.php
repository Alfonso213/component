 @extends('template')

 @section('title', 'Login')

 @section('contenido')
 
 <x-wrapper>
    <x-slot name="tittle">Inicio de sesión</x-slot>

            <form action="">
                <div>
                    <x-label>Email</x-label>
                    <x-input type="text" name="email"/>
                </div>
                <div>
                    <x-label>Contraseña</x-label>
                    <x-input type="password" name="password"/>
                </div>

                <div class="flex items-center gap-4 justify-end mt-8">
                    <x-link href="/register">
                        Registrarse
                    </x-link>
                    <x-button>Iniciar sesión</x-button>
                </div>
            </form>
</x-wrapper>
@endsection


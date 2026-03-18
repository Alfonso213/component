<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class="h-screen flex  flex-col items-center justify-center bg-green-200">
        <h1 class="mb-6 text-2xl">
            Inicio de sesion.
        </h1>
        <div class="w-full sm:max-w-md py-4 px-6 bg-white shadow sm:rounded">
            <form action="">
                <div>
                    <label class="text-sm text-gray-700">Email</label>
                    <input type="text" 
                    name="email" 
                    class="rounded shadow border border-gray-300 p2 mt-1 w-ful outline-none">
                </div>
                <div>
                    <label class="text-sm text-gray-700">Nombre</label>
                    <input type="text" 
                    name="name" 
                    class="rounded shadow border border-gray-300 p2 mt-1 w-ful outline-none">
                </div>
                <div>
                    <label class="text-sm text-gray-700">Apellidos</label>
                    <input type="text" 
                    name="lastname" 
                    class="rounded shadow border border-gray-300 p2 mt-1 w-ful outline-none">
                </div>
                <div>
                    <label class="text-sm text-gray-700">Fecha de Nacimiento</label>
                    <input type="date" 
                    name="birthdate" 
                    class="rounded shadow border border-gray-300 p2 mt-1 w-ful outline-none">
                </div>
                <div>
                    <label class="text-sm text-gray-700">Contraseña</label>
                    <input type="password" 
                    name="password" 
                    class="rounded shadow border border-gray-300 p2 mt-1 w-ful outline-none">
                </div>

                <div class="flex items-center gap-4 justify-end mt-8">
                    <a href="/register" class="underline text-sm text-gray-600 hover:text-gray-900">
                        Registrarse
                    </a>
                    <button type="submit" class="px-4 py2 bg-green-800 rounded text-xs text-white uppercase 
                     hover:bg-green-700">
                        Iniciar sesion
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
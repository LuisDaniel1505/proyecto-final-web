<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Imperio Azul Noticias</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'cruz-blue': '#1e40af', 
                        'cruz-dark': '#111827',
                        'cruz-accent': '#2563eb', 
                    }
                }
            }
        }
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="font-sans antialiased">
    <!--
    <nav class="bg-blue-800 text-white shadow-lg fixed w-full z-50 top-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center">
                    <button class="p-2 rounded-md hover:bg-blue-700 focus:outline-none">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>

                <div class="flex-shrink-0 flex items-center">
                    <h1 class="font-bold text-lg md:text-xl tracking-wide">Imperio Azul Noticias</h1>
                </div>

                <div class="flex items-center space-x-4">
                    <button class="p-1 hover:text-gray-300"><i class="fas fa-search"></i></button>
                    <button class="p-1 hover:text-gray-300"><i class="fas fa-bell"></i></button>
                </div>
            </div>
        </div>
    </nav>
    --> 
    <div class="relative min-h-screen flex items-center justify-center bg-cover bg-center" 
         style="background-image: url('https://images.unsplash.com/photo-1522778119026-d647f0565c6a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');">
        
        <div class="absolute inset-0 white"></div>

        <div class="relative z-10 w-full max-w-md bg-white rounded-lg shadow-2xl overflow-hidden m-4">
            
            <div class="bg-gray-50 px-8 py-6 border-b border-gray-100 text-center">
                <div class="flex items-center justify-start mt-2">
                    <a href="<?=BASE_PATH ?>/home" class="text-sm font-medium underline text-blue-600 hover:text-blue-500">Inicio</a>
                </div>
                <div class="inline-block p-3 rounded-full bg-blue-100 mb-2">
                    <i class="fas fa-user text-blue-800 text-2xl"></i>
                </div>
                <h2 class="text-2xl font-bold text-gray-800">Bienvenido</h2>
                <p class="text-sm text-gray-500 mt-1">Ingresa a tu cuenta para ver noticias exclusivas</p>
            </div>

            <div class="p-8">
                <?php if(isset($error)): ?>
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                        <strong class="font-bold">Error:</strong>
                        <span class="block sm:inline"><?= $error ?></span>
                    </div>
                <?php endif; ?>
                <form action="<?= BASE_PATH ?>/login" method="POST" class="space-y-6">
                    
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-envelope text-gray-400"></i>
                            </div>
                            <input type="email" name="email" id="email" class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-blue-600 sm:text-sm transition duration-150 ease-in-out" placeholder="ejemplo@correo.com">
                        </div>
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-lock text-gray-400"></i>
                            </div>
                            <input type="password" name="password" id="password" class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-blue-600 sm:text-sm transition duration-150 ease-in-out" placeholder="••••••••">
                        </div>
                    </div>

                    <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-bold text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600 transition-colors duration-200">
                        INICIAR SESIÓN
                    </button>
                </form>

                <div class="mt-6 text-center">
                    <p class="text-sm text-gray-600">
                        ¿No tienes una cuenta? 
                        <a href="<?= BASE_PATH ?>/signUp" class="font-medium text-blue-700 hover:text-blue-600">Regístrate aquí</a>
                    </p>
                </div>
            </div>
            
            <div class="h-2 bg-linear-to-r from-blue-800 via-blue-600 to-red-600"></div>
        </div>
    </div>

</body>
</html>
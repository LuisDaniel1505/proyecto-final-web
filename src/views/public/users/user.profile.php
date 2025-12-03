<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario - Imperio Azul Noticias</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Fuente similar a la referencia */
        }
    </style>
</head>
<body class="bg-gray-100 font-sans">

    <nav class="bg-blue-800 text-white p-4 shadow-md sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center">
                <button class="mr-4 focus:outline-none">
                    <i class="fas fa-bars text-xl"></i>
                </button>
                <a href="#" class="text-xl font-bold">Imperio Azul Noticias</a>
            </div>
            <div class="flex items-center space-x-6">
                <button class="focus:outline-none"><i class="fas fa-search text-xl"></i></button>
                <button class="focus:outline-none relative">
                    <i class="fas fa-bell text-xl"></i>
                    <span class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full">3</span>
                </button>
                <div class="relative group">
                    <button class="flex items-center focus:outline-none">
                        <img src="https://i.pravatar.cc/150?img=3" alt="Foto de Perfil" class="w-10 h-10 rounded-full object-cover border-2 border-blue-500">
                        <span class="hidden md:block font-semibold ml-3 mr-2">Carlos López</span>
                        <i class="fas fa-chevron-down ml-1 text-sm"></i>
                    </button>
                    <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-10 hidden group-hover:block">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 flex items-center"><i class="fas fa-user mr-2"></i> Mi Perfil</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 flex items-center"><i class="fas fa-cog mr-2"></i> Configuración</a>
                        <div class="border-t border-gray-100 my-1"></div>
                        <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 flex items-center"><i class="fas fa-sign-out-alt mr-2"></i> Cerrar Sesión</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mx-auto mt-8 p-4 mb-12">
        <div class="max-w-5xl mx-auto bg-white rounded-lg shadow-xl overflow-hidden">
            
            <div class="bg-gradient-to-r from-blue-800 to-blue-600 p-8 text-white relative">
                <div class="flex flex-col md:flex-row items-center">
                    <div class="relative">
                        <img src="https://i.pravatar.cc/150?img=3" alt="Foto de Perfil" class="w-32 h-32 rounded-full object-cover border-4 border-white shadow-lg">
                        <button class="absolute bottom-0 right-0 bg-gray-800 hover:bg-gray-700 text-white rounded-full p-2 cursor-pointer focus:outline-none" title="Cambiar foto">
                            <i class="fas fa-camera"></i>
                        </button>
                    </div>
                    <div class="mt-6 md:mt-0 md:ml-8 text-center md:text-left">
                        <h2 class="text-3xl font-bold">Carlos López</h2>
                        <p class="text-blue-100 mt-2 flex items-center justify-center md:justify-start">
                            <i class="fas fa-envelope mr-2"></i> carlos.lopez@email.com
                        </p>
                        <p class="text-blue-100 mt-1 flex items-center justify-center md:justify-start">
                            <i class="fas fa-calendar-alt mr-2"></i> Miembro desde Enero 2023
                        </p>
                        <div class="mt-4">
                            <span class="inline-block bg-yellow-400 text-blue-900 text-sm px-3 py-1 font-semibold rounded-full">
                                <i class="fas fa-crown mr-1"></i> Suscripción Premium
                            </span>
                        </div>
                    </div>
                    <div class="mt-6 md:mt-0 md:ml-auto">
                        <button class="bg-white text-blue-800 hover:bg-gray-100 font-semibold py-2 px-6 rounded-lg shadow-sm flex items-center transition-all duration-200">
                            <i class="fas fa-edit mr-2"></i> Editar Perfil
                        </button>
                    </div>
                </div>
            </div>

            <div class="p-6 md:p-8 grid grid-cols-1 lg:grid-cols-3 gap-8">
                
                <div class="lg:col-span-2 space-y-8">
                    <section class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="text-xl font-bold text-gray-800 flex items-center">
                                <i class="fas fa-user-circle text-blue-600 mr-3"></i> Información Personal
                            </h3>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2" for="nombre">Nombre Completo</label>
                                <div class="relative">
                                    <i class="fas fa-user absolute left-3 top-3 text-gray-400"></i>
                                    <input class="pl-10 shadow-sm bg-white border border-gray-300 rounded-lg w-full py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-500 transition-all duration-200" id="nombre" type="text" value="Carlos López" readonly>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2" for="telefono">Teléfono</label>
                                <div class="relative">
                                    <i class="fas fa-phone absolute left-3 top-3 text-gray-400"></i>
                                    <input class="pl-10 shadow-sm bg-white border border-gray-300 rounded-lg w-full py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-500 transition-all duration-200" id="telefono" type="tel" value="+52 55 1234 5678" readonly>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2" for="ubicacion">Ubicación</label>
                                <div class="relative">
                                    <i class="fas fa-map-marker-alt absolute left-3 top-3 text-gray-400"></i>
                                    <input class="pl-10 shadow-sm bg-white border border-gray-300 rounded-lg w-full py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-500 transition-all duration-200" id="ubicacion" type="text" value="Ciudad de México, MX" readonly>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2" for="fecha-nacimiento">Fecha de Nacimiento</label>
                                <div class="relative">
                                    <i class="fas fa-birthday-cake absolute left-3 top-3 text-gray-400"></i>
                                    <input class="pl-10 shadow-sm bg-white border border-gray-300 rounded-lg w-full py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-500 transition-all duration-200" id="fecha-nacimiento" type="text" value="15 de Mayo, 1990" readonly>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                        <h3 class="text-xl font-bold text-gray-800 flex items-center mb-6">
                            <i class="fas fa-star text-blue-600 mr-3"></i> Mis Intereses
                        </h3>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-blue-100 text-blue-800 text-sm font-semibold px-3 py-1 rounded-full flex items-center"><i class="fas fa-futbol mr-2"></i> Cruz Azul</span>
                            <span class="bg-blue-100 text-blue-800 text-sm font-semibold px-3 py-1 rounded-full flex items-center"><i class="fas fa-chart-line mr-2"></i> Estadísticas</span>
                            <span class="bg-blue-100 text-blue-800 text-sm font-semibold px-3 py-1 rounded-full flex items-center"><i class="fas fa-newspaper mr-2"></i> Noticias Exclusivas</span>
                            <span class="bg-blue-100 text-blue-800 text-sm font-semibold px-3 py-1 rounded-full flex items-center"><i class="fas fa-video mr-2"></i> Videos</span>
                        </div>
                    </section>
                </div>

                <div class="lg:col-span-1 space-y-8">
                    
                    <section class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
                        <h3 class="text-lg font-bold text-gray-800 flex items-center mb-4">
                            <i class="fas fa-sliders-h text-blue-600 mr-3"></i> Preferencias
                        </h3>
                        <ul class="space-y-4">
                            <li class="flex items-center justify-between">
                                <span class="text-gray-700 flex items-center"><i class="fas fa-envelope-open-text text-gray-400 mr-3 w-5"></i> Notificaciones por Email</span>
                                <label class="switch relative inline-block w-12 h-6 rounded-full">
                                    <input type="checkbox" class="opacity-0 w-0 h-0" checked>
                                    <span class="slider round absolute cursor-pointer top-0 left-0 right-0 bottom-0 bg-gray-300 transition duration-200 ease-in-out rounded-full before:absolute before:h-5 before:w-5 before:left-0.5 before:bottom-0.5 before:bg-white before:rounded-full before:transition before:duration-200 before:ease-in-out checked:bg-blue-600 checked:before:translate-x-6"></span>
                                </label>
                            </li>
                            <li class="flex items-center justify-between">
                                <span class="text-gray-700 flex items-center"><i class="fas fa-moon text-gray-400 mr-3 w-5"></i> Modo Oscuro</span>
                                <label class="switch relative inline-block w-12 h-6 rounded-full">
                                    <input type="checkbox" class="opacity-0 w-0 h-0">
                                    <span class="slider round absolute cursor-pointer top-0 left-0 right-0 bottom-0 bg-gray-300 transition duration-200 ease-in-out rounded-full before:absolute before:h-5 before:w-5 before:left-0.5 before:bottom-0.5 before:bg-white before:rounded-full before:transition before:duration-200 before:ease-in-out checked:bg-blue-600 checked:before:translate-x-6"></span>
                                </label>
                            </li>
                            <li class="flex items-center justify-between">
                                <span class="text-gray-700 flex items-center"><i class="fas fa-language text-gray-400 mr-3 w-5"></i> Idioma</span>
                                <select class="form-select block w-auto px-3 py-1.5 text-sm font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                                    <option selected>Español</option>
                                    <option value="1">English</option>
                                </select>
                            </li>
                        </ul>
                    </section>

                    <section class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
                        <h3 class="text-lg font-bold text-gray-800 flex items-center mb-4">
                            <i class="fas fa-shield-alt text-blue-600 mr-3"></i> Seguridad
                        </h3>
                        <ul class="space-y-3">
                            <li>
                                <a href="#" class="flex items-center p-3 rounded-lg hover:bg-gray-50 text-gray-700 transition duration-200">
                                    <i class="fas fa-lock text-gray-400 mr-3 w-5"></i>
                                    <span>Cambiar Contraseña</span>
                                    <i class="fas fa-chevron-right ml-auto text-gray-400 text-sm"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center p-3 rounded-lg hover:bg-gray-50 text-gray-700 transition duration-200">
                                    <i class="fas fa-mobile-alt text-gray-400 mr-3 w-5"></i>
                                    <span>Autenticación de Dos Factores</span>
                                    <i class="fas fa-chevron-right ml-auto text-gray-400 text-sm"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center p-3 rounded-lg hover:bg-gray-50 text-gray-700 transition duration-200">
                                    <i class="fas fa-history text-gray-400 mr-3 w-5"></i>
                                    <span>Historial de Inicios de Sesión</span>
                                    <i class="fas fa-chevron-right ml-auto text-gray-400 text-sm"></i>
                                </a>
                            </li>
                        </ul>
                    </section>

                    <section class="bg-white p-6 rounded-lg border border-red-100 shadow-sm">
                        <h3 class="text-lg font-bold text-red-600 flex items-center mb-4">
                            <i class="fas fa-user-cog mr-3"></i> Cuenta
                        </h3>
                        <ul>
                            <li>
                                <a href="#" class="flex items-center p-3 rounded-lg hover:bg-red-50 text-red-600 transition duration-200 font-semibold">
                                    <i class="fas fa-trash-alt mr-3 w-5"></i>
                                    <span>Eliminar Cuenta</span>
                                </a>
                            </li>
                        </ul>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-gray-800 text-white py-6 text-center">
        <p class="text-sm">© 2023 Imperio Azul Noticias. Todos los derechos reservados.</p>
    </footer>

    <style>
        /* Estilos personalizados para el switch de Tailwind */
        .switch input:checked + .slider {
          background-color: #2563eb; /* blue-600 */
        }
        .switch input:checked + .slider:before {
          -webkit-transform: translateX(1.5rem); /* translate-x-6 */
          -ms-transform: translateX(1.5rem);
          transform: translateX(1.5rem);
        }
    </style>

</body>
</html>
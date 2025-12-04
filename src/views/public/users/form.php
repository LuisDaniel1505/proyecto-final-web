<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Cruz Azul Noticias</title>
  <link href="<?=BASE_PATH?>/output.css" rel="stylesheet">
</head>
<div class="min-h-screen flex items-center justify-center px-4 bg-gray-100">
    
    <div class="w-full max-w-lg bg-white p-8 md:p-10 rounded-lg shadow-lg">

        <h1 class="text-2xl font-bold text-blue-800 text-center pb-2">Editar Información</h1>
        <p class="text-gray-500 text-center text-sm mb-8">Actualiza tus datos personales</p>

        <form method="POST" action="<?= BASE_PATH ?>/profile/edit" class="space-y-5">

            <div>
                <label class="block text-gray-700 font-medium mb-1">Nombre completo</label>
                <div class="relative">
                    <i class="fas fa-user absolute left-3 top-3 text-gray-400"></i>
                    <input type="text"
                        name="nombre_completo"
                        value="<?= $usersItem->nombre ?>"
                        required
                        class="pl-3 w-full border border-gray-300 rounded-md p-2 focus:border-blue-900 outline-none transition-colors">
                </div>
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-1">Correo electrónico</label>
                <div class="relative">
                    <i class="fas fa-envelope absolute left-3 top-3 text-gray-400"></i>
                    <input type="email"
                        name="email"
                        value="<?= $usersItem->email ?>"
                        required
                        class="pl-3 w-full border border-gray-300 rounded-md p-2 focus:border-blue-900 outline-none transition-colors">
                </div>
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-1">Celular</label>
                <div class="relative">
                    <i class="fas fa-phone absolute left-3 top-3 text-gray-400"></i>
                    <input type="tel"
                        name="celular"
                        value="<?= $usersItem->celular ?? '' ?>"
                        placeholder="123 456 7891"
                        class="pl-3 w-full border border-gray-300 rounded-md p-2 focus:border-blue-900 outline-none transition-colors">
                </div>
            </div>

            <div class="flex justify-center gap-4 pt-4 mt-6">
                <a href="<?= BASE_PATH ?>/profile"
                    class="w-1/2 bg-gray-200 text-gray-700 px-5 py-2.5 rounded-md hover:bg-gray-300 transition text-center font-semibold">
                    Cancelar
                </a>
                <button type="submit"
                    class="w-1/2 bg-blue-800 text-white px-5 py-2.5 rounded-md hover:bg-blue-900 transition font-semibold shadow-md">
                    Guardar Cambios
                </button>
            </div>
        </form>

    </div>
</div>
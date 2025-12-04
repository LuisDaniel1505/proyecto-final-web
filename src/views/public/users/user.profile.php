<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Cruz Azul Noticias</title>
  <link href="<?=BASE_PATH?>/output.css" rel="stylesheet">
</head>
<div class="container mx-auto mt-19 p-4 mb-12">
    <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-xl overflow-hidden">
        
        <div class="bg-linear-to-r from-blue-800 to-blue-600 p-8 text-white relative">
            <div class="flex flex-col md:flex-row items-center">
                <div class="relative">
                    <img src="https://ui-avatars.com/api/?name=<?=$user->nombre ?>&background=random&color=fff&size=128" 
                         alt="Avatar" 
                         class="w-32 h-32 rounded-full object-cover border-4 border-white shadow-lg">
                </div>
                
                <div class="mt-6 md:mt-0 md:ml-8 text-center md:text-left">
                    <h2 class="text-3xl font-bold"><?=$user->nombre ?></h2>
                    
                    <p class="text-blue-100 mt-2 flex items-center justify-center md:justify-start">
                        <i class="fas fa-envelope mr-2"></i> <?= $user->email ?>
                    </p>
                    
                    <p class="text-blue-100 mt-1 flex items-center justify-center md:justify-start">
                        <i class="fas fa-id-card mr-2"></i> ID: #<?= $user->id ?>
                    </p>
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
                    
                    <div class="grid grid-cols-1 gap-6">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Nombre Completo</label>
                            <div class="relative">
                                <i class="fas fa-user absolute left-3 top-3 text-gray-400"></i>
                                <input class="pl-3 shadow-sm bg-white border border-gray-300 rounded-lg w-full py-2 px-3 text-gray-700 focus:outline-none cursor-default" 
                                       type="text" 
                                       value="<?= $user->nombre ?>" 
                                       readonly>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Correo Electrónico</label>
                            <div class="relative">
                                <i class="fas fa-envelope absolute left-3 top-3 text-gray-400"></i>
                                <input class="pl-3 shadow-sm bg-white border border-gray-300 rounded-lg w-full py-2 px-3 text-gray-700 focus:outline-none cursor-default" 
                                       type="text" 
                                       value="<?= $user->email?>" 
                                       readonly>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Celular</label>
                            <div class="relative">
                                <i class="fas fa-phone absolute left-3 top-3 text-gray-400"></i>
                                <input class="pl-3 shadow-sm bg-white border border-gray-300 rounded-lg w-full py-2 px-3 text-gray-700 focus:outline-none cursor-default" 
                                       type="tel" 
                                       value="<?= $user->celular ?? 'Sin registrar' ?>" 
                                       readonly>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <div class="lg:col-span-1 space-y-8">
                <section class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
                    <h3 class="text-lg font-bold text-black-800 flex items-center mb-4">
                        <i class="fas fa-cog mr-3"></i> Configuración
                    </h3>
                    <a href="<?= BASE_PATH ?>/profile/edit" 
                       class="flex items-center justify-center p-3 mb-4 rounded-lg bg-blue-50 hover:bg-blue-100 text-blue-800 transition duration-200 font-semibold cursor-pointer border border-blue-200">
                        <i class="fas fa-edit mr-2"></i>
                        <span>Editar Perfil</span>
                    </a>
                    <a href="<?= BASE_PATH ?>/profile/delete" 
                        onclick="return confirm('¿Estás SEGURO de eliminar tu cuenta? Esta acción no se puede deshacer.')" 
                        class="flex items-center p-3 rounded-lg bg-red-50 hover:bg-red-100 text-red-600 transition duration-200 font-semibold cursor-pointer justify-center border border-red-100">
                        <i class="fas fa-trash-alt mr-2"></i>
                        <span>Eliminar Cuenta</span>
                    </a>
                </section>
            </div>

        </div>
    </div>
</div>
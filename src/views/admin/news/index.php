<div class="px-12 mb-12 mt-30">
    <div class="flex justify-between i mb-4">
        <h2 class="text-2xl font-semibold">Gestión de Noticias</h2>
        <a href="<?=BASE_PATH?>/admin/news/create" 
        class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700 transition">
            + Nueva Noticia
        </a>
    </div>

    <div class="overflow-x-auto mt-4">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-sm">
            <thead class="bg-gray-100 border-b">
                <tr>
                    <th class="px-4 py-3 text-left text-gray-700 font-medium">ID</th>
                    <th class="px-4 py-3 text-left text-gray-700 font-medium">Título</th>
                    <th class="px-4 py-3 text-left text-gray-700 font-medium">Fecha</th>
                    <th class="px-4 py-3 text-left text-gray-700 font-medium">Descripción</th>
                    <th class="px-4 py-3 text-left text-gray-700 font-medium">Acciones</th>
                </tr>
            </thead>

            <tbody>
                <tr class="border-b hover:bg-gray-50 transition">
                    <td class="px-4 py-3 text-gray-600">Aqui va el ID</td>
                    <td class="px-4 py-3 font-medium text-gray-800">Aqui nombre</td>
                    <td class="px-4 py-3 text-sm text-gray-600">Aqui Fecha</td>
                    <td class="px-4 py-3 text-sm text-gray-600 truncate max-w-xs">Aqui Descripción</td>
                    <td class="px-4 py-3 flex gap-2"> Aqui estarían los botones</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="px-12 mb-12 mt-30">
    <div class="flex justify-between i mb-4">
        <h2 class="text-2xl font-semibold">Gestión de Noticias</h2>
        <a href="<?=BASE_PATH?>/admin/news/create" 
        class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700 transition">
            Nueva Noticia
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
                <?php if (empty($news)): ?>
                    <tr>
                        <td colspan="5" class="px-4 py-8 text-center text-gray-500">No hay noticias registradas.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($news as $item): ?>
                    <tr class="border-b hover:bg-gray-50 transition">
                        <td class="px-4 py-3 text-gray-600">#<?= $item->id ?></td>
                        <td class="px-4 py-3 font-medium text-gray-800"><?= $item->titulo ?></td>
                        <td class="px-4 py-3 text-sm text-gray-600"><?= $item->fecha ?></td>
                        <td class="px-4 py-3 text-sm text-gray-600 truncate max-w-xs"><?= $item->descripcion ?></td>
                        <td class="px-4 py-3 flex gap-2">
                            <a href="<?=BASE_PATH?>/admin/news/edit/<?= $item->id ?>" 
                                class="bg-yellow-500 text-white px-3 py-2 rounded hover:bg-yellow-600 transition text-xs font-bold uppercase tracking-wide">
                                Editar
                            </a>

                            <a href="<?=BASE_PATH?>/admin/news/delete/<?= $item->id ?>"
                                onclick="return confirm('¿Estás seguro de eliminar esta noticia? No se puede deshacer.')"
                                class="bg-red-600 text-white px-3 py-2 rounded hover:bg-red-700 transition text-xs font-bold uppercase tracking-wide">
                                Eliminar
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

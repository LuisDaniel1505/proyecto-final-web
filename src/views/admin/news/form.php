
  <div class="flex items-center justify-center mt-12 mb-12 pt-20">
    <div class="flex flex-col bg-white shadow-xl">

      <form method="POST"
        enctype="multipart/form-data"
        class="bg-white p-6 rounded-lg shadow-md w-full max-w-xl">

        <h1 class="text-xl font-bold text-blue-800 text-center pb-5"><?= $newsItem ? 'Editar Noticia' : 'Nueva Noticia' ?></h1>
        <?php if ($newsItem): ?>
          <input type="hidden" name="id" value="<?= $newsItem->id ?>">
        <?php endif; ?>
        <label class="block text-gray-700 font-medium">Título de la noticia</label>
        <input type="text"
          name="titulo"
          required value="<?= $newsItem->titulo ?? '' ?>"
          class="mt-1 w-full border border-gray-300 rounded-md p-2 focus:border-blue-900 outline-none">

        <div class="flex mt-4 justify-between">
          <div>
            <label class="block text-gray-700 font-medium">Fecha</label>
            <input type="date" name="fecha" required value="<?= $newsItem->fecha ?? date('Y-m-d') ?>"
              class="mt-1 w- border border-gray-300 rounded-md p-2 focus:border-blue-900 outline-none">
          </div>
          <div>
            <label class="block text-gray-700 font-medium">Duración</label>
            <input type="text"
            name="duracion"
          required value="<?= $newsItem->duracion ?? '' ?>"
          class="mt-1 w-full border border-gray-300 rounded-md p-2 focus:border-blue-900 outline-none">
          </div>
        </div>

        <label class="block mt-4 text-gray-700 font-medium">Entradilla</label>
        <textarea name="descripcion"
          required
          class="mt-1 w-full border border-gray-300 rounded-md p-2 h-15 resize-none focus:border-blue-900 outline-none"><?= $newsItem->descripcion ?? '' ?></textarea>

        <label class="block mt-4 text-gray-700 font-medium">Cuerpo</label>
        <textarea name="cuerpo"
          required
          class="mt-1 w-full border border-gray-300 rounded-md p-2 h-25 resize-none focus:border-blue-900 outline-none"><?= $newsItem->cuerpo ?? '' ?></textarea>

        <label class="block mt-4 text-gray-700 font-medium">Imagen (opcional)</label>
        <input type="file"
          name="imagen"
          accept="image/*"
          class="mt-1 w-full border border-gray-300 rounded-md p-2 bg-white cursor-pointer focus:ring-blue-900 focus:border-blue-900 outline-none">
        <?php if (!empty($newsItem->imagen)): ?>
          <p class="mt-2 text-sm text-gray-600">Imagen actual:</p>
          <img src="<?=BASE_PATH?>/assets/img/<?= $newsItem->imagen ?>" 
                class="mt-2 w-32 h-32 object-cover rounded-md shadow" onerror="this.style.display='none'">
        <?php endif; ?>
        <div class="flex justify-center gap-3">
          <a href="<?=BASE_PATH?>/admin/news" class="mt-5 bg-gray-500 text-white px-5 py-2 rounded-md hover:bg-gray-600 transition">Cancelar</a>
          <button type="submit"
            class="mt-5 bg-blue-800 text-white px-5 py-2 rounded-md hover:bg-blue-900 transition">
            <p>Guardar</p>
          </button>
        </div>  
      </form>
    </div>
  </div>

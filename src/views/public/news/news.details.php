<main class="min-h-screen text-gray-800 mt-20">
  <section class="max-w-7xl mx-auto px-4 py-8 lg:py-12">
    <div class="grid grid-cols-1 lg:grid-cols-5 lg:gap-10">
      <div class="space-y-12 lg:col-span-4">
        <figure class="relative overflow-hidden rounded-3xl">
          <img src="<?= ASSETS_PATH ?>/img/<?= $item->imagen ?>"
            alt="<?= $item->titulo ?>"
            class="w-full max-h-[36rem] object-cover rounded-3xl">
        </figure>

        <header class="mb-10">
          <div class="flex flex-wrap gap-3 text-sm text-gray-500 mb-3">
            <span class="badge badge-outline border-gray-500">Publicado: <?= $item->fecha ?></span>
            <span class="badge badge-outline border-gray-500">Lectura: <?= $item->duracion ?></span>
          </div>
          <h1 class="text-4xl md:text-5xl font-extrabold text-blue-900 leading-tight">
            <?= $item->titulo ?>
          </h1>
        </header>

        <article class="space-y-6 text-justify">
          <p class="text-xl font-semibold text-gray-900 mb-6 border-l-4 border-blue-500 pl-4">
            <?= $item->descripcion ?>
          </p>
          <div class="prose max-w-none text-gray-700 leading-relaxed">
            <?= $item->cuerpo ?>
          </div>
          <div class="pt-8 border-t mt-10">
            <a href="<?= BASE_PATH ?>/news" class="btn btn-ghost text-blue-600 hover:bg-blue-50">
              ← Volver al listado de noticias
            </a>
          </div>
        </article>

        <div class="p-6 bg-white rounded-xl shadow-xl border border-gray-100">
          <h3 class="text-xl font-bold text-blue-900 mb-4 border-b pb-2">Comentarios</h3>
          <form class="space-y-4 mb-8 p-4 bg-blue-50 border border-gray-200 rounded-lg">
            <h4 class="text-lg font-semibold text-blue-900">Deja tu comentario</h4>
            <div>
              <textarea name="comentario" rows="4" required
              placeholder="Escribe tu comentario aquí..."
              class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"></textarea>
            </div>
            <button type="submit" class="w-full sm:w-auto btn btn-primary bg-blue-800 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded-lg transition duration-150">
              Publicar
            </button>
          </form>
          <div class="p-5 mb-2 rounded-xl border border-gray-200 ">
            <div class="pb-4 last:border-b-0 last:pb-0">
              <div class="flex items-start space-x-4">
                <div class="min-w-0 flex-1">
                  <div class="flex justify-between items-center">
                    <p class="text-sm font-bold text-gray-900">
                      Usuario </p>
                    <p class="text-xs text-gray-500">
                      Hace 1 hora </p>
                  </div>
                  <p class="text-sm text-gray-700 mt-3 ">
                    Contenido del comentario
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <aside class="mt-12 lg:mt-0 lg:col-span-1">
        <div class="sticky top-8 space-y-8">
          <div class="p-6 bg-white rounded-xl shadow-xl border border-gray-100 ">
            <h3 class="text-xl font-bold text-blue-900 mb-4 border-b pb-2 text-center">Últimas Noticias</h3>
            <ul class="space-y-4 text-justify">
              <?php foreach ($news as $noticia): ?>
                <li class="border-b pb-3 last:border-b-0 last:pb-0">
                  <span class="badge badge-primary border-gray-500 mb-2"><?= $noticia->duracion ?></span>
                  <a href="<?= BASE_PATH ?>/news/<?= $noticia->id ?>"
                    class="block font-semibold text-gray-800 hover:text-blue-600 transition leading-tight">
                    <?= $noticia->titulo ?>
                  </a>
                  <p><?= $noticia->descripcion ?></p>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </aside>

    </div>
  </section>
</main>
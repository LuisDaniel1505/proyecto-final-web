<main class="min-h-screen text-gray-800 mt-20">
  <section class="max-w-6xl mx-auto px-4 py-8 lg:py-12 lg:grid lg:grid-cols-[1.8fr,1fr] lg:gap-10">
    <article class="space-y-6">
      <div class="relative overflow-hidden rounded-3xl border bg-white shadow-xl">
        <figure class="relative max-h-96 overflow-hidden">
          <img src="<?= ASSETS_PATH ?>/img/<?= $item->imagen ?>"
               alt="<?= $item->titulo ?>"
               class="w-full h-full object-cover">
          <div class="absolute inset-0 bg-linear-to-t from-black/60 via-black/10 to-transparent"></div>
        </figure>
        <div class="p-6 md:p-8">
          <h1 class="text-3xl md:text-4xl font-extrabold text-blue-900 mb-3">
            <?= $item->titulo ?>
          </h1>
          <div class="flex flex-wrap gap-3 text-xs text-gray-600 mb-4">
            <span class="badge badge-outline border-gray-400">
              Publicado: <?= $item->fecha ?>
            </span>
            <span class="badge badge-outline border-gray-400">
              Lectura: <?= $item->duracion ?>
            </span>
          </div>
          <p class="text-gray-700 leading-relaxed"><?= $item->descripcion ?></p>
          <div class="pt-6">
            <a href="<?= BASE_PATH ?>/news" class="btn btn-primary">← Volver</a>
          </div>
        </div>
      </div>
    </article>
    
    <div class="mt-10 lg:mt-0 space-y-3">
      <p><?= $item->cuerpo ?></p>
    </div>
  </section>
</main>

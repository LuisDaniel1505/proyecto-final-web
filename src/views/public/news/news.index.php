<main class="grow container mx-auto px-4 py-8 mt-20">
  <div class="flex items-center justify-between mb-4">
    <h2 class="text-2xl font-bold">Últimas noticias</h2>
    <a class="link link-primary" href="<?= BASE_PATH ?>/news">Ver todas</a>
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    <?php foreach($news as $noticia): ?>
      <article class="card bg-base-100 shadow-md hover:shadow-xl transition">
        <figure>
          <img
            src="<?= ASSETS_PATH ?>/img/<?= $noticia->imagen ?>"
            alt="<?= $noticia->titulo ?>"
            class="w-full h-56 object-cover" />
        </figure>
        <div class="card-body">
          <div class="flex items-center gap-2">
            <span class="badge badge-primary">Cruz Azul</span>
            <span class="text-xs opacity-60">
              <?= $noticia->fecha ?>
            </span>
          </div>
          <h3 class="card-title"><?= $noticia->titulo ?></h3>
          <p class="opacity-80"><?= $noticia->descripcion ?></p>
          <div class="card-actions justify-between items-center">
            <a class="btn btn-ghost btn-sm" href="<?= BASE_PATH ?>/news/<?= $noticia->id ?>">Leer</a>
            <span class="text-xs opacity-60"><?= $noticia->duracion ?></span>
          </div>
        </div>
      </article>
    <?php endforeach; ?>
  </div>
</main>

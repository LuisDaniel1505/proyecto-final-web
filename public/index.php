<?php 
include '../src/views/layouts/header.php';
$noticias = getNoticias();
?>
<div class="container mx-auto px-4 py-8 mt-20">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
      <article class="lg:col-span-2 card bg-base-100 shadow-xl image-full hover:border-zinc-700">
        <figure>
          <img src="<?=ASSETS_PATH?>/img/equipo.png" alt="Cruz Azul entrenando" />
        </figure>
        <div class="card-body justify-end">
          <div class="flex items-center gap-2">
            <span class="badge badge-secondary">Liga MX</span>
            <span class="badge">Primera Plana</span>
          </div>
          <h1 class="card-title text-3xl md:text-4xl">Cruz Azul define XI con dos cambios clave</h1>
          <p class="opacity-90 max-w-2xl">El DT ensaya variantes y punta de cara al clásico.</p>
          <div class="card-actions">
            <a class="btn btn-primary">Leer noticia</a>
            <span class="opacity-80 text-sm">hoy · 4 min</span>
          </div>
        </div>
      </article>

      <aside class="card bg-base-100">
        <div class="card-body">
          <h3 class="card-title">Próximo partido</h3>
          <div class="flex items-center gap-4">
            <div class="avatar">
              <div class="w-12 rounded-full">
                <img src="<?=ASSETS_PATH?>/img/image.png" alt="Cruz Azul">
              </div>
            </div>
            <div class="text-2xl font-bold">vs</div>
            <div class="avatar">
              <div class="w-12 rounded-full">
                <img src="<?=ASSETS_PATH?>/img/america.png" alt="Rival">
              </div>
            </div>
          </div>
          <p class="mt-2 text-sm opacity-70">Sábado 19:00 · Estadio Azteca</p>

          <div class="flex items-center gap-4">
            <div class="avatar">
              <div class="w-12 rounded-full">
                <img src="<?=ASSETS_PATH?>/img/image.png" alt="Cruz Azul">
              </div>
            </div>
            <div class="text-2xl font-bold">vs</div>
            <div class="avatar">
              <div class="w-12 rounded-full">
                <img src="<?=ASSETS_PATH?>/img/tigres.png" alt="Rival">
              </div>
            </div>
          </div>
          <p class="mt-2 text-sm opacity-70">Sábado 19:00 · Estadio Ciudad universitaria</p>

          <div class="flex items-center gap-4">
            <div class="avatar">
              <div class="w-12 rounded-full">
                <img src="<?=ASSETS_PATH?>/img/image.png" alt="Cruz Azul">
              </div>
            </div>
            <div class="text-2xl font-bold">vs</div>
            <div class="avatar">
              <div class="w-12 rounded-full">
                <img src="<?=ASSETS_PATH?>/img/chivas.png" alt="Rival">
              </div>
            </div>
          </div>
          <p class="mt-2 text-sm opacity-70">Sábado 19:00 · Estadio Akron</p>

          <div class="divider"></div>
          <button class="btn btn-outline btn-primary w-full">Calendario completo</button>
        </div>
      </aside>
    </div>
  </div>

  <div class="grow bg-base-100">
    <section class="container mx-auto px-4 pb-12">
      <div class="flex items-center justify-between mb-4">
        <h2 class="text-2xl font-bold">Últimas noticias</h2>
        <a class="link link-primary">Ver todas</a>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach($noticias as $noticia) : ?>
                <article class="card bg-base-100 shadow-md hover:shadow-xl transition">
                <figure>
                    <img src="<?=ASSETS_PATH?>./img/<?=$noticia['imagen']?>" alt="<?=$noticia['titulo']?>" class="w-full h-56 object-cover" />
                </figure>
                <div class="card-body">
                    <div class="flex items-center gap-2">
                    <span class="badge badge-primary">Cruz Azul</span>
                    <span class="text-xs opacity-60"><?=$noticia['fecha']?></span>
                    </div>
                    <h3 class="card-title"><?=$noticia['titulo']?></h3>
                    <p class="opacity-80"><?=$noticia['descripcion']?></p>
                    <div class="card-actions justify-between items-center">
                    <a class="btn btn-ghost btn-sm" href="<?=SRC_PATH?>/views/news/news.php" target="_blank">Leer</a>
                    <span class="text-xs opacity-60"><?=$noticia['duracion']?></span>
                    </div>
                </div>
                </article>
            <?php endforeach; ?>
      </div>
    </section>
  </div>

<?php include '../src/views/layouts/footer.php'; ?>
<main class="min-h-screen text-gray-800 mt-20">
  <section class="max-w-7xl mx-auto px-4 py-8 lg:py-12">
    <div class="grid grid-cols-1 lg:grid-cols-5 lg:gap-10">
      <div class="space-y-12 lg:col-span-4">
        <figure class="relative overflow-hidden rounded-3xl">
          <img src="<?= ASSETS_PATH ?>/img/<?= $item->imagen ?>"
            alt="<?= $item->titulo ?>"
            class="w-full max-h-144 object-cover rounded-3xl">
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

        <div class="p-6 bg-white rounded-xl shadow-xl border border-gray-100 mt-10">

            <h3 class="text-xl font-bold text-blue-900 mb-4 border-b pb-2">
                Comentarios (<?= isset($comments) ? count($comments) : 0 ?>)
            </h3>
            <?php if (isAunthenticated()): ?>
                <form action="<?= BASE_PATH ?>/comments/store" method="POST" class="space-y-4 mb-8 p-4 bg-blue-50 border border-gray-200 rounded-lg">
                    <input type="hidden" name="id_news" value="<?= $item->id ?>">                   
                    <div class="flex items-center gap-2 mb-2">
                        <span class="text-sm font-semibold text-blue-900">Comentando como:</span>
                        <span class="badge badge-primary"><?= $_SESSION['user_email'] ?? 'Usuario' ?></span>
                    </div>
                    <div>
                        <textarea name="content" rows="4" required
                        placeholder="Escribe tu comentario aquí..."
                        class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"></textarea>
                    </div>
                    <button type="submit" class="w-full sm:w-auto btn btn-primary bg-blue-800 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded-lg transition duration-150">
                        Publicar
                    </button>
                </form>
            <?php else: ?>
                <div class="mb-8 p-8 bg-gray-50 border border-gray-200 rounded-lg text-center">
                    <h4 class="text-lg font-semibold text-gray-700 mb-2">Inicia sesión para comentar</h4>
                    <a href="<?= BASE_PATH ?>/login" class="inline-block btn btn-outline btn-primary border-blue-800 text-blue-800 hover:bg-blue-800 hover:text-white font-bold py-2 px-6 rounded-full transition duration-150">
                        Ir al Login
                    </a>
                </div>
            <?php endif; ?>

            <div class="space-y-4">
                <?php if (empty($comments)): ?>
                    <p class="text-gray-500 italic text-center py-4">Sé el primero en comentar esta noticia.</p>
                <?php else: ?>
                    <?php foreach ($comments as $c): ?>
                    <div class="p-5 rounded-xl border border-gray-200 bg-gray-50 hover:bg-white transition duration-200 shadow-sm">
                        <div class="flex items-start space-x-4">
                            <div class="shrink-0 h-10 w-10 rounded-full bg-blue-200 flex items-center justify-center text-blue-800 font-bold">
                                <?= substr($c->username, 0, 1) ?>
                            </div>
                            
                            <div class="min-w-0 flex-1">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <p class="text-sm font-bold text-gray-900"><?= $c->username ?></p>
                                        <p class="text-xs text-gray-500"><?= $c->created_at ?></p>
                                    </div>
                                    
                                    <?php if(isset($_SESSION['user_id']) && $_SESSION['user_id'] == $c->id_user): ?>
                                        <form action="<?= BASE_PATH ?>/comments/delete/<?= $c->id ?>" method="POST" onsubmit="return confirm('Confirmar');">
                                            <button type="submit" class="text-red-600 font-bold text-xs border border-red-200 bg-red-50 px-2 py-1 rounded">
                                                BORRAR
                                            </button>
                                        </form>
                                    <?php endif; ?>

                                </div>
                                <p class="text-sm text-gray-700 mt-2"><?= $c->content ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
      </div>

      <aside class="mt-12 lg:mt-0 lg:col-span-1">
        <div class="sticky top-8 space-y-8">
          <div class="p-6 bg-white rounded-xl shadow-xl border border-gray-100 ">
            <h3 class="text-xl font-bold text-blue-900 mb-4 border-b pb-2 text-center">Últimas Noticias</h3>
            <ul class="space-y-4 text-justify">
              <?php if (!empty($news)): ?>
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
              <?php else: ?>
                  <p class="text-sm text-gray-500 text-center">No hay más noticias.</p>
              <?php endif; ?>
            </ul>
          </div>
        </div>
      </aside>

    </div>
  </section>
</main>
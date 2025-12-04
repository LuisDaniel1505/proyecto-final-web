<main class="grow container mx-auto px-4 py-8 mt-20">
<section class="bg-white shadow-xl rounded-lg p-4 mb-8">
  <div class="text-xl font-bold text-gray-800 border-b-2 border-blue-500 pb-2 mb-4">
    <h1>MARCADORES</h1>
  </div>
  
  <div class="grid grid-cols-3 gap-3">
    
    <div class="p-3 bg-gray-50 border border-gray-200 rounded-lg hover:shadow-lg transition duration-300 transform hover:scale-[1.05]">
      <div class="flex flex-col items-center space-y-1">
        
        <div class="flex items-center justify-center w-full">
          
          <div class="flex flex-col items-center text-center w-5/12">
            <img src="<?= ASSETS_PATH ?>/img/chivas.png" class="w-8 h-8" alt="Escudo GDL">
            <p class="text-xs font-medium text-gray-700 mt-1">GDL</p>
          </div>
          
          <h2 class="text-base font-extrabold text-gray-400 mx-1">VS</h2>
          
          <div class="flex flex-col items-center text-center w-5/12">
            <img src="<?= ASSETS_PATH ?>/img/image.png" class="w-8 h-8" alt="Escudo CAZ">
            <p class="text-xs font-medium text-gray-700 mt-1">CAZ</p>
          </div>
        </div>
        
        <div class="flex items-center justify-center w-full pt-1">
          <p class="text-2xl font-bold text-gray-900 w-5/12 text-center">0</p>
          <span class="text-xl font-light text-gray-400 mx-1">-</span>
          <p class="text-2xl font-bold text-gray-900 w-5/12 text-center">0</p>
        </div>
        
      </div>
    </div>
    
    <div class="p-3 bg-white border border-gray-300 rounded-lg shadow-sm hover:shadow-lg transition duration-300 transform hover:scale-[1.05]">
      <div class="flex flex-col items-center space-y-1">
        
        <div class="flex items-center justify-center w-full">
          <div class="flex flex-col items-center text-center w-5/12">
            <img src="<?= ASSETS_PATH ?>/img/image.png" class="w-8 h-8" alt="Escudo CAZ">
            <p class="text-xs font-medium text-gray-700 mt-1">CAZ</p>
          </div>
          
          <h2 class="text-base font-extrabold text-gray-400 mx-1">VS</h2>
          
          <div class="flex flex-col items-center text-center w-5/12">
            <img src="<?= ASSETS_PATH ?>/img/chivas.png" class="w-8 h-8" alt="Escudo GDL">
            <p class="text-xs font-medium text-gray-700 mt-1">GDL</p>
          </div>
        </div>
        
        <div class="flex items-center justify-center w-full pt-1">
          <p class="text-2xl font-bold text-green-600 w-5/12 text-center">3</p>
          <span class="text-xl font-light text-gray-400 mx-1">-</span>
          <p class="text-2xl font-bold text-gray-700 w-5/12 text-center">2</p>
        </div>
        
      </div>
    </div>
    
    <div class="p-3 bg-white border border-gray-300 rounded-lg shadow-sm hover:shadow-lg transition duration-300 transform hover:scale-[1.05]">
      <div class="flex flex-col items-center space-y-1">
        
        <div class="flex items-center justify-center w-full">
          <div class="flex flex-col items-center text-center w-5/12">
            <img src="<?= ASSETS_PATH ?>/img/image.png" class="w-8 h-8" alt="Escudo CAZ">
            <p class="text-xs font-medium text-gray-700 mt-1">CAZ</p>
          </div>
          
          <h2 class="text-base font-extrabold text-gray-400 mx-1">VS</h2>
          
          <div class="flex flex-col items-center text-center w-5/12">
            <img src="<?= ASSETS_PATH ?>/img/tigres.png" class="w-8 h-8" alt="Escudo TIG">
            <p class="text-xs font-medium text-gray-700 mt-1">TIG</p>
          </div>
        </div>
        
        <div class="flex flex-col items-center justify-center w-full pt-1">
          <p class="text-lg font-bold text-blue-600">8:00 PM</p>
          <p class="text-xs text-gray-500">15 de Dic.</p>
        </div>
        
      </div>
    </div>
    
  </div>
</section>

<?php  
  $total = count($news);
  $chunkSize = 3;

  // Recorrer noticias en bloques de 3
  for ($i = 0; $i < $total; $i += $chunkSize):
      $bloque = array_slice($news, $i, $chunkSize);
      if (empty($bloque)) continue;
?>
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-10">

      <?php $principal = $bloque[0]; ?>
      <article class="lg:col-span-2 bg-base-100 rounded-lg shadow-md hover:shadow-xl transition">
        <figure>
          <img
            src="<?= ASSETS_PATH ?>/img/<?= $principal->imagen ?>"
            alt="<?= $principal->titulo ?>"
            class="w-full h-[450px] object-cover rounded-lg"
          />
        </figure>
        <div class="p-6">
          <h2 class="text-3xl font-bold mb-2"><?= $principal->titulo ?></h2>
          <p class="text-base opacity-80 mb-4"><?= $principal->descripcion ?></p>

          <div class="flex items-center justify-between">
            <span class="text-xs opacity-60"><?= $principal->fecha ?></span>
            <a href="<?= BASE_PATH ?>/news/<?= $principal->id ?>" class="btn btn-ghost btn-sm text-lg">Leer más</a>
          </div>
        </div>
      </article>

      <div class="grid grid-cols-1 gap-6">

        <?php foreach (array_slice($bloque, 1) as $noticia): ?>
          <article class="bg-base-100 shadow hover:shadow-lg transition rounded">
            <figure>
              <img
                src="<?= ASSETS_PATH ?>/img/<?= $noticia->imagen ?>"
                alt="<?= $noticia->titulo ?>"
                class="w-full h-40 object-cover rounded-t"
              />
            </figure>
            <div class="p-4">
              <h3 class="font-semibold text-lg leading-tight mb-2">
                <?= $noticia->titulo ?>
              </h3>

              <div class="flex items-center justify-between mt-3">
                <span class="text-xs opacity-60"><?= $noticia->fecha ?></span>
                <a class="btn btn-ghost btn-xs text-lg" href="<?= BASE_PATH ?>/news/<?= $noticia->id ?>">Leer</a>
              </div>
            </div>
          </article>
        <?php endforeach; ?>

      </div>

    </div>

  <?php endfor; ?>

</main>

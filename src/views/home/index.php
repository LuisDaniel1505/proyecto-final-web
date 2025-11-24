<main class="grow">
  <header class="relative bg-cover bg-center bg-no-repeat text-center py-16 px-4"
          style="background-image: url('<?= ASSETS_PATH ?>/img/estadio.jpg');">
    <div class="absolute inset-0 bg-black/60 z-10"></div>
    <div class="relative z-20 py-16 px-4 text-white">
      <h1 class="text-4xl md:text-5xl font-bold mb-4">Imperio Azul Noticias</h1>
      <p class="text-gray-200 text-lg mb-6">Toda la pasión de Cruz Azul, en un solo lugar</p>
      <a href="<?= BASE_PATH ?>/news" class="btn btn-primary">Ver noticias exclusivas de cruz azul</a>
    </div>
  </header>


  <section class="bg-base-100 py-16">
    <div class="max-w-7xl mx-auto px-6">
      <h2 class="text-3xl font-bold text-blue-800 text-center mb-10">Noticias relacionadas con el entorno de la liga MX y la selección mexicana</h2>


      <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-3">
       
        <div class="card bg-white shadow-xl hover:shadow-2xl transition duration-300 border border-gray-200">
          <figure class="px-4 pt-4">
            <img src="<?= ASSETS_PATH ?>/img/victoria.jpg" alt="Historia del club" class="rounded-xl h-56 w-full object-cover">
          </figure>
          <div class="card-body text-gray-700">
            <h3 class="card-title text-blue-800 mb-2">Historia del Club</h3>
              <p>Cruz Azul, fundado en 1927, ha sido símbolo de garra, entrega y pasión. Con nueve títulos de liga, su legado es una historia de gloria e identidad cementera.</p>
            <div class="card-actions justify-end mt-3">
              <a href="#" class="btn btn-outline btn-primary btn-sm">Leer más</a>
            </div>
          </div>
        </div>


        <div class="card bg-white shadow-xl hover:shadow-2xl transition duration-300 border border-gray-200">
          <figure class="px-4 pt-4">
            <img src="<?= ASSETS_PATH ?>/img/calendario.jpeg" alt="Tabla general" class="rounded-xl h-56 w-full object-cover">
          </figure>
          <div class="card-body text-gray-700">
            <h3 class="card-title text-blue-800 mb-2">Tabla General</h3>
            <p>Mira la posición actual de Cruz Azul en la Liga MX y sigue el desempeño jornada tras jornada en la búsqueda de la gloria.</p>
            <div class="card-actions justify-end mt-3">
              <a href="#" class="btn btn-outline btn-primary btn-sm">Ver tabla</a>
            </div>
          </div>
        </div>


        <div class="card bg-white shadow-xl hover:shadow-2xl transition duration-300 border border-gray-200">
          <figure class="px-4 pt-4">
            <img src="<?= ASSETS_PATH ?>/img/seleccion.jpg" alt="Jugadores convocados" class="rounded-xl h-56 w-full object-cover">
          </figure>
          <div class="card-body text-gray-700">
            <h3 class="card-title text-blue-800 mb-2">Convocados a la Selección</h3>
            <p>Conoce qué jugadores celestes fueron convocados a la Selección Mexicana y cómo representan al club en torneos internacionales.</p>
            <div class="card-actions justify-end mt-3">
              <a href="#" class="btn btn-outline btn-primary btn-sm">Ver lista</a>
            </div>
          </div>
        </div>


        <div class="card bg-white shadow-xl hover:shadow-2xl transition duration-300 border border-gray-200">
          <figure class="px-4 pt-4">
            <img src="<?= ASSETS_PATH ?>/img/tigres.png" alt="Noticias de la Liga" class="rounded-xl h-56 w-full object-cover">
          </figure>
          <div class="card-body text-gray-700">
            <h3 class="card-title text-blue-800 mb-2">Noticias de la Liga MX</h3>
            <p>Entérate de lo más reciente en la Liga MX: resultados, fichajes, conferencias y rumores del fútbol mexicano.</p>
            <div class="card-actions justify-end mt-3">
              <a href="<?= BASE_PATH ?>/news" class="btn btn-outline btn-primary btn-sm">Ir a noticias</a>
            </div>
          </div>
        </div>


        <div class="card bg-white shadow-xl hover:shadow-2xl transition duration-300 border border-gray-200">
          <figure class="px-4 pt-4">
            <img src="<?= ASSETS_PATH ?>/img/estadio.jpg" alt="Partidos amistosos" class="rounded-xl h-56 w-full object-cover">
          </figure>
          <div class="card-body text-gray-700">
            <h3 class="card-title text-blue-800 mb-2">Amistosos recientes</h3>
            <p>Repasa los amistosos más recientes del equipo y los resultados previos a cada torneo. Análisis, goles y desempeño de los nuevos refuerzos.</p>
            <div class="card-actions justify-end mt-3">
              <a href="#" class="btn btn-outline btn-primary btn-sm">Ver amistosos</a>
            </div>
          </div>
        </div>


        <div class="card bg-white shadow-xl hover:shadow-2xl transition duration-300 border border-gray-200">
          <figure class="px-4 pt-4">
            <img src="<?= ASSETS_PATH ?>/img/america.png" alt="Próximos partidos" class="rounded-xl h-56 w-full object-cover">
          </figure>
          <div class="card-body text-gray-700">
            <h3 class="card-title text-blue-800 mb-2">Próximos Partidos</h3>
            <p>No te pierdas los siguientes enfrentamientos de Cruz Azul: fechas, rivales y estadios en los que La Máquina buscará sumar puntos.</p>
            <div class="card-actions justify-end mt-3">
              <a href="#" class="btn btn-outline btn-primary btn-sm">Ver calendario</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

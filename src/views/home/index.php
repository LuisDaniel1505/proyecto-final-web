<main class="grow">
  <header class="relative bg-cover bg-center bg-no-repeat text-center py-16 px-4" style="background-image: url('<?= ASSETS_PATH ?>/img/estadio.jpg');">
    <div class="absolute inset-0 bg-black/60 z-10"></div>
    <div class="relative z-20 py-16 px-4 text-white">
      <h1 class="text-4xl md:text-5xl font-bold mb-4">Imperio Azul Noticias</h1>
      <p class="text-gray-200 text-lg mb-6">Toda la pasión de Cruz Azul, en un solo lugar</p>
      <a href="<?= BASE_PATH ?>/news" class="btn btn-primary">Ver noticias exclusivas de cruz azul</a>
    </div>
  </header>


  <section class="bg-base-100 py-16">
    <div class="max-w-7xl mx-auto px-6">
      <!-- Sobre el Club -->
      <section aria-label="Introducción e historia del club" class="py-12 md:py-16">
        <div class="md:grid md:grid-cols-12 md:gap-8 items-start">
          <div class="md:col-span-7">
            <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-base-content mb-4">Historia de Cruz Azul</h2>
            <p class="text-base-content/80 leading-relaxed mb-6">
              Fundado a mediados del siglo XX, Cruz Azul evolucionó de un equipo de empresa a una de las instituciones
              más emblemáticas del fútbol mexicano. A lo largo de su historia, ha cosechado títulos, forjado ídolos y
              marcado generaciones de aficionados con su carácter competitivo y un estilo de juego que combina mística
              y entrega. Su identidad se entrelaza con grandes noches internacionales y memorables finales en el ámbito local.
            </p>

            <div class="flex flex-wrap gap-2 mb-6">
              <span class="badge badge-primary badge-lg">Fundación • 1927</span>
              <span class="badge badge-secondary badge-lg">Estadio • Ciudad de México</span>
              <span class="badge badge-accent badge-lg">Afición • La Máquina</span>
            </div>
          </div>

          <div class="md:col-span-5 mt-8 md:mt-0">
            <figure class="card card-bordered shadow-sm rounded-2xl overflow-hidden bg-base-100">
              <img
                src="<?= ASSETS_PATH ?>/img/estadio.jpg"
                alt="Fotografía histórica del Club Cruz Azul"
                class="h-64 w-full object-cover"
                onerror="this.src='<?= ASSETS_PATH ?>/img/placeholder-16x9.jpg'; this.alt='Imagen ilustrativa del club';"
              />
            </figure>
          </div>
        </div>
      </section>

      <div class="divider my-0"></div>

      <!-- Línea de Tiempo -->
      <section aria-label="Línea de tiempo de hitos históricos" class="py-12 md:py-16">
        <h3 class="text-3xl md:text-4xl font-bold tracking-tight text-base-content mb-8">Hitos históricos</h3>
        <div class="relative">
          <div class="hidden lg:block absolute left-1/2 -translate-x-1/2 top-0 bottom-0 w-px bg-base-300"></div>

          <ul class="space-y-8">

            <li class="lg:grid lg:grid-cols-2 lg:gap-8">
              <div class="lg:col-start-1 lg:pr-12">
                <div class="flex items-start gap-4">
                    <span class="step step-primary text-primary font-extrabold text-2xl">1</span>
                  <div class="card bg-base-100 card-bordered rounded-2xl shadow-sm w-full">
                    <div class="card-body p-5">
                      <h4 class="font-bold text-base-content">1927 • Fundación</h4>
                      <p class="text-base-content/80">Nacimiento del equipo en la Cooperativa La Cruz Azul, dando inicio a una tradición deportiva.</p>
                    </div>
                  </div>
                </div>
              </div>
            </li>

            <li class="lg:grid lg:grid-cols-2 lg:gap-8">
              <div class="lg:col-start-2 lg:pl-12">
                <div class="flex items-start gap-4">
                  <span class="step step-primary text-primary font-extrabold text-2xl">2</span>
                  <div class="card bg-base-100 card-bordered rounded-2xl shadow-sm w-full">
                    <div class="card-body p-5">
                      <h4 class="font-bold text-base-content">1964 • Ascenso</h4>
                      <p class="text-base-content/80">El club alcanza la Primera División, marcando el comienzo de una nueva era competitiva.</p>
                    </div>
                  </div>
                </div>
              </div>
            </li>

            <li class="lg:grid lg:grid-cols-2 lg:gap-8">
              <div class="lg:col-start-1 lg:pr-12">
                <div class="flex items-start gap-4">
                  <span class="step step-primary text-primary font-extrabold text-2xl">3</span>
                  <div class="card bg-base-100 card-bordered rounded-2xl shadow-sm w-full">
                    <div class="card-body p-5">
                      <h4 class="font-bold text-base-content">1970s • Dinastía</h4>
                      <p class="text-base-content/80">Década dorada con múltiples campeonatos de liga y consolidación como potencia nacional.</p>
                    </div>
                  </div>
                </div>
              </div>
            </li>

            <li class="lg:grid lg:grid-cols-2 lg:gap-8">
              <div class="lg:col-start-2 lg:pl-12">
                <div class="flex items-start gap-4">
                  <span class="step step-primary text-primary font-extrabold text-2xl">4</span>
                  <div class="card bg-base-100 card-bordered rounded-2xl shadow-sm w-full">
                    <div class="card-body p-5">
                      <h4 class="font-bold text-base-content">1997 • Época inolvidable</h4>
                      <p class="text-base-content/80">Título de liga con un cierre dramático, quedando grabado en la memoria celeste.</p>
                    </div>
                  </div>
                </div>
              </div>
            </li>

            <li class="lg:grid lg:grid-cols-2 lg:gap-8">
              <div class="lg:col-start-1 lg:pr-12">
                <div class="flex items-start gap-4">
                  <span class="step step-primary text-primary font-extrabold text-2xl">5</span>
                  <div class="card bg-base-100 card-bordered rounded-2xl shadow-sm w-full">
                    <div class="card-body p-5">
                      <h4 class="font-bold text-base-content">2014 • Alcance internacional</h4>
                      <p class="text-base-content/80">Participaciones constantes en Concacaf y torneos internacionales elevan el prestigio del club.</p>
                    </div>
                  </div>
                </div>
              </div>
            </li>

            <li class="lg:grid lg:grid-cols-2 lg:gap-8">
              <div class="lg:col-start-2 lg:pl-12">
                <div class="flex items-start gap-4">
                  <span class="step step-primary text-primary font-extrabold text-2xl">6</span>
                  <div class="card bg-base-100 card-bordered rounded-2xl shadow-sm w-full">
                    <div class="card-body p-5">
                      <h4 class="font-bold text-base-content">2021 • Nuevo campeonato</h4>
                      <p class="text-base-content/80">La ansiada estrella llega con un equipo sólido y una afición inquebrantable.</p>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>

      <div class="divider my-0"></div>

      <!-- Palmarés  -->
      <section aria-label="Palmarés del club" class="py-12 md:py-16">
        <h3 class="text-3xl md:text-4xl font-bold tracking-tight text-base-content mb-8">Palmarés</h3>

        <!-- Estadisticas -->
        <div class="stats shadow-sm bg-base-100 rounded-2xl w-full mb-8">
          <div class="stat" data-tip="Campeonatos de liga en la era profesional" class="tooltip">
            <div class="stat-title">Títulos de Liga</div>
            <div class="stat-value text-primary">9</div>
            <div class="stat-desc">Último: 2021</div>
          </div>
          <div class="stat" data-tip="Copas domésticas ganadas" class="tooltip">
            <div class="stat-title">Copas</div>
            <div class="stat-value text-primary">4</div>
            <div class="stat-desc">Nacionales</div>
          </div>
          <div class="stat" data-tip="Concacaf Champions y equivalentes" class="tooltip">
            <div class="stat-title">Concacaf</div>
            <div class="stat-value text-primary">6</div>
            <div class="stat-desc">Trascendencia regional</div>
          </div>
          <div class="stat hidden md:flex" data-tip="Subcampeonatos en torneos mayores" class="tooltip">
            <div class="stat-title">Finales disputadas</div>
            <div class="stat-value">15+</div>
            <div class="stat-desc">Historial competitivo</div>
          </div>
        </div>

        <!-- Grid de Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

          <article class="card card-bordered bg-base-100 rounded-2xl shadow-sm">
            <div class="card-body">
              <div class="flex items-center justify-between">
                <h4 class="card-title">Liga MX</h4>
                <span class="badge badge-primary">9 títulos</span>
              </div>
              <p class="text-base-content/80">Años destacados: 1971-77, 1997, 2021.</p>
            </div>
          </article>

          <article class="card card-bordered bg-base-100 rounded-2xl shadow-sm">
            <div class="card-body">
              <div class="flex items-center justify-between">
                <h4 class="card-title">Copa MX</h4>
                <span class="badge badge-primary">4 títulos</span>
              </div>
              <p class="text-base-content/80">Años destacados: 1969, 1997, 2013, 2018.</p>
            </div>
          </article>

          <article class="card card-bordered bg-base-100 rounded-2xl shadow-sm">
            <div class="card-body">
              <div class="flex items-center justify-between">
                <h4 class="card-title ">Concacaf</h4>
                <span class="badge badge-primary">6 títulos</span>
              </div>
              <p class="text-base-content/80">Años destacados: 1969-71, 1996-97, 2014.</p>
            </div>
          </article>
        </div>
      </section>

      <div class="divider my-0"></div>

      <!-- Momentos Destacados -->
      <section aria-label="Momentos destacados del club" class="py-12 md:py-16">
        <h3 class="text-3xl md:text-4xl font-bold tracking-tight text-base-content mb-8">Momentos destacados</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

          <a class="card image-full rounded-2xl overflow-hidden group">
            <figure>
              <img src="<?= ASSETS_PATH ?>/img/dinastia.jpg" alt="Momento destacado 1"
                  class="object-cover w-full h-60"
                  onerror="this.src='<?= ASSETS_PATH ?>/img/estadio.jpg';"/>
            </figure>
            <div class="card-body justify-end bg-linear-to-t from-black/60 to-transparent">
              <span class="badge badge-primary w-fit">1970s</span>
              <h4 class="card-title">Dinastía cementera</h4>
              <p class="opacity-90">Secuencia de campeonatos que definió una era.</p>
            </div>
          </a>

          <a class="card image-full rounded-2xl overflow-hidden group">
            <figure>
              <img src="<?= ASSETS_PATH ?>/img/victoria_concacaf_1997.jpg" alt="Momento destacado 2"
                  class="object-cover w-full h-60"
                  onerror="this.src='<?= ASSETS_PATH ?>/img/estadio.jpg';"/>
            </figure>
            <div class="card-body justify-end bg-linear-to-t from-black/60 to-transparent">
              <span class="badge badge-primary w-fit">1997</span>
              <h4 class="card-title">Título inolvidable</h4>
              <p class="opacity-90">Una final con sello dramático y eterno recuerdo.</p>
            </div>
          </a>

          <a class="card image-full rounded-2xl overflow-hidden group">
            <figure>
              <img src="<?= ASSETS_PATH ?>/img/copa_libertadores.jpg" alt="Momento destacado 3"
                  class="object-cover w-full h-60"
                  onerror="this.src='<?= ASSETS_PATH ?>/img/estadio.jpg';"/>
            </figure>
            <div class="card-body justify-end bg-linear-to-t from-black/60 to-transparent">
              <span class="badge badge-primary w-fit">2001</span>
              <h4 class="card-title">Hazaña continental</h4>
              <p class="opacity-90">Carrera internacional que llevó el nombre a lo más alto.</p>
            </div>
          </a>

          <a class="card image-full rounded-2xl overflow-hidden group">
            <figure>
              <img src="<?= ASSETS_PATH ?>/img/copaMX.jpg" alt="Momento destacado 4"
                  class="object-cover w-full h-60"
                  onerror="this.src='<?= ASSETS_PATH ?>/img/estadio.jpg';"/>
            </figure>
            <div class="card-body justify-end bg-linear-to-t from-black/60 to-transparent">
              <span class="badge badge-primary w-fit">2018</span>
              <h4 class="card-title">Copa MX</h4>
              <p class="opacity-90">Un nuevo trofeo para la vitrina cementera.</p>
            </div>
          </a>

          <a class="card image-full rounded-2xl overflow-hidden group">
            <figure>
              <img src="<?= ASSETS_PATH ?>/img/la_novena.jpg" alt="Momento destacado 5"
                  class="object-cover w-full h-60"
                  onerror="this.src='<?= ASSETS_PATH ?>/img/estadio.jpg';"/>
            </figure>
            <div class="card-body justify-end bg-linear-to-t from-black/60 to-transparent">
              <span class="badge badge-primary w-fit">2021</span>
              <h4 class="card-title">La Novena</h4>
              <p class="opacity-90">Triunfo que unió a generaciones de aficionados.</p>
            </div>
          </a>

          <a class="card image-full rounded-2xl overflow-hidden group">
            <figure>
              <img src="<?= ASSETS_PATH ?>/img/cruz_azul_actual.jpg" alt="Momento destacado 6"
                  class="object-cover w-full h-60"
                  onerror="this.src='<?= ASSETS_PATH ?>/img/estadio.jpg';"/>
            </figure>
            <div class="card-body justify-end bg-linear-to-t from-black/60 to-transparent">
              <span class="badge badge-primary w-fit">Actualidad</span>
              <h4 class="card-title">Proyección y futuro</h4>
              <p class="opacity-90">Plantilla competitiva y metas renovadas.</p>
            </div>
          </a>
        </div>
      </section>

      <div class="divider my-0"></div>

      <!-- Jugadores leyenda -->
      <section aria-label="Jugadores emblemáticos" class="py-12 md:py-16">
        <h3 class="text-3xl md:text-4xl font-bold tracking-tight text-base-content mb-8">Jugadores emblemáticos</h3>
        <div class="space-y-4">
          <!-- jugador -->
          <article class="card card-bordered bg-base-100 rounded-2xl shadow-sm">
            <div class="card-body p-5">
              <div class="flex items-center gap-4">
                <img src="<?= ASSETS_PATH ?>/img/horacio_lopez.jpg" alt="Retrato de jugador emblemático"
                    class="w-16 h-16 rounded-full object-cover"
                    onerror="this.src='<?= ASSETS_PATH ?>/img/benjamin_galindo.jpeg';"/>
                <div class="flex-1">
                  <div class="flex items-center gap-2">
                    <h4 class="font-semibold">Horacio López</h4>
                    <span class="badge badge-outline">Leyenda</span>
                  </div>
                  <p class="text-sm text-base-content/70">Delantero • 1972-1978</p>
                  <p class="text-base-content/80 mt-1">Goleador decisivo en campañas de título y referente de la afición.</p>
                </div>
              </div>
            </div>
          </article>

          <article class="card card-bordered bg-base-100 rounded-2xl shadow-sm">
            <div class="card-body p-5">
              <div class="flex items-center gap-4">
                <img src="<?= ASSETS_PATH ?>/img/benjamin_galindo.jpeg" alt="Retrato de jugador emblemático"
                    class="w-16 h-16 rounded-full object-cover"
                    onerror="this.src='<?= ASSETS_PATH ?>/img/benjamin_galindo.jpeg';"/>
                <div class="flex-1">
                  <div class="flex items-center gap-2">
                    <h4 class="font-semibold">Benjamín Galindo</h4>
                    <span class="badge badge-outline">Leyenda</span>
                  </div>
                  <p class="text-sm text-base-content/70">Mediocampista • 1994-2002</p>
                  <p class="text-base-content/80 mt-1">Motor del medio campo, liderazgo y entrega en momentos clave.</p>
                </div>
              </div>
            </div>
          </article>

          <article class="card card-bordered bg-base-100 rounded-2xl shadow-sm">
            <div class="card-body p-5">
              <div class="flex items-center gap-4">
                <img src="<?= ASSETS_PATH ?>/img/chaco_gimenez.jpg" alt="Retrato de jugador emblemático"
                    class="w-16 h-16 rounded-full object-cover"
                    onerror="this.src='<?= ASSETS_PATH ?>/img/goleador.png';"/>
                <div class="flex-1">
                  <div class="flex items-center gap-2">
                    <h4 class="font-semibold">"Chaco" Gimenez</h4>
                    <span class="badge badge-outline">Leyenda</span>
                  </div>
                  <p class="text-sm text-base-content/70">Defensa • 2010-2019</p>
                  <p class="text-base-content/80 mt-1">Solidez defensiva y liderazgo en torneos locales e internacionales.</p>
                </div>
              </div>
            </div>
          </article>
        </div>
      </section>

      <div class="divider my-0"></div>

      <!-- Mas datos -->
      <section aria-label="Datos rápidos del club" class="py-12 md:py-16">
        <h3 class="text-3xl md:text-4xl font-bold tracking-tight text-base-content mb-8">Datos rápidos</h3>
        <div class="stats bg-base-100 shadow-sm rounded-2xl w-full">
          <div class="stat tooltip" data-tip="Desde su fundación hasta la fecha">
            <div class="stat-title">Años de historia</div>
            <div class="stat-value text-primary">95+</div>
            <div class="stat-desc">Tradición y legado</div>
          </div>
          <div class="stat tooltip" data-tip="Suma de campeonatos oficiales">
            <div class="stat-title">Trofeos totales</div>
            <div class="stat-value text-primary">20+</div>
            <div class="stat-desc">Vitrina celeste</div>
          </div>
          <div class="stat tooltip" data-tip="Definiciones por el título">
            <div class="stat-title">Finales disputadas</div>
            <div class="stat-value text-primary">15+</div>
            <div class="stat-desc">Experiencia competitiva</div>
          </div>
          <div class="stat tooltip" data-tip="Afición estimada a nivel nacional">
            <div class="stat-title">Aficionados</div>
            <div class="stat-value">100 Millones</div>
            <div class="stat-desc">Presencia nacional</div>
          </div>
        </div>
      </section>

      <div class="divider my-0"></div>

      <!-- a Noticias -->
      <section aria-label="Llamado a la acción hacia noticias y calendario" class="py-12 md:py-16">
        <div class="card bg-base-200 card-bordered rounded-2xl shadow-sm">
          <div class="card-body md:flex md:items-center md:justify-between gap-6">
            <div>
              <h3 class="text-2xl md:text-3xl font-bold tracking-tight text-base-content">Sigue la actualidad celeste</h3>
              <p class="text-base-content/80 mt-2">Entrevistas, crónicas y análisis con el pulso de la Máquina.</p>
            </div>
            <div class="flex flex-col sm:flex-row gap-3 mt-4 md:mt-0">
              <a href="<?= BASE_PATH ?>/news" class="btn btn-primary">Ir a Noticias</a>
            </div>
          </div>
        </div>
      </section>

      <div class="divider my-0"></div>

      <!-- Preguntas y respuestas -->
      <section aria-label="Preguntas frecuentes" class="py-12 md:py-16">
        <h3 class="text-3xl md:text-4xl font-bold tracking-tight text-base-content mb-6">Preguntas frecuentes</h3>
        <div class="space-y-3">
          <div class="collapse collapse-arrow bg-base-100 border border-base-300 rounded-2xl">
            <input type="checkbox" />
            <div class="collapse-title text-base-content font-medium">¿Cuándo y dónde se fundó el club?</div>
            <div class="collapse-content text-base-content/80">
              <p>La institución surge en el siglo XX ligada a la Cooperativa La Cruz Azul, con sede en México.</p>
            </div>
          </div>

          <div class="collapse collapse-arrow bg-base-100 border border-base-300 rounded-2xl">
            <input type="checkbox" />
            <div class="collapse-title text-base-content font-medium">¿Cuántos títulos de liga tiene Cruz Azul?</div>
            <div class="collapse-content text-base-content/80">
              <p>Cuenta con múltiples campeonatos en su palmarés, incluyendo una conquista reciente en 2021.</p>
            </div>
          </div>

          <div class="collapse collapse-arrow bg-base-100 border border-base-300 rounded-2xl">
            <input type="checkbox" />
            <div class="collapse-title text-base-content font-medium">¿Cuál es su estadio actual?</div>
            <div class="collapse-content text-base-content/80">
              <p>El club ha disputado sus partidos como local en recintos de gran tradición en la Ciudad de México.</p>
            </div>
          </div>

          <div class="collapse collapse-arrow bg-base-100 border border-base-300 rounded-2xl">
            <input type="checkbox" />
            <div class="collapse-title text-base-content font-medium">¿Cómo adquirir boletos o abonos?</div>
            <div class="collapse-content text-base-content/80">
              <p>Consulta los canales oficiales del club para fechas, fases de venta y recomendaciones de acceso.</p>
            </div>
          </div>

          <div class="collapse collapse-arrow bg-base-100 border border-base-300 rounded-2xl">
            <input type="checkbox" />
            <div class="collapse-title text-base-content font-medium">¿Dónde puedo seguir noticias y comunidad?</div>
            <div class="collapse-content text-base-content/80">
              <p>Explora la sección de <a href="<?= BASE_PATH ?>/news" class="link link-primary">Noticias</a> y los espacios sociales del club para contenidos y actividades.</p>
            </div>
          </div>
        </div>
      </section>

    </div>
  </section>
</main>
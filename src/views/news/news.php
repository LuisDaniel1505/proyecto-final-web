<?php 
require __DIR__.'/layouts/header.php'
?>
<main class="min-h-screen text-gray-800 mt-20">

    <section class="max-w-6xl mx-auto px-4 py-8 lg:py-12 lg:grid lg:grid-cols-[1.8fr,1fr] lg:gap-10">

        <article class="space-y-6">

            <div class="relative overflow-hidden rounded-3xl border border-blue-800 bg-white shadow-xl">

                <div class="absolute -top-10 -right-16 w-40 h-40 rounded-full bg-blue-300/20 blur-3xl"></div>
                <div class="absolute -bottom-16 -left-10 w-40 h-40 rounded-full bg-red-300/20 blur-3xl"></div>

                <div class="grid md:grid-cols-[1.2fr,1.3fr] gap-0">

                    <figure class="relative max-h-80 overflow-hidden">
                        <img src="<?=ASSETS_PATH?>/img/<?=$noticias['image']?>"
                             alt="Gonzalo Piovi en Cruz Azul"
                             class="w-full h-full object-cover hover:scale-105 transition duration-700">
                        <div class="absolute inset-0 bg-linear-to-t from-blue-950/60 via-blue-950/10 to-transparent"></div>

                        <div class="absolute bottom-3 left-3">
                            <span class="badge badge-primary badge-lg">
                                Exclusiva Imperio Azul
                            </span>
                        </div>
                    </figure>

                    <div class="p-5 md:p-7 flex flex-col gap-4">

                        <div class="flex items-center gap-2 text-xs uppercase tracking-[0.25em] text-blue-700">
                            <span class="h-px w-6 bg-blue-600"></span>
                            Noticia destacada
                        </div>

                        <h1 class="text-2xl md:text-3xl font-extrabold leading-tight text-blue-900">
                            Hipotética salida de Gonzalo Piovi de Cruz Azul
                        </h1>

                        <p class="text-sm text-gray-700">
                            La posible marcha de Piovi abre un debate fuerte en La Noria:
                            ¿pierde Cruz Azul a un líder defensivo o inicia una nueva etapa?
                        </p>

                        <div class="mt-2 space-y-3 text-xs text-gray-600">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-blue-200 flex items-center justify-center">
                                    <span class="material-symbols-outlined text-base text-blue-900">
                                    
                                    </span>
                                </div>
                                <div>
                                    <p class="font-semibold text-blue-900 text-sm">
                                        Ángel Baltazar Sepúlveda
                                    </p>
                                    <p class="text-[11px] uppercase tracking-[0.18em] text-gray-500">
                                        Redacción Imperio Azul
                                    </p>
                                </div>
                            </div>

                            <div class="flex flex-wrap gap-3 text-[11px]">
                                <span class="badge badge-xs badge-outline border-blue-600/50 text-blue-700">
                                    Publicado: 20/06/2024
                                </span>
                                <span class="badge badge-xs badge-outline border-gray-400 text-gray-600">
                                    Lectura: 4 min
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="rounded-3xl bg-white border border-gray-300 p-6 md:p-8 space-y-6 shadow-lg">

                <div class="inline-flex items-center gap-2 text-[11px] uppercase tracking-[0.25em] text-gray-500 mb-1">
                    <span class="w-5 h-px bg-gray-400"></span>
                    Opinión táctica
                </div>

                <div class="prose max-w-none prose-headings:text-blue-900 prose-p:text-gray-700">

                    <p>
                        La <strong>hipotética salida de Gonzalo Piovi de Cruz Azul</strong> ha comenzado a generar
                        incertidumbre entre aficionados y cuerpo técnico. El defensor argentino llegó como refuerzo
                        clave para la zaga y rápidamente se volvió pieza fundamental por su liderazgo y orden defensivo.
                    </p>

                    <h2>Relevancia en la defensa</h2>
                    <p>
                        Piovi ha sido sólido en el mano a mano, con buena lectura de juego y capacidad para anticipar
                        jugadas. Su presencia no solo aportaba estabilidad, sino un liderazgo necesario en la línea baja.
                    </p>

                    <h2>Consecuencias para el equipo</h2>
                    <p>
                        De confirmarse su salida, Cruz Azul deberá decidir entre un refuerzo extranjero de experiencia o
                        apostar por talento joven. La defensa podría resentirlo en un torneo donde cada gol recibido pesa.
                    </p>

                    <h2>Conclusión</h2>
                    <p>
                        Su salida sería un golpe futbolístico y anímico. El club tendrá que demostrar capacidad para
                        reinventarse y mantener la ambición de competir por los primeros lugares.
                    </p>
                </div>

                <div class="pt-4 flex flex-col sm:flex-row sm:items-center gap-4 justify-between">
                    <a href="<?=SRC_PATH?>/../public/index.php"
                       class="btn btn-primary btn-wide rounded-full border-0 text-white bg-blue-700 hover:bg-blue-800">
                        ← Volver al listado de noticias
                    </a>

                    <div class="flex flex-wrap gap-2 text-[11px] text-gray-600">
                        <span class="badge badge-outline badge-xs border-gray-400">
                            #CruzAzul
                        </span>
                        <span class="badge badge-outline badge-xs border-gray-400">
                            #Defensa
                        </span>
                        <span class="badge badge-outline badge-xs border-gray-400">
                            #Piovi
                        </span>
                    </div>
                </div>

            </div>

        </article>

        <aside class="mt-10 lg:mt-0 space-y-4">

            <div class="flex items-center justify-between mb-2">
                <h2 class="text-sm font-semibold tracking-[0.18em] uppercase text-blue-900">
                    Más noticias celestes
                </h2>
                <span class="text-[11px] text-gray-500">
                    Actualizado hoy
                </span>
            </div>

            <div class="space-y-3">

                <div
                    class="card card-side bg-white border border-gray-300 hover:border-blue-600 transition">
                    <figure class="w-28 h-24 overflow-hidden">
                        <img src="<?=ASSETS_PATH?>/img/<?=$noticias['image']?>" class="w-full h-full object-cover">
                    </figure>

                    <div class="card-body p-3 pr-4">
                        <h3 class="text-xs font-semibold text-blue-900">
                            Calendario oficial Clausura 2025
                        </h3>
                        <p class="text-[11px] text-gray-600 line-clamp-2">
                            Cruz Azul conoce fechas y partidos clave para el Clausura 2025.
                        </p>
                        <div class="card-actions justify-end mt-1">
                            <button class="btn btn-xs btn-outline btn-primary rounded-full">
                                Ver más
                            </button>
                        </div>
                    </div>
                </div>

                <div
                    class="card card-side bg-white border border-gray-300 hover:border-blue-600 transition">
                    <figure class="w-28 h-24 overflow-hidden">
                        <img src="<?=ASSETS_PATH?>/img/goleador.png" class="w-full h-full object-cover">
                    </figure>

                    <div class="card-body p-3 pr-4">
                        <h3 class="text-xs font-semibold text-blue-900">
                            Ángel Sepúlveda, el hombre gol
                        </h3>
                        <p class="text-[11px] text-gray-600 line-clamp-2">
                            El delantero cementero lidera la tabla de goleo del torneo.
                        </p>
                        <div class="card-actions justify-end mt-1">
                            <button class="btn btn-xs btn-outline btn-primary rounded-full">
                                Ver más
                            </button>
                        </div>
                    </div>
                </div>

                <div
                    class="card card-side bg-white border border-gray-300 hover:border-blue-600 transition">
                    <figure class="w-28 h-24 overflow-hidden">
                        <img src="<?=ASSETS_PATH?>/img/<?=$noticias['image']?>" class="w-full h-full object-cover">
                    </figure>

                    <div class="card-body p-3 pr-4">
                        <h3 class="text-xs font-semibold text-blue-900">
                            Avances del nuevo estadio celeste
                        </h3>
                        <p class="text-[11px] text-gray-600 line-clamp-2">
                            Actualizaciones sobre el proyecto que marcará una nueva era azul.
                        </p>
                        <div class="card-actions justify-end mt-1">
                            <button class="btn btn-xs btn-outline btn-primary rounded-full">
                                Ver más
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </aside>

    </section>

</main>
<?php require __DIR__.'/layouts/footer.php'; ?>
</body> 
</html>
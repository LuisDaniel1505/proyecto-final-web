<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="color-scheme" content="light">
  <title>Cruz Azul Noticias</title>
  <link href="<?=BASE_PATH?>/output.css" rel="stylesheet">
</head>
<div class="flex items-center justify-center mt-12 mb-12">
    <div class="w-full max-w-lg bg-white p-8 md:p-10 ">
        <?php if(isset($error)): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <strong class="font-bold">Error:</strong>
                <span class="block sm:inline"><?= $error ?></span>
            </div>
        <?php endif; ?>
        <form method="POST"
            action="<?=  BASE_PATH ?>/signUp"
            class="bg-white p-6 rounded-lg shadow-md w-full max-w-xl">

            <h1 class="text-xl font-bold text-blue-800 text-center pb-5">Crear Cuenta</h1>

            <label class="block text-gray-700 font-medium">Nombre completo</label>
            <input type="text"
                name="nombre_completo"
                placeholder="Alonso Gonzalez"
                required
                class="mt-1 w-full border border-gray-300 rounded-md p-2 focus:border-blue-900 outline-none"
                value="<?= htmlspecialchars($fill['nombre_completo'] ?? '') ?>">
                
            <label class="block mt-4 text-gray-700 font-medium">Correo electrónico</label>
            <input type="email"
                name="email"
                placeholder="ejemplo@gmail.com"
                required
                class="mt-1 w-full border border-gray-300 rounded-md p-2 focus:border-blue-900 outline-none"
                value="<?= htmlspecialchars($fill['email'] ?? '') ?>">

            <label class="block mt-4 text-gray-700 font-medium">Celular</label>
            <input type="tel"
                name="celular"
                placeholder="123 456 7891"
                class="mt-1 w-full border border-gray-300 rounded-md p-2 focus:border-blue-900 outline-none"
                value="<?= htmlspecialchars($fill['celular'] ?? '') ?>">

            <label class="block mt-4 text-gray-700 font-medium">Contraseña</label>
            <input type="password"
                name="password"
                required
                placeholder="Mínimo 8 caracteres"
                minlength="8"
                class="mt-1 w-full border border-gray-300 rounded-md p-2 focus:border-blue-900 outline-none">

            <label class="block mt-4 text-gray-700 font-medium">Confirmar Contraseña</label>
            <input type="password"
                name="confirmar"
                required
                class="mt-1 w-full border border-gray-300 rounded-md p-2 focus:border-blue-900 outline-none">

            <div class="flex justify-center gap-3">
                <a href="<?= BASE_PATH ?>/login"
                    class="mt-5 bg-gray-500 text-white px-5 py-2 rounded-md hover:bg-gray-600 transition">
                    Cancelar
                </a>
                <button type="submit"
                    class="mt-5 bg-blue-800 text-white px-5 py-2 rounded-md hover:bg-blue-900 transition">
                    Registar
                </button>
            </div>
        </form>

        <p class="text-center text-sm mt-6 text-gray-500">
            ¿Ya tienes una cuenta? <a href="<?= BASE_PATH ?>/login" class="text-blue-600 hover:underline font-medium">Inicia Sesión aquí</a>
        </p>
    </div>
</div>

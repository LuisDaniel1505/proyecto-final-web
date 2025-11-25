<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="flex items-center justify-center mt-12 mb-12 pt-20">
    <div class="flex flex-col bg-white shadow-xl">

      <form method="POST"
        enctype="multipart/form-data"
        class="bg-white p-6 rounded-lg shadow-md w-full max-w-xl">

        <h1 class="text-xl font-bold text-blue-800 text-center pb-5">Nueva noticia</h1>

        <label class="block text-gray-700 font-medium">Título de la noticia</label>
        <input type="text"
          name="title"
          required
          class="mt-1 w-full border border-gray-300 rounded-md p-2 focus:border-blue-900 outline-none">

        <div class="flex mt-4 justify-between">
          <div>
            <label class="block text-gray-700 font-medium">Fecha</label>
            <input type="date" name="fecha" required value="<?= $newsItem->fecha ?? date('Y-m-d') ?>"
              class="mt-1 w- border border-gray-300 rounded-md p-2 focus:border-blue-900 outline-none">
          </div>
          <div>
            <label class="block text-gray-700 font-medium">Duración</label>
            <input type="text"
            name="title"
          required
          class="mt-1 w-full border border-gray-300 rounded-md p-2 focus:border-blue-900 outline-none">
          </div>
        </div>

        <label class="block mt-4 text-gray-700 font-medium">Entradilla</label>
        <textarea name="lead"
          required
          class="mt-1 w-full border border-gray-300 rounded-md p-2 h-15 resize-none focus:border-blue-900 outline-none"></textarea>

        <label class="block mt-4 text-gray-700 font-medium">Cuerpo</label>
        <textarea name="body"
          required
          class="mt-1 w-full border border-gray-300 rounded-md p-2 h-25 resize-none focus:border-blue-900 outline-none"></textarea>

        <label class="block mt-4 text-gray-700 font-medium">Imagen (opcional)</label>
        <input type="file"
          name="image"
          accept="image/*"
          class="mt-1 w-full border border-gray-300 rounded-md p-2 bg-white cursor-pointer focus:ring-blue-900 focus:border-blue-900 outline-none">

        <button type="submit"
          class="mt-5 bg-blue-800 text-white px-5 py-2 rounded-md hover:bg-blue-900 transition">
          <p>Guardar</p>
        </button>

      </form>
    </div>
  </div>
</body>

</html>
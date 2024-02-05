<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>World Rowing - Home</title>
  <!-- Responsive meta tag -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="./assets/styles.css">
</head>

<body>

  <!-- Navegación -->
  <header
    class="bg-white dark:bg-gray-900 sticky top-0 w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="./assets/images/logo.png" class="h-10" alt="Flowbite Logo">
      </a>
      <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
        <button type="button"
          class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get
          started</button>
        <button data-collapse-toggle="navbar-sticky" type="button"
          class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
          aria-controls="navbar-sticky" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M1 1h15M1 7h15M1 13h15" />
          </svg>
        </button>
      </div>
      <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
        <ul class="flex flex-col p-4 mt-4 md:flex-row md:space-x-8 md:mt-0 bg-white dark:bg-gray-900">
          <li>
            <a href="/"
              class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-blue-500"
              aria-current="page">Inicio</a>
          </li>
          <li>
            <a href="resultados.php"
              class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white">Resultados</a>
          </li>
          <li>
            <a href="deportistas.php"
              class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white">Deportistas</a>
          </li>

          <li>
            <a href="contacto.php"
              class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white">Contacto</a>
          </li>
          <li>
            <a href="mantenimiento.php"
              class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white">Mantenimiento</a>
          </li>

        </ul>
      </div>

    </div>
  </header>


  <!-- Contenido Principal -->
  <main>
    <section class="bg-[#111827cc] relative h-[60vh] mb-10">
      <?php
      $title = 'We invest in the world’s potential';
      $subtitle = 'Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.';
      $imgSrc = 'assets/images/rowing.webp';
      $imgAlt = 'rowing hero image';
      include 'components/header.php';
      ?>
    </section>
    <section class="max-w-6xl mx-auto py-20 px-5 md:px-0">
      <?php include 'components/content.php'; ?>
    </section>
    <section class="max-w-6xl mx-auto py-20 px-5 md:px-0">
      <h2 class='text-4xl mb-4 font-bold'>Ultimas noticias</h2>
      <div class='flex flex-col md:flex-row'>
        <?php include 'components/noticia.php'; ?>
        <?php include 'components/noticia.php'; ?>
        <?php include 'components/noticia.php'; ?>
      </div>
    </section>
    <!-- Otros componentes o secciones -->
  </main>

  <!-- Footer -->
  <footer class="bg-gray-300 text-center p-4 mt-10">
    <p>By Rodrigo Mahamud &copy; 2024</p>
  </footer>

</body>

<script src="https://unpkg.com/@studio-freight/lenis@1.0.34/dist/lenis.min.js"></script>
<script>
  const lenis = new Lenis()

  lenis.on('scroll', (e) => {

  })

  function raf(time) {
    lenis.raf(time)
    requestAnimationFrame(raf)
  }

  requestAnimationFrame(raf)
</script>

</html>
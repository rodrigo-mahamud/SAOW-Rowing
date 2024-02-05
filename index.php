<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>World Rowing - Home</title>
  <!-- Responsive meta tag -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="./assets/styles.css">
</head>

<body>

  <!-- Navegación -->
  <header
    class="bg-white dark:bg-gray-900 sticky top-0 w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
    <?php include 'components/navMenu.php'; ?>
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
      <?php include 'components/noticia.php'; ?>
    </section>
    <!-- Otros componentes o secciones -->
  </main>

  <!-- Footer -->
  <?php include 'components/footer.php'; ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
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
</body>

</html>
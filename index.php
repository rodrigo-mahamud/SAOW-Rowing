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
      $title = 'Zeidler, y un premio de World Rowing';
      $subtitle = 'No cabe duda del talento fenomenal de Olli Zeidler de Alemania y acaba de añadir otra cuerda a su arco al ser nombrado el Equipo Masculino del Año 2023 por World Rowing.';
      $imgSrc = 'assets/images/rowing.webp';
      $imgAlt = 'rowing hero image';
      include 'components/header.php';
      ?>
    </section>
    <section class="max-w-6xl mx-auto py-20 px-5 md:px-0">
      <?php include 'components/content.php'; ?>
    </section>
    <section class="max-w-6xl mx-auto py-20 px-5 md:px-0">
      <?php
      $titulo = "Últimas noticias";
      $subtitulo = "Descubre las últimas novedades del campeonato de remo";
      $textoBoton = "Añadir Noticia";
      $noticias = [
        ['imgSrc' => './assets/images/image-1.jpg', 'imgAlt' => 'Imagen de noticia 1', 'title' => '2024 World Rowing Cup I', 'body' => 'The 2024 World Rowing Cup I will be hosted 12-14 April in Varese, Italy. This will be the first event of the 2024 World Cup Series.The World Rowing Cups are an annual series of three regattas that act as a lead-up to the World Rowing Championships. World Rowing Cups are held over three days with a progression system from heats through to finals. Racing at the World'],
        ['imgSrc' => './assets/images/image-2.jpg', 'imgAlt' => 'Imagen de noticia 2', 'title' => '2024 World Rowing Cup II', 'body' => 'The World Rowing Cup is an annual series of three regattas that act as a lead-up to the World Rowing Championships. World Rowing Cups are held over three days with a progression system from heats through to finals. Racing at the World Rowing Cup includes the 14 Olympic boat classes and a selection of International boat classes. Para-rowing is contested at some '],
        ['imgSrc' => './assets/images/image-3.jpg', 'imgAlt' => 'Imagen de noticia 3', 'title' => '2024 World Rowing Cup III', 'body' => 'The 2024 World Rowing Cup III will be hosted 14-16 June in Poznan, Poland. This will be the third and last event of the 2024 World Cup Series. The World Rowing Cups are an annual series of three regattas that act as a lead-up to the World Rowing Championships. World Rowing Cups are held over three days with a progression system from heats through to finals.'],
      ];
      include 'components/cardsWrapper.php';
      ?>

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
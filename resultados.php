<?php
include 'db.php';
?>
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
            $title = 'Resultados Torneo 2023';
            $subtitle = 'Descubre los resultados del torneo anterior';
            $imgSrc = 'assets/images/results.jpg';
            $imgAlt = 'rowing hero image';
            include 'components/header.php';
            ?>
        </section>

        <section class="max-w-6xl mx-auto py-20 px-5 md:px-0">
            <?php
            $titulo = "Lista de resultados";
            $subtitulo = "Descubre las últimas novedades del campeonato de remo";
            $textoBoton = "Añadir Noticia";
            $noticias = array();

            try {
                $sql = "SELECT * FROM competicion";
                $stmt = $pdo->query($sql);
                $competiciones = $stmt->fetchAll();
            } catch (\PDOException $e) {
                throw new \PDOException($e->getMessage(), (int) $e->getCode());
            }

            // Suponiendo que este es el formato que esperan tus componentes
            $noticias = array_map(function ($competicion) {
                return [
                    'imgSrc' => './assets/images/winner.jpg', // Imagen genérica si no tienes una en la DB
                    'imgAlt' => 'Imagen de competición', // O un valor específico de la competición
                    'title' => $competicion['Nombre'], // Asume que tienes una columna 'Nombre'
                    'body' => "Fecha: " . $competicion['Fecha'] . " - Ubicación: " . $competicion['Ubicación'], // Ejemplo de cuerpo
                ];
            }, $competiciones);

            include 'components/cardsWrapper.php'; // Incluye tu componente hijo aquí
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
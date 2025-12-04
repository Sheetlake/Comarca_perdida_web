<?php
// Cargamos las constantes y el controlador de article.
require_once '../../config/constants.php';
require_once '../../controllers/ArticleController.php';

// Obtenemos el id de la entrada que queremos pintar
$idEntrada = $_GET['id'] ?? null;

// Creamos una instancia del controlador
$controladorArticulos = new ArticleController();

// Obtenemos la entrada por id si existe (si no es null)
$entrada = $idEntrada ? $controladorArticulos->obtenerEntradaPorId($idEntrada) : null;
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Carga de fuentes -->
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/fonts/fontawesome-free-6.1.2-web/css/all.min.css" />
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/fonts/montserrat/montserrat.css" />
  <!-- Carga de estilos -->
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/reset.css" />
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/styles.css" />
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/responsive.css" />
  <!-- Carga de javascript -->
  <script src="<?= BASE_URL ?>assets/js/main.js" defer></script>
  <script src="<?= BASE_URL ?>assets/js/marquee.js" defer></script>
  <script src="<?= BASE_URL ?>assets/js/menu.js" defer></script>

  <title>La comarca Perdida</title>
</head>

<body>
  <!-- Barra superior decorativa -->
  <div class="decoration-bar"></div>

  <!-- Contenedor principal -->
  <div class="layout">
    <!-- Cabecera -->
    <?php include '../templates/header.php'; ?>
    <!-- Navegacion -->
    <?php include '../templates/nav.php'; ?>



    <!-- Contenido de la noticia -->
    <main class="layout__main">

      <!-- Si existe la noticia pintamos -->
      <?php if ($entrada): ?>
        <!-- Contenedor de la noticia -->
        <article class="article__container">

          <!-- Contenedor del título de la noticia -->
          <header class="article__header">
            <!-- Contenedor de la imagen -->
            <div class="article__image">
              <img src="<?= BASE_URL . "assets/img/" . $entrada['imagen_destacada'] ?>" class="article__img">
            </div>
            <!-- Titulo -->
            <h1 class="article__title"><?= htmlspecialchars($entrada['titulo']) ?></h1>
            <h2 class="article__subtitle"><?= htmlspecialchars($entrada['subtitulo']) ?></h2>
          </header>

          <!-- Contenido de la noticia -->
          <section class="article__main">
            <?= nl2br(htmlspecialchars($entrada['contenido'])) ?>
          </section>

          <!-- Footer con autor y fecha -->
          <footer class="article-footer__info">

            <!-- Contenedor del autor -->
            <div class="article__author">
              <!-- Contenedor de la foto del autor -->
              <div class="article__author-circle">
                <div class="author-circle__image">
                  <img src="<?= BASE_URL . $entrada['autor_imagen'] ?>" alt="imagen del autor" class="author-circle__img">
                </div>
              </div>
              <!-- Contenedor de la info del autor -->
              <div class="article-footer__author-info">
                <!-- Nombre del autor -->
                <span class="article-footer__author-nombre">
                  <?= htmlspecialchars($entrada['autor_nombre'] . ' ' . $entrada['autor_apellidos']) ?>
                </span>
                <!-- Descripcion del autor -->
                <span class="article-footer__author-descripcion">
                  <?= htmlspecialchars($entrada['autor_descripcion']) ?>
                </span>
              </div>

            </div>
            <!-- Fecha -->
            <span class="article-footer__date">
              <?= date('d M Y', strtotime($entrada['fecha'])) ?>
            </span>
          </footer>

        </article>
      <?php else: ?>
        <p>No se encontró la entrada solicitada.</p>
      <?php endif; ?>


    </main>



    <!-- Barra Lateral -->
    <?php include '../templates/aside.php'; ?>
  </div>
  <!-- Pie de pagina -->
  <?php include '../templates/footer.php'; ?>

</body>

</html>
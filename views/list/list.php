<?php
// Cargamos las constantes y el controlador de article.
require_once '../../config/constants.php';
require_once '../../controllers/ArticleController.php';

// Obtenemos el tipo de entrada desde la URL (por ejemplo: list.php?tipo=noticia)
$tipoEntrada = $_GET['tipo'] ?? null;

// Creamos una instancia del controlador
$controladorArticulos = new ArticleController();

// Obtenemos las entradas por tipo si existe
$entradas = $tipoEntrada ? $controladorArticulos->listarEntradasPorTipo($tipoEntrada) : [];
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

    <main class="layout__main">

      <!-- Reviso si por algun error las entradas estan vacias -->
      <?php if (!empty($entradas)): ?>
        <!-- Recorro el array de entradas -->
        <?php foreach ($entradas as $entrada): ?>
          <!-- Contenedor de la lista -->
          <div class="alist__container">
            <!-- Contenedor de cada elemento de la lista -->
            <article class="alist__item">
              <!-- Contenedor de la imagen -->
              <div class="alist__image">
                <!-- Imagen del elemento -->
                <a href="" class="alist__image-link">
                  <img src="<?= BASE_URL . "assets/img/" . $entrada['imagen_destacada'] ?>" class="alist__img">
                </a>
              </div>
              <!-- Contenedor de la informacion de la entrada -->
              <div class="alist__info">
                <span class="alist__type"><?= htmlspecialchars($entrada['tipo']) ?></span>
                <h2 class="alist__title">
                  <a class="alist__title-link" href="<?= BASE_URL ?>views/article/article.php?id=<?= $entrada['id'] ?>">
                    <?= htmlspecialchars($entrada['titulo']) ?>
                  </a>
                </h2>
                <h3 class="alist__subtitle"><?= htmlspecialchars($entrada['subtitulo']) ?></h3>
                <!-- Contenedor del footer de la entrada -->
                <footer class="alist__footer">
                  <span class="alist__author">
                    <?= htmlspecialchars($entrada['autor_nombre'] . ' ' . $entrada['autor_apellidos']) ?>
                  </span>
                  <span class="alist__date">
                    <?= date('d M Y', strtotime($entrada['fecha'])) ?>
                  </span>
                </footer>
              </div>
            </article>
            <div>
            <?php endforeach; ?>
          <?php else: ?>
            <p class="alist__error">No se encontraron entradas de tipo <?= htmlspecialchars($tipoEntrada) ?>.</>

            <?php endif; ?>
    </main>



    <!-- Barra Lateral -->
    <?php include '../templates/aside.php'; ?>
  </div>
  <!-- Pie de pagina -->
  <?php include '../templates/footer.php'; ?>

</body>

</html>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Carga de fuentes -->
  <link rel="stylesheet" href="assets/fonts/fontawesome-free-6.1.2-web/css/all.min.css" />
  <link rel="stylesheet" href="assets/fonts/montserrat/montserrat.css" />
  <!-- Carga de estilos -->
  <link rel="stylesheet" href="assets/css/reset.css" />
  <link rel="stylesheet" href="assets/css/styles.css" />
  <link rel="stylesheet" href="assets/css/responsive.css" />
  <!-- Carga de javascript -->
  <script src="assets/js/main.js" defer></script>
  <script src="assets/js/marquee.js" defer></script>
  <script src="assets/js/menu.js" defer></script>

  <title>La comarca Perdida</title>
</head>

<body>
  <!-- Barra superior decorativa -->
  <div class="decoration-bar"></div>

  <!-- Contenedor principal -->
  <div class="layout">
    <!-- Cabecera -->
    <header class="layout__header">
      <div class="header__title">
        <a href="#" class="header__link">
          <img src="assets/img/logo1.png" alt="Logo" class="header__img" />
        </a>
      </div>
    </header>
    <!-- Navegacion -->
    <section class="layout__nav">
      <nav class="nav__navbar">
        <!-- Navegacion Movil -->
        <!-- Boton menu responsive -->
        <div class="navbar__mobile-btn">
          <i class="fa-solid fa-bars"></i>
        </div>

        <!-- Menu responsive -->
        <ul class="navbar__mobile-list">
          <!-- Elemento con submenu -->
          <li class="mobile-list__item">
            <div class="mobile-list__container">
              <a href="#" class="mobile-list__link">NOTICIAS</a>
              <div class="mobile-list__icon" id="icon1">
                <i class="fa-solid fa-chevron-down"></i>
              </div>
            </div>
            <ul class="mobile-list__msubmenu" id="submenu1">
              <li class="msubmenu__item">
                <a href="#" class="msubmenu__link">VIDEOJUEGOS</a>
              </li>
              <li class="msubmenu__item">
                <a href="#" class="msubmenu__link">CINE</a>
              </li>
              <li class="msubmenu__item">
                <a href="#" class="msubmenu__link">TECNOLOGIA</a>
              </li>
            </ul>
          </li>
          <!-- Elemento simple -->
          <li class="mobile-list__item">
            <a href="#" class="mobile-list__link">ANALISIS</a>
          </li>
          <!-- Elemento simple -->
          <li class="mobile-list__item">
            <a href="#" class="mobile-list__link">JUEGOS</a>
          </li>
          <!-- Elemento simple -->
          <li class="mobile-list__item">
            <a href="#" class="mobile-list__link">CATEGORIAS</a>
          </li>
          <!-- Elemento con submenu -->
          <li class="mobile-list__item">
            <div class="mobile-list__container">
              <a href="#" class="mobile-list__link">CATEGORIAS</a>
              <div class="mobile-list__icon" id="icon2">
                <i class="fa-solid fa-chevron-down"></i>
              </div>
            </div>
            <ul class="mobile-list__msubmenu" id="submenu2">
              <li class="msubmenu__item">
                <a href="#" class="msubmenu__link">ACCION</a>
              </li>
              <li class="msubmenu__item">
                <a href="#" class="msubmenu__link">LUCHA</a>
              </li>
              <li class="msubmenu__item">
                <a href="#" class="msubmenu__link">SANDBOX</a>
              </li>
              <li class="msubmenu__item">
                <a href="#" class="msubmenu__link">CARRERAS</a>
              </li>
            </ul>
          </li>
          <!-- Elemento simple -->
          <li class="mobile-list__item">
            <a href="#" class="mobile-list__link">RANKING</a>
          </li>
        </ul>
        <!-- Navegacion PC -->
        <ul class="navbar__list">
          <li class="navbar__item">
            <a href="#" class="navbar__link"> NOTICIAS </a>
            <div class="navbar__submenu">
              <!-- Una lista desplegable -->
              <ul class="navbar__sublist">
                <li class="sublist__item">
                  <a href="" class="sublist__link">Videojuegos</a>
                </li>
                <li class="sublist__item">
                  <a href="" class="sublist__link">Novedades</a>
                </li>
                <li class="sublist__item">
                  <a href="" class="sublist__link">Otros</a>
                  <ul class="sublist__dropdown">
                    <li class="dropdown__item">
                      <a href="#" class="dropdown__link">Cine</a>
                    </li>
                    <li class="dropdown__item">
                      <a href="#" class="dropdown__link">Tecnología</a>
                    </li>
                  </ul>
                </li>
              </ul>

              <!-- Carrusel imagenes -->
              <div class="submenu__carousel">
                <ul class="carousel__menu carousel__menu--small">
                  <!-- Elemento del carousel -->
                  <li class="carousel__item">
                    <!-- Imagen -->
                    <div class="carousel__container-image">
                      <img src="assets/img/game-1.jpg" class="carousel__image" alt="imagen submenu" />
                    </div>
                    <!-- Titulo -->
                    <div class="carousel__detail">
                      <h3 class="carousel__title">
                        <a href="#" class="carousel__link"> ¿Es Battlefield 2042 el mejor de la saga? </a>
                      </h3>
                    </div>

                    <!-- Puntuacion -->
                    <div class="carousel__container-rating">
                      <div class="container-rating__circle">
                        <div class="container-rating__border">
                          <span class="container-rating__mark">9</span>
                        </div>
                      </div>
                    </div>
                  </li>
                  <!-- Elemento del carousel -->
                  <li class="carousel__item">
                    <!-- Imagen -->
                    <div class="carousel__container-image">
                      <img src="assets/img/game-2.webp" class="carousel__image" alt="imagen submenu" />
                    </div>
                    <!-- Titulo -->
                    <div class="carousel__detail">
                      <h3 class="carousel__title">
                        <a href="#" class="carousel__link"> ¿Elden Ring es el mejor juego del año? </a>
                      </h3>
                    </div>
                  </li>
                  <!-- Elemento del carousel -->
                  <li class="carousel__item">
                    <!-- Imagen -->
                    <div class="carousel__container-image">
                      <img src="assets/img/game-3.jpg" class="carousel__image" alt="imagen submenu" />
                    </div>
                    <!-- Titulo -->
                    <div class="carousel__detail">
                      <h3 class="carousel__title">
                        <a href="#" class="carousel__link">The last of us Part 1 ¿Era necesario? </a>
                      </h3>
                    </div>
                  </li>
                  <!-- Elemento del carousel -->
                  <li class="carousel__item">
                    <!-- Imagen -->
                    <div class="carousel__container-image">
                      <img src="assets/img/game-4.jpg" class="carousel__image" alt="imagen submenu" />
                    </div>
                    <!-- Titulo -->
                    <div class="carousel__detail">
                      <h3 class="carousel__title">
                        <a href="#" class="carousel__link">Review de Dying Light 2 </a>
                      </h3>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </li>
          <li class="navbar__item">
            <a href="#" class="navbar__link"> ANALISIS </a>
            <div class="navbar__submenu">
              <div class="submenu__carousel">
                <ul class="carousel__menu">
                  <!-- Elemento del Carrusel -->
                  <li class="carousel__item">
                    <!-- Imagen -->
                    <div class="carousel__container-image">
                      <img src="assets/img/game-5-1.jpg" class="carousel__image" alt="imagen submenu" />
                    </div>
                    <!-- Titulo -->
                    <div class="carousel__detail">
                      <h3 class="carousel__title">
                        <a href="#" class="carousel__link"> Sifu, vuelven las tortas. </a>
                      </h3>
                    </div>

                    <!-- Puntuacion -->
                    <div class="carousel__container-rating">
                      <div class="container-rating__circle">
                        <div class="container-rating__border">
                          <span class="container-rating__mark">8.5</span>
                        </div>
                      </div>
                    </div>
                  </li>
                  <!-- Elemento del Carrusel -->
                  <li class="carousel__item">
                    <!-- Imagen -->
                    <div class="carousel__container-image">
                      <img src="assets/img/game-6.jpg" class="carousel__image" alt="imagen submenu" />
                    </div>
                    <!-- Titulo -->
                    <div class="carousel__detail">
                      <h3 class="carousel__title">
                        <a href="#" class="carousel__link">EAFC 26 Vuelta al estadio</a>
                      </h3>
                    </div>

                    <!-- Puntuacion -->
                    <div class="carousel__container-rating">
                      <div class="container-rating__circle">
                        <div class="container-rating__border">
                          <span class="container-rating__mark">6</span>
                        </div>
                      </div>
                    </div>
                  </li>
                  <!-- Elemento del Carrusel -->
                  <li class="carousel__item">
                    <!-- Imagen -->
                    <div class="carousel__container-image">
                      <img src="assets/img/game-7.png" class="carousel__image" alt="imagen submenu" />
                    </div>
                    <!-- Titulo -->
                    <div class="carousel__detail">
                      <h3 class="carousel__title">
                        <a href="#" class="carousel__link">Multiversus. ¿El Smash killer?</a>
                      </h3>
                    </div>

                    <!-- Puntuacion -->
                    <div class="carousel__container-rating">
                      <div class="container-rating__circle">
                        <div class="container-rating__border">
                          <span class="container-rating__mark">8.5</span>
                        </div>
                      </div>
                    </div>
                  </li>
                  <!-- Elemento del Carrusel -->
                  <li class="carousel__item">
                    <!-- Imagen -->
                    <div class="carousel__container-image">
                      <img src="assets/img/game-8.jpg" class="carousel__image" alt="imagen submenu" />
                    </div>
                    <!-- Titulo -->
                    <div class="carousel__detail">
                      <h3 class="carousel__title">
                        <a href="#" class="carousel__link">Gran Turismo 7. Carta de amor.</a>
                      </h3>
                    </div>

                    <!-- Puntuacion -->
                    <div class="carousel__container-rating">
                      <div class="container-rating__circle">
                        <div class="container-rating__border">
                          <span class="container-rating__mark">10</span>
                        </div>
                      </div>
                    </div>
                  </li>
                  <!-- Elemento del Carrusel -->
                  <li class="carousel__item">
                    <!-- Imagen -->
                    <div class="carousel__container-image">
                      <img src="assets/img/game-9.webp" class="carousel__image" alt="imagen submenu" />
                    </div>
                    <!-- Titulo -->
                    <div class="carousel__detail">
                      <h3 class="carousel__title">
                        <a href="#" class="carousel__link">Forza Horizon 5. Andeleee.</a>
                      </h3>
                    </div>

                    <!-- Puntuacion -->
                    <div class="carousel__container-rating">
                      <div class="container-rating__circle">
                        <div class="container-rating__border">
                          <span class="container-rating__mark">9.5</span>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </li>
          <li class="navbar__item">
            <a href="#" class="navbar__link"> JUEGOS </a>
            <div class="navbar__submenu">
              <div class="submenu__carousel">
                <ul class="carousel__menu">
                  <!-- Elemento del Carrusel -->
                  <li class="carousel__item">
                    <!-- Imagen -->
                    <div class="carousel__container-image">
                      <img src="assets/img/game-10.jpg" class="carousel__image" alt="imagen submenu" />
                    </div>
                    <!-- Titulo -->
                    <div class="carousel__detail">
                      <h3 class="carousel__title">
                        <a href="#" class="carousel__link"> Impresiones Ratchet and Clank. </a>
                      </h3>
                    </div>
                  </li>
                  <!-- Elemento del Carrusel -->
                  <li class="carousel__item">
                    <!-- Imagen -->
                    <div class="carousel__container-image">
                      <img src="assets/img/game-19.jpg" class="carousel__image" alt="imagen submenu" />
                    </div>
                    <!-- Titulo -->
                    <div class="carousel__detail">
                      <h3 class="carousel__title">
                        <a href="#" class="carousel__link">Valorant viene a petarlo</a>
                      </h3>
                    </div>
                  </li>
                  <!-- Elemento del Carrusel -->
                  <li class="carousel__item">
                    <!-- Imagen -->
                    <div class="carousel__container-image">
                      <img src="assets/img/game-11.jpg" class="carousel__image" alt="imagen submenu" />
                    </div>
                    <!-- Titulo -->
                    <div class="carousel__detail">
                      <h3 class="carousel__title">
                        <a href="#" class="carousel__link">Far Cry 6. La nueva entrega de Ubisoft</a>
                      </h3>
                    </div>
                  </li>
                  <!-- Elemento del Carrusel -->
                  <li class="carousel__item">
                    <!-- Imagen -->
                    <div class="carousel__container-image">
                      <img src="assets/img/game-12.jpg" class="carousel__image" alt="imagen submenu" />
                    </div>
                    <!-- Titulo -->
                    <div class="carousel__detail">
                      <h3 class="carousel__title">
                        <a href="#" class="carousel__link">Gameplay de Resident Evil Village</a>
                      </h3>
                    </div>
                  </li>
                  <!-- Elemento del Carrusel -->
                  <li class="carousel__item">
                    <!-- Imagen -->
                    <div class="carousel__container-image">
                      <img src="assets/img/game-13.jpg" class="carousel__image" alt="imagen submenu" />
                    </div>
                    <!-- Titulo -->
                    <div class="carousel__detail">
                      <h3 class="carousel__title">
                        <a href="#" class="carousel__link">It Takes Two: Goty 2024.</a>
                      </h3>
                    </div>

                    <!-- Puntuacion -->
                    <div class="carousel__container-rating">
                      <div class="container-rating__circle">
                        <div class="container-rating__border">
                          <span class="container-rating__mark">10</span>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </li>
          <li class="navbar__item">
            <a href="#" class="navbar__link"> CATEGORIAS </a>
            <div class="navbar__submenu navbar__submenu--small">
              <ul class="navbar__sublist">
                <li class="sublist__item">
                  <a href="#" class="sublist__link">Acción</a>
                </li>
                <li class="sublist__item">
                  <a href="#" class="sublist__link">Sandbox</a>
                  <ul class="sublist__dropdown">
                    <li class="dropdown__item">
                      <a href="#" class="dropdown__link">Aventuras</a>
                    </li>
                    <li class="dropdown__item">
                      <a href="#" class="dropdown__link">Conducción</a>
                    </li>
                  </ul>
                </li>
                <li class="sublist__item">
                  <a href="#" class="sublist__link">Lucha</a>
                </li>
                <li class="sublist__item">
                  <a href="#" class="sublist__link">Carreras</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="navbar__item">
            <a href="#" class="navbar__link"> RANKING </a>
            <div class="navbar__submenu">
              <div class="submenu__carousel">
                <ul class="carousel__menu">
                  <!-- Elemento del Carrusel -->
                  <li class="carousel__item">
                    <!-- Imagen -->
                    <div class="carousel__container-image">
                      <img src="assets/img/game-14.jpeg" class="carousel__image" alt="imagen submenu" />
                    </div>
                    <!-- Titulo -->
                    <div class="carousel__detail">
                      <h3 class="carousel__title">
                        <a href="#" class="carousel__link"> Trailer Biomutant. </a>
                      </h3>
                    </div>
                  </li>
                  <!-- Elemento del Carrusel -->
                  <li class="carousel__item">
                    <!-- Imagen -->
                    <div class="carousel__container-image">
                      <img src="assets/img/game-15.jpg" class="carousel__image" alt="imagen submenu" />
                    </div>

                    <!-- Titulo -->
                    <div class="carousel__detail">
                      <h3 class="carousel__title">
                        <a href="#" class="carousel__link">Análisis Little Nightmares</a>
                      </h3>
                    </div>
                  </li>
                  <!-- Elemento del Carrusel -->
                  <li class="carousel__item">
                    <!-- Imagen -->
                    <div class="carousel__container-image">
                      <img src="assets/img/game-16.jpg" class="carousel__image" alt="imagen submenu" />
                    </div>
                    <!-- Titulo -->
                    <div class="carousel__detail">
                      <h3 class="carousel__title">
                        <a href="#" class="carousel__link">Gameplay WWE 2K25</a>
                      </h3>
                    </div>
                  </li>
                  <!-- Elemento del Carrusel -->
                  <li class="carousel__item">
                    <!-- Imagen -->
                    <div class="carousel__container-image">
                      <img src="assets/img/game-17.jpg" class="carousel__image" alt="imagen submenu" />
                    </div>
                    <!-- Titulo -->
                    <div class="carousel__detail">
                      <h3 class="carousel__title">
                        <a href="#" class="carousel__link">Red Dead Redemption 2: The Man with the Harmonica</a>
                      </h3>
                    </div>
                  </li>
                  <!-- Elemento del Carrusel -->
                  <li class="carousel__item">
                    <!-- Imagen -->
                    <div class="carousel__container-image">
                      <img src="assets/img/game-18.jpg" class="carousel__image" alt="imagen submenu" />
                    </div>
                    <!-- Titulo -->
                    <div class="carousel__detail">
                      <h3 class="carousel__title">
                        <a href="#" class="carousel__link">Trailer Riders Republic</a>
                      </h3>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </li>
        </ul>
        <!-- Buscador -->
        <form class="navbar__search">
          <input type="text" class="search__input" name="search" placeholder="Buscar..." />
          <div class="navbar__btn-search">
            <a href="#" class="navbar__button">
              <i class="fa-solid fa-magnifying-glass"></i>
            </a>
          </div>
        </form>
      </nav>
    </section>




    <!-- CONTENIDO PRINCIPAL -->
    <main class="layout__main">




    </main>

    <!-- Barra Lateral -->
    <!-- Formulario de inicio de sesión -->
    <aside class="layout__aside">
      <section class="aside__login">
        <header class="login__subheader">
          <h3 class="subheader__title">iniciar sesion</h3>
        </header>

        <div class="login__container">
          <form class="login__form">
            <div class="form__container-username">
              <label for="username" class="form__label">Usuario</label>
              <input type="text" name="username" id="username" class="form__input" />
            </div>
            <div class="form__container-password">
              <label for="password" class="form__label">Contraseña</label>
              <input type="password" name="password" id="password" class="form__input" />
            </div>
            <div class="form__container-remember">
              <input type="checkbox" name="remember" id="remember" class="form__input" />
              <label for="remember" class="form__label">Recuérdame</label>
            </div>

            <input type="submit" class="form__submit" value="Iniciar sesión" />
          </form>
          <a href="#" class="login__register">Regístrate</a>
          <a href="#" class="login__lost-pass">Recuperar contraseña</a>
        </div>
      </section>

      <!-- Redes sociales -->
      <section class="aside__social">
        <ul class="social__list">
          <li class="social__item social__item--blue">
            <a href="#" class="social__link">
              <div class="social__icon">
                <i class="fa-brands fa-twitter"></i>
              </div>
              <div class="social__followers">
                <h4 class="social__number">26.000</h4>
                <span class="social__word">Seguidores</span>
              </div>
            </a>
          </li>
          <li class="social__item social__item--dark-blue">
            <a href="#" class="social__link">
              <div class="social__icon">
                <i class="fa-brands fa-facebook-f"></i>
              </div>
              <div class="social__followers">
                <h4 class="social__number">15.000</h4>
                <span class="social__word">Seguidores</span>
              </div>
            </a>
          </li>
          <li class="social__item social__item--red">
            <a href="#" class="social__link">
              <div class="social__icon">
                <i class="fa-brands fa-youtube"></i>
              </div>
              <div class="social__followers">
                <h4 class="social__number">333.000</h4>
                <span class="social__word">Seguidores</span>
              </div>
            </a>
          </li>
          <li class="social__item social__item--pink">
            <a href="#" class="social__link">
              <div class="social__icon">
                <i class="fa-brands fa-instagram"></i>
              </div>
              <div class="social__followers">
                <h4 class="social__number">13.000</h4>
                <span class="social__word">Seguidores</span>
              </div>
            </a>
          </li>
          <li class="social__item social__item--yellow">
            <a href="#" class="social__link">
              <div class="social__icon">
                <i class="fa-brands fa-linkedin-in"></i>
              </div>
              <div class="social__followers">
                <h4 class="social__number">16.200</h4>
                <span class="social__word">Seguidores</span>
              </div>
            </a>
          </li>
        </ul>
      </section>

      <section class="aside__tweets">
        <header class="tweets__header">
          <i class="fa-brands fa-twitter"></i>
          <h3 class="tweets__title">Últimos tweets</h3>
        </header>
        <p class="tweets__content">@Sheetlake Mira mi nuevo proyecto web</p>
      </section>

      <!-- Seccion aside recientes -->

      <section class="aside__recent">
        <header class="recent__subheader">
          <ul class="recent__list-header">
            <li class="list-header__item list-header__item--active">
              <h3 class="list-header__title">
                <a href="#" class="list-header__link-title">Reciente</a>
              </h3>
            </li>
            <li class="list-header__item">
              <h3 class="list-header__title list-header--small">
                <a href="#" class="list-header__link-title">Popular</a>
              </h3>
            </li>
            <li class="list-header__item">
              <h3 class="list-header__title list-header--small">
                <a href="#" class="list-header__link-title">Comentarios</a>
              </h3>
            </li>
          </ul>
        </header>
        <div class="recent__container">
          <ul class="recent__list-posts">
            <li class="recent__item">
              <div class="recent__container-image">
                <a href="#" class="recent__link-image">
                  <img src="assets/img/recent-1.jpg" class="recent__img" />
                </a>
              </div>
              <div class="recent__detail">
                <h4 class="recent__title">
                  <a href="#" class="recent__link-title">Mejor juego del año</a>
                </h4>
                <div class="recent__container-info">
                  <a href="#" class="recent__author">Jorge</a>
                  <div class="recent__meta-info">
                    <article class="recent__views">
                      <i class="fa-solid fa-eye"></i>
                      <span class="recent__number-views">12311</span>
                    </article>
                    <article class="recent__comments">
                      <i class="fa-solid fa-comment"></i>
                      <span class="recent__number-comments">7</span>
                    </article>
                  </div>
                </div>
              </div>
            </li>
            <li class="recent__item">
              <div class="recent__container-image">
                <a href="#" class="recent__link-image">
                  <img src="assets/img/recent-2.jpg" class="recent__img" />
                </a>
              </div>
              <div class="recent__detail">
                <h4 class="recent__title">
                  <a href="#" class="recent__link-title">Análisis GTA VI</a>
                </h4>
                <div class="recent__container-info">
                  <a href="#" class="recent__author">Jorge</a>
                  <div class="recent__meta-info">
                    <article class="recent__views">
                      <i class="fa-solid fa-eye"></i>
                      <span class="recent__number-views">23532</span>
                    </article>
                    <article class="recent__comments">
                      <i class="fa-solid fa-comment"></i>
                      <span class="recent__number-comments">256</span>
                    </article>
                  </div>
                </div>
              </div>
            </li>
            <li class="recent__item">
              <div class="recent__container-image">
                <a href="#" class="recent__link-image">
                  <img src="assets/img/recent-3.jpg" class="recent__img" />
                </a>
              </div>
              <div class="recent__detail">
                <h4 class="recent__title">
                  <a href="#" class="recent__link-title">Analisis WWE 2k25</a>
                </h4>
                <div class="recent__container-info">
                  <a href="#" class="recent__author">Jorge</a>
                  <div class="recent__meta-info">
                    <article class="recent__views">
                      <i class="fa-solid fa-eye"></i>
                      <span class="recent__number-views">2053</span>
                    </article>
                    <article class="recent__comments">
                      <i class="fa-solid fa-comment"></i>
                      <span class="recent__number-comments">16</span>
                    </article>
                  </div>
                </div>
              </div>
            </li>
            <li class="recent__item">
              <div class="recent__container-image">
                <a href="#" class="recent__link-image">
                  <img src="assets/img/recent-4.jpg" class="recent__img" />
                </a>
              </div>
              <div class="recent__detail">
                <h4 class="recent__title">
                  <a href="#" class="recent__link-title">Análisis Tekken 8</a>
                </h4>
                <div class="recent__container-info">
                  <a href="#" class="recent__author">Jorge</a>
                  <div class="recent__meta-info">
                    <article class="recent__views">
                      <i class="fa-solid fa-eye"></i>
                      <span class="recent__number-views">15667</span>
                    </article>
                    <article class="recent__comments">
                      <i class="fa-solid fa-comment"></i>
                      <span class="recent__number-comments">80</span>
                    </article>
                  </div>
                </div>
              </div>
            </li>
            <li class="recent__item">
              <div class="recent__container-image">
                <a href="#" class="recent__link-image">
                  <img src="assets/img/recent-5.jpg" class="recent__img" />
                </a>
              </div>
              <div class="recent__detail">
                <h4 class="recent__title">
                  <a href="#" class="recent__link-title">Análisis Mortal Kombat 1</a>
                </h4>
                <div class="recent__container-info">
                  <a href="#" class="recent__author">Jorge</a>
                  <div class="recent__meta-info">
                    <article class="recent__views">
                      <i class="fa-solid fa-eye"></i>
                      <span class="recent__number-views">8789</span>
                    </article>
                    <article class="recent__comments">
                      <i class="fa-solid fa-comment"></i>
                      <span class="recent__number-comments">11</span>
                    </article>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>

      <!-- Seccion de últimos análisis -->

      <section class="aside__last-reviews">
        <header class="last-reviews__subheader">
          <ul class="last-reviews__list-header">
            <li class="last-reviews__item last-reviews__item--active">
              <h3 class="last-reviews__title">
                <a href="#" class="last-reviews__link-title">Últimos análisis</a>
              </h3>
            </li>
            <li class="last-reviews__item">
              <h3 class="last-reviews__title">
                <a href="#" class="last-reviews__link-title last-reviews__link-title--small">Mejores análisis</a>
              </h3>
            </li>
          </ul>
        </header>
        <div class="last-reviews__container">
          <ul class="last-reviews__list-reviews">
            <li class="last-reviews__item">
              <div class="list-reviews__container-title">
                <h4 class="list-reviews__title">
                  <a href="#" class="list-reviews__title-link">Análisis de Elden Ring</a>
                </h4>
                <span class="list-reviews__mark"> 7.5 </span>
              </div>
              <div class="list-reviews__progressbar">
                <div class="list-reviews__bar list-reviews__bar--bar1"></div>
              </div>
            </li>
            <li class="last-reviews__item">
              <div class="list-reviews__container-title">
                <h4 class="list-reviews__title">
                  <a href="#" class="list-reviews__title-link">Análisis de WWE 2K24</a>
                </h4>
                <span class="list-reviews__mark"> 6.5 </span>
              </div>
              <div class="list-reviews__progressbar">
                <div class="list-reviews__bar list-reviews__bar--bar2"></div>
              </div>
            </li>
            <li class="last-reviews__item">
              <div class="list-reviews__container-title">
                <h4 class="list-reviews__title">
                  <a href="#" class="list-reviews__title-link">Análisis de Days Gone</a>
                </h4>
                <span class="list-reviews__mark"> 8.1 </span>
              </div>
              <div class="list-reviews__progressbar">
                <div class="list-reviews__bar list-reviews__bar--bar3"></div>
              </div>
            </li>
            <li class="last-reviews__item">
              <div class="list-reviews__container-title">
                <h4 class="list-reviews__title">
                  <a href="#" class="list-reviews__title-link">Análisis de NFS Most Wanted</a>
                </h4>
                <span class="list-reviews__mark"> 5.5 </span>
              </div>
              <div class="list-reviews__progressbar">
                <div class="list-reviews__bar list-reviews__bar--bar4"></div>
              </div>
            </li>
            <li class="last-reviews__item">
              <div class="list-reviews__container-title">
                <h4 class="list-reviews__title">
                  <a href="#" class="list-reviews__title-link">Análisis de Tekken 8</a>
                </h4>
                <span class="list-reviews__mark"> 9 </span>
              </div>
              <div class="list-reviews__progressbar">
                <div class="list-reviews__bar list-reviews__bar--bar1"></div>
              </div>
            </li>
          </ul>
        </div>
      </section>
    </aside>
  </div>

  <!-- Pie de pagina -->
  <footer class="layout__footer">
    <div class="footer__container">
      <!-- Footer izquierda (About y Tags) -->
      <section class="footer__left-container">
        <div class="footer__about">
          <h3 class="about__title">Sobre nosotros</h3>
          <p class="about__description">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos laudantium ipsam vitae iste neque nulla
            provident rem cum quae vel!
          </p>
        </div>
        <div class="footer__tags">
          <h3 class="tags__title">Etiquetas</h3>
          <div class="tags__container">
            <a href="#" class="tags__tag">Aventura</a>
            <a href="#" class="tags__tag">Acción</a>
            <a href="#" class="tags__tag">RPG</a>
            <a href="#" class="tags__tag">Indie</a>
            <a href="#" class="tags__tag">Multijugador</a>
            <a href="#" class="tags__tag">Lucha</a>
            <a href="#" class="tags__tag">Plataformas</a>
            <a href="#" class="tags__tag">Puzzles</a>
            <a href="#" class="tags__tag">Survival</a>
            <a href="#" class="tags__tag">Terror</a>
            <a href="#" class="tags__tag">Terror</a>
            <a href="#" class="tags__tag">Lucha</a>
            <a href="#" class="tags__tag">Puzzles</a>
            <a href="#" class="tags__tag">Survival</a>
            <a href="#" class="tags__tag">Terror</a>
            <a href="#" class="tags__tag">Lucha</a>
            <a href="#" class="tags__tag">Plataformas</a>
            <a href="#" class="tags__tag">Puzzles</a>
          </div>
        </div>
      </section>
      <!-- Footer central (Post populares) -->
      <section class="footer__center-container">
        <h3 class="footer__title">Post Populares</h3>
        <ul class="footer__list-popular">
          <!-- Elemento de la lista -->
          <li class="list-popular__item">
            <div class="list-popular__container-image">
              <a href="#" class="list-popular__link-image">
                <img src="assets/img/popular-1.jpg" class="list-popular__img" />
              </a>
            </div>
            <div class="list-popular__detail">
              <h4 class="list-popular__title">Mejor juego del año</h4>

              <div class="list-popular__container-info">
                <a href="#" class="list-popular__author">Jorge</a>

                <div class="list-popular__meta-info">
                  <div class="list-popular__views">
                    <i class="fa-solid fa-eye"></i>
                    <span class="list-popular__number-views">6546</span>
                  </div>
                  <div class="list-popular__comments">
                    <i class="fa-solid fa-comment"></i>
                    <span class="list-popular__number-comments">17</span>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <!-- Elemento de la lista -->
          <li class="list-popular__item">
            <div class="list-popular__container-image">
              <a href="#" class="list-popular__link-image">
                <img src="assets/img/popular-2.jpg" class="list-popular__img" />
              </a>
            </div>
            <div class="list-popular__detail">
              <h4 class="list-popular__title">Mejor juego del año</h4>

              <div class="list-popular__container-info">
                <a href="#" class="list-popular__author">Jorge</a>

                <div class="list-popular__meta-info">
                  <div class="list-popular__views">
                    <i class="fa-solid fa-eye"></i>
                    <span class="list-popular__number-views">6546</span>
                  </div>
                  <div class="list-popular__comments">
                    <i class="fa-solid fa-comment"></i>
                    <span class="list-popular__number-comments">17</span>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <!-- Elemento de la lista -->
          <li class="list-popular__item">
            <div class="list-popular__container-image">
              <a href="#" class="list-popular__link-image">
                <img src="assets/img/popular-3.jpg" class="list-popular__img" />
              </a>
            </div>
            <div class="list-popular__detail">
              <h4 class="list-popular__title">Mejor juego del año</h4>

              <div class="list-popular__container-info">
                <a href="#" class="list-popular__author">Jorge</a>

                <div class="list-popular__meta-info">
                  <div class="list-popular__views">
                    <i class="fa-solid fa-eye"></i>
                    <span class="list-popular__number-views">6546</span>
                  </div>
                  <div class="list-popular__comments">
                    <i class="fa-solid fa-comment"></i>
                    <span class="list-popular__number-comments">17</span>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <!-- Elemento de la lista -->
          <li class="list-popular__item">
            <div class="list-popular__container-image">
              <a href="#" class="list-popular__link-image">
                <img src="assets/img/popular-4.jpg" class="list-popular__img" />
              </a>
            </div>
            <div class="list-popular__detail">
              <h4 class="list-popular__title">Mejor juego del año</h4>

              <div class="list-popular__container-info">
                <a href="#" class="list-popular__author">Jorge</a>
                <div class="list-popular__meta-info">
                  <div class="list-popular__views">
                    <i class="fa-solid fa-eye"></i>
                    <span class="list-popular__number-views">6546</span>
                  </div>
                  <div class="list-popular__comments">
                    <i class="fa-solid fa-comment"></i>
                    <span class="list-popular__number-comments">17</span>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </section>
      <section class="footer__right-container">
        <h3 class="footer__title">Último post</h3>

        <div class="footer__slider">
          <img src="assets/img/slider-footer.jpg" class="f-slider__img" />

          <div class="f-slider__info">
            <h4 class="f-slider__category">Juegos</h4>
            <div class="f-slider__separator"></div>
            <h3 class="f-slider__title">
              <a href="#" class="f-slider__link"> Trailer EA FC24</a>
            </h3>
          </div>
        </div>
      </section>
    </div>
    <section class="footer__description">
      <div class="footer__text">&copy; Copyright 2025. Todos los derechos reservados a Jorge de la Vega Dev.</div>
    </section>
  </footer>
</body>

</html>
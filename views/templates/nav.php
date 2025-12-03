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
                                        <img src="<?= BASE_URL ?>assets/img/game-1.jpg" class="carousel__image" alt="imagen submenu" />
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
                                        <img src="<?= BASE_URL ?>assets/img/game-2.webp" class="carousel__image" alt="imagen submenu" />
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
                                        <img src="<?= BASE_URL ?>assets/img/game-3.jpg" class="carousel__image" alt="imagen submenu" />
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
                                        <img src="<?= BASE_URL ?>assets/img/game-4.jpg" class="carousel__image" alt="imagen submenu" />
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
                                        <img src="<?= BASE_URL ?>assets/img/game-5-1.jpg" class="carousel__image" alt="imagen submenu" />
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
                                        <img src="<?= BASE_URL ?>assets/img/game-6.jpg" class="carousel__image" alt="imagen submenu" />
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
                                        <img src="<?= BASE_URL ?>assets/img/game-7.png" class="carousel__image" alt="imagen submenu" />
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
                                        <img src="<?= BASE_URL ?>assets/img/game-8.jpg" class="carousel__image" alt="imagen submenu" />
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
                                        <img src="<?= BASE_URL ?>assets/img/game-9.webp" class="carousel__image" alt="imagen submenu" />
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
                                        <img src="<?= BASE_URL ?>assets/img/game-10.jpg" class="carousel__image" alt="imagen submenu" />
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
                                        <img src="<?= BASE_URL ?>assets/img/game-19.jpg" class="carousel__image" alt="imagen submenu" />
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
                                        <img src="<?= BASE_URL ?>assets/img/game-11.jpg" class="carousel__image" alt="imagen submenu" />
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
                                        <img src="<?= BASE_URL ?>assets/img/game-12.jpg" class="carousel__image" alt="imagen submenu" />
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
                                        <img src="<?= BASE_URL ?>assets/img/game-13.jpg" class="carousel__image" alt="imagen submenu" />
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
                                        <img src="<?= BASE_URL ?>assets/img/game-14.jpeg" class="carousel__image" alt="imagen submenu" />
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
                                        <img src="<?= BASE_URL ?>assets/img/game-15.jpg" class="carousel__image" alt="imagen submenu" />
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
                                        <img src="<?= BASE_URL ?>assets/img/game-16.jpg" class="carousel__image" alt="imagen submenu" />
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
                                        <img src="<?= BASE_URL ?>assets/img/game-17.jpg" class="carousel__image" alt="imagen submenu" />
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
                                        <img src="<?= BASE_URL ?>assets/img/game-18.jpg" class="carousel__image" alt="imagen submenu" />
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
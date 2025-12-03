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
                                <img src="<?= BASE_URL ?>assets/img/recent-1.jpg" class="recent__img" />
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
                                <img src="<?= BASE_URL ?>assets/img/recent-2.jpg" class="recent__img" />
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
                                <img src="<?= BASE_URL ?>assets/img/recent-3.jpg" class="recent__img" />
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
                                <img src="<?= BASE_URL ?>assets/img/recent-4.jpg" class="recent__img" />
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
                                <img src="<?= BASE_URL ?>assets/img/recent-5.jpg" class="recent__img" />
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
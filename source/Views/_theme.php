<!DOCTYPE html>
<html lang="<?= site("locale"); ?>">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />

        <?= $head; ?>

        <!-- AUTHOR -->
        <meta name="author" content="<?= DEV["name"] . " | " . DEV["url"]; ?>" />

        <!-- REGION -->
        <meta name="geo.region" content="<?= REGION["region"]; ?>" />
        <meta name="geo.placename" content="<?= REGION["placename"]; ?>" />
        <meta name="geo.position" content="<?= REGION["position"]; ?>" />
        <meta name="ICBM" content="<?= REGION["icbm"]; ?>" />

        <!-- FAVICON -->
        <link rel="shortcut icon" href="<?= asset("/img/favicon.ico"); ?>" />

        <!--CSS-->
        <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@300;500;700&display=swap" rel="stylesheet">
        <?= $v->section("stylesheet"); ?>
    </head>
    <body id="home">

        <!--header-->
        <header id="header">
            <div class="header_navbar">
                <?php if ($v->section("navbar")): ?>
                        <div class="container">
                            <!-- brand -->
                            <a href="<?= url(); ?>" title="Emplacar's">
                                <img src="<?= asset("img/logo-header.png"); ?>" alt="Logo Emplacar's">
                            </a>

                            <?= $v->section("navbar"); ?>
                        </div>

                <?php else: ?>
                    <div class="container">
                        <!-- brand -->
                        <a href="<?= url(); ?>" title="Emplacar's">
                            <img src="<?= asset("img/logo-header.png"); ?>" alt="Logo Emplacar's">
                        </a>

                        <!-- toggle -->
                        <div class="header_navbar_section">
                            <div class="header_navbar_section_toggle">
                                <div class="header_navbar_section_toggle_bar"></div>
                                <div class="header_navbar_section_toggle_bar"></div>
                                <div class="header_navbar_section_toggle_bar"></div>
                            </div>
                            <!-- nav -->
                            <nav class="header_navbar_section_nav">
                                <ul>
                                    <li>
                                        <a href="#home">Home</a>
                                    </li>
                                    <li>
                                        <a href="#quem-somos">Quem somos</a>
                                    </li>
                                    <li>
                                        <a href="#compre-ja">Compre já</a>
                                    </li>
                                    <li>
                                        <a href="#unidades">Unidades</a>
                                    </li>
                                    <li>
                                        <a href="#franquia">Franquias</a>
                                    <li>
                                        <a href="#duvidas">Dúvidas</a>
                                    </li>
                                    <li>
                                        <a href="#contato">Contato</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </header>
        <!--end of header-->

        <!--main-->
        <main id="main">
            <?= $v->section("content"); ?>
        </main>
        <!--end of main-->

        <!--footer-->
        <footer id="footer">
            <!--footer hero-->
            <div id="footer_hero">
                <div class="container">
                    <!--logo-->
                    <div class="footer_hero_row">
                        <img src="<?= asset("img/logo-footer.png") ?>" alt="Emplacar's">

                        <!--social media-->
                        <div class="footer_hero_row_socialMedia">
                            <p><strong>Siga-nos:</strong></p>
                            <ul>
                                <!--facebook-->
                                <li>
                                    <a href="https://www.facebook.com/emplacars/" title="Facebook Emplacar's" target="_blank">
                                        <img src="<?= asset("img/vt-facebook.svg"); ?>" alt="Facebook Emplacar's">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/emplacars/" title="Instagram Emplacar's" target="_blank">
                                        <img src="<?= asset("img/vt-instagram.svg"); ?>" alt="Instagram Emplacar's">
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>                   
                </div>
            </div>
            <!--end of footer hero-->

            <!--copyright-->
            <div class="footer_copyright">
                <div class="container">
                    <p>&COPY; Todos os direitos reservados</p>
                </div>
            </div>
            <!--end of copyright-->

            <!--developer-->
            <div class="footer_developer">
                <div class="container">
                    <p>Desenvolvido por <a href="<?= DEV["url"]; ?>" title="Agência Especializada em Marketing Digital" target="_blank"><strong><?= DEV["name"] ?></strong></a></p>
                </div>
            </div>
            <!--endo of developer-->
        </footer>
        <!--end of footer-->

        <!-- SCRIPTS -->
        <script src="<?= asset("js/main.min.js"); ?>"></script>
        <script src="//code.jivosite.com/widget/JOwG95qu5k" async></script>
        <?= $v->section("scripts"); ?>
    </body>

</html>
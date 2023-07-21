<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title><?php bloginfo('name'); ?></title>
    <title><?php bloginfo('description'); ?></title> -->

    <?php wp_head(); ?>

</head>

<body>
    <div class="container-fluid menu-fixo d-none d-md-block d-xl-block">
        <div class="row topo">
            <div class="col-sm-4 align-items-center data  d-none d-md-block d-xl-block">
                <?php the_time('l j, F Y '); ?>
            </div>

            <div class="col-sm-4 align-items-center  d-none d-md-block d-xl-block">
                <div class="img-fluid logo">
                    <a href="<?php echo home_url(); ?>">
                        <?php
                        if (function_exists('the_custom_logo')) {
                            the_custom_logo();
                        }
                        ?>
                    </a>
                </div>
            </div>

            <div class="col-sm-4">
                <a href="/wordpress/?page_id=84"><button class="btn btn-success botao  d-none d-md-block d-xl-block">Contato</button></a>
            </div>
        </div>

        <div class="borda  d-none d-md-block d-xl-block"> </div>
        <div class="mt-2"></div>

        <nav class="navbar navbar-expand-md categorias d-none d-md-block d-xl-block" role="navigation">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary',
                        'depth' => 2,
                        'container' => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id' => 'bs-example-navbar-collapse-1',
                        'menu_class' => 'nav navbar-nav',
                        'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                        'walker' => new WP_Bootstrap_Navwalker()
                    )
                );
                ?>
            </div>
        </nav>
        <hr>
    </div>
    </div>

    <div class="topo-cell menu-fixo-cell d-block d-md-none d-sm-none">
        <div class="row">
            <div class="col-6 d-block d-md-none d-sm-none data-cell text-center">
            <?php the_time('l j, F Y '); ?>
            </div>
            <div class="col-6 align-items-center  d-block d-md-none d-sm-none">
                <div class="img-fluid logo">
                    <a href="<?php echo home_url(); ?>">
                        <?php
                        if (function_exists('the_custom_logo')) {
                            the_custom_logo();
                        }
                        ?>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="borda-cell d-block d-md-none d-sm-none"></div>

        <div class="row fundo">
            <div class="col-6 align-items-center  d-block d-md-none d-sm-none">
                <div class="container-fluid fundo d-flex align-items-start">
                    <nav class="navbar navbar-expand-lg fundo categoria-cell">
                        <div class="container-fluid">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="http://localhost/wordpress/?page_id=2">ESPORTES</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="http://localhost/wordpress/?page_id=38">ENTRETENIMENTO</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="http://localhost/wordpress/?page_id=41">POLÍTICA</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="http://localhost/wordpress/?page_id=45">SAÚDE E ESTÉTICA</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="http://localhost/wordpress/?page_id=48">TÉCNOLOGIA</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/wordpress/?page_id=84"><button class="btn btn-success d-block d-md-none d-sm-none">Contato</button></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div> 
        <HR></HR>
    </div>

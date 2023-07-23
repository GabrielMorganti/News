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
    <div class="container-fluid">
        <div class="row headerr d-none d-md-block d-xl-block">
            <div class="flex-container">
                <div class="col-md-4 data-header">
                    <?php the_time('l j, F Y '); ?>
                </div>
        

                <div class="col-md-4 img-fluid logo-header">
                        <a href="<?php echo home_url(); ?>">
                            <?php
                                if (function_exists('the_custom_logo')) {
                                    the_custom_logo();
                                 }
                            ?>
                        </a>
                </div>

                    
                <div class="col-md-4 contact">
                    <a href="/wordpress/?page_id=84">
                        <button class="btn btn-dark d-none d-md-block d-xl-block">Contato</button>
                    </a>
                </div>
            </div>
        </div>

        

        <div class="row cat-header d-none d-md-block d-xl-block">
            <div class="borda"></div>
                <div class="flex-container">
                    <div class="col-md-12 ">
                        <nav class="navbar navbar-expand-md fw-bolder cat-header" role="navigation">
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
                        </nav>
                    </div>
                </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row header-cell d-block d-md-none">
            <div class="flex-container data-header">
                <div class="col-6">
                    <?php the_time('l j, F Y '); ?>
                </div>

                <div class="col-6 flex-sm-fill">
                    <div class=" img-fluid logo-header ms-auto p-2 flex-fill">
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
        </div>

        <div class="row cat-cell-header d-block d-md-none">
            <div class="borda"></div>
                <div class="flex-container">
                    <div class="col-12">
                        <nav class="navbar navbar-expand-lg">
                            <div class="container-fluid">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse categorias-header-cell" id="navbarNav">
                                    <?php
                                        $categories = get_categories( array(
                                            'orderby'   => 'name',
                                            'order'     => 'ASC',
                                            'child_of'            => 0,
                                            'current_category'    => 0,
                                            'depth'               => 0,
                                            'echo'                => 1,
                                            'exclude'             => '1',
                                            'exclude_tree'        => '',
                                            'feed'                => '',
                                            'feed_image'          => '',
                                            'feed_type'           => '',
                                            'hide_empty'          => 0,
                                            'hide_title_if_empty' => false,
                                            'hierarchical'        => true,
                                            'show_count'          => 0,
                                            'show_option_all'     => '',
                                            'show_option_none'    => __( 'No categories' ),
                                            'taxonomy'            => 'category',
                                            'title_li'            => __( 'Categories' ),
                                            'use_desc_for_title'  => 1,
                                        ) );

                                        foreach( $categories as $category ) {
                                            echo '<div class="col-md-6"><a class=" categorias-cell fw-bolder" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>';   
                                        } 
                                    ?>
                                        
                                        <div class="mt-2"></div>
                                        <a href="/wordpress/?page_id=84"><button class="btn btn-dark">Contato</button></a>
                                </div>
                            </div>
                        </nav>           
                    </div>
                </div>
        </div>
    </div>
    <hr>

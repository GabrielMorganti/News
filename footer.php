    <?php wp_footer(); ?>


    <div class="container-fluid rodape">
        <div class="row contact-1">
            <div class="col-md-4 mt-5 logo-footer">
                <div class="footer-img">
                    <a class="" href="<?php echo home_url(); ?>">
                        <?php
                            if (function_exists('the_custom_logo')) {
                                the_custom_logo();
                            }
                        ?>
                    </a>
                </div>

                <div class="mt-2"></div>
                    <p>A NEWS é uma plataforma muito além do que somente</p> 
                        <p>notícias, ela te proporciona novas expêriencias</p>
                    

                <div class="mt-4 flex-container">
                    <a class="icon rounded-circle border border-secondary" href="https://www.facebook.com" target="_blank"><h4><i class="bi bi-facebook"></i></h4></a>
                    <a class="icon rounded-circle border border-secondary" href="https://www.instagram.com" target="_blank"><h4><i class="bi bi-instagram"></i></h4></a>
                    <a class="icon rounded-circle border border-secondary" href="https://www.twitter.com" target="_blank"><h4><i class="bi bi-twitter"></i></h4></a>
                    <a class="icon rounded-circle border border-secondary" href="https://www.youtube.com" target="_blank"><h4><i class="bi bi-youtube"></i></h4></a>
                </div>

                <div class="mt-3"></div>
            </div>

            <div class="col-md-1">

            </div>

            <div class="col-md-3 mt-5 categorias-footer">
                <div class="flex-container">
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
                        echo '<div class="col-md-6"><a class=" color" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>';   
                        } 
                    ?>
                </div>
            </div>

            <div class="col-md-3 mt-5 links-footer">
                <div class="flex-container">
                    <ul>
                        <a href=""><li>Sobre nós</li></a>
                        <a href=""><li>Autores</li></a>
                        <a href="/wordpress/?page_id=84"><li>Contato</li></a>
                        <a href=""><li>Anunciar</li></a>
                        <a href=""><li>Políticas de Privacidade</li></a>
                        <a href=""><li>Termos de Uso</li></a>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="col-md-6 mt-3  text-start copy-footer">
                <p class="mb-3">Design: Gabriel Morganti</p>
            </div>

            <div class="col-md-6 mt-3 text-end copy-footer">
                
                <p class="mb-3">Copyright (c) 2023 News. Todos os direitos reservados</p>
            </div>
        </div>
    </div>

    <style>
  @import url('https://fonts.googleapis.com/css2?family=Bitter:wght@300&display=swap');
</style>

</body>
</html>
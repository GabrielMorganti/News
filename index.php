<?php get_header(); ?>

    <div class="container-fluid">

        <div class="row mt-5 index">
                    <div class="col-md-7">
                        <div class="flex-container">
                            <a class="title index-hov" href="<?php the_permalink(); ?>">
                                <?php
                                    if (have_posts()) :;
                                        ?>

                                            <h3 class=" title-index-post-1"><?php the_title(); ?></h3>

                                            <div class="index-hov">
                                                <?php if (has_post_thumbnail()) :
                                                    the_post_thumbnail('small', array('class' => 'img-fluid'));
                                                endif ?>
                                            </div>

                                                <p class="title-index-post"><?php echo wp_trim_words(get_the_content(), 25, '...'); ?> | <?php the_category(','); ?></p>
                                            
                                            
                                                <a style="text-decoration: none;" href="<?php the_permalink(); ?>">
                                                    <p class="data-index"> <i class="bi bi-calendar-event"></i> <?php the_time('F j, Y'); ?>
                                                </a><a class="d-flex justify-content-start" href="<?php the_permalink(); ?>">ler mais</a></p>
                                            
                                        <?php
                                    endif;
                                ?>
                            </a>  
                        </div>
                    </div>
        


                
            <div class="borda d-block d-md-none mt-3"></div>
            <div class="col-md-2 index-post-lareal  align-self-center ">
                <div class="flex-container ">
                    <?php query_posts('showposts=3');
                        if (have_posts()) :
                            while (have_posts()) :
                                the_post(); ?>
                                <div class=" d-flex align-items-end">
                                    <a class="index-hov-2" href="<?php the_permalink(); ?>">
                                        <?php if (has_post_thumbnail()) :
                                            the_post_thumbnail('small', array('class' => 'img-fluid rounded  '));

                                        endif ?>
                                    </a>
                                </div>


                                <div class="d-block d-md-none">
                                    <h3 class="title-index-cell"><a class="title-index-cell" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <p class="categoria-post"><?php echo wp_trim_words(get_the_content(), 15, '...'); ?>  | <?php the_category(','); ?>
                                            <a style="text-decoration: none;" href="<?php the_permalink(); ?>">
                                                <p class="data-post d-flex align-items-end justify-content-between"><i class="bi bi-calendar-event"></i> <?php the_time('F j, Y'); ?></a>
                                                    <a class="leia-mais" href="<?php the_permalink(); ?>">ler mais</a>
                                                </p> 
                                                <hr class="mt-3">
                                </div>
                                <div class="mt-3"></div>
                                <?php
                            endwhile;
                        endif;
                        ?>              
                </div>      
            </div>

            
            <div class="col-md-3 title-index-lateral align-self-center d-none d-md-block d-xl-block">
                <div class="flex-container">
                        <?php
                            if (have_posts()) :
                                while (have_posts()) :
                                    the_post(); ?>
                                    <a style="text-decoration: none;" class="index-hov" href="">
                                        <div class="index-hov-4">
                                            <h3 class="title index-hov-4 mt-3"><?php the_title(); ?></h3>
                                            <p class="categoria-post"><?php echo wp_trim_words(get_the_content(), 12, '...'); ?> | <?php the_category(','); ?>
                                        </div>   
                                                    <p class="data-post"><i class="bi bi-calendar-event"></i> <?php the_time('F j, Y'); ?>
                                                        <a class="leia-mais" href="<?php the_permalink(); ?>">ler mais</a>
                                                    </p>
                                                    </a>
                                                    
                                                    <div class="mb-5"></div>  
                                                                                                   
                        <?php
                                endwhile;
                            endif;
                        ?>
                    
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                <h2>Notícias em destaque</h2>
                <div class="borda mt-1"></div>
            </div>
        </div>

        
        <div class="row mt-3 index-top-news">
                <div class="col-md-6">
                    <a style="text-decoration: none;" class="top-news-hov" href="<?php the_permalink(); ?>">
                    <div class="image-top-news-index top-news-hov">
                                <?php if (has_post_thumbnail()) :
                                    the_post_thumbnail('small', array('class' => 'img-fluid'));
                                endif ?>
                    

                    

                        <h3 class="top-news-hov title-top-new"><?php the_title(); ?></h3>
                       
                  

                        <p class="categoria-top-news"><?php echo wp_trim_words(get_the_content(), 15, '...'); ?> | <?php the_category(','); ?></p>
                        </div>
                    </a>

                        <a style="text-decoration: none;" href="<?php the_permalink(); ?>">
                            <p class="date-top-news-index d-flex align-items-end justify-content-between"> <i class="bi bi-calendar-event"></i> <?php the_time('F j, Y'); ?>
                        </a><a class="" href="<?php the_permalink(); ?>">ler mais</a></p>
                        <hr>
                        <div class="mt-2"></div>
                </div>


            <div class="col-md-3">
                <?php query_posts('showposts=2');
                    if (have_posts()) :
                        while (have_posts()) :
                            the_post();
                ?>
                        
                        <a style="text-decoration: none;" class="top-news-hov-2" href="<?php the_permalink(); ?>">
                            <div class="top-news-hov-2">
                                <?php if (has_post_thumbnail()) :
                                    the_post_thumbnail('small', array('class' => 'img-fluid rounded'));
                                endif ?>
                            
                        

                            <h3 class="top-news-hov-2 title-top-news-2-index"><?php the_title(); ?></h3>
                            

                            <p class="resumo-top-news-2-index"><?php echo wp_trim_words(get_the_content(), 11, '...'); ?> | <?php the_category(','); ?> 
                            </div>
                        </a>

                            <a style="text-decoration: none;" href="<?php the_permalink(); ?>">
                                <p class="date-top-news-2-index d-flex align-items-end justify-content-between"> <i class="bi bi-calendar-event"></i> <?php the_time('F j, Y'); ?>
                            </a><a class="" href="<?php the_permalink(); ?>">ler mais</a></p>
                            
                            <div class="mt-4"></div>
                <?php
                        endwhile;
                    endif;
                ?>
                
            </div>

            <div class="col-md-3">
                <?php query_posts('showposts=2');
                    if (have_posts()) :
                        while (have_posts()) :
                            the_post();
                ?>
                        <a style="text-decoration: none;" class="top-news-hov-2" href="<?php the_permalink(); ?>">
                            <div class="top-news-hov-2">
                                <?php if (has_post_thumbnail()) :
                                    the_post_thumbnail('small', array('class' => 'img-fluid rounded'));
                                endif ?>
                            
                        

                            <h3 class="top-news-hov-2 title-top-news-2-index"><?php the_title(); ?></h3>
                           

                            <p class="resumo-top-news-2-index"><?php echo wp_trim_words(get_the_content(), 11, '...'); ?> | <?php the_category(','); ?> 
                            </div>

                        </a>
                            <a style="text-decoration: none;" href="<?php the_permalink(); ?>">
                                <p class="date-top-news-2-index d-flex align-items-end justify-content-between"> <i class="bi bi-calendar-event"></i> <?php the_time('F j, Y'); ?>
                            </a><a class="" href="<?php the_permalink(); ?>">ler mais</a></p>

                        
                            <div class="mt-4"></div>

                <?php
                        endwhile;
                    endif;
                ?>
            </div>

        </div>

        <div class="row mt-3 index-categorias-news">
            <div class="col-md-4 text-center mt-5">
                <div class="flex-container">
                <?php
                    $id_name = '5';
                    echo get_the_category_by_ID($id_name);
                ?>
                <div class="borda-categorias-index-news mb-3"></div>

                <a style="text-decoration: none;" class="categorias-hov" href="<?php the_permalink(); ?>">
                <div class="categorias-hov">
                    <?php if (has_post_thumbnail()) :
                        the_post_thumbnail('small', array('class' => 'img-fluid rounded'));
                    endif ?>
               

                    <h3 class="title-top-news-2-index text-start"><?php the_title(); ?></h3>
                   

                    <a class="" style="text-decoration: none;" href="<?php the_permalink(); ?>">
                        <p class="data-index d-flex align-items-end justify-content-between"> <i class="bi bi-calendar-event"></i> <?php the_time('F j, Y'); ?>
                    </a></p> </div>
                </a>
                

                
                <div class="mt-5"></div>

                        <div class="row justify-content-md-center align-items-center">
                            <?php query_posts('showposts=2');
                            if (have_posts()) :
                                while (have_posts()) :
                                    the_post();
                            ?>
                                    <a class="categorias-hov-2" style="text-decoration: none;" href="<?php the_permalink(); ?>">
                                        <div class="col-md-2 foto rounded categorias-hov-2">
                                        
                                            <?php if (has_post_thumbnail()) :
                                                the_post_thumbnail('small', array('class' => 'img-fluid rounded'));

                                            endif ?>
                                        </a>
                                    </div>

                                    
                                    <div class="col-md-6 text-start categorias-hov-2">
                                    <a class="categorias-hov-2" style="text-decoration: none;" href="<?php the_permalink(); ?>">
                                        <h3 class="title categorias-hov-2"><?php the_title(); ?></h3>
                                        <p class="categoria-post text-start"><?php echo wp_trim_words(get_the_content(), 5, '...'); ?> | <?php the_category(','); ?>

                                            <a style="text-decoration: none;" href="<?php the_permalink(); ?>">
                                                <p class="data-post justify-content-between"><i class="bi bi-calendar-event"></i> <?php the_time('F j, Y'); ?>
                                            </a><a class="leia-mais" href="<?php the_permalink(); ?>">ler mais</a>
                                        </p>
                                    </a>
                                    </div>
                                    <div class="mt-4"></div>
                            <?php
                                endwhile;
                            endif;
                            ?>
                        </div>
                </div>
            </div>

            <div class="col-md-4 text-center mt-5">
                <div class="flex-container">
                    <?php
                        $id_name = '10';
                        echo get_the_category_by_ID($id_name);
                    ?>
                    <div class="borda-categorias-index-news mb-3"></div>

                    <a style="text-decoration: none;" class="categorias-hov" href="<?php the_permalink(); ?>">
                <div class="categorias-hov">
                    <?php if (has_post_thumbnail()) :
                        the_post_thumbnail('small', array('class' => 'img-fluid rounded'));
                    endif ?>
               

                    <h3 class="title-top-news-2-index text-start"><?php the_title(); ?></h3>
                   

                    <a class="" style="text-decoration: none;" href="<?php the_permalink(); ?>">
                        <p class="data-index d-flex align-items-end justify-content-between"> <i class="bi bi-calendar-event"></i> <?php the_time('F j, Y'); ?>
                    </a></p> </div>
                </a>

                    
                <div class="mt-5"></div>

                <div class="row justify-content-md-center align-items-center">
                            <?php query_posts('showposts=2');
                            if (have_posts()) :
                                while (have_posts()) :
                                    the_post();
                            ?>
                                    <a class="categorias-hov-2" style="text-decoration: none;" href="<?php the_permalink(); ?>">
                                        <div class="col-md-2 foto rounded categorias-hov-2">
                                        
                                            <?php if (has_post_thumbnail()) :
                                                the_post_thumbnail('small', array('class' => 'img-fluid rounded'));

                                            endif ?>
                                        </a>
                                    </div>

                                    
                                    <div class="col-md-6 text-start categorias-hov-2">
                                    <a class="categorias-hov-2" style="text-decoration: none;" href="<?php the_permalink(); ?>">
                                        <h3 class="title categorias-hov-2"><?php the_title(); ?></h3>
                                        <p class="categoria-post text-start"><?php echo wp_trim_words(get_the_content(), 5, '...'); ?> | <?php the_category(','); ?>

                                            <a style="text-decoration: none;" href="<?php the_permalink(); ?>">
                                                <p class="data-post justify-content-between"><i class="bi bi-calendar-event"></i> <?php the_time('F j, Y'); ?>
                                            </a><a class="leia-mais" href="<?php the_permalink(); ?>">ler mais</a>
                                        </p>
                                    </a>
                                    </div>
                                    <div class="mt-4"></div>
                            <?php
                                endwhile;
                            endif;
                            ?>
                        </div>
                </div>
            </div>

            <div class="col-md-4 text-center mt-5">
                <div class="flex-container">
                    <?php
                        $id_name = '9';
                        echo get_the_category_by_ID($id_name);
                    ?>
                    <div class="borda-categorias-index-news mb-3"></div>

                    <a style="text-decoration: none;" class="categorias-hov" href="<?php the_permalink(); ?>">
                <div class="categorias-hov">
                    <?php if (has_post_thumbnail()) :
                        the_post_thumbnail('small', array('class' => 'img-fluid rounded'));
                    endif ?>
               

                    <h3 class="title-top-news-2-index text-start"><?php the_title(); ?></h3>
                   

                    <a class="" style="text-decoration: none;" href="<?php the_permalink(); ?>">
                        <p class="data-index d-flex align-items-end justify-content-between"> <i class="bi bi-calendar-event"></i> <?php the_time('F j, Y'); ?>
                    </a></p> </div>
                </a>

                    
                <div class="mt-5"></div>

                <div class="row justify-content-md-center align-items-center">
                            <?php query_posts('showposts=2');
                            if (have_posts()) :
                                while (have_posts()) :
                                    the_post();
                            ?>
                                    <a class="categorias-hov-2" style="text-decoration: none;" href="<?php the_permalink(); ?>">
                                        <div class="col-md-2 foto rounded categorias-hov-2">
                                        
                                            <?php if (has_post_thumbnail()) :
                                                the_post_thumbnail('small', array('class' => 'img-fluid rounded'));

                                            endif ?>
                                        </a>
                                    </div>

                                    
                                    <div class="col-md-6 text-start categorias-hov-2">
                                    <a class="categorias-hov-2" style="text-decoration: none;" href="<?php the_permalink(); ?>">
                                        <h3 class="title categorias-hov-2"><?php the_title(); ?></h3>
                                        <p class="categoria-post text-start"><?php echo wp_trim_words(get_the_content(), 5, '...'); ?> | <?php the_category(','); ?>

                                            <a style="text-decoration: none;" href="<?php the_permalink(); ?>">
                                                <p class="data-post justify-content-between"><i class="bi bi-calendar-event"></i> <?php the_time('F j, Y'); ?>
                                            </a><a class="leia-mais" href="<?php the_permalink(); ?>">ler mais</a>
                                        </p>
                                    </a>
                                    </div>
                                    <div class="mt-4"></div>
                            <?php
                                endwhile;
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
        </div>

        <div class="row mt-3 index-categorias-news">
            <div class="col-md-4 text-center mt-5">
                <div class="flex-container">
                <?php
                    $id_name = '11';
                    echo get_the_category_by_ID($id_name);
                ?>
                <div class="borda-categorias-index-news mb-3"></div>

                <a style="text-decoration: none;" class="categorias-hov" href="<?php the_permalink(); ?>">
                <div class="categorias-hov">
                    <?php if (has_post_thumbnail()) :
                        the_post_thumbnail('small', array('class' => 'img-fluid rounded'));
                    endif ?>
               

                    <h3 class="title-top-news-2-index text-start"><?php the_title(); ?></h3>
                   

                    <a class="" style="text-decoration: none;" href="<?php the_permalink(); ?>">
                        <p class="data-index d-flex align-items-end justify-content-between"> <i class="bi bi-calendar-event"></i> <?php the_time('F j, Y'); ?>
                    </a></p> </div>
                </a>
                

                
                <div class="mt-5"></div>

                        <div class="row justify-content-md-center align-items-center">
                            <?php query_posts('showposts=2');
                            if (have_posts()) :
                                while (have_posts()) :
                                    the_post();
                            ?>
                                    <a class="categorias-hov-2" style="text-decoration: none;" href="<?php the_permalink(); ?>">
                                        <div class="col-md-2 foto rounded categorias-hov-2">
                                        
                                            <?php if (has_post_thumbnail()) :
                                                the_post_thumbnail('small', array('class' => 'img-fluid rounded'));

                                            endif ?>
                                        </a>
                                    </div>

                                    
                                    <div class="col-md-6 text-start categorias-hov-2">
                                    <a class="categorias-hov-2" style="text-decoration: none;" href="<?php the_permalink(); ?>">
                                        <h3 class="title categorias-hov-2"><?php the_title(); ?></h3>
                                        <p class="categoria-post text-start"><?php echo wp_trim_words(get_the_content(), 5, '...'); ?> | <?php the_category(','); ?>

                                            <a style="text-decoration: none;" href="<?php the_permalink(); ?>">
                                                <p class="data-post justify-content-between"><i class="bi bi-calendar-event"></i> <?php the_time('F j, Y'); ?>
                                            </a><a class="leia-mais" href="<?php the_permalink(); ?>">ler mais</a>
                                        </p>
                                    </a>
                                    </div>
                                    <div class="mt-4"></div>
                            <?php
                                endwhile;
                            endif;
                            ?>
                        </div>
                </div>
            </div>

            <div class="col-md-4 text-center mt-5">
                <div class="flex-container">
                    <?php
                        $id_name = '12';
                        echo get_the_category_by_ID($id_name);
                    ?>
                    <div class="borda-categorias-index-news mb-3"></div>

                    <a style="text-decoration: none;" class="categorias-hov" href="<?php the_permalink(); ?>">
                <div class="categorias-hov">
                    <?php if (has_post_thumbnail()) :
                        the_post_thumbnail('small', array('class' => 'img-fluid rounded'));
                    endif ?>
               

                    <h3 class="title-top-news-2-index text-start"><?php the_title(); ?></h3>
                   

                    <a class="" style="text-decoration: none;" href="<?php the_permalink(); ?>">
                        <p class="data-index d-flex align-items-end justify-content-between"> <i class="bi bi-calendar-event"></i> <?php the_time('F j, Y'); ?>
                    </a></p> </div>
                </a>
                

                
                <div class="mt-5"></div>

                        <div class="row justify-content-md-center align-items-center">
                            <?php query_posts('showposts=2');
                            if (have_posts()) :
                                while (have_posts()) :
                                    the_post();
                            ?>
                                    <a class="categorias-hov-2" style="text-decoration: none;" href="<?php the_permalink(); ?>">
                                        <div class="col-md-2 foto rounded categorias-hov-2">
                                        
                                            <?php if (has_post_thumbnail()) :
                                                the_post_thumbnail('small', array('class' => 'img-fluid rounded'));

                                            endif ?>
                                        </a>
                                    </div>

                                    
                                    <div class="col-md-6 text-start categorias-hov-2">
                                    <a class="categorias-hov-2" style="text-decoration: none;" href="<?php the_permalink(); ?>">
                                        <h3 class="title categorias-hov-2"><?php the_title(); ?></h3>
                                        <p class="categoria-post text-start"><?php echo wp_trim_words(get_the_content(), 5, '...'); ?> | <?php the_category(','); ?>

                                            <a style="text-decoration: none;" href="<?php the_permalink(); ?>">
                                                <p class="data-post justify-content-between"><i class="bi bi-calendar-event"></i> <?php the_time('F j, Y'); ?>
                                            </a><a class="leia-mais" href="<?php the_permalink(); ?>">ler mais</a>
                                        </p>
                                    </a>
                                    </div>
                                    <div class="mt-4"></div>
                            <?php
                                endwhile;
                            endif;
                            ?>
                        </div>
                </div>
            </div>

            <div class="col-md-4 text-center mt-5">
                <div class="flex-container">
                    <?php
                        $id_name = '13';
                        echo get_the_category_by_ID($id_name);
                    ?>
                    <div class="borda-categorias-index-news mb-3"></div>

                    <a style="text-decoration: none;" class="categorias-hov" href="<?php the_permalink(); ?>">
                <div class="categorias-hov">
                    <?php if (has_post_thumbnail()) :
                        the_post_thumbnail('small', array('class' => 'img-fluid rounded'));
                    endif ?>
               

                    <h3 class="title-top-news-2-index text-start"><?php the_title(); ?></h3>
                   

                    <a class="" style="text-decoration: none;" href="<?php the_permalink(); ?>">
                        <p class="data-index d-flex align-items-end justify-content-between"> <i class="bi bi-calendar-event"></i> <?php the_time('F j, Y'); ?>
                    </a></p> </div>
                </a>
                

                
                <div class="mt-5"></div>

                        <div class="row justify-content-md-center align-items-center">
                            <?php query_posts('showposts=2');
                            if (have_posts()) :
                                while (have_posts()) :
                                    the_post();
                            ?>
                                    <a class="categorias-hov-2" style="text-decoration: none;" href="<?php the_permalink(); ?>">
                                        <div class="col-md-2 foto rounded categorias-hov-2">
                                        
                                            <?php if (has_post_thumbnail()) :
                                                the_post_thumbnail('small', array('class' => 'img-fluid rounded'));

                                            endif ?>
                                        </a>
                                    </div>

                                    
                                    <div class="col-md-6 text-start categorias-hov-2">
                                    <a class="categorias-hov-2" style="text-decoration: none;" href="<?php the_permalink(); ?>">
                                        <h3 class="title categorias-hov-2"><?php the_title(); ?></h3>
                                        <p class="categoria-post text-start"><?php echo wp_trim_words(get_the_content(), 5, '...'); ?> | <?php the_category(','); ?>

                                            <a style="text-decoration: none;" href="<?php the_permalink(); ?>">
                                                <p class="data-post justify-content-between"><i class="bi bi-calendar-event"></i> <?php the_time('F j, Y'); ?>
                                            </a><a class="leia-mais" href="<?php the_permalink(); ?>">ler mais</a>
                                        </p>
                                    </a>
                                    </div>
                                    <div class="mt-4"></div>
                            <?php
                                endwhile;
                            endif;
                            ?>
                        </div>
                    </div>
            </div>
        </div>

        <div class="row mt-5"></div>

        <div class="row mt-3  d-flex justify-content-center "> 

            <div class="col-md-4 index-call-back text-center border-top border-bottom border-start border-black">
                            <h2 class="call-index-h2">Teste por 30 Dias grátis</h2>
                            <h5 class="call-promo">E tenha acesso a conteúdos exclusivos</h5>
                            <div class="mt-3">
                                <?php
                                    if (function_exists('the_custom_logo')) {
                                        the_custom_logo();
                                    }
                                ?>
                            </div>
            </div>

            <div class="col-md-4 index-call-back d-flex align-items-center  border-top border-bottom border-end border-black">
                <meta name="csrf-token" content="{{ csrf_token() }}">
                    <form action="?" method="$_POST">                
                        <input type="email" name="email" id="email" placeholder="Digite seu E-mail" required>
                    
                        <button type="submit" class="btn btn-dark rounded" name="email" id="email">Assinar Agora</button>
                    </form>
            </div>

            <div class="mb-5"></div>

        </div>




    




















        
        <div class="row mt-5"></div>

    </div>
<?php get_footer();
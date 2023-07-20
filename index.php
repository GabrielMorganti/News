<?php get_header(); ?>

<div class="container-fluid">

    <div class="mt-5"></div>

    <div class="row">
        <div class="col-sm-8 mt-3">
            <a class="title" href="<?php the_permalink(); ?>">
                <?php
                if (have_posts()) :;
                ?>
                    <h3 class="title-1"><?php the_title(); ?></h3>

                    <div class="image-post">
                        <?php if (has_post_thumbnail()) :
                            the_post_thumbnail('small', array('class' => 'img-fluid rounded'));
                        endif ?>
                    </div>

                    <div class="">
                        <p class="categoria-post-1"><?php echo wp_trim_words(get_the_content(), 25, '...'); ?> | <?php the_category(','); ?>
                    </div>

                    <div class="">
                        <a style="text-decoration: none;" href="<?php the_permalink(); ?>">
                            <p class="data-post-1 d-flex align-items-end justify-content-between"> <i class="bi bi-calendar-event"></i> <?php the_time('F j, Y'); ?>
                        </a><a class="leia-mais-1" href="<?php the_permalink(); ?>">leia Mais</a></p>
                    </div>
                <?php
                endif;
                ?>
            </a>
        </div>

        <div class="col-sm-4 borda-esquerda mt-3">
            <div class="row lateral">
                <?php query_posts('showposts=3');
                if (have_posts()) :
                    while (have_posts()) :
                        the_post(); ?>
                        <div class="col-2 foto rounded">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) :
                                    the_post_thumbnail('small', array('class' => 'img-fluid rounded'));

                                endif ?>
                            </a>
                        </div>

                        <div class="col-7 back tam">
                            <h3 class="title"><a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p class="categoria-post"><?php echo wp_trim_words(get_the_content(), 15, '...'); ?> | <?php the_category(','); ?>

                                <a style="text-decoration: none;" href="<?php the_permalink(); ?>">
                                    <p class="data-post d-flex align-items-end justify-content-between"><i class="bi bi-calendar-event"></i> <?php the_time('F j, Y'); ?>
                                </a><a class="leia-mais" href="<?php the_permalink(); ?>">leia Mais</a>
                            </p>
                        </div>
                        <div class="espacamento"></div>
                <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>

        <div class="mt-5"></div>

        <div class="row top-new ">
            <div class="col-sm-12">
                <div class="borda">
                <h2>MELHORES NOTICIAS</h2></div>
                <div class="row">

                    <div class="col-6">
                        <div class="img-top-new">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) :
                                    the_post_thumbnail('small', array('class' => 'img-fluid rounded'));
                                endif ?>
                            </a>
                        </div>
                        
                        <div class="mt-5">
                            <h3 class="title-2"><?php the_title(); ?></h3>
                        </div>

                        <div class="">
                            <p class="categoria-post-2"><?php echo wp_trim_words(get_the_content(), 11, '...'); ?> | <?php the_category(','); ?>
                        </div>

                        <div class="">
                            <a style="text-decoration: none;" href="<?php the_permalink(); ?>">
                                <p class="data-post-3 d-flex align-items-end justify-content-between"> <i class="bi bi-calendar-event"></i> <?php the_time('F j, Y'); ?>
                            </a><a class="leia-mais-2" href="<?php the_permalink(); ?>">leia Mais</a></p>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="row">
                        <?php query_posts('showposts=2');
                            if (have_posts()) :
                                while (have_posts()) :
                                    the_post();
                            ?>
                            <div class="img-top-new">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) :
                                    the_post_thumbnail('small', array('class' => 'img-fluid rounded'));
                                endif ?>
                            </a>
                        </div>
                        

                            <h3 class="title-2"><?php the_title(); ?></h3>

                        <div class="">
                            <p class="categoria-post-2"><?php echo wp_trim_words(get_the_content(), 11, '...'); ?> | <?php the_category(','); ?>
                        </div>

                        <div class="">
                            <a style="text-decoration: none;" href="<?php the_permalink(); ?>">
                                <p class="data-post-3 d-flex align-items-end justify-content-between"> <i class="bi bi-calendar-event"></i> <?php the_time('F j, Y'); ?>
                            </a><a class="leia-mais-2" href="<?php the_permalink(); ?>">leia Mais</a></p>
                        </div>

                            <?php
                                endwhile;
                            endif;
                            ?>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="row">
                        <?php query_posts('showposts=2');
                            if (have_posts()) :
                                while (have_posts()) :
                                    the_post();
                            ?>
                            <div class="img-top-new">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) :
                                    the_post_thumbnail('small', array('class' => 'img-fluid rounded'));
                                endif ?>
                            </a>
                        </div>
                        
                            <h3 class="title-2"><?php the_title(); ?></h3>

                        <div class="">
                            <p class="categoria-post-2"><?php echo wp_trim_words(get_the_content(), 11, '...'); ?> | <?php the_category(','); ?>
                        </div>

                        <div class="">
                            <a style="text-decoration: none;" href="<?php the_permalink(); ?>">
                                <p class="data-post-3 d-flex align-items-end justify-content-between"> <i class="bi bi-calendar-event"></i> <?php the_time('F j, Y'); ?>
                            </a><a class="leia-mais-2" href="<?php the_permalink(); ?>">leia Mais</a></p>
                        </div>

                            <?php
                                endwhile;
                            endif;
                            ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="mt-5"></div>

        <div class="row espacamento">
            <div class="col-sm-4">
                <div class="text-center">
                    <?php
                    $id_name = '5';
                    echo get_the_category_by_ID($id_name);
                    ?>
                </div>
                <div class="borda-categorias"></div>
                <div class="row">
                    <div class="image-category">
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()) :
                                the_post_thumbnail('small', array('class' => 'img-fluid rounded'));
                            endif ?>
                        </a>
                    </div>

                    <div class="">
                        <a style="text-decoration: none;" href="<?php the_permalink(); ?>">
                            <p class="data-post-2 d-flex align-items-end justify-content-between"> <i class="bi bi-calendar-event"></i> <?php the_time('F j, Y'); ?>
                        </a>
                    </div>

                    <div class="">
                        <h3 class="title-2"><?php the_title(); ?></h3>
                    </div>

                    <div class="mt-5"></div>

                    <div class="centro">
                        <div class="row">
                            <?php query_posts('showposts=2');
                            if (have_posts()) :
                                while (have_posts()) :
                                    the_post();
                            ?>

                                
                                    <div class="col-sm-6">
                                        <h3 class="title"><a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <p class="categoria-post"><?php echo wp_trim_words(get_the_content(), 9, '...'); ?> | <?php the_category(','); ?>

                                            <a style="text-decoration: none;" href="<?php the_permalink(); ?>">
                                                <p class="data-post d-flex align-items-end justify-content-between"><i class="bi bi-calendar-event"></i> <?php the_time('F j, Y'); ?>
                                            </a><a class="leia-mais" href="<?php the_permalink(); ?>">leia Mais</a>
                                        </p>
                                    </div>

                                    <div class="col-sm-2 foto rounded">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php if (has_post_thumbnail()) :
                                                the_post_thumbnail('small', array('class' => 'img-fluid rounded'));

                                            endif ?>
                                        </a>
                                    </div>
                                    <div class="espacamento-1"></div>


                            <?php
                                endwhile;
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="text-center">
                    <?php
                    $id_name = '10';
                    echo get_the_category_by_ID($id_name);
                    ?>
                </div>
                <div class="borda-categorias"></div>
                <div class="row">
                    <div class="image-category">
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()) :
                                the_post_thumbnail('small', array('class' => 'img-fluid rounded'));
                            endif ?>
                        </a>
                    </div>

                    <div class="">
                        <a style="text-decoration: none;" href="<?php the_permalink(); ?>">
                            <p class="data-post-2 d-flex align-items-end justify-content-between"> <i class="bi bi-calendar-event"></i> <?php the_time('F j, Y'); ?>
                        </a>
                    </div>

                    <div class="">
                        <h3 class="title-2"><?php the_title(); ?></h3>
                    </div>

                    <div class="mt-5"></div>

                    <div class="centro">
                        <div class="row">
                            <?php query_posts('showposts=2');
                            if (have_posts()) :
                                while (have_posts()) :
                                    the_post();
                            ?>


                                    <div class="col-sm-6">
                                        <h3 class="title"><a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <p class="categoria-post"><?php echo wp_trim_words(get_the_content(), 9, '...'); ?> | <?php the_category(','); ?>

                                            <a style="text-decoration: none;" href="<?php the_permalink(); ?>">
                                                <p class="data-post d-flex align-items-end justify-content-between"><i class="bi bi-calendar-event"></i> <?php the_time('F j, Y'); ?>
                                            </a><a class="leia-mais" href="<?php the_permalink(); ?>">leia Mais</a>
                                        </p>
                                    </div>

                                    <div class="col-sm-2 foto rounded">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php if (has_post_thumbnail()) :
                                                the_post_thumbnail('small', array('class' => 'img-fluid rounded'));

                                            endif ?>
                                        </a>
                                    </div>
                                    <div class="espacamento-1"></div>


                            <?php
                                endwhile;
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="text-center">
                    <?php
                    $id_name = '9';
                    echo get_the_category_by_ID($id_name);
                    ?>
                </div>
                <div class="borda-categorias"></div>
                <div class="row">
                    <div class="image-category">
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()) :
                                the_post_thumbnail('small', array('class' => 'img-fluid rounded'));
                            endif ?>
                        </a>
                    </div>

                    <div class="">
                        <a style="text-decoration: none;" href="<?php the_permalink(); ?>">
                            <p class="data-post-2 d-flex align-items-end justify-content-between"> <i class="bi bi-calendar-event"></i> <?php the_time('F j, Y'); ?>
                        </a>
                    </div>

                    <div class="">
                        <h3 class="title-2"><?php the_title(); ?></h3>
                    </div>

                    <div class="mt-5"></div>

                    <div class="centro">
                        <div class="row">
                            <?php query_posts('showposts=2');
                            if (have_posts()) :
                                while (have_posts()) :
                                    the_post();
                            ?>




                                    <div class="col-sm-6">
                                        <h3 class="title"><a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <p class="categoria-post"><?php echo wp_trim_words(get_the_content(), 9, '...'); ?> | <?php the_category(','); ?>

                                            <a style="text-decoration: none;" href="<?php the_permalink(); ?>">
                                                <p class="data-post d-flex align-items-end justify-content-between"><i class="bi bi-calendar-event"></i> <?php the_time('F j, Y'); ?>
                                            </a><a class="leia-mais" href="<?php the_permalink(); ?>">leia Mais</a>
                                        </p>
                                    </div>

                                    <div class="col-sm-2 foto rounded">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php if (has_post_thumbnail()) :
                                                the_post_thumbnail('small', array('class' => 'img-fluid rounded'));

                                            endif ?>
                                        </a>
                                    </div>
                                    <div class="espacamento-1"></div>



                            <?php
                                endwhile;
                            endif;
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

            <div class="mt-5"></div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="text-center">
                        <?php
                        $id_name = '11';
                        echo get_the_category_by_ID($id_name);
                        ?>
                    </div>
                    <div class="borda-categorias"></div>
                    <div class="row">
                        <div class="image-category">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) :
                                    the_post_thumbnail('small', array('class' => 'img-fluid rounded'));
                                endif ?>
                            </a>
                        </div>

                        <div class="">
                            <a style="text-decoration: none;" href="<?php the_permalink(); ?>">
                                <p class="data-post-2 d-flex align-items-end justify-content-between"> <i class="bi bi-calendar-event"></i> <?php the_time('F j, Y'); ?>
                            </a>
                        </div>

                        <div class="">
                            <h3 class="title-2"><?php the_title(); ?></h3>
                        </div>

                        <div class="mt-5"></div>

                        <div class="centro">
                            <div class="row">
                                <?php query_posts('showposts=2');
                                if (have_posts()) :
                                    while (have_posts()) :
                                        the_post();
                                ?>

                                        <div class="col-sm-6">
                                            <h3 class="title"><a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                            <p class="categoria-post"><?php echo wp_trim_words(get_the_content(), 9, '...'); ?> | <?php the_category(','); ?>

                                                <a style="text-decoration: none;" href="<?php the_permalink(); ?>">
                                                    <p class="data-post d-flex align-items-end justify-content-between"><i class="bi bi-calendar-event"></i> <?php the_time('F j, Y'); ?>
                                                </a><a class="leia-mais" href="<?php the_permalink(); ?>">leia Mais</a>
                                            </p>
                                        </div>

                                        <div class="col-sm-2 foto rounded">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php if (has_post_thumbnail()) :
                                                    the_post_thumbnail('small', array('class' => 'img-fluid rounded'));

                                                endif ?>
                                            </a>
                                        </div>
                                        <div class="espacamento-1"></div>


                                <?php
                                    endwhile;
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="text-center">
                        <?php
                        $id_name = '12';
                        echo get_the_category_by_ID($id_name);
                        ?>
                    </div>
                    <div class="borda-categorias"></div>
                    <div class="row">
                        <div class="image-category">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) :
                                    the_post_thumbnail('small', array('class' => 'img-fluid rounded'));
                                endif ?>
                            </a>
                        </div>

                        <div class="">
                            <a style="text-decoration: none;" href="<?php the_permalink(); ?>">
                                <p class="data-post-2 d-flex align-items-end justify-content-between"> <i class="bi bi-calendar-event"></i> <?php the_time('F j, Y'); ?>
                            </a>
                        </div>

                        <div class="">
                            <h3 class="title-2"><?php the_title(); ?></h3>
                        </div>

                        <div class="mt-5"></div>

                        <div class="centro">
                            <div class="row">
                                <?php query_posts('showposts=2');
                                if (have_posts()) :
                                    while (have_posts()) :
                                        the_post();
                                ?>


                                        <div class="col-sm-6">
                                            <h3 class="title"><a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                            <p class="categoria-post"><?php echo wp_trim_words(get_the_content(), 9, '...'); ?> | <?php the_category(','); ?>

                                                <a style="text-decoration: none;" href="<?php the_permalink(); ?>">
                                                    <p class="data-post d-flex align-items-end justify-content-between"><i class="bi bi-calendar-event"></i> <?php the_time('F j, Y'); ?>
                                                </a><a class="leia-mais" href="<?php the_permalink(); ?>">leia Mais</a>
                                            </p>
                                        </div>

                                        <div class="col-sm-2 foto rounded">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php if (has_post_thumbnail()) :
                                                    the_post_thumbnail('small', array('class' => 'img-fluid rounded'));

                                                endif ?>
                                            </a>
                                        </div>
                                        <div class="espacamento-1"></div>


                                <?php
                                    endwhile;
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="text-center">
                        <?php
                        $id_name = '13';
                        echo get_the_category_by_ID($id_name);
                        ?>
                    </div>
                    <div class="borda-categorias"></div>
                    <div class="row">
                        <div class="image-category">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) :
                                    the_post_thumbnail('small', array('class' => 'img-fluid rounded'));
                                endif ?>
                            </a>
                        </div>

                        <div class="">
                            <a style="text-decoration: none;" href="<?php the_permalink(); ?>">
                                <p class="data-post-2 d-flex align-items-end justify-content-between"> <i class="bi bi-calendar-event"></i> <?php the_time('F j, Y'); ?>
                            </a>
                        </div>

                        <div class="">
                            <h3 class="title-2"><?php the_title(); ?></h3>
                        </div>

                        <div class="mt-5"></div>

                        <div class="centro">
                            <div class="row">
                                <?php query_posts('showposts=2');
                                if (have_posts()) :
                                    while (have_posts()) :
                                        the_post();
                                ?>




                                        <div class="col-sm-6">
                                            <h3 class="title"><a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                            <p class="categoria-post"><?php echo wp_trim_words(get_the_content(), 9, '...'); ?> | <?php the_category(','); ?>

                                                <a style="text-decoration: none;" href="<?php the_permalink(); ?>">
                                                    <p class="data-post d-flex align-items-end justify-content-between"><i class="bi bi-calendar-event"></i> <?php the_time('F j, Y'); ?>
                                                </a><a class="leia-mais" href="<?php the_permalink(); ?>">leia Mais</a>
                                            </p>
                                        </div>

                                        <div class="col-sm-2 foto rounded">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php if (has_post_thumbnail()) :
                                                    the_post_thumbnail('small', array('class' => 'img-fluid rounded'));

                                                endif ?>
                                            </a>
                                        </div>
                                        <div class="espacamento-1"></div>



                                <?php
                                    endwhile;
                                endif;
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row call-to-action rounded">
                <div class="col-sm-12">
                    <div class="row d-flex align-items-center action">
                        <div class="col-6">
                            <h2>Teste por 30 dias Grátis</h2>
                            <h4 class="call">Você tem acesso a conteúdos exclusivos só aqui na</h4>
                            <div class="img-call"><?php
                            if (function_exists('the_custom_logo')) {
                                the_custom_logo();
                            }
                            ?></div>
                            
                        </div>

                        <div class="col-3 ">
                            <form class="" action="" method="post">
                                    <input class="form-control rounded email d-flex align-items-center" maxlength="300px" type="email" name="email" id="email" placeholder="Digite o seu E-mail" required>
                        </div>

                        <div class="col-3 button-call">
                        <button class="btn btn-success" type="submit">Assinar Agora</button>
                            </form>
                        </div>
                   </div>
                </div>
            </div>



<div class="mt-5"></div>



</div>

            <?php get_footer();

<?php get_header(); ?>

<div class="container">

    <div class="row mt-4">
        <div class="col-sm-12 mt-5">
        
            <?php the_category(','); ?>
        </div>

        <div class="mt-5">
            <h3 class=""><?php the_title(); ?></h3>
        </div>

        <div class="author-img mt-3 <?php echo get_option( 'show_avatars' ) ? 'show-avatars' : ''; ?>">
		    <?php echo get_avatar( get_the_author_meta( 'ID' ), '85' );?>
        </div>

        <div class=" author-name">
            <p> Author </p> 
            <p><?php the_time('F j, Y'); ?> </p>
        </div>

        <div class="col-12 mt-5 text-center" >
                <?php if (has_post_thumbnail()) :
                    the_post_thumbnail('small', array('class' => 'img-fluid rounded'));
                endif ?>
        </div>

        <div class="text-justify">
            <p class=""><?php echo the_content(); ?>
        </div>
    </div>

    <div class="row mt-5">
        <div class="borda ">
            <h3 >Notícias relacionadas a essa categoria</h3>
            <div class="mt-1"></div>
        </div>

        <?php query_posts('showposts=1');
                            if (have_posts()) :
                                while (have_posts()) :
                                    the_post();
        ?>
                        
        <div class="col-sm-4 text-center mt-3 ">
            <a href="<?php the_permalink(); ?>">
                <?php if (has_post_thumbnail()) :
                    the_post_thumbnail('small', array('class' => 'img-fluid rounded'));
                endif ?>
            </a>

            <div class="mt-2">
                <h3 class="title-3"><?php the_title(); ?></h3>
            </div>

            <div class="mt-2">
                <a style="text-decoration: none;" href="<?php the_permalink(); ?>">
                    <p class="data-post-4 d-flex align-items-end justify-content-between"> <i class="bi bi-calendar-event"></i> <?php the_time('F j, Y'); ?>
                </a><a class="" href="<?php the_permalink(); ?>"><?php the_author();?></a></p>
            </div>
        </div>

        <div class="col-sm-4 text-center mt-3">
            <a href="<?php the_permalink(); ?>">
                <?php if (has_post_thumbnail()) :
                    the_post_thumbnail('small', array('class' => 'img-fluid rounded'));
                endif ?>
            </a>

            <div class="mt-2">
                <h3 class="title-3"><?php the_title(); ?></h3>
            </div>

            <div class="mt-2">
                <a style="text-decoration: none;" href="<?php the_permalink(); ?>">
                    <p class="data-post-4 d-flex align-items-end justify-content-between"> <i class="bi bi-calendar-event"></i> <?php the_time('F j, Y'); ?>
                </a><a class="" href="<?php the_permalink(); ?>"><?php the_author();?></a></p>
            </div>
        </div>

        <div class="col-sm-4 text-center mt-3">
            <a href="<?php the_permalink(); ?>">
                <?php if (has_post_thumbnail()) :
                    the_post_thumbnail('small', array('class' => 'img-fluid rounded'));
                endif ?>
            </a>

            <div class="mt-2">
                <h3 class="title-3"><?php the_title(); ?></h3>
            </div>

            <div class="mt-2">
                <a style="text-decoration: none;" href="<?php the_permalink(); ?>">
                    <p class="data-post-4 d-flex align-items-end justify-content-between"> <i class="bi bi-calendar-event"></i> <?php the_time('F j, Y'); ?>
                </a><a class="" href="<?php the_permalink(); ?>"><?php the_author();?></a></p>
            </div>
        </div>

        <?php
            endwhile;
            endif;
        ?>                         
    </div>

    <div class="row call-to-action-2 rounded col-sm-12">
        <div class="col-sm-12">
                <div class="row d-flex align-items-center action">
                    <div class="col-6">
                        <h2>Teste por 30 dias Grátis</h2>
                        <h4 class="call">Você tem acesso a conteúdos exclusivos só aqui na</h4>
                            <div class="img-call"><?php
                                if (function_exists('the_custom_logo')) {
                                the_custom_logo();
                                 }
                                ?>
                            </div>
                            
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
        
        <div class="row mt-5"></div>


</div>

<?php get_footer();
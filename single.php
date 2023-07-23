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
            <p><?php the_author();?>Author</p> 
            <p><?php the_time('F j, Y'); ?> </p>
        </div>

        <div class="col-12 mt-5 text-center" >
                <?php if (has_post_thumbnail()) :
                    the_post_thumbnail('small', array('class' => 'img-fluid rounded'));
                endif ?>
        </div>

        <div class="col-md-12 text-justify">
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
                        
        <div class="col-md-4 text-center mt-3 ">
            <a style="text-decoration: none;" class="single-hov" href="<?php the_permalink(); ?>">
                <div class="single-hov">
                <?php if (has_post_thumbnail()) :
                    the_post_thumbnail('small', array('class' => 'img-fluid rounded'));
                endif ?>
            

                <h3 class="single-hov title-single"><?php the_title(); ?></h3>
                </div>
            </a>
            
            <div class="mt-2">
                <a style="text-decoration: none;" href="<?php the_permalink(); ?>">
                    <p class="data-post-4 d-flex align-items-end justify-content-between"> <i class="bi bi-calendar-event"></i> <?php the_time('F j, Y'); ?>
                </a><a class="" href="<?php the_permalink(); ?>"><?php the_author();?></a></p>
            </div>
        </div>

        <div class="col-md-4 text-center mt-3 ">
            <a style="text-decoration: none;" class="single-hov" href="<?php the_permalink(); ?>">
                <div class="single-hov">
                <?php if (has_post_thumbnail()) :
                    the_post_thumbnail('small', array('class' => 'img-fluid rounded'));
                endif ?>
            

                <h3 class="single-hov title-single"><?php the_title(); ?></h3>
                </div>
            </a>
            
            <div class="mt-2">
                <a style="text-decoration: none;" href="<?php the_permalink(); ?>">
                    <p class="data-post-4 d-flex align-items-end justify-content-between"> <i class="bi bi-calendar-event"></i> <?php the_time('F j, Y'); ?>
                </a><a class="" href="<?php the_permalink(); ?>"><?php the_author();?></a></p>
            </div>
        </div>

        <div class="col-md-4 text-center mt-3 ">
            <a style="text-decoration: none;" class="single-hov" href="<?php the_permalink(); ?>">
                <div class="single-hov">
                <?php if (has_post_thumbnail()) :
                    the_post_thumbnail('small', array('class' => 'img-fluid rounded'));
                endif ?>
            

                <h3 class="single-hov title-single"><?php the_title(); ?></h3>
                </div>
            </a>
            
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

    <div class="row mt-5"></div>

    <div class="row mt-3  d-flex justify-content-center "> 

            <div class="col-md-6 index-call-back text-center border-top border-bottom border-start border-black">
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

            <div class="col-md-6 index-call-back d-flex align-items-center  border-top border-bottom border-end border-black">
                <meta name="csrf-token" content="{{ csrf_token() }}">
                    <form action="?" method="$_POST">                
                        <input type="email" name="email" id="email" placeholder="Digite seu E-mail" required>
                    
                        <button type="submit" class="btn btn-dark rounded" name="email" id="email">Assinar Agora</button>
                    </form>
            </div>

            <div class="mb-5"></div>

        </div>



</div>

<?php get_footer();
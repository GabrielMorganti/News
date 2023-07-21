    <?php wp_footer(); ?>


    <div class="container-fluid rodape">
        <div class="row ">
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
                    <p>A NEWS é uma plataforma muito além do que somente notícias, 
                        <br> ela te proporciona novas experiencias
                    </p>


                <div class="mt-5">
                    <a class="icons" href="https://www.facebook.com" target="_blank"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com" target="_blank"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.twitter.com" target="_blank"><i class="bi bi-twitter"></i></a>
                    <a href="https://www.youtube.com" target="_blank"><i class="bi bi-youtube"></i></a>
                </div>


            </div>

            <div class="col-md-1">

            </div>

            <div class="col-md-3 mt-5">
                <h4>Ola</h4>
            </div>

            <div class="col-md-3 mt-5">
                <h4>Olá</h4>
            </div>


            <div class="col-md-12 mt-3">
                <hr>
                <h2>COPYRIGTH</h2>
            </div>
        </div>
    </div>
</body>
</html>
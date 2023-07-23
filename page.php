<?php get_header(); ?>

<div class="container">

    <div class="row justify-content-center align-items-center g-2 mt-5">
        <div class="col-md-4 contact-1">
            <h2>Entre em contato Conosco</h2>
            <div class="mt-5 "></div>
            <h4><i class="bi bi-geo-alt "></i> R. Alm. Protógenes, 289 - Jardim, Santo André - SP</h4>
            <div class="mt-3"></div>
            <h4> <i class="bi bi-telephone"></i> (11) 98280-5587</h4>
            <div class="mt-3"></div>
            <h4> <i class="bi bi-envelope-paper"></i> morgantigabriel@gmail.com</h4>
            <div class="mt-4 flex-container d-flex justify-content-evenly">
                <a class="icons rounded-circle border border-secondary" href="https://www.facebook.com" target="_blank"><h4><i class="bi bi-facebook"></i></h4></a>
                <a class="icons rounded-circle border border-secondary" href="https://www.instagram.com" target="_blank"><h4><i class="bi bi-instagram"></i></h4></a>
                <a class="icons rounded-circle border border-secondary" href="https://www.twitter.com" target="_blank"><h4><i class="bi bi-twitter"></i></h4></a>
                <a class="icons rounded-circle border border-secondary" href="https://www.youtube.com" target="_blank"><h4><i class="bi bi-youtube"></i></h4></a>
            </div>
            <div class="mt-3"></div>
        </div>

        <div class="col-md-2">

        </div>

        <div class="col-md-6">
        <div class="row">
            <form action="?" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <label for="nome" class="form-label"><strong>Nome</strong></label>
                        <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome Completo" required>
                    </div>
                    <div class="col-md-6">
                        <label for="telefone" class="form-label"><strong>Telefone</strong></label>
                        <input class="form-control" type="tel" name="telefone" id="telefone" placeholder="Ex.: 11 98226-3443" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label mt-2"><strong>E-mail</strong></label>
                        <input class="form-control" type="email" name="email" id="email" placeholder="Ex.: exemplo@gmail.com">
                    </div>
                    <div class="col-md-6">
                        <label for="anexo" class="form-label mt-2"><strong>Anexo</strong></label>
                        <input class="form-control" type="file" name="anexo" id="anexo">
                    </div>
                    <div class="col-12">
                        <label for="conteudo" class="form-label mt-2"><strong>Conteúdo</strong></label>
                        <textarea class="form-control" name="conteudo" id="conteudo" placeholder="Digite aqui a mensagem que você deseja nos enviar"></textarea>
                    </div>
                    <div class="col-md-2 mt-3">
                        <button class="btn " type="submit">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
        </div>

    </div>



</div>

<?php get_footer(); ?>
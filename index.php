<?php include ("header.php"); ?>

<section class="fdez-banner">
    <div class="swiper-container swiper-main">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <figure>
                    <img src="assets/img/midia/banner.jpg" alt="Banner destaque">
                    <div class="container position-relative">
                        <figcaption>
                            <div class="titulo">Previnir é cuidar.</div>                         
                        </figcaption>
                    </div>
                </figure>
            </div>

        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <!-- <i class="fas fa-chevron-left"></i>
        <i class="fas fa-chevron-right"></i> -->
        <div class="swiper-button-next swiper-button-white"></div>
        <div class="swiper-button-prev swiper-button-white"></div>
    </div>
</section>

<section class="fdez-topicos">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12">
                <div id="topico-1">
                    <h2>Imunização</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                    <div class="row">
                    <div class="col-md-6 col-12">
                        <img src="assets/img/ico-remedio.png" alt="imagem">
                        <h3>Via delivery</h3>
                    </div>
                    <div class="col-md-6 col-12">
                        <img src="assets/img/ico-hospital.png" alt="imagem">
                        <h3>Presencial</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12"> 
                <div id="topico-2">
                    <h2>Check up</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s </p>
                    <img src="assets/img/ico-ficha.png" alt="imagem">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="fdez-quem-somos">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-12">
                <img src="assets/img/img-quem-somos.png" alt="imagem">
            </div>
            <div class="col-md-8 col-12">
                <h2>Quem somos</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
            </div>
        </div>
    </div>
</section>

<section class="fdez-lista">
    <div class="container">
        <div class="row">
            <div id="lista-1" class="col-md-4 col-12">
                <img src="assets/img/ico-calendario.png" alt="imagem">
                <h2>Agendamento</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                <img src="assets/img/ico-seta.png" alt="imagem">
            </div>
            <div id="lista-2" class="col-md-4 col-12">
                <img src="assets/img/ico-folha.png" alt="imagem">
                <h2>Seus Resultados</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                <img src="assets/img/ico-seta.png" alt="imagem">
            </div>
            <div id="lista-3" class="col-md-4 col-12">
            <img src="assets/img/ico-calendario.png" alt="imagem">
                <h2>Carteira</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                <img src="assets/img/ico-seta.png" alt="imagem">
            </div>
        </div>
    </div>
</section>

<section class="fdez-faq">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>FAQ</h2>
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Pergunta 1
                            </button>
                        </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. 
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Pergunta 2
                            </button>
                        </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. 
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Pergunta 3
                            </button>
                        </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. 
                        </div>
                        </div>
                    </div>
                </div>
                <a href="" class="btn-mais" title="">Veja mais</a>
            </div>
        </div>
    </div>
</section>

<section class="fdez-fale-conosco">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <h2>Fale Conosco</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                <form>
    <div class="form-group row">
        
        <div class="col-4">
        <input id="idx-nome" name="idx-nome" placeholder="Nome" type="text" class="form-control">
        </div>
        <div class="col-4">
        <input id="idx-email" name="idx-email" placeholder="Email" type="text" class="form-control">
        </div>
        <div class="col-4">
        <input id="idx-telefone" name="idx-telefone" placeholder="Telefone" type="text" class="form-control">
        </div>
        
    </div>
    
    <div class="form-group row">
        
        <div class="col-12">
        <textarea id="idx-mensagem" name="idx-mensagem" cols="40" rows="5" class="form-control"></textarea>
        </div>
    </div> 
    <div class="form-group row">
    <div class="offset-4 col-8">
    <button name="submit" type="submit" class="btn btn-primary">Enviar</button>
    <img src="assets/img/ico-balao.png" alt="imagem">
    </div>
</div>
</form>
            </div>
        </div>
    </div>
</section>
<?php include ("footer.php"); ?>
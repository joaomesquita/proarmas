<?php include 'components/header.php' ?>

<div class="hero" style="background-image: url(img/hero.png);">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-5">
                <h5 class="font-48 fw-light mb-0">Não é sobre armas</h5>
                <h1 class="font-96 fw-bold lh-1 mb-4">É sobre<br>Liberdade</h1>
                <a href="#" class="btn btn-primary w-50">Seja Membro</a>
            </div>
        </div>
    </div>
</div>

<div class="session bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                <h2 class="font-32 fw-bold">A nossa missão é<br>construir um <span class="color-primary">país livre</span>.</h2>
                <p class="font-18 fw-medium">Por aqui, lutamos lado a lado, incessantemente<br>para que nossos direitos não sejam tolhidos.</p>
                <a href="#" class="btn btn-outline-primary">Conheça o Movimento</a>
            </div>
            <div class="col-12 col-lg-8">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-nossos-planos-tab" data-bs-toggle="pill" data-bs-target="#pills-nossos-planos" type="button" role="tab" aria-controls="pills-nossos-planos" aria-selected="true">Nossos Planos</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-nosso-movimento-tab" data-bs-toggle="pill" data-bs-target="#pills-nosso-movimento" type="button" role="tab" aria-controls="pills-nosso-movimento" aria-selected="false">Nosso Movimento</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-comunidade-tab" data-bs-toggle="pill" data-bs-target="#pills-comunidade" type="button" role="tab" aria-controls="pills-comunidade" aria-selected="false">Comunidade</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-servicos-tab" data-bs-toggle="pill" data-bs-target="#pills-servicos" type="button" role="tab" aria-controls="pills-servicos" aria-selected="false">Serviços</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-nossa-loja-tab" data-bs-toggle="pill" data-bs-target="#pills-nossa-loja" type="button" role="tab" aria-controls="pills-nossa-loja" aria-selected="false">Nossa Loja</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-nossos-planos" role="tabpanel" aria-labelledby="pills-nossos-planos-tab" tabindex="0">
                        <div class="d-flex flex-column flex-lg-row align-items-center">
                            <div class="flex-shrink-0">
                                <img src="img/nossos-planos.svg" alt="" class="img-fluid mb-4 mb-lg-0">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <p class="font-18 fw-medium mb-0">O projeto "Pró Armas" visa expandir o diálogo sobre a legislação de armas através de cursos detalhados e análises profundas. Planejamos oferecer webinars, workshops e debates para educar e engajar o público em tópicos que envolvem as dinâmicas sociopolíticas e filosóficas das políticas de desarmamento. Nosso objetivo é fortalecer a compreensão sobre os direitos individuais e as implicações legais do controle de armas, promovendo uma sociedade mais informada e preparada para discussões legislativas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-nosso-movimento" role="tabpanel" aria-labelledby="pills-nosso-movimento-tab" tabindex="0">...</div>
                    <div class="tab-pane fade" id="pills-comunidade" role="tabpanel" aria-labelledby="pills-comunidade-tab" tabindex="0">...</div>
                    <div class="tab-pane fade" id="pills-servicos" role="tabpanel" aria-labelledby="pills-servicos-tab" tabindex="0">...</div>
                    <div class="tab-pane fade" id="pills-nossa-loja" role="tabpanel" aria-labelledby="pills-nossa-loja-tab" tabindex="0">...</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-12">
                <hr class="my-5">
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-12 mb-4">
                <h6 class="font-16 fw-semibold">Aprenda com o Pró Armas</h6>
                <h2 class="font-32 fw-bold">Confira o que o <span class="color-secondary">Pró Armas</span> oferece</h2>
            </div>
            <div class="col-12 col-lg-12">
                <div class="swiper programas">
                    <div class="swiper-wrapper">
                        <?php for ($i = 1; $i < 3; $i++) { ?>
                        <div class="swiper-slide">
                            <div class="card card-programa mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="img/programa<?php echo $i ?>.jpg" class="img-fluid rounded-start w-100" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <span class="badge badge-presencial mb-2">Presencial</span>
                                            <h5 class="font-24 fw-semibold">Série Liberdade</h5>
                                            <p class="font-16 fw-medium">Explora a relação entre liberdade individual e controle de armas, destacando implicações legais e éticas.</p>
                                            <a href="programa.php" class="btn btn-outline-primary">Saiba Mais</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="session historia" style="background-image: url(img/video.png);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-5 text-center">
                <img src="img/proarmas-shield.svg" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-lg-6">
                <h6 class="font-16 fw-semibold color-secondary mb-4">Sobre Nós</h6>
                <h2 class="font-32 fw-bold color-light mb-4">História do <span class="color-secondary">Pró Armas</span></h2>
                <p class="font-18 fw-medium color-light">Muito mais do que estudar e tecer análises sobre a complexa legislação de controle de armas abordamos as questões sociológicas e filosóficas que estão por trás das políticas de desarmamento, bem como, o que sustenta o seu direito de ter acesso às armas de fogo.</p>
                <a href="#" class="btn btn-outline-light">Saiba Mais<i class="bi bi-chevron-right color-light ms-2"></i></a>
            </div>
        </div>
    </div>
</div>

<div class="session conteudo bg-primary">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 col-lg-12 text-center">
                <h2 class="font-32 fw-bold color-light">Para você e <span class="color-primary">para sua empresa</span></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="row row-cols-1 row-cols-lg-4 g-lg-4 gy-5">
                    <div class="col">
                        <a href="">
                            <div class="card card-conteudo">
                                <img src="img/conteudo1.jpg" class="card-img" alt="...">
                                <div class="card-img-overlay">
                                    <h5 class="font-24 fw-bold color-light">Assine Nossos<br>Conteúdos</h5>
                                    <i class="bi bi-arrow-right font-24 color-primary"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="">
                            <div class="card card-conteudo">
                                <img src="img/conteudo2.jpg" class="card-img" alt="...">
                                <div class="card-img-overlay">
                                    <h5 class="font-24 fw-bold color-light">Programas<br>Online</h5>
                                    <i class="bi bi-arrow-right font-24 color-primary"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="">
                            <div class="card card-conteudo">
                                <img src="img/conteudo3.jpg" class="card-img" alt="...">
                                <div class="card-img-overlay">
                                    <h5 class="font-24 fw-bold color-light">Baixe<br>Nosso App</h5>
                                    <i class="bi bi-arrow-right font-24 color-primary"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="">
                            <div class="card card-conteudo">
                                <img src="img/conteudo4.jpg" class="card-img" alt="...">
                                <div class="card-img-overlay">
                                    <h5 class="font-24 fw-bold color-light">Participe das<br>Comunidades</h5>
                                    <i class="bi bi-arrow-right font-24 color-primary"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="session objetivo bg-dark">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 col-lg-12 text-center">
                <h2 class="font-32 fw-bold color-light">O objetivo do <span class="color-primary">Pró Armas</span></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="row row-cols-1 row-cols-lg-4 g-lg-4 gy-5">
                    <div class="col text-center">
                        <h2 class="font-96 fw-extralight color-light">12%</h2>
                        <p class="font-18 fw-semibold color-primary mb-0">Mais inscritos em 2024</p>
                    </div>
                    <div class="col text-center">
                        <h2 class="font-96 fw-extralight color-light">87mil</h2>
                        <p class="font-18 fw-semibold color-primary mb-0">Apoiadores</p>
                    </div>
                    <div class="col text-center">
                        <h2 class="font-96 fw-extralight color-light">5Mi</h2>
                        <p class="font-18 fw-semibold color-primary mb-0">Em investimento</p>
                    </div>
                    <div class="col text-center">
                        <h2 class="font-96 fw-extralight color-light">87%</h2>
                        <p class="font-18 fw-semibold color-primary mb-0">Crescimento até o fim de 2024</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="session loja" style="background-image: url(img/loja.png);;">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12 text-center">
                <h2 class="font-32 fw-bold color-light mb-4">Conheça nossa loja</h2>
                <a href="#" class="btn btn-primary">Acessar Loja<i class="bi bi-chevron-right color-light ms-2"></i></a>
            </div>
        </div>
    </div>
</div>

<div class="session">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 col-lg-12 text-center">
                <h2 class="font-32 fw-bold">O que dizem sobre nosso <span class="color-secondary">Movimento</span></h2>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12 col-lg-12">
                <div class="swiper depoimentos">
                    <div class="swiper-wrapper">
                        <?php for ($i = 1; $i < 4; $i++) { ?>
                        <div class="swiper-slide">
                            <a data-fancybox="depoimento" href="https://storage.googleapis.com/gtv-videos-bucket/sample/ForBiggerFun.mp4">
                                <div class="card card-depoimento">
                                    <img src="img/depoimento<?php echo $i ?>.jpg" class="card-img" alt="...">
                                    <div class="card-img-overlay">
                                        <img src="img/play-depoimento.svg" alt="" class="img-fluid position-relative" style="top: 40%;">
                                        <div class="content">
                                            <h6 class="font-16 fw-bold color-light">Mariana Rocha</h6>
                                            <p class="font-14 fw-medium color-light">O curso 'Série Liberdade' foi revelador. Nunca vi uma análise tão profunda sobre liberdade e controle de armas. Recomendo fortemente!</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-7 text-center mt-5">
                <h2 class="font-32 fw-bold">Nosso movimento precisa de você!</h2>
                <p class="font-18 fw-medium"> Engaje-se no "Pró Armas" para defender nossos direitos e liberdades. Participe de cursos e debates. Sua voz é crucial para moldar leis justas. Junte-se a nós!</p>
                <a href="#" class="btn btn-primary">Seja Membro<i class="bi bi-chevron-right color-light ms-2"></i></a>
            </div>
        </div>
    </div>
</div>

<?php include 'components/footer.php' ?>
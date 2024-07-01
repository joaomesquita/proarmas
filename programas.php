<?php include 'components/header.php' ?>

<div class="modal fade" id="filtros" tabindex="-1" aria-labelledby="filtrosLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="font-18 fw-bold mb-0" id="filtrosLabel">Filtrar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="pesquisa mb-4">
                    <form action="">
                        <input type="text" class="form-control" placeholder="O que você está procurando?">
                        <button class="btn btn-primary w-100 mt-2">Buscar</button>
                    </form>
                </div>
                
                <h5 class="font-18 fw-semibold mb-2">Local</h5>
                <div class="checks mb-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="presencial">
                        <label class="form-check-label" for="presencial">Presencial</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="online">
                        <label class="form-check-label" for="online"> Online</label>
                    </div>
                </div>

                <h5 class="font-18 fw-semibold mb-2">Assunto</h5>
                <div class="checks">
                    <?php for ($i = 0; $i < 6; $i++) { ?>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="assunto">
                        <label class="form-check-label" for="assunto">Assunto</label>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="hero-interna" style="background-image: url(img/programas.png);">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <h5 class="font-32 fw-light mb-0">Nossos</h5>
                <h1 class="font-64 fw-bold">Programas</h1>
            </div>
        </div>
    </div>
</div>

<div class="session">
    <div class="container">
        <div class="row gx-lg-5">
            <div class="col-12 col-lg-3 d-none d-lg-block">
                <h5 class="font-18 fw-semibold mb-2">Filtrar</h5>
                <div class="pesquisa mb-4">
                    <form action="">
                        <input type="text" class="form-control" placeholder="O que você está procurando?">
                        <button class="btn btn-primary w-100 mt-2">Buscar</button>
                    </form>
                </div>
                
                <h5 class="font-18 fw-semibold mb-2">Local</h5>
                <div class="checks mb-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="presencial">
                        <label class="form-check-label" for="presencial">Presencial</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="online">
                        <label class="form-check-label" for="online"> Online</label>
                    </div>
                </div>

                <h5 class="font-18 fw-semibold mb-2">Assunto</h5>
                <div class="checks">
                    <?php for ($i = 0; $i < 6; $i++) { ?>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="assunto">
                        <label class="form-check-label" for="assunto">Assunto</label>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-12 d-block d-lg-none">
                <div class="d-flex flex-row justify-content-between mb-4">
                    <form class="w-100 me-2" action="">
                        <input type="text" class="form-control w-100" placeholder="O que você está procurando?">
                    </form>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#filtros"><img src="img/filter.svg" alt="" class="img-fluid"></a>
                </div>
            </div>
            <div class="col-12 col-lg-9">
                <div class="row row-cols-1 row-cols-lg-3 g-lg-5 gy-4">
                    <?php for ($i = 0; $i < 6; $i++) { ?>
                    <div class="col">
                        <a href="programa.php" class="text-decoration-none">
                            <img src="img/programa.jpg" alt="" class="img-fluid rounded w-100 mb-3">
                            <h5 class="font-18 fw-semibold">Série Liberdade</h5>
                            <p class="font-16">Explora a relação entre liberdade individual e controle de armas, destacando implicações legais e éticas.</p>
                            <div class="d-flex flex-row justify-content-between align-items-center">
                                <span class="badge badge-presencial">Presencial</span>
                                <div class="d-flex flex-row align-items-center">
                                    <p class="font-12 me-2 mb-0"><img src="img/play-solid.svg" class="img-fluid me-1">9 aulas</p>
                                    <p class="font-12 mb-0"><img src="img/clock-solid.svg" class="img-fluid me-1">30min</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="programa.php" class="text-decoration-none">
                            <img src="img/programa.jpg" alt="" class="img-fluid rounded w-100 mb-3">
                            <h5 class="font-18 fw-semibold">Série Liberdade</h5>
                            <p class="font-16">Explora a relação entre liberdade individual e controle de armas, destacando implicações legais e éticas.</p>
                            <div class="d-flex flex-row justify-content-between align-items-center">
                                <span class="badge badge-online">Online</span>
                                <div class="d-flex flex-row align-items-center">
                                    <p class="font-12 me-2 mb-0"><img src="img/play-solid.svg" class="img-fluid me-1">9 aulas</p>
                                    <p class="font-12 mb-0"><img src="img/clock-solid.svg" class="img-fluid me-1">30min</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php } ?>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-12">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link"><i class="bi bi-chevron-left"></i></a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="bi bi-chevron-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'components/footer.php' ?>
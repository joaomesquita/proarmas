<?php include 'components/header.php' ?>

<div class="session bg-primary py-3">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Nossos Programas</a></li>
                        <li class="breadcrumb-item"><a href="#">Presencial</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Série Liberdade</li>
                    </ol>
                </nav>   
            </div>
        </div>
    </div>
</div>

<div class="session">
    <div class="container">
        <div class="row gx-lg-5">
            <div class="col-12 col-lg-4">
                <img src="img/programa.jpg" alt="" class="img-fluid rounded mb-3">
                <a href="#" class="btn btn-primary w-100">Torne-se Membro</a>
                <hr class="my-4">

                <h5 class="font-18 fw-semibold mb-3">Detalhes do Conteúdo</h5>
                <div class="d-flex align-items-center mb-2">
                    <div class="flex-shrink-0">
                        <img src="img/modulos.svg" alt="..." class="img-fluid">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <p class="font-12 fw-semibold mb-0">8 módulos</p>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <img src="img/duracao.svg" alt="..." class="img-fluid">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <p class="font-12 fw-semibold mb-0">30 minutos de duração</p>
                    </div>
                </div>
                <hr class="my-4">

                <h5 class="font-18 fw-semibold mb-3">Mentores</h5>
                <?php for ($i = 0; $i < 3; $i++) { ?>
                    <div class="d-flex align-items-start mb-2">
                        <div class="flex-shrink-0">
                            <img src="https://i.pravatar.cc/64" class="rounded-circle" alt="...">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="font-16 fw-bold mb-1">Luccas Riedo</h6>
                            <p class="font-14 fw-semibold">É CEO do ACME Inc., escola de negócios e Edtech que traduz as melhores práticas das empresas de alto crescimento para negócios tradicionais. Formado em Engenharia Civil pela Universidade Federal de Minas Gerais (UFMG), Riedo foi responsável por projetos e liderou equipes nas regiões centro-oeste e nordeste pela Odebrecht.</p>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="col-12 col-lg-8">
                <h1 class="font-32 fw-bold">Série Liberdade</h1>
                <p class="font-18 mb-5">Dê o primeiro passo em sua jornada de liderança com neste curso que é a porta de entrada da nossa Trilha de Capacitação em Liderança. Este curso é o ponto inicial, o primeiro de três, e é especialmente moldado para você que está se tornando um Líder em Potencial ou é um Novo Líder. Vamos guiá-lo pelos primeiros passos nesse universo de liderança no ambiente de negócios, enfatizando a importância de uma liderança assertiva e práticas adequadas para o seu perfil de liderança. Durante o treinamento, vamos trabalhar juntos para desenvolver as habilidades fundamentais de liderança, que são essenciais para que você desempenhe um papel mais forte e eficaz. A meta é fazer com que você compreenda e pratique as competências de liderança, aumentando sua performance e resultados no complexo e competitivo ambiente empresarial. Preparado para dar o primeiro passo em direção à uma liderança de excelência? Venha conosco nessa jornada de aprendizado e desenvolvimento, e prepare-se para assumir a posição de liderança com confiança e sucesso.</p>
            
                <h2 class="font-32 fw-bold mb-3">Conteúdos do programa</h2>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#modulo1" aria-expanded="true" aria-controls="modulo1"><img src="img/modulo.svg" class="img-fluid me-2">Boas-Vindas e Apresentação</button>
                        </h2>
                        <div id="modulo1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="font-16"><img src="img/play.svg" alt="" class="img-fluid me-2">Boas-Vindas a Trilha de Liderança</p>
                                <p class="font-16"><img src="img/play.svg" alt="" class="img-fluid me-2">Apresentação da Trilha de Capacitação</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#modulo2" aria-expanded="true" aria-controls="modulo2"><img src="img/modulo.svg" class="img-fluid me-2">Introdução a Liderança</button>
                        </h2>
                        <div id="modulo2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="font-16"><img src="img/play.svg" alt="" class="img-fluid me-2">Introdução ao Módulo</p>
                                <p class="font-16"><img src="img/play.svg" alt="" class="img-fluid me-2">Elucidando Conceitos: O Que é Liderança?</p>
                                <p class="font-16"><img src="img/play.svg" alt="" class="img-fluid me-2">Perfil Pessoal e Cultura Organizacional: Quais os Estilos de Liderança?</p>
                                <p class="font-16"><img src="img/play.svg" alt="" class="img-fluid me-2">Responsabilidades: Quais os Deveres de um Líder?</p>
                                <p class="font-16"><img src="img/play.svg" alt="" class="img-fluid me-2">Liderança e Negócio: Qual a Função de um Líder no Negócio?</p>
                                <p class="font-16"><img src="img/play.svg" alt="" class="img-fluid me-2">Liderança e Pessoas: Qual o Papel do Líder no Time?</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#modulo3" aria-expanded="true" aria-controls="modulo3"><img src="img/modulo.svg" class="img-fluid me-2">Desenvolvendo o Potencial para Liderar</button>
                        </h2>
                        <div id="modulo3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#modulo4" aria-expanded="true" aria-controls="modulo4"><img src="img/modulo.svg" class="img-fluid me-2">Desenvolvendo o Potencial para Liderar</button>
                        </h2>
                        <div id="modulo4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#modulo5" aria-expanded="true" aria-controls="modulo5"><img src="img/modulo.svg" class="img-fluid me-2">Exercitando as Premissas da Liderança</button>
                        </h2>
                        <div id="modulo5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#modulo6" aria-expanded="true" aria-controls="modulo6"><img src="img/modulo.svg" class="img-fluid me-2">Comunicação Interpessoal</button>
                        </h2>
                        <div id="modulo6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#modulo7" aria-expanded="true" aria-controls="modulo7"><img src="img/modulo.svg" class="img-fluid me-2">Gestão Pessoal Diária</button>
                        </h2>
                        <div id="modulo7" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#modulo8" aria-expanded="true" aria-controls="modulo8"><img src="img/modulo.svg" class="img-fluid me-2">Liderando Uma Pessoa</button>
                        </h2>
                        <div id="modulo8" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#modulo9" aria-expanded="true" aria-controls="modulo9"><img src="img/modulo.svg" class="img-fluid me-2">Encerramento e Próximos Passos</button>
                        </h2>
                        <div id="modulo9" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'components/footer.php' ?>
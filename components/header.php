<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pro Armas Brasil</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fancybox.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark" id="topo">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="img/logo.svg" alt="" class="img-fluid">
            </a>
            <div class="btn-circle d-block d-lg-none">
                <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#menu">
                    <img src="img/menu.svg" alt="" width="40px" class="img-fluid">
                </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Programas</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="programa.php">Programas Presencial</a></li>
                            <li><a class="dropdown-item" href="programa.php">Programas Online</a></li>
                            <li><a class="dropdown-item" href="programas.php">Outros Programas</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Para Membros</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Comunidade</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Loja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">O Movimento</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn" href="#">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="modal fade" id="menu" tabindex="-1" aria-labelledby="menu" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content p-3">
                <div class="modal-header border-0">
                    <img src="img/logo.svg" alt="" class="img-fluid">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Programas</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="programa.php">Programas Presencial</a></li>
                                <li><a class="dropdown-item" href="programa.php">Programas Online</a></li>
                                <li><a class="dropdown-item" href="programas.php">Outros Programas</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Para Membros</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Comunidade</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Loja</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">O Movimento</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contato</a>
                        </li>
                        </li>
                    </ul>
                </div>
                <div class="modal-footer border-0">
                    <a class="btn btn-primary w-100" href="#">Login</a>
                </div>
            </div>
        </div>
    </div>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @laravelPWA
    <style>
        .custom-img {
            max-width: 10px;
            width: 40%;
            height: auto;
        }
    </style>
    @vite(['resources/js/app.js'])
    <title>Inicio | Movie Cinema</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://www.creativefabrica.com/wp-content/uploads/2021/11/02/Abstract-cinema-logo-vector-template-Graphics-19546476-1-580x386.png"
                    alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                Cinema
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Directores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Categorias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Peliculas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> <br><br>
    <div class="container text-center">
        <img src="https://utt.edu.mx/formatos/LOGOS(PNG)/UTTactualizadoRGB.png" width="10%"
            alt="Logo de la Universidad" class="img-fluid custom-img"> <br><br>
        <div class="row">
            <table class="table table-group-divider">
                <thead>
                    <tr>
                        <th colspan="4" scope="col">Mariano Alejandro Cabral Rodriguez</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr>
                        <th class="table-active" scope="row">Matricula:</th>
                        <td colspan="3">20170010</td>
                    </tr>
                    <tr class="table-group-divider">
                        <th class="table-active" scope="row">Cuatrimestre:</th>
                        <td>10</td>
                        <td class="table-active" scope="row">Sección:</td>
                        <td>°A</td>
                    </tr>
                    <tr class="table-group-divider">
                        <th class="table-active" scope="row">Materia:</th>
                        <td colspan="3">Aplicaciones Web Progresivas</td>
                    </tr>
                    <tr class="table-group-divider">
                        <th class="table-active" scope="row">Docente:</th>
                        <td colspan="3">Dr. Eliasib Reyes Moreno</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>

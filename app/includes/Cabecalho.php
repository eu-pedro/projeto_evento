<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <title>Projeto Gerenciamento de Eventos</title>
</head>
<body>
    <header class="sticky-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

            <div class="container-fluid">

                <a href="#" class="navbar-brand">Gerenciador de Eventos</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                    <span class="navbar-toggler-icon"></span>

                </button>

                <div class="collapse navbar-collapse" id="menu">
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a href="../view/VisualizarEventoView.php" class="nav-link ">Eventos</a>
                        </li>

                        <li class="nav-item">
                            <a href="" class="nav-link ">Logout</a>
                        </li>
                    </ul>

                </div>

            </div>
        </nav>
    </header>
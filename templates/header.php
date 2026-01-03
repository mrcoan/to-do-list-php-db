<?php
require_once('config/db.php');
include_once('config/url.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List - Lista de Tarefas</title>

    <link rel="stylesheet" href="<?= $BASE_URL ?>css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<header>
    <img src="<?= $BASE_URL ?>assets/img/logo.png" alt="To-do-list logo">
    <h1>To-Do-List</h1>

    <nav id="navbar">
        <a href="<?= $BASE_URL ?>index.php"><img src="<?= $BASE_URL ?>/assets/img/icon/list.png" alt="Tarefas"></a>
        <a href="<?= $BASE_URL ?>adicionar.php"><img src="<?= $BASE_URL ?>/assets/img/icon/add.png" alt="Adicionar Tarefa"></a>
    </nav>
</header>

<body>
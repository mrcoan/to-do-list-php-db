<?php

include_once('../config/db.php');

$id = $_GET['id'];

$sql = "UPDATE tarefas
        SET status_tarefa = 'concluida'
        WHERE id = :id";

$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

header('Location: ../index.php');
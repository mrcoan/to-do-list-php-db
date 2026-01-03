<?php

include_once('../config/db.php');

$id = $_GET['id'];
$tarefa = $_POST['tarefa'];
$descricao = $_POST['descricao'];

if ($tarefa && $descricao) {
    $sql = "UPDATE tarefas
            SET tarefa = :tarefa, descricao = :descricao
            WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':tarefa', $tarefa);
    $stmt->bindParam(':descricao', $descricao);
    $stmt->execute();
}

header("Location: ../visualizar.php?id=$id");

<?php

include_once('../config/db.php');

$tarefa = $_POST['tarefa'];
$descricao = $_POST['descricao'];

if ($tarefa && $descricao) {
    $sql = "INSERT INTO tarefas (tarefa, descricao) 
            VALUES (:tarefa, :descricao)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':tarefa', $tarefa);
    $stmt->bindParam(':descricao', $descricao);
    $stmt->execute();
}

header('Location: ../index.php');

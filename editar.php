<?php
include_once('data/tarefas.php');
include_once('templates/header.php');

$id = $_GET['id'];

$sql = "SELECT * FROM tarefas WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

$tarefa_encontrada = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<div class="container">
    <h2>Editar Tarefa</h2>
    <hr>

    <form action="<?= $BASE_URL ?>process/editar_tarefa.php?id=<?= $tarefa_encontrada['id'] ?>" method="post">
        <label for="tarefa">Tarefa: </label>
        <input type="text" name="tarefa" id="tarefa" value="<?= $tarefa_encontrada['tarefa'] ?>" required>

        <label for="descricao">Descrição: </label>
        <textarea name="descricao" id="descricao"><?= $tarefa_encontrada['descricao'] ?></textarea>

        <button type="submit" class="btn-acao btn-adicionar">Adicionar</button>
    </form>

    <a href="<?= $BASE_URL ?>index.php" class="btn-acao btn-voltar">Voltar</a>

</div>

</body>

</html>
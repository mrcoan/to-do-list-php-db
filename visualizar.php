<?php
include_once('templates/header.php');

$id = $_GET['id'];

$sql = "SELECT * FROM tarefas WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
$tarefa_encontrada = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<div class="container">
    <h2>Tarefa</h2>
    <hr>

    <?php if (!$tarefa_encontrada): ?>
        <p>Tarefa não encontrada.</p>
    <?php else: ?>
        <article class="card-info">
            <h3><?= $tarefa_encontrada['tarefa'] ?></h3>
            <?php if ($tarefa_encontrada['status_tarefa'] === 'pendente'): ?>
                <p class="status-pendente"><?= $tarefa_encontrada['status_tarefa'] ?></p>
            <?php else: ?>
                <p class="status-concluida"><?= $tarefa_encontrada['status_tarefa'] ?></p>
            <?php endif; ?>
            <p><strong>Descrição: </strong><?= $tarefa_encontrada['descricao'] ?></p>

            <small><strong>ID: </strong> <?= $tarefa_encontrada['id'] ?></small>
            <small><strong>Criada em: </strong><?= $tarefa_encontrada['data_criacao'] ?></small>

            <div class="acoes">
                <?php if ($tarefa_encontrada['status_tarefa'] === 'pendente'): ?>
                    <a href="<?= $BASE_URL ?>process/concluir_tarefa.php?id=<?= $tarefa_encontrada['id'] ?>" class="btn-acao btn-concluir">Concluir</a>
                    <a href="<?= $BASE_URL ?>editar.php?id=<?= $tarefa_encontrada['id'] ?>" class="btn-acao btn-editar">Editar</a>
                    <a href="<?= $BASE_URL ?>process/excluir_tarefa.php?id=<?= $tarefa_encontrada['id'] ?>" class="btn-acao btn-excluir">Excluir</a>
                <?php else: ?>
                    <a href="<?= $BASE_URL ?>process/excluir_tarefa.php?id=<?= $tarefa_encontrada['id'] ?>" class="btn-acao btn-excluir">Excluir</a>
                <?php endif; ?>
            </div>
            <a href="<?= $BASE_URL ?>index.php" class="btn-acao btn-voltar">Voltar</a>
        </article>
    <?php endif; ?>

</div>

</body>

</html>
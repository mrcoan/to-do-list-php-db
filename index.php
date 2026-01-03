<?php
include_once('templates/header.php');

$sql = "SELECT * FROM tarefas WHERE status_tarefa = 'pendente' ORDER BY id DESC";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$tarefas_pendentes = $stmt->fetchAll(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM tarefas WHERE status_tarefa = 'concluida' ORDER BY id DESC";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$tarefas_concluidas = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="container">

    <section class="tarefas">
        <h2>Tarefas Pendentes</h2>
        <hr>

        <div class="cards">
            <?php if (empty($tarefas_pendentes)): ?>
                <p>Não há tarefas pendentes.</p>
            <?php else: ?>
                <?php foreach ($tarefas_pendentes as $tarefa): ?>
                    <a href="<?= $BASE_URL ?>visualizar.php?id=<?= $tarefa['id'] ?>">
                        <article class="card card-pendente">
                            <h3><?= $tarefa['tarefa'] ?></h3>
                            <p><?= $tarefa['status_tarefa'] ?></p>
                            <small>Criada em: <?= $tarefa['data_criacao'] ?></small>
                        </article>
                    </a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <small>Tarefas pendentes: <?= count($tarefas_pendentes) ?></small>
    </section>

    <section class="tarefas">
        <h2>Tarefas Concluídas</h2>
        <hr>

        <div class="cards">
            <?php if (empty($tarefas_concluidas)): ?>
                <p>Não há tarefas concluídas.</p>
            <?php else: ?>
                <?php foreach ($tarefas_concluidas as $tarefa): ?>
                    <a href="<?= $BASE_URL ?>visualizar.php?id=<?= $tarefa['id'] ?>">
                        <article class="card card-concluida">
                            <h3><?= $tarefa['tarefa'] ?></h3>
                            <p><?= $tarefa['status_tarefa'] ?></p>
                            <small>Criada em: <?= $tarefa['data_criacao'] ?></small>
                        </article>
                    </a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <small>Tarefas concluídas: <?= count($tarefas_concluidas) ?></small>
    </section>
</div>

</body>

</html>
<?php
include_once('data/tarefas.php');
include_once('templates/header.php');

?>

<div class="container">
    <h2>Adicionar Tarefa</h2>
    <hr>

    <form action="<?= $BASE_URL ?>process/adicionar_tarefa.php" method="post">
        <label for="tarefa">Tarefa: </label>
        <input type="text" name="tarefa" id="tarefa" required>

        <label for="descricao">Descrição: </label>
        <textarea name="descricao" id="descricao"></textarea>

        <button type="submit" class="btn-acao btn-adicionar">Adicionar</button>
    </form>

    <a href="<?= $BASE_URL ?>index.php" class="btn-acao btn-voltar">Voltar</a>

</div>

</body>

</html>
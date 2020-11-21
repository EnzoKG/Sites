<?php
    require_once __DIR__ . '/templates/cabecalho.php';
    $erro = filter_input(INPUT_GET, 'erro', FILTER_SANITIZE_STRING);
?>
    <h1>Cadastrar Contato</h1>
    <?= isset($erro) ? "<p>$erro</p>" : '' ?>
    <form action="<?=rotaBase('app/processa_cadastro.php')?>" method="post">
        <input type="email" name="email" id="email" placeholder="Email">
        <input type="text" name="nome" id="nome" placeholder="Nome">
        <input type="text" name="telefone" id="telefone" placeholder="Telefone">
        <input type="submit" value="Cadastrar">
    </form>
<?php
    require_once __DIR__ . '/templates/rodape.php';
?>
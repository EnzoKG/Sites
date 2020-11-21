<?php
    require_once __DIR__ . '/templates/cabecalho.php';
    $erro = filter_input(INPUT_GET, 'erro', FILTER_SANITIZE_STRING);
?>
    <h1>Login</h1>
    <?= isset($erro) ? "<p>$erro</p>" : '' ?>
    <form action="<?=rotaBase('app/login.php')?>" method="post">
        <input type="text" name="login" id="login" placeholder="Login">
        <input type="password" name="senha" id="senha" placeholder="Senha">
        <input type="submit" value="Logar">
    </form>
<?php
    require_once __DIR__ . '/templates/rodape.php';
?>
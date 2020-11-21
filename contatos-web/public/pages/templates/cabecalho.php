<?php
    require_once __DIR__.'/../../../app/funcoes.php';
    
    if(!isset($tagLinkLogin))
    {
        $tagLinkLogin = '<a href="'.rotaPages('/../form_login.php').'">Efetue o Login</a>';
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatos</title>
    <link rel="stylesheet" href="<?=rotaBase('public/assets/css/style.css');?>">
</head>
<body>
<nav class="menu">
    <ul>
        <li><?=$tagLinkLogin?></li>
    </ul>
</nav>
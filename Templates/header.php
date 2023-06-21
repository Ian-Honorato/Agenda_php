<?php include_once("config/url.php");
     include_once("config/process.php");
     // limpa a mensagem
     if(isset($_SESSION['msg'])){
        $printMSG = $_SESSION['msg'];
        $_SESSION["msg"] = '';
     }

 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.7">
    <title>Agenda</title>
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <nav class="menu">
        
        <img class="logo" src="<?= $BASE_URL ?>/img/logo.png">
        
        <a class="link-nav" href=" <?=$BASE_URL ?>index.php"> Inicio </a>
        <a class="link-nav" href=" <?=$BASE_URL ?>create.php"> Adicionar</a>
       
    </nav>

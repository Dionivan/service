<?php

$titulos = [
    'inicio.php' => 'Inicio | Another Dimension ',
    'catalogo.php' => 'Catálogo | Another Dimension',
    'comunidade.php' => 'Comunidade| Another Dimension',
    'galeria.php' => 'Galeria | Another Dimension',
    'login.php' => 'Login | Another DimensionAnother Dimension',
    'cadastro.php' => 'Cadastro | Another Dimension',
    'infocadastro.php' => 'Cadastro | Another Dimension',
    'infologin.php'=>'Login | Another Dimension',
    'perfil.php'=> 'Perfil | Another Dimension',
    'sobre.php'=>'Sobre nós | Another Dimension',
    'termos.php'=>'Termos e condições | Another Dimension',
    'dungeon-reset.php'=>' | Another Dimension',
    'heavenly-demon-cultivation.php'=>' | Another Dimension',
    'mushoku-tensei.php'=>' | Another Dimension',
    'swordmaster.php'=>' | Another Dimension'
    #pode ter 'n' páginas
];

#limpa a url (ex.: /url.php?foo#bar => url.php)
$uri = (explode("/", $_SERVER['PHP_SELF']));

//var_dump(end($uri));

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulos[end($uri)] ?></title>
    <link rel="stylesheet" type="text/css" href="../paginas/assents/css/base.css">
    <link rel="shortcut icon" href="../paginas/assents/img/navicon.png" type="image/x-icon">
</head>
<body>
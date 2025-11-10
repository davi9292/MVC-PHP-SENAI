<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Produtos - Original MVC </title>
    <link rel="stylesheet" href="public/css/style.css">
    <!-- CORREÇÃO: Garantir que a viewport não cause zoom ou overflow -->
    <style>
        /* Garantir que não há margens ou padding indesejados */
        * {
            box-sizing: border-box;
        }
        /* Prevenir scroll horizontal em nível global */
        body {
            overflow-x: hidden;
            position: relative;
        }
    </style>
</head>
<body>
    <!-- Fundo Animado Avançado do deivi mouse -->
    <div class="animated-background">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="connection-line"></div>
        <div class="connection-line"></div>
        <div class="connection-line"></div>
        <div class="grid-overlay"></div>
        <div class="glow-effect"></div>
        <div class="layer layer-1"></div>
        <div class="layer layer-2"></div>
        <div class="layer layer-3"></div>
    </div>

    <div class="container">
        <header class="header">
            <h1 class="header-title">Gerenciador de Produtos - Original MVC - Davi Fabricio</h1>
            <p class="header-subtitle">Sistema completo de gerenciamento em PHP MVC - SENAI</p>
        </header>

        <?php if(isset($_SESSION['message'])): ?>
            <div class="message message-<?php echo $_SESSION['message_type']; ?>">
                <?php 
                    echo $_SESSION['message']; 
                    unset($_SESSION['message']);
                    unset($_SESSION['message_type']);
                ?>
            </div>
        <?php endif; ?>
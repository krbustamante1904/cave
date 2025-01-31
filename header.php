<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header Responsivo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <div class="logo">
            <img src="img/logo_cave.png" alt="Logo" id="logo">
        </div>

        <input type="checkbox" id="menu-toggle" class="menu-toggle">
        <label for="menu-toggle" class="menu-icon">
            <i class="fas fa-bars"></i>
        </label>

        <nav class="menu">
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Sobre Nosotros</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>

        <div class="buttons">
            <button class="login">Iniciar Sesión</button>
            <button class="register">Registrarse</button>
        </div>
    </header>


<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard de Personajes</title>
    <link rel="stylesheet" href="styles.css"> <!-- Asegúrate de que este enlace sea correcto -->
</head>
<body>
    <div class="dashboard-container">
        <!-- Contenido original de personajes -->
        <div class="buttons-container">
            <!-- Botones originales -->
            <button>Mirar perfil</button>
            <button>Cerrar sesión</button>

            <!-- Nuevo contenedor de consejos -->
            <div class="consejos-container">
                <h3>Consejos para ganar partidas</h3>
                <ul>
                    <li>Estudia los movimientos de tu oponente.</li>
                    <li>Gestiona tus recursos sabiamente.</li>
                    <li>Usa ataques sorpresa en momentos claves.</li>
                    <li>Mantén siempre la calma en situaciones difíciles.</li>
                    <li>Conoce las habilidades de cada personaje.</li>
                </ul>
            </div>
        </div>

        <!-- Aquí puedes incluir el resto del contenido original, como la lista de personajes, etc. -->
        <!-- Ejemplo de otra sección (puedes reemplazar esto con tu contenido original) -->
        <div class="character-list">
            <h2>Lista de Personajes</h2>
            <!-- Agrega aquí la lógica para mostrar tus personajes -->
            <!-- Por ejemplo, un bucle para mostrar personajes desde la base de datos -->
        </div>
    </div>
</body>
</html>

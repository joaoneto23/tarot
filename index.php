<?php


?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8" />
    <title>CrisAngels - Tarot</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>

<body class="bg-gray-900 text-white font-sans">

    <?php require_once ("resources/menu.php"); ?>

    <main class="p-8">
        <h2 class="text-3xl font-semibold mb-4">Bem-vindo ao CrisAngels</h2>
        <p class="text-gray-300">Conecte-se com o universo, marque uma consulta espiritual personalizada.</p>
    </main>

    <footer class="bg-gray-800 text-center p-4 text-sm text-gray-400">
        &copy; <?= date('Y') ?> CrisAngels. Todos os direitos reservados.
    </footer>

</body>

</html>
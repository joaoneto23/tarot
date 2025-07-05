<?php
require_once ('functions/general.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    logout();
}

session_start();

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

    <header class="bg-gradient-to-r from-purple-800 to-indigo-900 p-6 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold tracking-wider">🔮 CrisAngels</h1>
            <nav>
                <a href="/" class="px-3 hover:underline">Início</a>
                <a href="login.php" class="px-3 hover:underline">Login</a>
                <a href="marcacao.php" class="px-3 hover:underline">Marcar Consulta</a>
                <?php if (isset($_SESSION['is_admin']) == 1) { ?>
                    <a href="/tarot/admin/" class="px-3 hover:underline">ADEYÉMI</a>
                <?php } else {
                    echo "";
                } ?>
                <?php
                if (isset($_SESSION['is_admin'])) {
                ?>
                    <form action="" method="post" class="inline">
                        <button type="submit" class="px-3 hover:underline">Logout</button>
                    </form>
                <?php
                }
                ?>
            </nav>
        </div>
    </header>

    <main class="p-8">
        <h2 class="text-3xl font-semibold mb-4">Bem-vindo ao CrisAngels</h2>
        <p class="text-gray-300">Conecte-se com o universo, marque uma consulta espiritual personalizada.</p>
    </main>

    <footer class="bg-gray-800 text-center p-4 text-sm text-gray-400">
        &copy; <?= date('Y') ?> CrisAngels. Todos os direitos reservados.
    </footer>

</body>

</html>
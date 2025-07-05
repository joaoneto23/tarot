<?php
require_once ('functions/general.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    logout();
}

session_start();

?>

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
<?php
require_once ('../functions/general.php');
require_once ('resources/modal.php');

if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] != 1) {
    header("Location: ../index");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    logout();
}
?>

<script src="../../tarot/admin/resources/js/modal.js"></script>

<div class="flex h-screen">
        <aside class="w-64 bg-gray-800 text-white flex flex-col">
            <div class="p-4 text-center text-lg font-bold border-b border-gray-700">
                CrisAngels Admin
            </div>
            <nav class="flex-1 p-4">
                <ul>
                    <li class="mb-2">
                        <a href="index" class="block p-2 rounded hover:bg-gray-700"><i class='bx bx-home'></i> Home</a>
                    </li>
                    <li class="mb-2">
                        <a href="users" class="block p-2 rounded hover:bg-gray-700"><i class='bx bx-user'></i> Utilizadores</a>
                    </li>
                    <li class="mb-2">
                        <a href="marcacoes" class="block p-2 rounded hover:bg-gray-700"><i class='bx bx-book-bookmark' ></i> Marcações</a>
                    </li>
                    <!-- <li class="mb-2">
                        <a href="" class="block p-2 rounded hover:bg-gray-700"><i class='bx bx-cog' ></i> Settings</a>
                    </li> -->
                    <li class="mb-2">
                        <button type="button" onclick="openConfirmationModal({
                            title: 'Terminar Sessão',
                            message: 'Tem a certeza que pretende terminar a sessão?',
                            action: ''
                        })" class="block p-2 rounded hover:bg-gray-700 w-[100%] text-left">
                            <i class='bx bx-exit'></i> Logout
                        </button>
                    </li>

                </ul>
            </nav>
        </aside>
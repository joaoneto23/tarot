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

    <?php require_once("resources/menu.php"); ?>

    <main class="p-8">
        <h2 class="text-3xl font-semibold mb-4">Maque uma consulta</h2>
        <p class="text-gray-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi delectus iure accusamus soluta in, officia, quam praesentium ex hic ratione vitae id omnis nulla. Numquam reprehenderit blanditiis provident quidem eius?</p>
    </main>

    <div class="w-full px-4 mt-10 mb-10">
        <div class="max-w-4xl mx-auto bg-gray-700 shadow-lg rounded-lg p-6">
            <form >
                <h3 class="text-2xl font-bold text-center mb-6">Appointment Form</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-white mb-1">Nome</label>
                        <input type="text" placeholder="Nome" class="w-full p-2 border placeholder-black border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-white mb-1">Email</label>
                        <input type="text" placeholder="Email" class="w-full p-2 border placeholder-black border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-white mb-1">Telefone</label>
                        <input type="text" placeholder="Telefone" class="w-full p-2 border placeholder-black border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-white mb-1">Time of Day</label>
                        <select class="w-full p-2 border placeholder-black border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="1">Morning</option>
                            <option value="2">Afternoon</option>
                            <option value="3">Evening</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-white mb-1">Preferred Date</label>
                        <div class="grid grid-cols-3 gap-2">
                            <input type="text" placeholder="Date" class="w-full p-2 border placeholder-black border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <input type="text" placeholder="Month" class="w-full p-2 border placeholder-black border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <input type="text" placeholder="Year" class="w-full p-2 border placeholder-black border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-white mb-1">Notas</label>
                        <textarea placeholder="Notas" rows="4" class="w-full p-2 border placeholder-black border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    </div>
                    <div class="md:col-span-2">
                        <button type="button" 
                            class="w-full md:w-auto px-4 py-2 bg-gradient-to-r from-purple-800 to-indigo-900 text-white rounded-md hover:bg-gradient-to-r from-indigo-900 to-purple-800 focus:outline-none focus:ring-2 focus:ring-blue-500 float-right">
                            Marcar Consulta
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <footer class="bg-gray-800 text-center p-4 text-sm text-gray-400">
        &copy; <?= date('Y') ?> CrisAngels. Todos os direitos reservados.
    </footer>

</body>

</html>
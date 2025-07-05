<?php
require_once('../functions/general.php');

session_start();

$total_clientes = getNumberClients()

?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CrisAngels - Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Sidebar -->
    
        <?php require_once('resources/menu.php'); ?>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <header class="mb-6">
                <h1 class="text-2xl font-bold text-gray-800">Welcome Back!</h1>
            </header>

            <!-- Cards Section -->
            <section class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-4 rounded shadow">
                    <h2 class="text-lg font-semibold text-gray-700">Número de Clientes</h2>
                    <p class="text-2xl font-bold text-gray-900"><?php echo htmlspecialchars($total_clientes); ?></p>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <h2 class="text-lg font-semibold text-gray-700">Revenue</h2>
                    <p class="text-2xl font-bold text-gray-900">$12,345</p>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <h2 class="text-lg font-semibold text-gray-700">New Orders</h2>
                    <p class="text-2xl font-bold text-gray-900">56</p>
                </div>
            </section>

            <!-- Table Section -->
            <section class="mt-6">
                <h2 class="text-xl font-bold text-gray-800 mb-4">Recent Activity</h2>
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white rounded shadow">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">Name</th>
                                <th class="py-3 px-6 text-left">Email</th>
                                <th class="py-3 px-6 text-center">Data Marcação</th>
                                <th class="py-3 px-6 text-center">Status</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700 text-sm">
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left">John Doe</td>
                                <td class="py-3 px-6 text-left">john@example.com</td>
                                <td class="py-3 px-6 text-center">Active</td>
                                <td class="py-3 px-6 text-center">Active</td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left">Jane Smith</td>
                                <td class="py-3 px-6 text-left">jane@example.com</td>
                                <td class="py-3 px-6 text-center">Inactive</td>
                                <td class="py-3 px-6 text-center">Inactive</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>

</body>

</html>
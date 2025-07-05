<?php
require_once('../functions/general.php');

session_start();

$getAllAppointments = getAllAppointment();

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
        <header class="mb-6 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-gray-800">Marcações</h1>
        </header>

        <!-- Table Section -->
        <section class="mt-6">
            <div class="overflow-x-auto">
                <?php
                if ($getAllAppointments === false) {
                    echo "<p>Error retrieving appointments.</p>";
                } elseif (empty($getAllAppointments)) {
                    echo "<p>No appointments found.</p>";
                } else {
                ?>
                    <table class="min-w-full bg-white rounded shadow">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">Name</th>
                                <th class="py-3 px-6 text-left">Email</th>
                                <th class="py-3 px-6 text-left">Data Marcação</th>
                                <th class="py-3 px-6 text-left">Tipo</th>
                                <th class="py-3 px-6 text-center">Criado em</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700 text-sm">
                            <?php foreach ($getAllAppointments as $row): ?>
                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <td class="py-3 px-6 text-left"><?php echo htmlspecialchars($row['nome']); ?></td>
                                    <td class="py-3 px-6 text-left"><?php echo htmlspecialchars($row['email']); ?></td>
                                    <td class="py-3 px-6 text-center"><?php echo htmlspecialchars($row['data_marcacao']); ?></td>
                                    <td class="py-3 px-6 text-center"><?php echo htmlspecialchars($row['tipo_consulta']); ?></td>
                                    <td class="py-3 px-6 text-center"><?php echo htmlspecialchars($row['criado_em']); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php
                }
                ?>
            </div>
        </section>
    </main>

</body>
</html>
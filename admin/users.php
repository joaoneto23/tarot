<?php
require_once('../functions/general.php');

session_start();

// Default to showing clients (0) if not specified
$userType = isset($_GET['type']) ? (int)$_GET['type'] : 0;
$getAllUsers = getAllUsers($userType);

?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CrisAngels - Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <style>
        .segmented-control {
            transition: all 0.3s ease;
        }
        .segmented-control-option {
            transition: all 0.3s ease;
        }
        .segmented-control-indicator {
            transition: all 0.3s ease;
        }
    </style>
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Sidebar -->
    <?php require_once('resources/menu.php'); ?>

    <!-- Main Content -->
    <main class="flex-1 p-6">
        <header class="mb-6 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-gray-800">Utilizadores</h1>
            
            <!-- Segmented Control -->
            <div class="relative inline-flex bg-gray-200 rounded-lg p-1" id="userTypeToggle">
                <input type="radio" name="userType" id="clientOption" value="0" class="hidden" <?php echo $userType === 0 ? 'checked' : ''; ?>>
                <label for="clientOption" class="segmented-control-option relative z-10 py-2 px-4 rounded-md cursor-pointer text-center min-w-[100px] <?php echo $userType === 0 ? 'text-white' : 'text-gray-600'; ?>">
                    Clientes
                </label>
                
                <input type="radio" name="userType" id="adminOption" value="1" class="hidden" <?php echo $userType === 1 ? 'checked' : ''; ?>>
                <label for="adminOption" class="segmented-control-option relative z-10 py-2 px-4 rounded-md cursor-pointer text-center min-w-[100px] <?php echo $userType === 1 ? 'text-white' : 'text-gray-600'; ?>">
                    Admins
                </label>
                
                <span class="segmented-control-indicator absolute top-1 bottom-1 left-1 bg-gray-800 rounded-md shadow-md transition-all duration-300" 
                      style="width: calc(50% - 0.25rem); <?php echo $userType === 1 ? 'transform: translateX(100%);' : ''; ?>"></span>
            </div>
        </header>

        <!-- Table Section -->
        <section class="mt-6">
            <div class="overflow-x-auto">
                <?php
                if ($getAllUsers === false) {
                    echo "<p>Error retrieving users.</p>";
                } elseif (empty($getAllUsers)) {
                    echo "<p>No users found.</p>";
                } else {
                ?>
                    <table class="min-w-full bg-white rounded shadow">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">Name</th>
                                <th class="py-3 px-6 text-left">Email</th>
                                <th class="py-3 px-6 text-center">Criado em</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700 text-sm">
                            <?php foreach ($getAllUsers as $user): ?>
                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <td class="py-3 px-6 text-left"><?php echo htmlspecialchars($user['nome']); ?></td>
                                    <td class="py-3 px-6 text-left"><?php echo htmlspecialchars($user['email']); ?></td>
                                    <td class="py-3 px-6 text-center"><?php echo htmlspecialchars($user['criado_em']); ?></td>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggle = document.getElementById('userTypeToggle');
            const options = toggle.querySelectorAll('input[name="userType"]');
            const indicator = toggle.querySelector('.segmented-control-indicator');
            
            options.forEach(option => {
                option.addEventListener('change', function() {
                    if (this.checked) {
                        // Update the indicator position
                        if (this.value === '1') {
                            indicator.style.transform = 'translateX(100%)';
                        } else {
                            indicator.style.transform = 'translateX(0)';
                        }
                        
                        // Update the text colors
                        document.querySelectorAll('.segmented-control-option').forEach(label => {
                            label.classList.remove('text-white');
                            label.classList.add('text-gray-600');
                        });
                        
                        this.nextElementSibling.classList.remove('text-gray-600');
                        this.nextElementSibling.classList.add('text-white');
                        
                        // Reload the page with the new type parameter
                        window.location.href = `?type=${this.value}`;
                    }
                });
            });
        });
    </script>
</body>
</html>
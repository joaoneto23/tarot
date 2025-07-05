<?php

function connect() {
    
    $conn = new mysqli("localhost", "root", "", "crisangels");
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

function login($email, $password) {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if (empty($email) || empty($password) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false; 
    }

    $conn = connect();
    if (!$conn) {
        return false;
    }

    $query = "SELECT id, nome, password, is_admin FROM users WHERE email = ? LIMIT 1";
    $stmt = $conn->prepare($query);
    if (!$stmt) {
        $conn->close();
        return false;
    }

    $stmt->bind_param("s", $email);

    if (!$stmt->execute()) {
        $stmt->close();
        $conn->close();
        return false;
    }

    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    $stmt->close();
    $conn->close();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['nome'] = $user['nome'];
        $_SESSION['is_admin'] = $user['is_admin'] ?? 0; 
        header('Location: index.php');
        exit;
    } else {
        echo "Login Invalido";
    }

    

    return false;
}

function register($nome, $email, $password) {
    $conn = connect();
    
    if (!$conn) {
        return false;
    }

    $query = "INSERT INTO users (nome, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($query);

    $stmt->bind_param("sss", $nome, $email, $password);

    $stmt->execute();

    $stmt->close();
    $conn->close();

}

function emailAlreadyExists($email) {
    $conn = connect();

    $query = "SELECT id FROM users WHERE email = ?";
    $stmt = $conn->prepare($query);

    $stmt->bind_param("s", $email);

    $exists = $stmt->num_rows > 0;

    return $exists;
}

function logout() {
    session_destroy();
    header('Location: index.php');
    exit;
}

function getNumberClients() {
    $conn = connect(); 

    // Use query() to get the result set
    $result = $conn->query("SELECT COUNT(id) AS user_count FROM users WHERE is_Admin = 0");

    // Check if query was successful
    if ($result) {
        // Fetch the count value
        $row = $result->fetch_assoc();
        $count = $row['user_count'];
        // Free the result set
        $result->free();
        // Close the connection
        $conn->close();
        return $count;
    } else {
        // Handle query error
        $conn->close();
        return false;
    }
}

function getAllUsers($userType) {
    $conn = connect();
    
    if (!$conn) {
        return false;
    }

    $userType = $conn->real_escape_string($userType);

    $query = "SELECT id, nome, email, criado_em 
              FROM users
              WHERE is_admin = '$userType'";
    
    $result = $conn->query($query);

    if (!$result) {
        $conn->close();
        return false;
    }

    $users = [];
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }

    $result->free();
    $conn->close();

    return $users;
}

function getAllAppointment() {
    $conn = connect();
    
    if (!$conn) {
        return false;
    }


    $query = "SELECT m.id, u.nome, u.email, m.data_marcacao, m.tipo_consulta, m.mensagem, m.criado_em 
              FROM marcacoes m 
              INNER JOIN users u ON m.user_id = u.id 
              WHERE u.is_admin = 0";
    
    $result = $conn->query($query);

    if (!$result) {
        $conn->close();
        return false;
    }

    $users = [];
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }

    $result->free();
    $conn->close();

    return $users;
}

?>
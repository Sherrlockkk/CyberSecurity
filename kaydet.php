<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect POST data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Process the data (e.g., save to a file, database, etc.)
    // Here we will just echo the data for demonstration
    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Password: " . htmlspecialchars($password) . "<br>";
} else {
    // If the request method is not POST, respond with 405 Method Not Allowed
    http_response_code(405);
    echo "405 Not Allowed";
}
?>

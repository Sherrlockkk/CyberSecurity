<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // POST verilerini al
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Verileri işleme (örneğin, dosyaya kaydetme, veritabanına ekleme, vb.)
    // Burada sadece verileri ekrana yazdıracağız
    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Password: " . htmlspecialchars($password) . "<br>";
} else {
    // Eğer istek yöntemi POST değilse, 405 Method Not Allowed yanıtı ver
    http_response_code(405);
    echo "405 Not Allowed";
}
?>

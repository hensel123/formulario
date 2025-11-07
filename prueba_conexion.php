<?php
try {
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=escuela;charset=utf8mb4", "root", "");
    echo "✅ Conexión exitosa a MySQL";
} catch (PDOException $e) {
    echo "❌ Error de conexión: " . $e->getMessage();
}
?>

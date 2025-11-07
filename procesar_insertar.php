<?php
// Datos de conexión - cámbialos por los tuyos de AlwaysData
$host = 'mysql-banco.alwaysdata.net'; // ejemplo: mysql-emmanuel.alwaysdata.net
$dbname = 'banco_bdcolegio'; // ejemplo: emmanuel_bd
$username = 'banco'; // ejemplo: emmanuel
$password = 'hensel68'; // tu contraseña real
$charset = 'utf8mb4';

try {
    // Crear conexión PDO
    $conexion = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset", $username, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Verificar si se recibieron los datos del formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $promedio = $_POST['promedio'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];
        $fecha_nacimiento = $_POST['fecha_nacimiento'];
        $ciudad = $_POST['ciudad'];

        // Preparar la consulta SQL (segura)
        $sql = "INSERT INTO alumnos (nombre, apellido, promedio, correo, telefono, fecha_nacimiento, ciudad)
                VALUES (:nombre, :apellido, :promedio, :correo, :telefono, :fecha_nacimiento, :ciudad)";
        
        $stmt = $conexion->prepare($sql);

        // Enlazar parámetros
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':apellido', $apellido);
        $stmt->bindParam(':promedio', $promedio);
        $stmt->bindParam(':correo', $correo);
        $stmt->bindParam(':telefono', $telefono);
        $stmt->bindParam(':fecha_nacimiento', $fecha_nacimiento);
        $stmt->bindParam(':ciudad', $ciudad);

        // Ejecutar consulta
        if ($stmt->execute()) {
            echo "<h3>✅ Alumno agregado correctamente.</h3>";
            echo "<a href='index.html'>Volver al formulario</a>";
        } else {
            echo "<h3>❌ Error al insertar el registro.</h3>";
        }
    }

} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>

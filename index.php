<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Gestión de registros</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
  <div class="pagina">
    <header class="encabezado">
      <h1>Gestión de registros</h1>
      <p>Práctica con PHP y MySQL</p>
    </header>

    <main class="contenido">
      <h2>Operaciones disponibles</h2>
      <div class="menu-opciones">
        <a href="insertar.php" class="boton principal">Insertar registro</a>
        <a href="listar.php" class="boton peligro">Eliminar registro</a>
        <a href="boton secundario.php" class="boton secundario">Modificar registro</a>
        <a href="consultar.php" class="boton neutro">Consultar registros</a>
      </div>
    </main>

    <section class="tarjeta secundaria">
      <h3>Información</h3>
      <p>
        Selecciona una opción del menú para trabajar con la base de datos.<br>
        Asegúrate de tener la conexión configurada correctamente en <strong>config/db.php</strong>.
      </p>
    </section>
  </div>
</body>
</html>
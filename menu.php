<?php
// Incluir el archivo de conexión
include("conexion.php");

// Consulta para obtener el título y la imagen de las películas
$query = "SELECT titulo, imagen FROM pelicula";
$resultado = mysqli_query($conn, $query);

if (!$resultado) {
    die("Error en la consulta: " . mysqli_error($conexion));
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Películas</title>
    <style>
        .pelicula {
            border: 1px solid #ddd;
            padding: 10px;
            margin: 10px;
            display: inline-block;
            text-align: center;
        }
        .pelicula img {
            width: 200px;
            height: auto;
        }
    </style>
</head>
<body>
    <h1>Lista de Películas</h1>
    <div class="peliculas">
        <?php while ($pelicula = mysqli_fetch_assoc($resultado)) { ?>
            <div class="pelicula">
                <h2><?php echo htmlspecialchars($pelicula['titulo']); ?></h2>
                <img src="<?php echo htmlspecialchars($pelicula['imagen']); ?>" alt="Imagen de la película">
            </div>
        <?php } ?>
    </div>
</body>
</html>

<?php
// Cerrar la conexión a la base de datos
mysqli_close($conn);
?>
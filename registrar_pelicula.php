<?php
include("conexion.php");


// Datos del formulario
$titulo = $_POST['titulo'];
$sipnosis = $_POST['sipnosis'];
$clasificacion = $_POST['clasificacion'];
$recaudacion = 0;
$genero = $_POST['genero'];
$duracion = $_POST['duracion'];
$estado = $_POST['estado'];
$id_director = $_POST['id_director'];
$id_personal = $_POST['id_personal'];
$id_cartelera = $_POST['id_cartelera'];

// Procesamiento de la imagen
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["imagen"]["name"]);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Validar si el archivo es una imagen
$check = getimagesize($_FILES["imagen"]["tmp_name"]);
if ($check !== false && move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)) {
    $imagen = $target_file;

    // Insertar datos en la base de datos
    $sql = "INSERT INTO pelicula (titulo, sipnosis, clasificacion, recaudacion, genero, duracion, imagen, estado, id_director, id_personal, id_cartelera) 
            VALUES ('$titulo', '$sipnosis', '$clasificacion', $recaudacion, '$genero', $duracion, '$imagen', '$estado', $id_director, $id_personal, $id_cartelera)";

    if ($conn->query($sql) === TRUE) {
        echo "Película añadida exitosamente.";
    } else {
        echo "Error al añadir la película: " . $conn->error;
    }
} else {
    echo "Hubo un problema al subir la imagen.";
}

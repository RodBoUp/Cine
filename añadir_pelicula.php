<form action="register.php" method="post" enctype="multipart/form-data">
    <label for="titulo">Título:</label>
    <input type="text" name="titulo" id="titulo" maxlength="100" required><br><br>

    <label for="sipnosis">Sinopsis:</label>
    <textarea name="sipnosis" id="sipnosis" rows="5" cols="50" maxlength="500" required></textarea><br><br>

    <label for="clasificacion">Clasificación:</label>
    <select name="clasificacion" id="clasificacion" required>
        <option value="PG">PG</option>
        <option value="PG-13">PG-13</option>
        <option value="R">R</option>
    </select><br><br>

    <!-- Recaudación siempre igual a 0 en el backend -->
    <input type="hidden" name="recaudacion" value="0"><!-- Recaudación no visible pero siempre 0 --><br><br>

    <label for="genero">Género:</label>
    <input type="text" name="genero" id="genero" maxlength="50" required><br><br>

    <label for="duracion">Duración (min):</label>
    <input type="number" name="duracion" id="duracion" required><br><br>

    <label for="imagen">Imagen de la película:</label>
    <input type="file" name="imagen" id="imagen" accept="image/*" required><br><br>

    <label for="estado">Estado:</label>
    <select name="estado" id="estado" required>
        <option value="en_cartelera">En Cartelera</option>
        <option value="proximo_estreno">Próximo Estreno</option>
    </select><br><br>

    <label for="id_director">ID del Director:</label>
    <input type="number" name="id_director" id="id_director" required><br><br>

    <label for="id_personal">ID del Personal:</label>
    <input type="number" name="id_personal" id="id_personal" required><br><br>

    <label for="id_cartelera">ID de la Cartelera:</label>
    <input type="number" name="id_cartelera" id="id_cartelera" required><br><br>

    <input type="submit" value="Añadir Película">
</form>
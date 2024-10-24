<button id="botonAgregar" onclick="toggleForm()">Agregar Libro</button>

<div id="add-book-form" style="display: none;">
    <form id="form-agregar-libro" method="POST">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required>
        
        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor" required>
        
        <label for="genero">Género:</label>
        <input type="text" id="genero" name="genero" required>
        
        <label for="editorial">Editorial:</label>
        <input type="text" id="editorial" name="editorial" required>
        
        <label for="stock">Stock:</label>
        <input type="number" id="stock" name="stock" required>
        
        <label for="disponibilidad">Disponibilidad:</label>
        <input type="text" id="disponibilidad" name="disponibilidad" required>
        
        <label for="imagen">Imagen:</label>
        <input type="text" id="imagen" name="imagen">
        
        <label for="id_categoria">Categoría:</label>
        <select id="id_categoria" name="id_categoria" required>
            <?php
            $sql = "SELECT id_categoria, nombre_categoria FROM categorias";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['id_categoria'] . "'>" . $row['nombre_categoria'] . "</option>";
                }
            } else {
                echo "<option value=''>No hay categorías disponibles</option>";
            }
            ?>
        </select>
        
        <button type="submit">Agregar Libro</button>
    </form>
</div>

<table>
    <thead>
        <tr>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Género</th>
            <th>Editorial</th>
            <th>Stock</th>
            <th>Disponibilidad</th>
            <th>Imagen</th>
            <th>Categoria</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody id="librostable">
        
    </tbody>
</table>

<script src="crud_libros.js"></script>
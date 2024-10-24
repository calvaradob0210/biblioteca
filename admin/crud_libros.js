document.addEventListener('DOMContentLoaded', function() {
    cargarDatos();

    function cargarDatos() {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'obtener_libro.php', true);
        xhr.onload = function() {
            if (xhr.status === 200) {
                var libros = JSON.parse(xhr.responseText);
                var tbody = document.getElementById('librostable');
                tbody.innerHTML = '';

                libros.forEach(function(libro) {
                    var tr = document.createElement('tr');
                    tr.innerHTML = `
                        <td><center>${libro.titulo}</center></td>
                        <td><center>${libro.autor}</center></td>
                        <td><center>${libro.genero}</center></td>
                        <td><center>${libro.editorial}</center></td>
                        <td><center>${libro.stock}</center></td>
                        <td><center>${libro.disponibilidad}</center></td>
                        <td><center>${libro.imagen}</center></td>
                        <td><center>${libro.nombre_categoria}</center></td>
                        <td><button onclick='eliminarLibro(${libro.id_libro})'>Eliminar</button></td>
                    `;
                    tbody.appendChild(tr);
                });
            } else {
                console.error('Error al cargar los datos de los libros.');
            }
        };
        xhr.send();
    }
});

// Función para eliminar un libro
function eliminarLibro(id) {
    if (confirm("¿Estás seguro de eliminar este libro?")) {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'eliminar_libro.php?id=' + id, true);
        xhr.onload = function() {
            if (xhr.status === 200) {
                var response = xhr.responseText.trim();
                if (response === 'success') {
                    alert('Libro eliminado con éxito.');
                    location.reload(); // Recarga la página para actualizar la tabla
                } else {
                    alert('Error al eliminar el libro.');
                }
            } else {
                alert('Error en la solicitud.');
            }
        };
        xhr.send();
    }
}

// Función para mostrar/ocultar el formulario
function toggleForm() {
    var form = document.getElementById("add-book-form");
    if (form.style.display === "none" || form.style.display === "") {
        form.style.display = "block";
    } else {
        form.style.display = "none";
    }
}

// Función para agregar un libro mediante AJAX
function agregarLibro(event) {
    event.preventDefault(); // Previene el comportamiento por defecto del formulario

    const formData = new FormData(document.getElementById('form-agregar-libro'));

    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'agregar_libro.php', true);

    xhr.onload = function() {
        if (xhr.status === 200) {
            alert('Libro agregado con éxito.');
            location.reload(); // Recarga la página para actualizar la tabla
        } else {
            alert('Error al agregar el libro.');
        }
    };

    xhr.send(formData);
}

// Asigna eventos al formulario
document.getElementById('form-agregar-libro').addEventListener('submit', agregarLibro);


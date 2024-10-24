<!DOCTYPE html>
<html>
<head>
 <title>Base de Datos - UNFV</title>
 <meta http-equiv="Content-Language" content="es"/>
 <meta name="Keywords" content="cabecera,unfv"/>
 <meta name="Description" content="cabecera unfv. titulo unfv"/>
 <meta name="Distribution" content="global"/>
 <meta name="Robots" content="all"/>
 <link rel="stylesheet" href="../css/estilo-header.css">
 <link rel="stylesheet" href="../css/basedatos.css">
 <link rel="stylesheet" href="../css/estilos-footer.css">
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body bgcolor=white>

<?php include "../layout/navbar.php"; ?>

<section class="contenedor-datos">
       <div class="datos">
           <div>
               <h2>| BASES DE DATOS DE INVESTIGACI&Oacute;N</h2><br>
               <p>Son selecciones de materiales acad&eacute;micos y cient&iacuteficos. Contienen principalmente artículos de revistas, libros, publicaciones, 
                   materiales audiovisuales, etc.</p><br>
           </div>
           <div>
            <form id="filter-form">
                <input type="text" name="buscador" id="buscador" placeholder="Buscar Base de Datos" />
                <br><br>
                <center>
				<select name="seleccione" id="seleccione">
    <option value="">BUSCAR EN TODAS LAS ÁREAS</option>
    <option value="administracion">Administración</option>
    <option value="ingenieria">Ingeniería</option>
    <option value="Ciencias Administrativas">Ciencias Administrativas</option>
    <option value="Ciencias Económicas">Ciencias Económicas</option>
    <option value="Ciencias de la Salud">Ciencias de la Salud</option>
    <option value="Ciencias Sociales">Ciencias Sociales</option>
    <option value="derecho">Derecho y Ciencias Políticas</option>
    <option value="humanidades">Humanidades</option>
</select>

                </center>
                Ordenar:
                <input type="radio" name="orden" value="a-z" />A - Z
                <input type="radio" name="orden" value="z-a" />Z - A
                <br><br>
            </form>
            <hr align="center"/>
           </div>
           <br>
           
          <ul id="listaArticulos"></ul>       
       </div>
</section>

<script>
$(document).ready(function() {
    function fetchResults() {
        $.ajax({
            url: 'database_process.php',
            type: 'GET',
            data: $('#filter-form').serialize(),
            success: function(response) {
                $('#listaArticulos').html(response);
            }
        });
    }

    $('#filter-form').on('change keyup', function() {
        fetchResults();
    });

    
    fetchResults();
});
</script>


<div>  
<footer>
      <?php include "../layout/footer.php"; ?>
</footer>
</div>

</body>
</html>

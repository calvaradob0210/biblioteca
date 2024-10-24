<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "biblioteca"; // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consultar noticias (solo las 4 más recientes)
$sql = "SELECT id, nombre FROM escuelas";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
 <title>Repositorio Institucional - UNFV</title>
<meta http-equiv="Content-Language" content="es"/>
 <meta name="Keywords" content="cabecera,unfv"/>
<meta name="Description" content="cabecera unfv. titulo unfv"/>
<meta name="Distribution" content="global"/>
 <meta name="Robots" content="all"/>
 <link rel="stylesheet" href="../css/estilo-header.css">
 <link rel="stylesheet" href="../css/estilos.css">
 <link rel="stylesheet" href="../css/estilo-clasificacion.css">
 <link rel="stylesheet" href="../css/estilos-footer.css">
 </head>
 <body>
 <?php include "../layout/navbar.php"; ?>

  <section class="clasificacion-libro" >
     <div class="centro">
	     <table class="tabla" border="2"  cellspacing="0">
            <?php 
                if($result->num_rows > 0){
                    $counter = 0;
                    if($counter % 2 == 0){ echo "<tr>";}
                    while($row = $result->fetch_assoc()){
            ?>
                    <td>
                        <?php echo "<a href='detalle_repositorio.php?carrera=". $row["nombre"] . "'target='_self'>"  ;?>
                        <img class="img-libros" src="../img/tesis.png" alt="tesis"/>
                        <div class="escuela"><?php echo $row["nombre"]; ?></div>
                        </a>
                    </td>
            <?php
                    $counter++;
                    if($counter % 2 == 0){ echo "</tr>";}
                    }
                }
            ?>
         </table>		  
	 </div>
  </section>
  
  
  <footer>
       
       <?php include "../layout/footer.php"; ?>
        
    </footer>
  
  
   
</body>
</html>
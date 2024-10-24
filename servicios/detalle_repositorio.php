<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "biblioteca";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
$g_carrera = $_GET["carrera"];

if(!$g_carrera){
  $g_carrera="todos";
}
$sql = "SELECT tesis.id_tesis, tesis.titulo, tesis.autor, escuelas.nombre, tesis.resumen, tesis.año, tesis.enlace FROM `tesis` JOIN escuelas ON tesis.idescuela = escuelas.id";

if($g_carrera != "todos"){
  $sql = "SELECT tesis.id_tesis, tesis.titulo, tesis.autor, escuelas.nombre, tesis.resumen, tesis.año, tesis.enlace FROM `tesis` JOIN escuelas ON tesis.idescuela = escuelas.id WHERE escuelas.nombre = '" . $g_carrera . "'";
}




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
 <link rel="stylesheet" href="../css/tesis2.css">
 <link rel="stylesheet" href="../css/libros-sistema.css">
 <link rel="stylesheet" href="../css/estilo-tesis.css">
 <link rel="stylesheet" href="../css/estilos-footer.css">
 </head>
 <body>
 
 <?php include "../layout/navbar.php"; ?>

<div class="abc">
 
 
 <aside class="repertorio-tesis">
  <div class="aside-titulo">
         <p><b>Listar</b></p>
  </div>
  
  <div class="aside-contenedor2"> 
      <div class="aside-listar">
		<button name="button" class="btn-listar btncolor">Por fecha de publicación</button></br>
		<button name="button" class="btn-listar btncolor">Autores</button></br>
		<button name="button" class="btn-listar btncolor">Título</button>
      </div>
  </div>
  
   <div class="aside-titulo">
          <p><b>Tesis grados-titulos</b></p>
  </div>
     
  <div class="aside-contenedor2"> 
      <div class="aside-listar">
		<button name="button" class="btn-listar btncolor">Titulo profecional</button></br>
		<button name="button" class="btn-listar btncolor">Doctorado</button></br>
		<button name="button" class="btn-listar btncolor">Maestria</button>
      </div>
  </div>
  
</aside>  
 
 
 
<section class="contenedor">
 <div class="contenedor2">
   <div>
      Buscar
   </div>
   <div>
     <select name="seleccione">
       <option>Titulo</option>
       <option>Autor</option>
       <option>Tema</option>
     </select>
   </div>
   <div class="barratext">
    <form action="#" method="post" >
      <input type="text" name="buscador" id="buscador" placeholder="Buscar Libro"/>
      <input class="bus" type="submit" value="Buscar"/>
	  </form> 
   </div>
</div>

<div class="recomendado">
  <p>| TESIS </p>
  <!--Primer tesis-->
  <ul id="listaArticulos">
    <?php 
      if($result->num_rows > 0){  
        while($row = $result->fetch_assoc()){
    
    
    ?>
    <li>
    <div align="left" class="libro">
        <div class="libro-imagen">
          <?php echo "<a href='". $row['enlace'] . "'>"  ?><img src="../img/tesis2.png" alt="tesis"/></a>
        </div>	  
        
        <div class="libro-detalles">
          <div class="detalle-item">
              <span class="titulo">Titulo:</span>
              <span class="contenido"><?php echo $row["titulo"] ?></span>
          </div>
          <div class="detalle-item">
              <span class="titulo">Autor:</span>
              <span class="contenido"><?php echo $row["autor"] ?></span>
          </div>
          <div class="detalle-item">
              <span class="titulo">Año de publicación:</span>
              <span class="contenido"><?php echo $row["año"] ?></span>
          </div>
          <div class="detalle-item">
              <span class="titulo">Carrera:</span>
              <span class="contenido"><?php echo $row["nombre"] ?></span>
          </div>
          <div class="detalle-item">
              <span class="titulo">Resumen:</span>
              <span class="contenido"><?php echo $row["resumen"] ?></span>
          </div>
        </div>
      </div>
    </li>

    <?php
        }
      }
    ?>
  </ul>
</div>
  
 </section>
</div>


      
<?php include "../layout/footer.php"; ?>
        
</body>
</html>
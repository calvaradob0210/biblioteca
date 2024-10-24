<!DOCTYPE html>
<html>

<head>
    <title>Mision y Vision - UNFV</title>
    <meta http-equiv="Content-Language" content="es" />
    <meta name="Keywords" content="cabecera,unfv" />
    <meta name="Description" content="cabecera unfv. titulo unfv" />
    <meta name="Distribution" content="global" />
    <meta name="Robots" content="all" />
    <link rel="stylesheet" href="css/estilo-header.css">
    <link rel="stylesheet" href="css/nosotros.css">
	<link rel="stylesheet" href="css/estilos-footer.css">
</head>

<body>

<header>
        <div class="div-header">
            <img class="icono" src="img/logo.png" alt="logo" />
            <p>SISTEMA DE BIBLIOTECA UNFV-FIIS</p>

            <div class="sesion">
                <a href="auth/login.php">Iniciar Sesion</a>
            </div>
        </div>

        <div class="div-header menu">
            <nav class="navbar">
                <div class="enlaces">
                    <ul class="nav">
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="nosotros.php">Nosotros</a>
                            <ul>
                                <li><a href="nosotros.php">Mision-Vision</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Servicios en Linea</a>
                            <ul>
                                <li><a href="servicios/catalogo.php" target="_self">Catalogo en Linea</a></li>
                                <li><a href="servicios/database.php" target="_self">Base de Datos</a></li>
                            </ul>
                        </li>
                        <li><a href="servicios/repositorio.php">Repositorio Institucional</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="hero dibujo">
            <div class="mando-anterior diseño">
                <input type="button" id="anterior" value="<<">
            </div>
            <div class="mando-siguiente diseño">
                <input type="button" id="siguiente" value=">>">
            </div>
            <img id="imagen" src="img/libro1.jpg" />
        </div>

        <div class="div-header letra">
            <p>| BIBLIOTECA |</p>
        </div>

        <script type="text/javascript">
            var arrayimg = ["libro1.jpg", "unfvdibujo2_.jpg", "unfv2.jpg", "bibliotecavirtual.jpg"];
            var imgactual = 0;

            document.getElementById("anterior").addEventListener("click", cambiarImagen);
            document.getElementById("siguiente").addEventListener("click", cambiarImagen);

            function cambiarImagen() {
                var boton = this.id;

                if (boton === 'anterior') {
                    imgactual--;
                    if (imgactual < 0) {
                        imgactual = arrayimg.length - 1;
                    }
                } else {
                    imgactual++;
                    if (imgactual === arrayimg.length) {
                        imgactual = 0;
                    }
                }

                var imgMostrar = arrayimg[imgactual];
                document.getElementById('imagen').src = 'img/' + imgMostrar;
            }
        </script>
    </header>
	

	<div class="contenidoxd">
	     <div class="articulos">
		    <div class="secciones seccion-ancha color1">
            <div>
                     <h2>Objetivos</h2><br>
                     <ul>
                         <p>. Fortalecer la formación profesional de los estudiantes.</p>
                         <p>. Promover la investigación formativa, conocimiento científico y transferencia tecnológica en la comunidad.
                              &nbsp;&nbsp;universitaria.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                         <p>. Fortalecer la extensión cultural y proyección social para la comunidad.</p>
                         <p>. Mejorar la gestión institucional.</p>
                         <p>. Implementar la gestión de riesgo ante desastres. </p>
                     </ul>
                 </div>

				 
			</div>
			<div class="secciones sombra">
			     <div>
				     <center><img src="img/vision.png"><br><br>
				     <h2>Visión</h2><br></center>
					 <p>"Comunidad académica posicionada entre las mejores universidades
					 en el ámbito nacional e internacional a través de la calidad, 
					 producción y difusión intelectual e innovación con responsabilidad 
					 social."</p>
				 </div>
			</div>
			<div class="secciones sombra">
            <div>
			<center><img src="img/mision.png"><br><br>
				<h2>Misión</h2><br></center>
					 <p>"Brindar formación profesional científica y humanística a los
					 estudiantes, con sensibilidad social, innovación, competitividad
					 y emprendimiento, para contribuir al desarrollo y la sostenibilidad
					 sistémica del país."</p>
				 </div>


			</div>

          <!--  <div class="newSeccion">


            </div>-->


		 </div>
         <!-- 
		 <div class="menu-secundario">
		 <h2>NUESTRA INSTITUCIÓN</h2>
		      <a href="misionyvision.php">Mision - Vision - Objetivos</a>
			  <a href="reseña.php">Reseña Historica</a>
			  <a href="himno.php">Himno Villarrealino</a>
			  <a href="personal.php">Personal Administrativo</a>
			 <center><img src="../imagenes/un2.jpg"></center>
		 </div> -->
		
	</div>
	
	<div>  
<footer>
       
  <?php include "layout/footer.php"; ?>
        
</footer>
	</div>

	
	
</body>

</html>
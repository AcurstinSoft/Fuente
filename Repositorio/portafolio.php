<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Portafolio</title>
    <meta name="googlebot" content="noindex">
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/favicon.ico" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/portafolio.css" />
    <script src="js/jquery/jquery.min.js"></script>  
    <script src="js/jquery/jquery-ui.min.js"></script>  
    <script src="js/main.js"></script> 
  </head>

  <body>
    <?php include("includes/login.php"); ?>
    <div class="contenedor_principal">
        <header> 
      		<div class="logo">
      			<div class="imagen">                     
      			</div>
      			</div>
    			 <h1>Acurstin</h1>
    		  </header>

    		<nav>
    			<a href="default.php"><div class="inicio" title="Inicio"></div></a>
    			<a href="nosotros.php"><div class="nosotros" title="Nosotros"></div>
    			<a href="portafolio.php"><div class="servicios" title="Servicios"></div></a>
    			<a href="soporte.php"><div class="soporte" title="Soporte"></div></a>
    			<a href="contacto.php"><div class="contacto" title="Contacto"></div></a>
    		</nav>

      <section class="container">	
      	<div class="titulo">
          <h2>Portafolio</h2>
          <p class="descripcion">Aqui podras ver algunos de nuestros proyectos</p>
        </div>	

    		<div class="contenido">
    		  <div class="view view-first">
            <img src="img/fundacion.png" />
              <div class="mask">
                  <h3>Fundacion</h3>
                  <p>Una organizacion sin Animo de lucro para la comunidad de la comuna 6</p>
                  <a href="http://fchumana.esy.es/" class="info">Ver Sitio</a>
              </div>
          </div> 

          <div class="view view-first">
              <img src="img/soawish.png" />
              <div class="mask">
                  <h3>Wishes&Dreams</h3>
                  <p>Anchetas y Regalos</p>
                  <a href="http://soawish.esy.es/" class="info">Ver Sitio</a>
              </div>
          </div>

          <div class="view view-first">
            <img src="img/cloudfiles.png" />
            <div class="mask">
              <h3>CloudFiles</h3>
              <p>sitio de descargas,archivos de la nube</p>
              <a href="http://cloudfiles.url.ph/" class="info">Ver Sitio</a>
            </div>
          </div>

          <div class="view view-first">
            <img src="img/confort.png" />
            <div class="mask">
              <h3>confort y salud</h3>
              <p>Empresas de colchones y cuidados</p>
              <a href="http://confortysalud.esy.es/" class="info">Ver Sitio</a>
            </div>
          </div>

          <div class="view view-first">
            <img src="img/html51.jpg" />
            <div class="mask">
              <h3>Artificial</h3>
              <p>banda musical de genero post-hardcore</p>
              <a href="#" class="info">Ver Sitio</a>
            </div>
          </div>

          <div class="view view-first">
            <img src="img/html51.jpg" />
            <div class="mask">
              <h3>Proximamente</h3>
              <p>sitio en construccion</p>
              <a href="#" class="info">Ver Sitio</a>
            </div>
          </div>

        </div>

      </section>
    </div>

    	<footer>
    			<small>&copy; Copyright Acurstin</small>
    			<div class="volver" onclick="subir();return false"> </div>
    	</foooter>
  </body> 
</html> 

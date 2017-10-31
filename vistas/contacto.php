<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>
   
   <header class="contacto">
   <div class="fondo">
    <div class="contenpuntos">
       <li class="puntos">Letras de Aluminio</li>
      <li class="puntos">Letras de Acrilico</li>
      <li class="puntos">Letras con Iluminación Led</li>
      <li class="puntos">NEON</li>
      <li class="puntos">Cajas de Luz</li>
      <li class="puntos">Placas Profesionales</li>
      <li class="puntos">Letras de Aceros INOX</li>
      <li class="puntos">Anuncio Tipo Nube</li>
    </div>
    <div class="contenlogo">
      <figure class="logo pull-left">
        <img src="../img/mlum.png" alt="MLUM" class="img-responsive">
      </figure>
      <nav class="pull-right">
        <ul>
          <a class="selector" href="../index.php">INICIO</a>
          <a class="selector" href="nosotros.php">NOSOTROS</a>
          <a class="selector" href="servicios.php">SERVICIOS</a>
          <a class="selector" id="select" href="contacto.php">CONTACTO</a>
        </ul>
      </nav>
    </div>

    <p class="text-banner">CONTACTO</p>
    <p class="text-bannerc">SOLICITAR INFORMACIÓN</p>
    <p class="tit2-banner2">Un asesor lo espera para tomar sus requerimientos</p>
    
   </div>
 </header>




 <div class="container animated fadeIn" style="padding: 5% 0%;">

  <div class="row">
    <h1 class="header-title"> Formulario de Contacto</h1>
    <hr> <br><br>
    <div class="col-sm-12" id="parent">
    	<div class="col-sm-6">

    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1910.2048694645914!2d-93.18522014211034!3d16.756278265438677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ecdbd0c1bad1f3%3A0xa8c626f6cc03d8ec!2sCamino+Al+Club+Campestre+365%2C+El+Campanario%2C+29057+Tuxtla+Guti%C3%A9rrez%2C+Chis.!5e0!3m2!1ses-419!2smx!4v1509476202857" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
    	</div>

    	<div class="col-sm-6">
    		<form action="form.php" class="contact-form" method="post">
	
		        <div class="form-group">
		          <input type="text" class="form-control" id="name" name="nm" placeholder="Escribe tu nombre completo" required="" >
		        </div>
		    
		    
		        <div class="form-group form_left">
		          <input type="email" class="form-control" id="email" name="em" placeholder="Escribe tu correo electrónico" required="">
		        </div>
		    
		      <div class="form-group">
		           <input type="text" class="form-control" id="phone" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="10" placeholder="Escribe tu número teléfonico" required="">
		      </div>
		      <div class="form-group">
		      <textarea class="form-control textarea-contact" rows="5" id="comment" name="FB" placeholder="Escribe tu comentario" required=""></textarea>
		      <br>
	      	  <button class="btn btn-default btn-send"> <span class="glyphicon fa fa-send"></span> ENVIAR </button>
		      </div>
     		</form>
    	</div>
    </div>
  </div>

  <div class="container second-portion">
	<div class="row">
        <!-- Boxes de Acoes -->
    	<div class="col-md-3 ">
			<div class="box">							
				<div class="icon">
					<div class="image"><i class="fa fa-envelope" aria-hidden="true"></i></div>
					<div class="info">
						<h3 class="title">CORREO</h3>
						<p>
							<i class="fa fa-envelope" aria-hidden="true"></i> &nbsp; info@anunciosmlum.com
							<br>
							<br>
							<i class="fa fa-globe" aria-hidden="true"></i> &nbsp; www.anunciosmlum.com
						</p>
					
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>
			
        <div class="col-md-3 ">
			<div class="box">							
				<div class="icon">
					<div class="image"><i class="fa fa-mobile" aria-hidden="true"></i></div>
					<div class="info">
						<h3 class="title">TELEFONO</h3>
    					<p>
							<i class="fa fa-mobile" aria-hidden="true"></i> &nbsp; PENDIENTE
						</p>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>
			
        <div class="col-md-3 ">
			<div class="box">							
				<div class="icon">
					<div class="image"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
					<div class="info">
						<h3 class="title">HORARIO</h3>
    					<p>
							 <i class="fa fa-clock-o" aria-hidden="true"></i> &nbsp; Lunes a Viernes de 9 am a 6 pm
						</p>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>		    

		<div class="col-md-3 ">
			<div class="box">							
				<div class="icon">
					<div class="image"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
					<div class="info">
						<h3 class="title">DIRECCION</h3>
    					<p>
							 <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; C. Club Campestre # 365 M20 L60 por C. San Marino y C. Circuito Sur. Col. Campanario. Tuxtla Gutierrez. Chiapas. C.P. 29057
						</p>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>


	    
	</div>
</div>

</div>

<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/funciondthc.js"></script>
<script src="../js/requerido.js"></script>
<script src="../js/sendCORREO.js"></script>

</body>
</html>
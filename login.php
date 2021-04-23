<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>3BPTATTOO</title>
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/iconos-menu.css">
	<link rel="stylesheet" type="text/css" href="css/styleflex.css">
	<!--Link de Boostrap-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!--Scripts para la funcionalidad de boostrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <!--Scripts para la funcionalidad de boostrap-->


	<script src="https://kit.fontawesome.com/def3cb64a1.js" crossorigin="anonymous"></script><!--FotAwesome-->

  

	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script><!--Es un CDN para poder hacer que funcione el jquery menu.js-->

	<script src="js/menu_respons.js"></script>

     
     <script src="js/fot.js"></script>



</head>
<body>

<!--************************************************************-->	
<!------------Contenedor Logo-------------------------------------->
<div class="cont-prin">
<div class="ctn-1"><img class="logo" src="imagenes/logop.jpg"></div>
		    <!--Contenedor del buscador-->
<div class="ctn-2">
 <input type="text" class="src-prin" name="search" class="src" placeholder="Buscar en nuestra tienda" autocomplete="off"><i class="srcp fas fa-search"></i></div>
      <!--Contenedor negro carrito--> 
 <div class="ctn-3">
 	<div class="ctn-car">
 <div class="ctncarc">
 	<span class="carito">
 		<a href="mostrarCarrito.php">
 		<i class="car fas fa-shopping-cart"></i>
 		CARRITO
 		<span class="vacio">(<?php echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);

 		?>)</span>
 	</a>
 	</span>	
 	<div class="inisesion">
 	<a href="iniciosesion.html">
 		<i class="fas fa-arrow-right"></i>
 		Iniciar sesión
 	</a>
 </div>
 </div>
 
 	</div>
 </div>
</div>
<!--************************************************************-->
<?php include("layauts/_main-header.php"); ?>

<script src="js/menu_respons.js"></script>

<!--*****Formulario inicio de sesión*************************************-->





<div class="ctnautent">
	<div class="ctnsbautent">
			<div class="homenu">
			<a href="index.html">
				<i class="fas fa-home"></i>
			</a>
           <h6> > Autenticación</h6>
	
		</div>
		<div class="ctncreacnt">
			<h1>Autenticación</h1>
				<div class="ctnsbcreacnt">
					<div class="cuentaregis">
						<form action="crearcuent.php" method="post">
							<h3>CREAR UNA CUENTA</h3>
							<div class="forctn">
								<p>Escriba su correo electronico para crear su cuenta</p>
							</div>
							<div class="forcorreo">
								<label>Correo electrónico</label><br>
								<input type="email" name="email_envio" required>
							</div>
							<div class="btnsubmit">
								
								<a href="crearcuent.php">
								<button type="submit" name="btnenviar_email">
									<span>
										<i class="iuser fas fa-user"></i>
										CREAR CUENTA
									</span>
								</button>
								</a>
							</div>
						</form>
					</div>
<div class="cuentaregis">
			<form action="servicios/login.php" method="POST">
			<h3>¿YA ESTÁ REGISTRADO?</h3>
			<div class="forcorreo">
			<label>Correo electrónico</label><br>
			<input type="text" name="emausu" placeholder="Correo">
		    </div>
		    <div class="forcorreo">
		    	<label>Contraseña</label><br>
			<input type="password" name="pasusu" placeholder="Contraseña">
		    </div>
		    <p>
				<a href="olvidocontra.html">¿Olvidó su contraseña</a>
			</p>
			<?php 
		     if (isset($_GET['e'])){
		     switch ($_GET['e']){

		     case '1':
		     echo '<p>Error de conexión</p>';
		     break;

		     case '2':
		     echo '<p>Email inválido</p>';
		     break;

		     case '3':
		     echo '<p>Contraseña incorrecta</p>';
		     break;
		     default:
		     break;
		 }
		 }
		    ?>
		    <div class="btnsubmit">
			<button type="submit">
			<span><i class="lok fas fa-lock"></i>									INICIAR SESIÓN
			</span></button>
		</div>
		</form>
		</div>
	</div>
	</div>
</div>
  </div>



<!--*****Formulario inicio de sesión*************************************-->



<div class="ctn-fomulario">
	
<div class="ctn-form">

  <section class="formulario">
   	
   	<ul>
   		<li class="desplegar"><h4>Información</h4>
        <ul>
        	<li><i class="rig fas fa-chevron-right"></i><a href="#">Promociones especiales</a></li>
        	<li><i class="rig fas fa-chevron-right"></i><a href="#">Novedades</a></li>
        	<li><i class="rig fas fa-chevron-right"></i><a href="#">Los más vendidos</a></li>
        	<li><i class="rig fas fa-chevron-right"></i><a href="#">Contáctenos</a></li>
        	<li><i class="rig fas fa-chevron-right"></i><a href="#">Inicio</a></li>
        	
        </ul>
   		</li>
   	</ul>
</section>

<section class="formulario">
	<ul>
   		<li class="desplegar"><h4>Mi cuenta</h4>
        <ul>
        	<li><i class="rig fas fa-chevron-right"></i><a href="#">Mis pedidos</a></li>
        	<li><i class="rig fas fa-chevron-right"></i><a href="#">Mis facturas por abono</a></li>
        	<li><i class="rig fas fa-chevron-right"></i><a href="#">Mis direcciones</a></li>
        	<li><i class="rig fas fa-chevron-right"></i><a href="#">Mis datos personales</a></li>
        	<li><i class="rig fas fa-chevron-right"></i><a href="#">Mis cupones de descuento</a></li>
        </ul>
   		</li>
   	</ul>
</section>

<section class="formulario">
   	
 <ul>
   		<li class="desplegar"><h4>Información sobre la tienda</h4>

        <ul>
        <li>
        	<h5>Tattoo store</h5>
        	<i class="map fas fa-map-marker-alt"></i>
        	<h3>Calle 4 # 11 - 48</h3>
    </li>
        <li>
         <i class="phon fas fa-phone-alt"></i>
             <h3>Llamanos ahora: 3203927907</h3>
    </li>
    <li>
    	<i class="mail far fa-envelope"><h3>E-mail: contacto@tattoostore.com</h3></i>
          
    </li>

        </ul>
   		</li>
</ul>
</section>

<section class="formulario">
   	<ul>
   		<li class="desplegar"><h4>Siguenos en</h4>
        <ul>
        	<li>
        	<i class="face fab fa-facebook-square"></i>
        	<i class="insta fab fa-instagram-square"></i>
        	<i class="you fab fa-youtube-square"></i>
        	<i class="twit fab fa-twitter"></i>
        </li>
        <li>
        	<h2>Boletín</h2>
        </li>
        <li class="item">
        	<form action="" method="post">
        		<input type="text" name="email" size="18"
        		placeholder="Introduzca su dirección de correo electronico">
                <button type="sumbit"><i class="righ fas fa-chevron-right"></i></button>
        	</form>
        	<span><h2>Registrece para recibir las últimas noticias y actualizaciones
        	directamente en su bandeja de entrada</h2>
        </li>

        </ul>
   		</li>
</ul>
    </section>
</div>
</div>
<!--*****Formulario quienes somos*********************************-->


<!--*****Creador y modo de pagos*********************************-->

<div class="pagcredit">
	<div class="ctn-cp">
		<div class="devpagos">
			<h6>©2020 Powered by 3BPTATTOO. Todos los derechos reservados.</h6>
			<!--Para sacar el Copyright derechos de autos alt +0169-->
		</div>
		<div class="pagos">
			<img src="imagenes/credito-pagos.jpg" alt="">
		</div>
	</div>
</div>
<!--*****Creador y modo de pagos*********************************-->

<!--*****Footer Negro*********************************-->
<div class="footerblack">
	<div class="emoji-descuent">
       <div class="emojicenter">
     <div>
	 <img src="imagenes/iconfinder_Emoji.png" alt="" >
	 </div>
	 <div>
	 <a href="#">Agujas de cartucho 25%OFF</a>
	 </div>
	 <div>
	 <img src="imagenes/iconfinder_Emoji.png" alt="" >
	 </div>
       </div>
	</div>
</div>

</body>
</html>
<div class="cont-prin">
<div class="ctn-1"><img class="logo" src="imagenes/logop.jpg"></div>
		    <!--Contenedor del buscador-->
<div class="ctn-2" id="ctn-bars-search">
	<input class="src-prin" type="text" id="idbusqueda" name="search" 
	class="src" placeholder="Encuentra lo que necesitas" 
	value="<?php if(isset($_GET['text'])){echo $_GET['text'];}
	else{echo '';}  ?>">
	<button class="btn-main btn-search">
	<i class="srcp fas fa-search" onclick="search_producto()" area-hidden="true"></i></button>
</div>


 <!-------Contenedor negro carrito------------> 

 <div class="ctn-3">
 	<div class="ctn-car">
 <div class="ctncarc">
 	<span class="carito">
 	<a href="carrito.php">
 		<i class="car fas fa-shopping-cart"></i>
 		CARRITO
 		
 	</a>
 	</span>	

<?php

if (isset($_SESSION['codusu'])) {
	
	echo 
	'<div class="item-option">
	<a href="index.php">
	<i class="icono-usuario fas fa-user"></i>
	Hola '
	
	.$_SESSION['nomusu'].'</a>'.
	'<span class="separator">  /	</span>
	<a href="cerrar_sesion.php"><h7>Cerrar sesión</h7></a>'.'</div>';
}else{
?>
 	<div class="inisesion">
 	<a href="login.php">
 		<i class="fas fa-arrow-right"></i>
 		Iniciar sesión
 	</a>
 </div>
 <?php 
}
 ?>
 </div>
 
 	</div>
 </div>
</div>


<header>
	<input type="checkbox" id="btn-menu">
    <label class="icon-th-list" for="btn-menu"></label>

<!------Barra de menu Respons-------------------------------->

<div class="conten-respons"><!--Barra de menu Respons-->


<div id="ctn-icon-search">
	<i class="icon-search" id="icon-search"></i>
</div>

<div id="ctn-icon-cancel">
	<i class="icon-cancel" id="icon-cancel"></i>
</div>

		<div class="cont-respons-logo">
			<img class="logo-tattoo" src="imagenes/logo-black.jpg">
		</div>
		<div class="cont-car-respons">
      		<span class="icon-basket"></span>
      	</div>

</div>
<!------Barra de menu Respons-------------------------------->

<nav class="menu">

   		<ul>
   			<li class="icono-home"><a href="index.php"><span class="icon-home"></span></a></li>
   	    <li class="submenu"><a id="sub" href="#"><span class="icon-droplet"></span>INK<span class="icon-down-open"></span></a>
        <ul>
        <li><a href="#">INTENZE INK</a></li>
		<li><a href="#">SOLID INK</a></li>
		<li><a href="#">ETERNAL INK</a></li>
		<li><a href="#">RADIANT COLORS</a></li>
		<li><a href="#">DINAMIC INK</a></li>
		<li><a href="#">STARBRITER COLORS</a></li>
		<li><a href="#">PIGMENTOS NEGROS</a></li>
		<li><a href="#">SETS DE PIGMENTOS</a></li>
		</ul>
		</li>
		<li class="submenu"><a href="#"><span class="icon-deviantart"></span>MÁQUINAS<span class="icon-down-open"></span></a>
        <ul>
        <li><a href="#">ROTATIVAS</a></li>
		<li><a href="#">BOBINAS</a></li>
		<li><a href="#">KITS DE TATUAJES</a></li>
		</ul>
		</li>
		<li><a href="#"><span class="icon-pinboard"></span>AGUJAS Y GRIPS</a></li>
		<li><a href="#"><span class="icon-off"></span>FUENTES</a></li>
		<li><a href="#"><span class="icon-paste"></span>ESTÉNCIL</a></li>
		<li class="submenu"><a href="#"><span class="icon-box"></span>ACCESORIOS<span class="icon-down-open"></span></a>
        <ul>
        <li><a href="#">AGUJAS, GRIPS Y PUNTERAS</a></li>
		<li><a href="#">FUENTES DE PODER</a></li>
		<li><a href="#">PEDALES Y CLIPCORD</a></li>
		<li><a href="#">ASEPSIA Y CUIDADO</a></li>
		<li><a href="#">ACCESORIOS</a></li>
		<li><a href="#">ATENCIL</a></li>
		<li><a href="#">MAQUILLAJE PERMANENTE</a></li>
		<li><a href="#">MOBILIARIO</a></li>
		<li><a href="#">DIBUJO</a></li>
		<li><a href="#">LIBROS</a></li>
        </ul>
		</li>
		<li><a href="historial.php"><span class="icon-resize-vertical"></span>HISTORIAL</a></li>
		<li><a id="modificado" href="#"><span class="icon-certificate"></span>PROMOS!</a></li>
	</ul>
     </nav>

</header>

<script src="js/menu_respons.js"></script>



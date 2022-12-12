<?php 

	$conexion=mysqli_connect('localhost','root','','repustossanmartin');

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1, maximum-scale=1, minimum-scale=1">
  <title>Autorepuestos San Martin</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- link de la fuente -->
  
  <link rel="stylesheet" href="css/NuestrasMarcas.css">
  <script src='https://code.jquery.com/jquery-2.2.0.min.js'></script>
  <script  src="js/index.js"></script>
  <script src="js"></script>
  <style>
    body {
      background-color: white;
      background-size: cover;
      font-family: 'Roboto Condensed', sans-serif;
      font-weight: bold;
      height: 100vh;
    }
    table, th, td,tr {
    position: relative;
    left: 5%;
    top: 12%;
    }
    table {
  border-collapse: collapse;
  width: 22%;
}

th, td, tr{
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

th{
  background-color:#f5f5f5;
}


  </style>


</head>
<body>
	<div class="sq">
		<div class="contain">
      <div id="logo">
        <a href="index.html" class="logo"href="">
          <img  src="imagenes/Logo.svg" alt="Logo AutorepuestosSanMartin">
        </a>
      </div>

      <!---Menu Navegacion-->
      <div class="nav-menu">
        <ul>
          <li><a href="index.html">Inicio</a></li>
          <li><a href="QuienesSomos.html">¿Quiénes Somos?</a></li>
          <li><a href="NuestrasMarcas.html">Nuestras Marcas</a></li>
          <li><a href="">Cotización</a></li>
          <li><a href="">Contáctenos</a></li>
        </ul>
      </div>		
      <!---Final Menu Navegacion-->


    </div>
    <div class="navigation-wrapper"><div class="navigation-menu"></div></div>
  </div>

	<table >
		<tr>
			<th>Id de Marca</th>
			<th>descripcion</th>
		</tr>

		<?php 
		$sql="SELECT * from marca";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['MarcaID'] ?></td>
			<td><?php echo $mostrar['Descripcion'] ?></td>			
		</tr>
	<?php 
	}
	 ?>
	</table>
	<script language="JavaScript" >
    var navButton = document.querySelector('.navigation-button');
    var navMenu = document.querySelector('.navigation-menu');
    var win = window;

    function openMenu(event) {
      navButton.classList.toggle('active');
      navMenu.classList.toggle('active');
      event.preventDefault();
      event.stopImmediatePropagation();
    }

    function closeMenu(event) {
      if (navButton.classList.contains('active')) {
        navButton.classList.remove('active');
        navMenu.classList.remove('active');
      }
    }
    navButton.addEventListener('click', openMenu, false);

    win.addEventListener('click',closeMenu, false);
    
  </script>
</body>
</html>
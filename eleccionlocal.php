<?php require_once 'db.php';
//Llamamos a los pedidos
?>

<!-- Inicio de la pg -->

<!DOCTYPE HTML>
<HTML lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name= "viewport" content="width=device-width, initial-scale=1"/>
    <!-- Agregar titulo -->
    <title> ElectroShop </title>
    <link rel="stylesheet" type="text/css" href="estilos.css"
  </head>
  <body style="background-color:#08E7EE;">

<?php require_once 'eleccionlocal.php';?>
      <!--Cabecera -->
      <header id="cabecera">
        <div id="logo">
          <a href="eleccionlocal.php">
            <h1> ElectroShop </h1>
          </a>
        </div>
        <!--/Menu -->
        <br/>
        <br/>
        <nav id="menu">
          <ul>
            <li>
              <a href="cerrar.php"> Cerrar Sesión </a>
            </li>
            <li>
              <a href="historial.php"> Historial </a>
            </li>
            <li>
              <a href="carrito.php"> Carrito de compras </a>
            </li>
            <li>
              <a href="sesion.php"> VALERIAAAAAAAAAA </a>

            </li>
            <li>
              <a href="portada.php"> Inicio </a>
            </li>
          </ul>
        </nav>
        <div id= "buscador" class="bloque" >
          <h3> </h3>
          <center>
          <form action= "buscador.php" method="POST">
            <input type= "text" name= "busqueda" />
            <input type= "submit" value= "Buscar" />
          </form>
          </center>

<!----------CREACION DE LA TABLA----------->

<table class="table">
  <thead>
    <tr>
      <th scope="col">Local</th>
      <th scope="col">Dirección</th>
      <th scope="col">Codigo Postal</th>

      <!-- EN LA COLUMNA DE ELEGIR SE DEBE DE CREAR EL BOTON PARA SELECCIONAR EL LOCAL-->
      
      <th scope="col">Elegir</th>
    </tr>
  </thead>  
  <tbody>
  <?php
            $consult = "SELECT * FROM locales";
            $result = mysqli_query($db, $consult);
            $local = mysqli_fetch_array($result);
            $c = 1;

            if ($result = mysqli_query($db, $consult)) {
                while ($local = mysqli_fetch_array($result)) {
            ?>
    <tr>
      <th scope="row"><?php echo $local['Loc_Nombre']; ?>
</th>
      <td><?php echo $local['Loc_Direccion']; ?>
</td>
      <td><?php echo $local['Loc_CodPostal']; ?>
</td>

      <!-- EN ESTE ULTIMO SE DEBE DE COLOCAR EL BOTÓN PARA SELECCIONAR -->
      
      <td>BTON</td>
      <?php
            $c = $c + 1;
                }
            }
            ?>
    </tr>
  </tbody>
</table>
<?php require_once 'conexion.php';
      require_once 'iniciosesion.php';
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

<?php require_once 'portada2.php';?>
      <!--Cabecera -->
      <header id="cabecera">
        <div id="logo">
            <a href="portada2.php?idusu=<?php echo $idusu; ?>">
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
              <a href="cart.php?idusu=<?php echo $idusu; ?>"> Carrito de compras </a>
            </li>
            <li>
              <a href="portada2.php?idusu=<?php echo $idusu; ?>"> <?php $name = $row['CI_Nombre']; echo $name; ?> </a>
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

        <!--/Productos -->
        <nav id="productos">
          <h1>  </h1>
          <div class= "row">
          <div class= "col s8 offset-s2" >
            <table style="margin: 0 auto;">
              <thead>
                <tr align= 'center'>
                  <th> <a href="apple.php?idusu=<?php echo $idusu; ?>"> Apple </a> </th>
                  <th> <a href="lenovo.php?idusu=<?php echo $idusu; ?>">Lenovo </a> </th>
                </tr>
              </thead>
              <tbody>
              <tr align= 'center'>
                  <td><a href="apple.php?idusu=<?php echo $idusu; ?>"> <img src="./imagenes/apple.png" width="250px" height="250px"> </a> </td>
                  <td><a href="lenovo.php?idusu=<?php echo $idusu; ?>"><img src="./imagenes/lenovo.png" width='400px' height='90px'></a> </td>
                </tr>
              </tbody>
            </table>

            <table style="margin: 0 auto;">
              <thead>
                <tr align= 'center'>
                  <th> <a href="xiaomi.php?idusu=<?php echo $idusu; ?>"> Xiaomi </a> </th>
                  <th> <a href="hp.php?idusu=<?php echo $idusu; ?>"> HP </a> </th>
                </tr>
              </thead>
              <tbody>
                <tr align= 'center'>
                  <td><a href="xiaomi.php?idusu=<?php echo $idusu; ?>"> <img src="./imagenes/xiaomi.png" width="300px" height="200px"/></a></td>
                  <td><a href="hp.php?idusu=<?php echo $idusu; ?>"><img src="./imagenes/hp.png" width="300px" height="200px"/></a></td>
                </tr>
              </tbody>
            </table>

        <div class="clearfix"></div>

      </header>
  </body>
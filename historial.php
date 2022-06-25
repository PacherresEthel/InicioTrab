<?php
    require_once 'conexion.php';
    require_once 'iniciosesion.php';
    $sql = "SELECT * FROM ordencompra JOIN ordencompra_producto ON ordencompra_producto.id_OrdCom = ordencompra.id_OrdCom JOIN producto ON ordencompra_producto.id_Producto = producto.id_Producto JOIN precio ON precio.id_Precio = producto.id_Precio JOIN locales ON ordencompra.id_Local = locales.id_Locales
           WHERE ordencompra.id_Cliente = ".$idusu;
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result);

?>

<table class = "table-success text-center">
  <thead>
    <b><h1>Mis órdenes de compra</h1></b>
    <tr>
      <td><b>Id Órden</b></td>
      <td><b>Monto</b></td>
      <td><b>Método de pago</b></td>
      <td><b>Estado</b></td>
      <td><b>Local a recoger</b></td>
      <td><b>Acciones</b></td>
    </tr>
  </thead>
  <tbody>
    <?php
    if($result = mysqli_query($db,$sql)){
    while($row = mysqli_fetch_array($result)){
      echo '<tr>';
        echo '<td>';
          echo $row['id_OrdCom'];
        echo '</td>';
        echo '<td>';
          echo $row['Monto'];
        echo '</td>';
        echo '<td>';
          echo "Tarjeta de crédito/débito";
        echo '</td>';
        echo '<td>';
          if($row['Estado'] == 0){
            echo "En proceso";
          } else {
            echo "Entregado";
          }
        echo '</td>';
        echo '<td>';
          echo $row['Loc_Nombre'];
        echo '</td>';
        echo "<td>";
        if($row['Estado'] == 0){
          echo '<a href=cancelarpedido.php?idorden='.$row['id_OrdCom'].'&idusu='.$idusu.'>Cancelar Pedido</a>';}
        echo "</td>";
      echo "</tr>";
      }
    }

    ?>

  </tbody>
</table>
<a href="portada2.php?idusu=<?php echo $idusu;?>"><button type="button" class="btn btn-info">Volver</button></a>
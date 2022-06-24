
       <?php
       include 'header1.php';
       require_once 'conexion.php';
       require_once 'iniciosesion.php';
       echo $header_html;
        ?>
        <div class="container-fluid p-5 bg-primary text-white text-center">
          <h1>Carrito de compras</h1>
          <p>Esta es la lista de productos agregados al carrito</p>
        </div>
        <table class="table">
          <thead>
            <tr>
              <td>Producto</td>
              <td>Cantidad</td>
              <td>Precio Unitario</td>
              <td>&nbsp;</td>
            </tr>
          </thead>
        <tbody>
          <?php

          foreach ($_SESSION["cart"] as $key => $value) {
            $sql = "SELECT * FROM producto JOIN precio ON precio.id_Precio = producto.id_Precio WHERE id_Producto = ".$key;
            $result = mysqli_query($db, $sql);
            $row = mysqli_fetch_array($result);
            echo '<tr>';
              echo '<td>';
                echo $row['Prod_Nombre'];
              echo '</td>';
              echo '<td>';
                echo $value["qty"];
              echo '</td>';
              echo '<td>';
              echo number_format($row['Prec_Precio'],2,'.',',');
              echo '</td>';
              echo '<td>';
                echo '<a href="remove_from_cart.php?id='.$key.'&idusu='.$idusu.'">Disminuir</a>&nbsp;&nbsp;';
                echo '<a href="remove_from_cart.php?remove_all=1&id='.$key.'&idusu='.$idusu.'">Eliminar</a>';
              echo '</td>';
            echo '</tr>';
          }


          ?>
        </tbody>
        </table>
        <?php echo $footer_html; ?>

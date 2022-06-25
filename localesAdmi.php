<?php
       include 'header1.php';
       echo $header_html;
       $sql = "SELECT * FROM locales";
       $result = mysqli_query($db, $sql);

       echo getenv("PHP_PRUEBA_ENV");
        ?>

        <div class="container-fluid p-5 bg-primary text-white text-center">
          <h1>Lista de Locales</h1>
        </div>

        <?php
         if(isset($_SESSION["alert"]))
          {
            echo '<div class="container mt-5">
              <div class="row">
                <div class="col-sm-2">&nbsp;</div>
                <div class="col-sm-8">
                  <div class="alert alert-success alert-dismissible">
                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>'
                    .$_SESSION["alert"].'
                </div>
                </div>
            </div>';
            unset($_SESSION["alert"]);
        }

        ?>
        <div class="container mt-5">
          <div class="row">
            <div class="col-sm-2"><a href="portAdmi.php">Volver</a></div>
            <div class="col-sm-8">
              <h3>Locales</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-2">&nbsp;</div>
            <div class="col-sm-8">
              <table class="table">
                <thead>
                  <tr>
                    <td>ID_Locales</td>
                    <td>Local</td>
                    <td>Dirección</td>
                    <td>Código Postal</td>
                    <td><a href="registLoc.php">Nuevo Local</a></td>
                  </tr>
                </thead>
              <tbody>
                <?php
                if($result){
                while($row = mysqli_fetch_array($result)){
                echo '<tr>';
                  echo '<td>';
                    echo $row['id_Locales'];
                  echo '</td>';
                  echo '<td>';
                    echo $row['Loc_Nombre'];
                  echo '</td>';
                  echo '<td>';
                    echo $row['Loc_Direccion'];
                  echo '</td>';
                  echo '<td>';
                    echo $row['Loc_CodPostal'];
                  echo '</td>';
                  echo '<td>';
                    echo '<a href="deleteLoc.php?id='.$row['id_Locales'].'">Eliminar</a>&nbsp;';
                  echo '</td>';
                echo '</tr>';
                }
              }
              mysqli_close($db);
                ?>
              </tbody>
              </table>
            </div>
          </div>
        </div>

        <?php echo $footer_html; ?>
<?php
    require_once 'conexion.php';
    require_once 'iniciosesion.php';
    $sql = "DELETE FROM ordencompra WHERE id_OrdCom =".$_GET['idorden'];
    $sql2 = "DELETE FROM ordencompra_producto WHERE id_OrdCom =".$_GET['idorden'];
    mysqli_query($db,$sql);
    myqli_query($db,$sql2);
    header('location:historial.php?idusu='.$idusu)
?>
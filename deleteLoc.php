<?php
session_start();
include('conexion.php');
$sql = "DELETE FROM locales where id_Locales = '".$_GET['id']."'";

$first_letter = substr($_GET['id'], 0, 1);

#Para poder utilizar transacciones, las tablas deben tener el motor 'InnoDB'
#En clase no funcionó porque la tabla de customers tenía el motor 'MyIsam'

# con sql2 mal construiodo (levanta una Exception) no elimina ningún registro
#$sql2 = "DELETE FROM customersu where CustomerID like '".$first_letter."%'";
# con sql2 correctamente construido elimina el registro y sus 'relacionados'
$sql2 = "DELETE FROM  locales where id_Locales like '".$first_letter."%'";
$error = '';

try{
  mysqli_begin_transaction($db);
  $result = mysqli_query($db, $sql);
  #$result2 = mysqli_query($con, $sql2);
  mysqli_commit($db);
}catch(Throwable $e){
  mysqli_rollback($db);
}

$_SESSION["alert"] = 'Local eliminado correctamente. ';
header("location: localesAdmi.php")
 ?>
<?php
$connection = mysqli_connect("localhost", "root", "", "rumah_sakit");
 
$selectvalue = mysqli_real_escape_string($connection, $_GET['departemen']);
 
mysqli_select_db($connection, "sirusak_tek");
$result = mysqli_query($connection, "SELECT departemen, tarif FROM tbl_tarif_rj WHERE departemen = '$selectvalue'");
 
while($row = mysqli_fetch_array($result))
  {
    echo $row['tarif'];
  }
 
mysqli_free_result($result);
mysqli_close($connection);
 
?>
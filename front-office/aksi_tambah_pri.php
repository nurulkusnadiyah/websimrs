<?php

include '../konfig.php';
extract($_POST);
$query = "insert into tbl_pri values(null,'$id_pasien', '$id_ruang', '$tanggal_checkin', '$tanggal_checkout', '$hari_menginap', '$diagnosa', '$biaya', '$bayar')";
mysql_query($query);
echo json_encode(array('success'=>'true'));
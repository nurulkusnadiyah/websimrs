<?php


include 'konfig.php';
$id = $_GET['no_ri'];
$query = "delete from tbl_pri where no_ri='$id' ";
mysql_query($query);
?>
<script type="text/javascript">
location.href = 'front-office.php?view=tampil_pri';
</script>


<?php
 require_once "../_config/config.php";
 

 mysqli_query($con, "DELETE FROM tb_user WHERE nip = '$_GET[id]'") or die (mysqli_error($con));
 echo "<script>window.location='admin.php';</script>";

?>
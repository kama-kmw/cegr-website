<?php
include "../../connect.php";

$del_id = $_POST["id_teg"];
if($connection) mysqli_query($connection, "DELETE FROM `year` WHERE id = '$del_id'");
mysqli_close($connection);

header('Location: ../../../admin/#year');
exit;
?>
<?php
include "../../connect.php";

$del_id = $_POST["archive-id"];
if($connection) mysqli_query($connection, "DELETE FROM `archive` WHERE id = '$del_id'");
mysqli_close($connection);

header('Location: ../../../admin/#archive');
exit;
?>
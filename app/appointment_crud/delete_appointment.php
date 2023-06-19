<?php

include "../config.php";

$id = $_GET["id"];

$sql = "DELETE FROM therapysession where id = $id";

$con -> query($sql);
$con-> close();

header("location: index.php")

?>
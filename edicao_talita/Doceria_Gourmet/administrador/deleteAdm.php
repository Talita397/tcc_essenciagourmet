<?php
include "../conexao.php";
$adm_id = $_GET['adm_id'];

$sql="DELETE FROM administrador WHERE
adm_id=$adm_id";
$conn->query($sql);
header("Location:formAdm.php");
?>
<?php
include "../conexao.php";


$pro_id = $_GET['pro_id'];

$sql="DELETE FROM produto WHERE
pro_id=$pro_id";
$conn->query($sql);
header("Location:formProduto.php");

?>
<?php
include "../conexao.php";
/*As variáveis criadas do PHP recebem
o name do HTML */
$adm_id = $_POST['adm_id'];
$adm_nome = $_POST['adm_nome'];
$adm_senha = $_POST['adm_senha'];
$adm_email = $_POST['adm_email'];
$adm_cpf = $_POST['adm_cpf'];

$sql = "UPDATE administrador SET 
adm_nome = '$adm_nome', 
adm_senha = '$adm_senha',
adm_email = '$adm_email',
adm_cpf = '$adm_cpf'
WHERE adm_id=$adm_id";

if($conn->query($sql) === TRUE){
    echo 
    "<script>
    alert('Dados alterados com sucesso!');
    window.location.href='formAdm.php';
    </script>";
}else{
    echo 'Erro ao inserir:'.$conn->error;
}



?>
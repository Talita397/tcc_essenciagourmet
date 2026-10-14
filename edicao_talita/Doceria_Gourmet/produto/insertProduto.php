<?php
//Importar o arquivo de conexão, fora da pasta
include "../conexao.php";

/*Neste trecho do código está sendo criado uma variável em PHP $ 
para receber através do método POST o name HTML*/

$pro_nome = $_POST['pro_nome'];
$pro_preco = $_POST['pro_preco'];
$pro_ingredientes = $_POST['pro_ingredientes'];
$categoria_id = $_POST['categoria_id'];
//$pro_foto = $_POST['pro_foto'];



// Upload da imagem
$imagem = "";
if(isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0){
    $pasta = "../uploads/";
    if(!is_dir($pasta)){
        mkdir($pasta, 0777, true);
    }
    $nomeArquivo = time() . "_" . basename($_FILES["imagem"]["name"]);
    $caminho = $pasta . $nomeArquivo;
    if(move_uploaded_file($_FILES["imagem"]["tmp_name"], $caminho)){
        $imagem = $caminho;
    }
}



$sql = "INSERT INTO produto(pro_nome,pro_preco,pro_ingredientes,categoria_id,imagem) 
VALUES 
(
    '$pro_nome',
    '$pro_preco',
    '$pro_ingredientes',
    '$categoria_id',
    '$imagem'
)";



if($conn->query($sql) === TRUE){
    echo "<script>
    alert('Dados Cadastrados com Sucesso!');
    window.location.href='formProduto.php';
    </script>";
}else{
    echo 'Erro ao inserir:'.$conn->error;
}


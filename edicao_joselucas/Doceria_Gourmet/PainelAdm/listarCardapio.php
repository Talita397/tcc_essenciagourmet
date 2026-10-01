<?php include "../conexao.php"; ?> 
<!DOCTYPE html> 
<html> 
<head> 
    <meta charset="UTF-8"> 
    <title>Formulário Completo</title> 
    <style> 
        body{ 
            font-family:Arial; 
            background-color:#f2f2f2; 
            text-align:center; 
        } 
        .container{ 
            background:white; 
            width:600px; 
            margin:auto; 
            margin-top:30px; 
            padding:20px; 
            border-radius:10px; 
        } 
        .caixa{ 
            width:80%; 
            padding:5px; 
            margin:5px; 
        } 
        img{ 
            width:100px; 
            margin-bottom:10px; 
        } 
        .grupo{ 
            text-align:left; 
            width:80%; 
            margin:auto; 
        } 
        .grupo label{ 
            display:block; 
            margin:5px 0; 
        } 
    </style> 
</head> 
<body> 
    <!--A partir da segunda linha da tabela os 
dados serão em PHP e virão do banco de dados-->    
<tbody>
        <?php
            //Verifica se há registros retornados
                    $sql = "SELECT * FROM categoria";
                    
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()){
                        $cat_id = $row['cat_id'];
                        echo "<tr>      
                                <td>{$row['cat_nome']}</td>
                               
                                <td>
                                <a href='editarformCategoria.php?cat_id=$cat_id'>
                                Editar |
                                </a>

                                <a href='deletecategoria.php?cat_id=$cat_id'
                                onclick=\"return confirm('Deseja realmente excluir
                                a categoria {$row['cat_nome']}?');\"> 
                                
                                Excluir 
                                
                                </a>
                                </td>
                             </tr>";
                    }
        ?>
        
    </tbody>
</table>


</div>

</body>
</html>
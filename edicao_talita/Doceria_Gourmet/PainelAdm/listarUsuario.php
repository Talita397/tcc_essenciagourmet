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
                    $sql = "SELECT * FROM administrador";
                    
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()){
                        $adm_id = $row['adm_id'];
                        echo "<tr>      
                               
                                <td>{$row['adm_nome']}</td>
                                <td>{$row['adm_senha']}</td>
                                <td>{$row['adm_email']}</td>
                                
                                <td>
                                <a href='editarformAdm.php?adm_id=$adm_id'>
                                Editar |
                                </a>

                                <a href='deleteAdm.php?adm_id=$adm_id'
                                onclick=\"return confirm('Deseja realmente excluir
                                o ADM {$row['adm_nome']}?');\"> 
                                
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

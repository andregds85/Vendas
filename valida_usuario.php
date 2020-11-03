<?php 

$usuario=$_POST["nome"];
$senha=$_POST["Senha"];
$senha1=md5($senha); 
  
$host = 'localhost';
$user = 'root';
$pass = '12345678';
$db   = 'vendas';
 
// conexão e seleção do banco de dados
$con = mysqlI_connect($host, $user, $pass, $db);
 
 // executa a consulta
$sql = "SELECT * FROM administrador where email= '$usuario' and senha='$senha1'";
$res = mysqli_query($con, $sql);
 

// conta o número de registros
echo $total = mysqli_num_rows($res);

if ($total>0){
    
    $_SESSION["acesso"] = 1;
    session_start();
    $_SESSION["acesso"]="acesso";    


    ?>
    <script> window.location.href ='fsv.php'; </script> <?php exit;
	}
	else
    {
        ?>
    <script> window.location.href ='sair.php'; </script> <?php exit;

}


?>
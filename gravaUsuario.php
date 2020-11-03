<? include ("session.php"); 




date_default_timezone_set('America/Los_Angeles');

$script_tz = date_default_timezone_get();

if (strcmp($script_tz, ini_get('date.timezone'))){
    echo '';
} else {
    echo '';
}

$dia = date(j);
$mes = date(n);
$ano = date(y);


?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      
      
       <!-- Estilo de foter -->
      <link href="css/estiloFoter.css" rel="stylesheet">
      

    <title>Sistema Web Sul Financiamentos</title>
  </head>
  <body>
 
<!-- Topo da Página -->      
      

<? include("topo.php"); 


$nome=$_POST["nome"];
$sobrenome=$_POST["sobrenome"];
$usuario=$_POST["usuario"];
$senha=$_POST["Senha"];
$repetirSenha=$_POST["repetirSenha"];
$estado1=array($_POST["estado"]);
$cidade1=array($_POST["cidade"]);    
$stringCidade= implode(",", $cidade1);
$stringEstado= implode(",", $estado1);      
$cidade=$stringCidade;
$estado=$stringEstado;     
      
$gravaSenha=md5($senha);      
 


$meta=(substr($_POST['meta'],2));

$valor =$meta; 
/*$saida = number_format( $valor , 2, ',', '.');*/
      
      
      
function converterMoedaMysql($val){
    $recebeValor = $val;
    $converterValor = str_replace('.','',$recebeValor);
    $converterValor = str_replace(',','.',$converterValor);
    return $converterValor;
}

  converterMoedaMysql('19.200,25');    
  $saida=converterMoedaMysql($meta);      
 
            
      
            
          if ($senha==$repetirSenha)
  {
              
              echo"";}
              else{
?>
   
      
        <!-- Fluid Jumbotron --> 
      
 <div class="container-fluid">      
  <div class="jumbotron jumbotron-fluid">
  <div class="container">
      <div class="container-fluid">
 <img src="logo/logo.jpg" width="180" height="180" alt="..." class="rounded-circle">
</div>      
  
    <h1 class="display-4">Mensagem</h1>
    
            
<div class="alert alert-primary" role="alert">
 Erro. Problemas com senhas diferentes. Tente denovo.
</div>
    </div>
  </div>
   </div>  
      
      
   <? include("rodapeLimpo.php"); 
    exit;          
  }
          
          
   
  include("../conecta.php");
      
      
     $compara=$usuario;
 
      
      
      
      $verifica=mysql_query("select * from sfweb_usr");
      while ($linha = mysql_fetch_array($verifica))
               {
                 
                 $usuario1=$linha["usuarioCPO"];
             
          
          if($compara==$usuario1){ 

            ?>
              <div class="alert alert-primary" role="alert">
        Cadastro Negado - Seu E-Mail ja consta no Sistema.
                  </div><?
              exit;
          }
          
      }
      
      
      
      
      
      
      
      

   
    
 mysql_set_charset('utf8');
	$dados=mysql_query("insert into  sfweb_usr(nomeCPO, sobrenomeCPO,usuarioCPO, senhaCPO,dia,mes,ano,meta,estado,cidade) values ('$nome','$sobrenome','$usuario','$gravaSenha','$dia','$mes','$ano','$saida','$estado','$cidade')");


 
          

    ?>  
      
      <!-- Fluid Jumbotron --> 
      
 <div class="container-fluid">      
  <div class="jumbotron jumbotron-fluid">
  <div class="container">
      <div class="container-fluid">
 <img src="logo/logo.jpg" width="180" height="180" alt="..." class="rounded-circle">
</div>      
  
    <h1 class="display-4">Mensagem</h1>
    <?      
          if ($dados)
  {
?>
   
            
<div class="alert alert-primary" role="alert">
  Cadastro efetuado com sucesso.
</div>
    </div>
  </div>
   </div>  
      
      
   <? 
  }
  else
   {  
    ?>  

            
<div class="alert alert-primary" role="alert">
  Erro ao completar a operação.
</div>
    </div>
  </div>
   </div>  
 <?
      
   }
          
      
    
    include("rodapeLimpo.php"); ?>
      
         
      
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

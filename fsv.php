<?php include ("session.php"); ?>

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
      

    <title><?php include("title.php"); ?></title>
  </head>
  <body>
 
<!-- Topo da Página -->      
      
 <?php include("topo.php"); ?>

      
      <?
      include("../conecta.php");
mysql_set_charset('utf8');

 $se=$_SESSION['nome'];
 $comando=mysql_query("select * from sfweb_usr where usuarioCPO = '$se'");    

      
      while ($linha = mysql_fetch_array($comando))
               {
                 $id = $linha["id_usuarioCPO"];
                 $nome=$linha["nomeCPO"];
                 $sobrenome=$linha["sobrenomeCPO"];
                 $usuario=$linha["usuarioCPO"];
                 $senha=$linha["senhaCPO"];
                 $dia=$linha["dia"];
                 $mes=$linha["mes"];
                 $ano=$linha["ano"];
                 $meta=$linha["meta"];         
                     
              }
      
      
      
    if($mes==1){
        
        $mesFalado="janeiro";
    }
      
    if($mes==2){
        
        $mesFalado="Fevereiro";
    }  
      
    if($mes==3){
        
        $mesFalado="Março";
    }  
      
      
    if($mes==4){
        
        $mesFalado="Abril";
    }  
      
    if($mes==5){
        
        $mesFalado="Maio";
    } 
      
    if($mes==6){
        
        $mesFalado="Junho";
    }  
      
    if($mes==7){
        
        $mesFalado="Julho";
    }  
      
    if($mes==8){
        
        $mesFalado="Agosto";
    }   
      
     if($mes==9){
        
        $mesFalado="Setembro";
    }  
      
     if($mes==10){
        
        $mesFalado="Outubro";
    }  
      
     if($mes==11){
        
        $mesFalado="Novembro";
    }  
      
     if($mes==12){
        
        $mesFalado="Dezembro";
    }  
      
 ?>
      
      
      
      
      <!-- Fluid Jumbotron --> 
      
 <div class="container-fluid">      
  <div class="jumbotron jumbotron-fluid">
  <div class="container">
      <div class="container-fluid">
 <img src="logo/logo.jpg" width="180" height="180" alt="..." class="rounded-circle">
</div>      
  
    <h1 class="display-4">Área de Vendas</h1>
    <p class="lead">Área reservada para Vendas</p>
  </div>
  </div>
   </div>    

      <!-- tempo do Cadastro -->      
    <div class="container-fluid">      
  <div class="jumbotron jumbotron-fluid">
  <div class="container">
 <h1>
    <h1 class="display-4">Olá <? echo  $nome; echo " "; echo $sobrenome;?>
 </h1>
     <p class="card-text">
          Seu usário está cadastrado no sistema desde o dia <? echo $dia; echo " de "; echo $mesFalado; echo " 20".$ano; ?> . </p>
  </div>
  </div>
   </div>    
            
      
  
          <!-- tempo do Cadastro -->      
<div class="container-fluid">      
  <div class="jumbotron jumbotron-fluid">
  <div class="container">
 <h1>
    <h1 class="display-4">Sua Meta é de R$: <? echo  number_format($meta, 2, ',', '.'); ?> </h1>
     <p class="card-text"> Meta Atingida até o presente momento
       </p>
  </div>
  </div>
   </div>     
        
        
        
        
        
      
      
      
    
   <?php include("rodapeLimpo.php"); ?>
      
          

      
      
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
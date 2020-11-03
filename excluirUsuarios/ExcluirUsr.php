<?php
  
    

    $us_id=$_GET['us_id'];
  

    include("../../conecta.php");
    $comando = mysql_query("delete from  sfweb_usr where id_usuarioCPO = $us_id");

   

    $correto="Usuario apagado com Sucesso";
    $Erro="Erro Na Operação";


   if ($comando)
  {

   ?>   <script language="JavaScript">
   alert("<?=$correto;?>");
   window.location = "javascript:history.go(-1);";
   </script>
         <?
           }
  else
   {   ?>
            <script language="JavaScript">
   alert("<?=$Erro;?>");
   window.location = "javascript:history.go(-1);";
   </script> <?

   }
    ?>

    mysql_close($db);  
?>


                            

<? 


 mysql_set_charset('utf8');
 $comando = mysql_query("select * from sfweb_usr ");
            echo  "<div class='container-fluid'>";   
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
                
   
 
                  
  
               
               echo "<div class='card text-center'>";
               echo "<div class='card-header'>";
               echo "Nome : ";
               echo  $nome;
               echo "  ";
               echo $sobrenome;
               echo"</div>";  
                  
               
    echo "<div class='card-body'>";
    echo "<h5 class='card-title'>Usuário: $usuario</h5>";
    echo "<h5 class='card-title'>Meta: R$: ";

 
  
    echo number_format($meta, 2, ',', '.');
    echo "</h5>";
   
  
                  
                  
    echo "<div class='card-body'>";
   
                  
    echo "<a href='Excluiusr.php?us_id=$id' class='btn btn-primary'>Apagar</a>";
    echo "</div>";              
    echo "</div>";              
   
                  
                  
                  
    echo "<div class='card-footer text-muted'>";
    echo "DATA DO CADASTRO : ";
    echo $dia;
    echo "/";
    echo $mes;
    echo "/";
    echo "20".$ano;
    echo  "</div>";
    echo "</div>";
                  
                  
                
            
       }
   mysql_close($db);
echo "</div>;"

?>
         
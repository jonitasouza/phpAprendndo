
<?php include_once("conexao.php");?>
<?php

    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
    header("Access-Control-Allow-Headers: Authorization");

   
    $ID = $_REQUEST['id'];
    $razaoSocial	= $_REQUEST['razaoSocial'];
    $setor		= $_REQUEST['setor'];
    $cnpj		= $_REQUEST['cnpj'];
    $ie		= $_REQUEST['ie'];
    $im		= $_REQUEST['im'];
    $cnae		= $_REQUEST['cnae'];
    $porte		= $_REQUEST['porte'];
    $cep		= $_REQUEST['cep'];
    $endereco	= $_REQUEST['endereco'];
    $numero		= $_REQUEST['numero'];
    $complemento	= $_REQUEST['complemento'];
    $bairro		= $_REQUEST['bairro'];
    $cidade		= $_REQUEST['cidade'];
    $UF		= $_REQUEST['UF'];
    $fone		= $_REQUEST['fone'];
    $emai		= $_REQUEST['emai'];
    $site		= $_REQUEST['site'];
    $risco		= $_REQUEST['risco'];
    $cargaIncendio	= $_REQUEST['cargaIncendio'];
    $nfuncionario	= $_REQUEST['nfuncionario'];
    $nadministrativo= $_REQUEST['nadministrativo'];
    $nproducao	= $_REQUEST['nproducao'];
    $usuario	= $_REQUEST['usuario'];
    $submit	= $_REQUEST['submit'];
    $usuario="Joni";

?>
<input name='usuario' id='usuario' value='<?php print $usuario?>' style='display:none'></input>
<?php

if($submit=="Gravar" || $submit=="Alterar" || $submit=="Novo")
{   
    
    if($submit=="Gravar")
    {
        $sql="insert into cliente (
            razaoSocial	
            ,setor		
            ,cnpj		
            ,ie		
            ,im		
            ,cnae		
            ,porte		
            ,cep		
            ,endereco	
            ,numero		
            ,complemento	
            ,bairro		
            ,cidade		
            ,UF		
            ,fone		
            ,emai		
            ,site		
            ,risco		
            ,cargaIncendio	
            ,nfuncionario	
            ,nadministrativo
            ,nproducao	
            ,usuario	
            
            )  values ('"
            .$razaoSocial
            ."','".$setor		
            ."','".$cnpj		
            ."','".$ie		
            ."','".$im		
            ."','".$cnae		
            ."','".$porte		
            ."','".$cep		
            ."','".$endereco	
            ."','".$numero		
            ."','".$complemento	
            ."','".$bairro		
            ."','".$cidade		
            ."','".$UF		
            ."','".$fone		
            ."','".$emai		
            ."','".$site		
            ."','".$risco		
            ."','".$cargaIncendio	
            ."','".$nfuncionario	
            ."','".$nadministrativo
            ."','".$nproducao	
            ."','".$usuario	
    
        ."')"  ;

        $mysqli_connection->query($sql) or die("erro no cadastro"); 
    }
    else
    {
        if($submit=="ALTERAR")
        {
                $sql="update cliente set " ; 
                $sql.="razao_social='" .$razao_social ."'";
              
                $sql.=$sql."setor='" .$setor ."'";				
                $sql.=$sql."cnpj='" .$cnpj ."'";		
                $sql.=$sql."ie='" .$ie."'";
                $sql.=$sql."im='" .$im ."'";		
                $sql.=$sql."cnae='" .$cnae ."'";		
                $sql.=$sql."porte='" .$porte ."'";		
                $sql.=$sql."cep	='" .$cep ."'";		
                $sql.=$sql."endereco='" .$endereco ."'";	
                $sql.=$sql."numero='" .$numero ."'";		
                $sql.=$sql."complemento='" .$complemento ."'";	
                $sql.=$sql."bairro='" .$bairro ."'";		
                $sql.=$sql."cidade='" .$cidade ."'";		
                $sql.=$sql."UF='" .$UF ."'";		
                $sql.=$sql."fone='" .$fone ."'";		
                $sql.=$sql."emai='" .$emai ."'";		
                $sql.=$sql."site='" .$site ."'";		
                $sql.=$sql."risco='" .$risco ."'";		
                $sql.=$sql."cargaIncendio='" .$cargaIncendio ."'";	
                $sql.=$sql."nfuncionario='" .$nfuncionario ."'";	
                $sql.=$sql."nadministrativo='" .  $nadministrativo ."'";
                $sql.=$sql."nproducao='" .$nproducao ."'";	
                $sql.=$sql."usuario='" .$usuario	 ."'";
                $sql.=" where id=" .$ID;
               $mysqli_connection->query($sql) or die("erro na atualizaçao"); 
            }


    }
    header("Location:cliente.php");
  
}
else
{
 
    $sql="select * from cliente where id=".$ID;
    $resultado=  $mysqli_connection->query($sql) or die("erro no cadastro"); 
    $p_records = mysqli_num_rows($resultado);
        
    if($p_records>0)
    {
        while ($row = mysqli_fetch_object( $resultado ))
        {
            $posts[] = array('Endereco'=> $row->Endereco,'Numero'=> $row->Numero,'Complemento'=> $row->Complemento,'Bairro'=> $row->Bairro,'Telefone'=> $row->Telefone,'Contato'=> $row->Contato);
        }

            /* output in necessary format */

                header('Content-type: application/json');
                echo json_encode($posts);

    }
    

}
mysqli_close($mysqli_connection)    ;
?>



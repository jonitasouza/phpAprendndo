<?php
    $usuario	= $_REQUEST['usuario'];
    ?>

<script type="text/javascript">
    function buscaendereco(vcep ){
      var resposta;
        $.ajax({
            method: "post",
            url: "buscaCep.php?CEP="+vcep,
            data: $("#form").serialize(),
        success: function(data){
           // alert(data);

            resposta=data;

           document.getElementById('endereco').value=resposta.logradouro;
           document.getElementById('bairro').value=resposta.bairro;
           document.getElementById('cidade').value=resposta.localidade;
           document.getElementById('UF').value=resposta.uf;
        
        }

    });
    }


</script>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
 
    
      
    <title>Omnia</title>
</head>
<?php  include_once('menu.php')?>

<form action="/sites/omnia/clienteGravar.php" method="post">


    <div class="container-fluid">


            <div class="row">
                <div class="col-sm-5">
                    <div class="controls">
                        <label for="LBCOD_cliente" id="LBCOD_cliente" class="active">Razão Social</label>
                        <input type="text"	 id="id"  name="id"  style="display:none;" >
                        <input	 id="razaoSocial" class="form-control" name="razaoSocial" placeholder="Razão Social">
                        <div id="elemento"></div>

                    </div>
                </div>

                <div class="controls">
                    <div class="col-sm-4">
                        <label for="LBSetor  " id="LBSetor" class="active">Setor</label>
                        <select  id="setor" class="form-control" name="setor"  placeholder="setor">
                        <option value="Industria">Agro</option>
                        <option value="Industria">Industria</option>
                        
                        </select>

                    </div>
                </div>            
            </div>
    </div>
   <div class="container-fluid">
        <div class="row">
                <div class="controls">
                    <div class="col-sm-3">
                        <label for="" id="LBDocumento" class="active">CNPJ</label>
                        <input  id="cnpj" class="form-control" name="cnpj"  placeholder="CNPJ">
                    </div>
                </div>
                <div class="controls">
                    <div class="col-sm-2">
                        <label for="" id="LBIE" class="active">IE</label>
                        <input  id="ie" class="form-control" name="ie"  placeholder="Inscrição Estadual:">
                    </div>
                </div>
                <div class="controls">
                    <div class="col-sm-2">
                        <label for="" id="LBIM" class="active">IM</label>
                        <input  id="im" class="form-control" name="im"  placeholder="Inscrição Municipal:">
                    </div>
                </div>

                <div class="controls">
                    <div class="col-sm-2">
                        <label for="" id="LBcnae" class="active">CNAE</label>
                        <input  id="cnae" class="form-control" name="cnae"  placeholder="CNAE">
                    </div>
                </div>

         </div>
        <div class="row">

                <div class="controls">
                    <div class="col-sm-2">
                        <label for="LBPorte  " id="LBPorte" class="active">Porte</label>
                        <select  id="porte" class="form-control" name="porte"  placeholder="porte da empresa "  >
                        <option value="microempresa">microempresa</option>
                        <option value="pequeno">pequeno</option>
                        <option value="médio">médio</option>
                        <option value="grande porte">grande porte</option>
                        </select>

                    </div>
                </div>            


                <div class="controls">
                    <div class="col-sm-1">
                        <label for="" id="LBCEP" class="active">CEP</label>
                        <input  id="cep" class="form-control" name="cep"  placeholder="CEP" onblur="buscaendereco(this.value)" )>
                    </div>
                </div>
               

                <div class="controls">
                    <div class="col-sm-6">
                        <label for="LBEndereco" id="LBEndereco" class="active">Endereço</label>
                        <input  id="endereco" class="form-control" name="endereco"  placeholder="Endereco">
                    </div>
                </div>
        </div>
        <div class="row">
                <div class="controls">
                    <div class="col-sm-2">
                        <label for="" id="LBNumero" class="active">Número</label>
                        <input  id="numero" class="form-control" name="numero"  placeholder="Número">
                    </div>
                </div>
                <div class="controls">
                    <div class="col-sm-3">
                        <label for="" id="LBComplemento" class="active">Complemento</label>
                        <input  id="complemento" class="form-control" name="complemento"  placeholder="Complemento">
                    </div>
                </div>
                <div class="controls">
                    <div class="col-sm-4">
                        <label for="LBBairro" id="LBBairro" class="active">Bairro</label>
                        <input  id="bairro" class="form-control" name="bairro"  placeholder="Bairro">
                    </div>
                </div>
        </div>
        <div class="row">
                <div class="controls">
                    <div class="col-sm-4">
                        <label for="" id="LBCidade" class="active">Cidade</label>
                        <input  id="cidade" class="form-control" name="cidade"  placeholder="Cidade">
                    </div>
                </div>
                <div class="controls">
                    <div class="col-sm-1">
                        <label for="" id="LBUF" class="active">UF</label>
                        <input  id="UF" class="form-control" name="UF"  placeholder="UF">
                    </div>
                </div>
                <div class="controls">
                    <div class="col-sm-4">
                        <label for="LBFone" id="LBFone" class="active">Fone</label>
                        <input  id="fone" class="form-control" name="fone"  placeholder="Fone">
                    </div>
                </div>
        </div>
        <div class="row">

                <div class="controls">
                    <div class="col-sm-5">
                        <label for="LBEmail" id="LBEmail" class="active">Email</label>
                        <input  id="emai" class="form-control" name="emai"  placeholder="Email">
                    </div>
                </div>
                <div class="controls">
                    <div class="col-sm-4">
                        <label for="LBSite" id="LBSite" class="active">Site</label>
                        <input  id="site" class="form-control" name="site"  placeholder="Site">
                    </div>
                </div>
        </div>

        <div class="row">

            <div class="controls">
                <div class="col-sm-1">
                    <label for="LBRisco  " id="LBRisco" class="active">Risco</label>
                        <select  id="risco" class="form-control" name="risco"  placeholder="grau de risco "  >
                        <option value="I">I</option>
                        <option value="II">II</option>
                        <option value="III">III</option>
                        <option value="IV">IV</option>
                        </select>                
                </div>
            </div>
            <div class="controls">
                <div class="col-sm-2">
                    <label for="LBCarga" id="LBCarga" class="active">Carga de Incêncio</label>
                    <input  id="cargaIncendio" class="form-control" name="cargaIncendio"  placeholder="Carga de Incêndio">
                </div>
            </div>
            <div class="controls">
                <div class="col-sm-2">
                    <label for="LBNFuncionarios" id="LBNFuncionarios" class="active">N.Funcionarios</label>
                    <input  id="nfuncionario" class="form-control" name="nfuncionario"  placeholder="N.Funcionarios">
                </div>
            </div>
            <div class="controls">
                <div class="col-sm-2">
                    <label for="LBNAdministrativo" id="LBNAdministrativo" class="active">N.Administrativo</label>
                    <input  id="nadministrativo" class="form-control" name="nadministrativo"  placeholder="N.Administrativo">
                </div>
            </div>
            <div class="controls">
                <div class="col-sm-2">
                    <label for="LBNProducao" id="LBNProducao" class="active">N.Produção</label>
                    <input  id="nproducao" class="form-control" name="nproducao"  placeholder="N.Produção">
                </div>
            </div>            
        </div>

        <br>
        <div class="row" style='margin-left:30%;' >
            <input type="submit" name="submit" id="submit"     value='Gravar'  class="btn btn-success"  style='width:100;'>
            <input type="submit" name="submit" id="submit"    value='Alterar'  class="btn btn-danger"  style='width:100;'>
            <input type="submit" name="submit" id="submit"   value='Novo'  class="btn btn-primary"  style='width:100;'>
            <input name='usuario' id='usuario' value='<?php print $usuario?>' style='display:none'></input>
        </div>
    </div>
    
    </form>
</body>
</html>

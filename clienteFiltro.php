<?php include_once("conexao.php");?>
<?php
        $sql=" select 
        id, 
        razaoSocial,
        setor, 
        cnpj, 
        ie, 
        im, 
        cnae, 
        porte, 
        cep, 
        endereco, 
        concat(numero,' ',complemento), 
        bairro, 
        cidade, 
        UF
        from cliente order by razaoSocial";
        $buscaCliente=$mysqli_connection->query($sql) or die("erro na seleção  linha 4");  
 
        /*
        mysqli_stmt_execute($buscaCliente); 
        mysqli_stmt_store_result($buscaCliente);
        // Get the number of rows returned: 
        $count = mysqli_stmt_num_rows($buscaCliente);*/

?>
<?php  include_once('menu.php')?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="https://cdn.datatables.net/v/dt/dt-1.13.7/datatables.min.css" rel="stylesheet">


<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  font-size: 12px;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 1px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>


<div style='font-size:10px'>
<table id='myTable' >
  <thead>
  <tr>
    <th>ID</th>
    <th style='width:250px;'>RAZÃO SOCIAL	</th>
    <th>SETOR		</th>
    <th>CNPJ		</th>
    <th>IE		</th>
    <th>IM		</th>
    <th>CNAE		</th>
    <th>PORTE		</th>
    <th>CEP		</th>
    <th>ENDEREÇO	</th>
    <th>Nº		</th>
    <th>BAIRRO		</th>
    <th>CIDADE		</th>
    <th>UF		</th>
  
  </tr>
  </thead>
  <tbody>
 
  <?php
            while ($row = mysqli_fetch_row( $buscaCliente ))
            {
                print "<tr><td>$row[0]</td>
                <td style='width:200px;'>$row[1]</td>
                <td>$row[2]</td>
                <td>$row[3]</td>
                <td>$row[4]</td>
                <td>$row[5]</td>
                <td>$row[6]</td>
                <td>$row[7]</td>
                <td>$row[8]</td>
                <td>$row[9]</td>
                <td>$row[10]</td>
                <td>$row[11]</td>
                <td>$row[12]</td>
                <td>$row[13]</td>
";
            }
?>

  
  </tbody>
</table>
<div>
</body>
<script>
$(document).ready(function(){
    $('#myTable').DataTable({
	        "ordering": true,
	        "paging": true,
	        "searching": true,
	        "oLanguage": {
	            "sEmptyTable": "Nenhum registro encontrado na tabela",
	            "sInfo": "Mostrar _START_ até _END_ de _TOTAL_ registros",
	            "sInfoEmpty": "Mostrar 0 até 0 de 0 Registros",
	            "sInfoFiltered": "(Filtrar de _MAX_ total registros)",
	            "sInfoPostFix": "",
	            "sInfoThousands": ".",
	            "sLengthMenu": "Mostrar _MENU_ registros por pagina",
	            "sLoadingRecords": "Carregando...",
	            "sProcessing": "Processando...",
	            "sZeroRecords": "Nenhum registro encontrado",
	            "sSearch": "Pesquisar",
	            "oPaginate": {
	                "sNext": "Proximo",
	                "sPrevious": "Anterior",
	                "sFirst": "Primeiro",
	                "sLast": "Ultimo"
	            },
	            "oAria": {
	                "sSortAscending": ": Ordenar colunas de forma ascendente",
	                "sSortDescending": ": Ordenar colunas de forma descendente"
	            }
	        }
    });
});
</script>
<script src="https://cdn.datatables.net/v/dt/dt-1.13.7/datatables.min.js"></script>
</html>
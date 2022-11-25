<?php
$produto = $_POST['produto'];
$valorTotal = $_POST['valorTotal'];
$pagamento = $_POST['pagamento'];
$quantidade = $_POST['quantidade'];
$valorUnit = $_POST['valorUnit'];

$resultado = $quantidade * $valorUnit;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="refresh" content="3"> -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/nf.css">
    <link rel="stylesheet" href="css/ntfiscal.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>NOTA FISCAL</title>
</head>

<body class="exercicio">

    <header class="cabecalho">
        <h1>SUPERMERCADO BAGUNCINHA</h1>
        <h2>NOTA FISCAL</h2>
    </header>

    <nav class="navegacao">

        <a href="index.php" class="vermelho">Voltar</a>
    </nav>

    <main class="principal">
        <div class="conteudo"> <!-- -->
        <div class="titulo">CUPOM FISCAL</div>





<table class="printer-ticket">
 	<thead>
		<tr>
			<th class="title" colspan="3">SUPERMERCADO BAGUNCINHA</th>
		</tr>
		<tr>
			<th colspan="3"><?php
            
$Object = new DateTime();  
$DateAndTime = $Object->format("d-m-Y h:i:s a");  
echo $DateAndTime;
?></th>
		</tr>
		<tr>
			<th colspan="3">
				Nome do cliente <br />
				000.000.000-00
			</th>
		</tr>
		<tr>
			<th class="ttu" colspan="3">
				<b>Cupom não fiscal</b>
			</th>
		</tr>
	</thead>
	<tbody>
		<tr class="top">
			<td colspan="3"><?= $produto ?></td>
		</tr>
		<tr>
			<td>R$ <?= $valorUnit?></td>
			<td class="qtd"><?= $quantidade ?>.0</td>
			<td>R$<?= $valorTotal?></td>
		</tr>
	</tbody>
	<tfoot>
		<tr class="sup ttu p--0">
			<td colspan="3">
				<b>Totais</b>
		<tr class="ttu">
			<td colspan="2">Total</td>
			<td>R$<?= $valorTotal?></td>
		</tr>
		<tr class="sup ttu p--0">
			<td colspan="3">
				<b>Pagamentos</b>
			</td>
		</tr>
		<tr class="ttu">
			<td colspan="2"><?= $pagamento ?></td>
			<td>R$<?= $valorTotal?></td>
		</tr>
		<tr class="sup">
			<td colspan="3" align="center">
				<b>Pedido:</b>
			</td>
		</tr>
		<tr class="sup">
			<td colspan="3" align="center">
				www.supermercadobaguncinha.com.br
			</td>
		</tr>
	</tfoot>
</table>




        </div>




    </main>


    <footer class="rodape">
    ATIVIDADE N°3 EDUARDO © <?= date('Y'); ?>
        <!--Utilizado para atualizar a data no ambito do ANO -->
    </footer>


</body>

</html>
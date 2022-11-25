<?php


$produto = '';
$valorTotal = 0 ;
$pagamento = '';
$quantidade = 0;
$valorUnit = 0;

$produto = $_GET['produto'];
$valorTotal = $_GET['valorTotal'];
$pagamento = $_GET['pagamento'];




if (isset($_GET['quantidade'], $_GET['valorUnit'], $_GET['confirmarUnid'])) {
    $quantidade = $_GET['quantidade'];
    $valorUnit = $_GET['valorUnit'];
    $calculo = $_GET['confirmarUnid'];
}

$resultado = $quantidade * $valorUnit;

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="refresh" content="3"> -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Supermercado Baguncinha</title>
</head>

<body>

    <header class="cabecalho">
        <h1>SUPERMERCADO BAGUNCINHA</h1>
        <h2>Atividade N3 | Eduardo Oliveira </h2>
    </header>


    <main class="principal">
        <div class="conteudo">
            <!-- -->
            <nav class="modulos">
                <!-- Div principal "Container" -->

                <form>

                    <div class="modulo verde">
                        <!-- Div secundaria "Item"-->
                        <h3>PRODUTO</h3>
                        <ul>
                            <li>Informe nome do Produto:</li>
                            <input type="text" name="produto" value="<?= $produto ?>" required><br>

                            <li>Quantidade:</li>
                            <input type="number" name="quantidade" value="<?= $quantidade ?>" required><br>

                            <li>Valor Unitario:</li>
                            <input type="number" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any" name="valorUnit" value="<?= $valorUnit ?>" required><br>

                            <li>Valor Total:</li>
                            <input type="text" name="valorTotal" value="<?= $resultado ?>"><br><br>
                            <input type="submit" value="Mostrar Valor" name="confirmarUnid">

                            <br><br><br>

                        
                          




                </form>

                <form action="notafiscal.php" method="POST">


                <li>FORMA DE PAGAMENTO</li>
                            <label for="">Selecione a forma de pagamento: </label>
                            <select name="pagamento" id="pagamento">
                                <option value="PIX">PIX</option>
                                <option value="CREDITO">CREDITO</option>
                                <option value="DEBITO">DEBITO</option>
                                <option value="DINHEIRO">DINHEIRO</option>
                            </select>
                            <br><br>


                    <input type="hidden" name="quantidade" value="<?= $quantidade ?>">
                    <input type="hidden" name="produto" value="<?= $produto ?>">
                    <input type="hidden" name="valorUnit" value="<?= $valorUnit ?>">
                    <input type="hidden" name="valorTotal" value="<?= $resultado ?>">
            
                    <center><input type="submit" value="ENVIAR PEDIDO" id="entrar" name="enviar"></center>
                </form>
                </ul>
        </div>

        </nav>
        </div>
    </main>


    <footer class="rodape">
        ATIVIDADE N°3 EDUARDO © <?= date('Y'); ?>
        <!--Utilizado para atualizar a data no ambito do ANO -->
    </footer>


</body>

</html>
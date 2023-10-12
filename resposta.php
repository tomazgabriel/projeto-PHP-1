<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respostas</title>
</head>
<body>
    <?php
        $distancia = $_POST["distancia"];
        $precoEtanol = $_POST["precoEtanol"];
        $precoGasolina = $_POST["precoGasolina"];
        $gastoEtanol = $distancia / 9 * $precoEtanol;
        $gastoGasolina = $distancia / 11 * $precoGasolina;
        
        echo "o valor gasto com etanol é: ";
        echo number_format($gastoEtanol, 2, ",",".")."<br>";
        echo "o valor gasto com gasolina é: ";
        echo number_format($gastoGasolina, 2, ",",".")."<br>";
        
        if($gastoEtanol < $gastoGasolina){
            echo "Abasteça Etanol";
        } else {
            echo "Abasteça Gasolina";
        }

        //pega a data atual
        $data = date('d/m/Y');
        //abre o arquivo no modo escrita com adição de dados
        $arquivo = fopen('log.txt','a');
        if($arquivo){
            //se conseguiu abrir o arquivo, grava os dados separando-os por espaço
            fwrite($arquivo, $data);
            fwrite($arquivo, " ");
            fwrite($arquivo, number_format($precoEtanol, 2 , ",", "."));
            fwrite($arquivo, " ");
            fwrite($arquivo, number_format($precoGasolina, 2, ",", "."));
            //grava uma quebra de linha
            fwrite($arquivo, "\n");
        }
        fclose($arquivo);
    ?>
    <!-- link para o relatório -->
    <br>
    <a href="relatorio.php">Abrir Relatório</a>    
</body>
</html>
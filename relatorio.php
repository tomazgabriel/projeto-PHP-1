<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body class="bg-light">
    <main class="container">
        <div class="row text-center">
            <h1>Relatório do preço dos combustíveis</h1>
        </div>

        <div class="row justify-content-center">
            <div class="col-sm-4 mt-2 p-2 border rounded border-primary-subtle bg-white">
                <?php
                    $arquivo = fopen('log.txt','r');
                    if($arquivo){
                        // imprime linha por linha até detectar o final
                        while(!feof($arquivo)){
                            echo fgets($arquivo)."<br>";
                        }
                    }
                    fclose($arquivo); 
                ?>
            </div>
        </div>
    </main>
</body>
</html>
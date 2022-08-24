<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "./View/includes/css_config.php" ?>
    <title>Inicio</title>
    <style>
        body{
            background-image: url("imagens/fundinho.gif");
            background-size: cover;
        }

        button{
            margin: 15px;
            margin-top: 0px;
            opacity: 75%;
        }

        button:hover{
            opacity: 100%;
        }
    </style>
</head>
<body> <br> <br> <br>
    <center>
    <img src="imagens/loguinha.png">
    <br> <br> <br> 

  
        
        <a href="/cartas/form"  class="btn btn-outline-light">Criar nova carta</a>
           
  
    
        <a href="/cartas"  class="btn btn-outline-light">Ver cartas criadas</a>

    

    </center>

    <?php include "./View/includes/js_config.php" ?>
</body>
</html>
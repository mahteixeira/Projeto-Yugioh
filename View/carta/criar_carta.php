<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="post" action="/processa">
        <legend>Crie sua carta</legend>

        <label for="nome">Nome:</label>
        <input id="nome" name="nome" type="text" /> <br />

        <label for="sexo">Nível:</label>
        <input id="nivel" name="nivel" type="number"/> <br />

        <label for="sexo">Ataque:</label>
        <input id="ataque" name="ataque" type="number"/> <br />

        <label for="sexo">Defesa:</label>
        <input id="defesa" name="defesa" type="number"/> <br />

        <label for="nome">Descrição:</label>
        <input id="descricao" name="descricao" type="text" /> <br />

        <button type="submit">Enviar</button>
    </form>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yu-Gi-Oh</title>
</head>
<body>

    <form method="post" action="/cartas/save">
        <legend>Crie sua carta :)</legend>

        <input id="id" name="idcarta" type="hidden" value="<?= $model->idcarta?>"/>

        <label for="nome">Nome:</label>
        <input id="nome" name="nome" type="text" value="<?= $model->nome?>"/> <br />

        <label for="sexo">Nível:</label>
        <input id="nivel" name="nivel" type="number" value="<?= $model->nivel?>"/> <br />

        <label for="sexo">Ataque:</label>
        <input id="ataque" name="ataque" type="number" value="<?= $model->ataque?>"/> <br />

        <label for="sexo">Defesa:</label>
        <input id="defesa" name="defesa" type="number" value="<?= $model->defesa?>"/> <br />

        <label for="nome">Descrição:</label>
        <input id="descricao" name="descricao" type="text" value="<?= $model->descricao?>"/> <br />

        <button type="submit">Enviar</button>
    </form>
    
</body>
</html>
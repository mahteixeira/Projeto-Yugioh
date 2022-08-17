<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem das Cartas</title>
</head>
<body>

    <table>
        <tr>
            <th></th>
            <th>Id</th>
            <th>Nome</th>
            <th>Nivel</th>
            <th>Ataque</th>
            <th>Defesa</th>
            <th>Descrição</th>
        </tr>
        
        <?php foreach($model->rows as $item): ?>
        <tr>
            <td>
                <a href="/cartas/delete?id=<?= $item->id ?>">X</a>
            </td>

            <td><?= $item->id ?></td>

            <td>
                <a href="/cartas/form?id=<?= $item->id ?>"><?= $item->nome ?></a>
            </td>

            <td><?= $item->nivel ?></td>
            <td><?= $item->ataque ?></td>
            <td><?= $item->defesa ?></td>
            <td><?= $item->descricao ?></td>
        </tr>
        <?php endforeach ?>

        
        <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="5">Nenhum registro de cartas encontrado.</td>
            </tr>
        <?php endif ?>

    </table>
    
</body>
</html>
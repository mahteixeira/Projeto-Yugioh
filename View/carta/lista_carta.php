<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "./View/includes/css_config.php" ?>
    <title>Listagem das Cartas</title>
<style>
    .box-table{
        width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
    }

    .table{
        width: 60%;
    }

    a { color: red ;

    }

</style>

</head>
<body>

<section class="box-table">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Deletar</th>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Nível</th>
      <th scope="col">Ataque</th>
      <th scope="col">Defesa</th>
      <th scope="col">Descrição</th>
      <th scope="col">Tipo</th>
    </tr>
  </thead>
  <tbody>
    
  
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
            <td><?= $item->tipo ?></td>
        </tr>
        <?php endforeach ?>

        
        <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="5">Nenhum registro de cartas encontrado.</td>
            </tr>
        <?php endif ?>
  
  
 
  </tbody>
</table> 
</section>


        <?php include "./View/includes/js_config.php" ?>
</body>
</html>
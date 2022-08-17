<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "./View/includes/css_config.php" ?>
    <title>Yu-Gi-Oh</title>
    <style>
        .box-form {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form {
            width: 60%;
        }
    </style>
</head>
<body>

    <section class="box-form">
        <form method="post" action="/cartas/save" class="row g-3">
          <input id="id" name="id" type="hidden" value="<?= $model->id?>"/>
          <div class="col-md-12">
            <label for="inputEmail4" class="form-label">Nome</label>
            <input name="nome" type="text" value="<?= $model->nome?>" class="form-control" id="inputEmail4">
          </div>
          <div class="col-md-3">
            <label for="inputPassword4" class="form-label">Nivel</label>
            <input name="nivel" type="number" value="<?= $model->nivel?>" class="form-control" id="inputPassword4">
          </div>
          <div class="col-3">
            <label for="inputAddress" class="form-label">Ataque</label>
            <input name="ataque" type="number" value="<?= $model->ataque?>" class="form-control" id="inputAddress">
          </div>
          <div class="col-6">
            <label for="inputAddress2" class="form-label">Defesa</label>
            <input name="defesa" type="number" value="<?= $model->defesa?>" class="form-control" id="inputAddress2">
          </div>
          <div class="col-md-6">
            <label for="inputCity" class="form-label">Descrição</label>
            <input name="descricao" type="text" value="<?= $model->descricao?>" class="form-control" id="inputCity">
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary">Enviar</button>
          </div>
        </form>
    </section>

    <?php include "./View/includes/js_config.php" ?>
</body>
</html>
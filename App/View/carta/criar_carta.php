<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "./View/includes/css_config.php" ?>
    
    <title>Yu-Gi-Oh</title>
</head>
<body>


    <section class="box-form">
        
        <div id="capture">
        <div id="modelo">
        <figure id="carta">
        <div id="myimage"><div>      
              <div id="fotita"></div>
              <figcaption id="titulo">Título</figcaption>
              <figcaption id="desc">Descrição da carta vai aqui</figcaption>  
              <label id="atk">0</label>
              <label id="def">0</label>
              
        </figure>
        </div>
        </div>

        <form method="post" action="/cartas/save" class="row g-3">
          <input id="id" name="id" type="hidden" value="<?= $model->id?>"/>

          
          <div id="formulario"> <br> <br>
          <label for="inputTipo" class="form-label">Tipo</label>
          <input name="tipo" type="text" placeholder="tipo da carta" list="faixa" value="<?= $model->tipo?>" onchange="document.getElementById('myimage').style.backgroundImage = colorUrlMap[this.value];">
            <datalist id="faixa">
              <option value="Normal">Normal</option>
              <option value="Efeito">Efeito</option>
              <option value="Ritual">Ritual</option>
              <option value="Fusão">Fusão</option>
              <option value="Sincro">Sincro</option>
              <option value="Xyz">Xyz</option>
            </datalist>

          <div class="col-md-12">
            <label for="inputnome" class="form-label">Nome</label>
            <input name="nome" type="text" value="<?= $model->nome?>" class="form-control" id="inputnome">
          </div>
          <div class="col-md-3">
            <label for="inputnivel" class="form-label">Nivel</label>
            <input name="nivel" type="number" value="<?= $model->nivel?>" class="form-control" id="inputnivel">
          </div>
          <div class="col-3">
            <label for="inputataque" class="form-label">Ataque</label>
            <input name="ataque" min="0" max="9999" type="number" value="<?= $model->ataque?>" class="form-control" id="inputataque">
          </div>
          <div class="col-6">
            <label for="inputdefesa" class="form-label">Defesa</label>
            <input name="defesa" min="0" max="9999" type="number" value="<?= $model->defesa?>" class="form-control" id="inputdefesa">
          </div>
          <div class="col-md-6">
            <label for="inputdesc" class="form-label">Descrição</label>
            <input name="descricao" type="text" value="<?= $model->descricao?>" class="form-control" id="inputdesc">
          </div><br>
          <label for="image">Imagem</label> <br>
          <input type="file" name="image" id="image" accept="image/png, image/jpg"/>
          <div class="col-12"> <br>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
        </div>
        </form>
        <button onclick="salvar()" class="btn btn-primary">Download img</button>


    </section>
    <?php include "./View/includes/js_config.php" ?>
</body>
</html>
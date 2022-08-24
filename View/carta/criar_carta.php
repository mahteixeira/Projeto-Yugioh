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
            width: 50%;
        }

        .carta{
          float:left;
        }

        #fotita{
          background: #000;
          height: 315px;
          width: 315px;
          position: absolute;
          background-image: url("");
          margin-left: 52px;
          margin-top: 112px;
        }

        #formulario{
          float: right;
        }
    </style>
</head>
<body>


    <section class="box-form">
        <form method="post" action="/cartas/save" class="row g-3">
          <input id="id" name="id" type="hidden" value="<?= $model->id?>"/>

          <div id="carta">
          <div id="fotita"></div>
          <img src="https://www.cardmaker.net/cardmakers/yugioh/createcard.php?name=&cardtype=Monster&subtype=normal&attribute=Light&level=0&trapmagictype=None&rarity=Common&picture=&circulation=&set1=&set2=&type=&carddescription=&atk=&def=&creator=&year=&serial=" id="myimage">

          <div id="formulario"> <br> <br>
          <label for="inputTipo" class="form-label">Tipo</label>
          <input name="tipo" type="text" placeholder="tipo da carta" list="faixa" value="<?= $model->tipo?>" onchange="document.getElementById('myimage').src = colorUrlMap[this.value];">
            <datalist id="faixa">
              <option value="Normal">Normal</option>
              <option value="Efeito">Efeito</option>
              <option value="Ritual">Ritual</option>
              <option value="Fusao">Fusão</option>
              <option value="Sincro">Sincro</option>
              <option value="Xyz">Xyz</option>
            </datalist>

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
          </div><br>
          <!--<label for="image">Image</label>
          <input type="file" name="image" id="image"/> -->
          <div class="col-12"> <br>
            <button type="submit" class="btn btn-primary">Enviar</button>
          </div>
          </div>
        </form>
    </section>

  
    <script>
      var colorUrlMap = {
    "Normal" : "https://www.cardmaker.net/cardmakers/yugioh/createcard.php?name=&cardtype=Monster&subtype=normal&attribute=Light&level=0&trapmagictype=None&rarity=Common&picture=&circulation=&set1=&set2=&type=&carddescription=&atk=&def=&creator=&year=&serial=",
    
    "Efeito" : "https://www.cardmaker.net/cardmakers/yugioh/createcard.php?name=&cardtype=Monster&subtype=effect&attribute=Light&level=0&trapmagictype=None&rarity=Common&picture=&circulation=&set1=&set2=&type=&carddescription=&atk=&def=&creator=&year=&serial=",
  
      "Ritual" : "https://www.cardmaker.net/cardmakers/yugioh/createcard.php?name=&cardtype=Ritual&subtype=normal&attribute=Light&level=0&trapmagictype=None&rarity=Common&picture=&circulation=&set1=&set2=&type=&carddescription=&atk=&def=&creator=&year=&serial=",
  
  "Fusao" : "https://www.cardmaker.net/cardmakers/yugioh/createcard.php?name=&cardtype=Fusion&subtype=normal&attribute=Light&level=0&trapmagictype=None&rarity=Common&picture=&circulation=&set1=&set2=&type=&carddescription=&atk=&def=&creator=&year=&serial=",
  
  "Sincro" : "https://www.cardmaker.net/cardmakers/yugioh/createcard.php?name=&cardtype=Synchro&subtype=normal&attribute=Light&level=0&trapmagictype=None&rarity=Common&picture=&circulation=&set1=&set2=&type=&carddescription=&atk=&def=&creator=&year=&serial=",
  
  "Xyz" : "https://www.cardmaker.net/cardmakers/yugioh/createcard.php?name=&cardtype=Xyz&subtype=normal&attribute=Light&level=0&trapmagictype=None&rarity=Common&picture=&circulation=&set1=&set2=&type=&carddescription=&atk=&def=&creator=&year=&serial="
};

      
  
    </script>
    <?php include "./View/includes/css_config.php" ?>
</body>
</html>
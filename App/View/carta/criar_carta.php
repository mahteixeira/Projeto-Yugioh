<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "./View/includes/css_config.php" ?>
    
    <title>Yu-Gi-Oh</title>
    <style>

        @font-face {
          font-family: "Titulo";
          src: url('fontes/Titulo.ttf') format('truetype');
        }

        @font-face{
          font-family: "Descricao";
          src: url('fontes/Descricao.ttf') format('truetype');
        }
        .box-form {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form {
            width: 50%;
        }

        #carta{
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

        #container {
          display: inline-block;
          position: relative;
            }

        #titulo {
          position: absolute;
          top: 20px;
          left: 380px;
          font-size: 40px;
          color: black;
          text-shadow: 0.0em 0.0em 0.2em white;
          }

        #desc {
          position: absolute;
          top: 475px;
          left: 382px;
          line-height:15px;
          font-size: 16px;
          color: black;
          width:342px;
          }

        #atk {
          position: absolute;
          bottom: -16px;
          left: 600px;
          font-size: 18px;
          color: black;
          width:350px;
          }

        #def {
          position: absolute;
          bottom: 0px;
          right: -88px;
          font-size: 18px;
          color: black;
          width:350px;
          }
    </style>
</head>
<body>


    <section class="box-form">
        <form method="post" action="/cartas/save" class="row g-3">
          <input id="id" name="id" type="hidden" value="<?= $model->id?>"/>

          <figure id="carta">
            <img src="https://www.cardmaker.net/cardmakers/yugioh/createcard.php?name=&cardtype=Monster&subtype=normal&attribute=Light&level=0&trapmagictype=None&rarity=Common&picture=&circulation=&set1=&set2=&type=&carddescription=&atk=&def=&creator=&year=&serial=" id="myimage">
            
            <figcaption id="titulo">Título</figcaption>
            <figcaption id="desc">Descrição da carta vai aqui</figcaption>
            <figcaption id="atk">0</figcapition>
            <figcaption id="def">0</figcapition>
          </figure>


          <div id="formulario"> <br> <br>
          <label for="inputTipo" class="form-label">Tipo</label>
          <input name="tipo" type="text" placeholder="tipo da carta" list="faixa" value="<?= $model->tipo?>" onchange="document.getElementById('myimage').src = colorUrlMap[this.value];">
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
            <input name="ataque" type="number" value="<?= $model->ataque?>" class="form-control" id="inputataque">
          </div>
          <div class="col-6">
            <label for="inputdefesa" class="form-label">Defesa</label>
            <input name="defesa" type="number" value="<?= $model->defesa?>" class="form-control" id="inputdefesa">
          </div>
          <div class="col-md-6">
            <label for="inputdesc" class="form-label">Descrição</label>
            <input name="descricao" type="text" value="<?= $model->descricao?>" class="form-control" id="inputdesc">
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
    
        "Fusão" : "https://www.cardmaker.net/cardmakers/yugioh/createcard.php?name=&cardtype=Fusion&subtype=normal&attribute=Light&level=0&trapmagictype=None&rarity=Common&picture=&circulation=&set1=&set2=&type=&carddescription=&atk=&def=&creator=&year=&serial=",
    
        "Sincro" : "https://www.cardmaker.net/cardmakers/yugioh/createcard.php?name=&cardtype=Synchro&subtype=normal&attribute=Light&level=0&trapmagictype=None&rarity=Common&picture=&circulation=&set1=&set2=&type=&carddescription=&atk=&def=&creator=&year=&serial=",
    
        "Xyz" : "https://www.cardmaker.net/cardmakers/yugioh/createcard.php?name=&cardtype=Xyz&subtype=normal&attribute=Light&level=0&trapmagictype=None&rarity=Common&picture=&circulation=&set1=&set2=&type=&carddescription=&atk=&def=&creator=&year=&serial="
      };

const input_nome = document.getElementById("inputnome");
const input_nivel = document.getElementById("inputnivel");
const input_ataque = document.getElementById("inputataque");
const input_defesa = document.getElementById("inputdefesa");
const input_desc = document.getElementById("inputdesc");

const titulo = document.getElementById("titulo");
const desc = document.getElementById("desc");
const atk = document.getElementById("atk");
const def = document.getElementById("def");

input_nome.addEventListener("keyup", (e) => {
  titulo.innerHTML = e.currentTarget.value;
});

input_ataque.addEventListener("keyup", (e) => {
  atk.innerHTML = e.currentTarget.value;
});

input_defesa.addEventListener("keyup", (e) => {
  def.innerHTML = e.currentTarget.value;
});

input_desc.addEventListener("keyup", (e) => {
  desc.innerHTML = e.currentTarget.value;
});
      
  
    </script>
    <?php include "./View/includes/css_config.php" ?>
</body>
</html>
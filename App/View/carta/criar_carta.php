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
          font-family: 'Titulo';
          src: url('includes/fontes/Titulo.ttf') format('truetype') ;
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
            width: 40%;
            float: right;
        }

        #carta{
          float:right;
        }

        #fotita{
          background: #000;
          height: 315px;
          width: 315px;
          position: absolute;
          background-image: url("");
          background-size: cover;
          margin-left: 52px;
          margin-top: 112px;
        }

        #formulario{
          float: right;
          margin: 50px;
          margin-top:0px;
        }

        #carta {
          display: inline-block;
          position: relative;
            }

        #titulo {
          position: absolute;
          top: 20px;
          left: 40px;
          font-family:"Titulo", Times, serif;
          font-size: 40px;
          color: black;
          text-shadow: 0.0em 0.0em 0.2em white;
          }

        #desc {
          position: absolute;
          top: 475px;
          left: 37px;
          line-height:15px;
          font-size: 16px;
          color: black;
          width:342px;
          }

        #def {
          position: absolute;
          bottom: 0px;
          right: -88px;
          font-size: 18px;
          color: black;
          width: 2px;
          
          }

        #atk {
          position: absolute;
          bottom: 33.7px;
          right: 163px;
          font-size: 18px;
          color: black;
          width:2px;
          }

        #fotita{
          top: 0px;
          background: #000;
          height: 315px;
          width: 315px;
          position: absolute;
        }
    </style>
</head>
<body>


    <section class="box-form">
        <div id="capture">
        <figure id="carta">
              <img src="https://www.cardmaker.net/cardmakers/yugioh/createcard.php?name=&cardtype=Monster&subtype=normal&attribute=Light&level=0&trapmagictype=None&rarity=Common&picture=&circulation=&set1=&set2=&type=&carddescription=&atk=&def=&creator=&year=&serial=" id="myimage">      
              <div id="fotita"></div>
              <figcaption id="titulo">Título</figcaption>
              <figcaption id="desc">Descrição da carta vai aqui</figcaption>  
              <figcaption id="atk">0</figcapition>
              <figcaption id="def">0</figcapition>
              
        </figure>

        </div>

        <form method="post" action="/cartas/save" class="row g-3">
          <input id="id" name="id" type="hidden" value="<?= $model->id?>"/>

          
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
          <label for="image">Image</label>
          <input type="file" name="image" id="image" accept="image/png, image/jpg"/>
          <div class="col-12"> <br>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
        </div>
        </form>
        <button onclick="salvar()" class="btn btn-primary">Download img</button>


    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
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
      
      function salvar(){
        html2canvas(document.querySelector("#capture")).then(canvas => {
            document.body.appendChild(canvas)
        });
      }

      const image_input = document.querySelector("#image");

      image_input.addEventListener("change", function() {
        const reader = new FileReader();
        reader.addEventListener("load", () => {
          const uploaded_image = reader.result;
          document.querySelector("#fotita").style.backgroundImage = `url(${uploaded_image})`;
        });
        reader.readAsDataURL(this.files[0]);
      });

    </script>
    <?php include "./View/includes/js_config.php" ?>
</body>
</html>
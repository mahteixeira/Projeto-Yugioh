<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<!-- Html2Canvas -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

<!-- eu mesmakkk -->
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
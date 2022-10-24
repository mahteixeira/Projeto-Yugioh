<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<!-- Html2Canvas -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

<!-- eu mesmakkk -->
<script>
      var colorUrlMap = {
        "Normal" : "url('/View/carta/imagens_carta/fundocarta/cartaNormal.jpg')",

        "Efeito" : "url('/View/carta/imagens_carta/fundocarta/cartaEfeito.jpg')",
  
        "Ritual" : "url('/View/carta/imagens_carta/fundocarta/cartaRitual.jpg",
  
        "Fusão" : "url('/View/carta/imagens_carta/fundocarta/cartaFusao.jpg",
  
        "Sincro" : "url('/View/carta/imagens_carta/fundocarta/cartaSincro.jpg')",
  
        "Xyz" : "url('/View/carta/imagens_carta/fundocarta/cartaXyz.jpg')"
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
      
      
setUpDownloadPageAsImage();

function setUpDownloadPageAsImage() {
  document.getElementById("save").addEventListener("click", function() {
    html2canvas(document.body).then(function(canvas) {
      console.log(canvas);
      simulateDownloadImageClick(canvas.toDataURL(), 'file-name.png');
    });
  });
}

function simulateDownloadImageClick(uri, filename) {
  var link = document.createElement('a');
  if (typeof link.download !== 'string') {
    window.open(uri);
  } else {
    link.href = uri;
    link.download = filename;
    accountForFirefox(clickLink, link);
  }
}

function clickLink(link) {
  link.click();
}

function accountForFirefox(click) { // wrapper function
  let link = arguments[1];
  document.body.appendChild(link);
  click(link);
  document.body.removeChild(link);
}

      const image_input = document.querySelector("#image");

      image_input.addEventListener("change", function() {
        const reader = new FileReader();
        reader.addEventListener("load", () => {
          const uploaded_image = reader.result;
          document.querySelector("#fotita").style.backgroundImage = `url(${uploaded_image})`;
          document.querySelector("#fotita").style.backgroundSize = "cover";
        });
        reader.readAsDataURL(this.files[0]);
      });

    </script>
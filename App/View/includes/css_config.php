<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
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
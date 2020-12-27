<?php 
   include "../Components/header.php";
?>

    <style type="text/css">
      .tela-splash{
      width: 100%;
      height: 765px;
      background-image: url('../Assets/img/smsfundo.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
      overflow: hidden;
      }
      .fundo-escuro{
      width: 100%;
      height: 765px;
      padding-top: 10%;
      text-align: center;
      background-color: rgba(0,0,0,0.6);

      }
      .conteudo{
        padding: 2%;
}
  .conteudo .texto{
    margin-bottom: 10%;
    color:#fff;
  }
  .conteudo .texto h2{
    font-size: 3rem;
  }
  .conteudo .btn-tela{
    margin-bottom: 2%;
  }

  @media (max-width: 992px) {
  .conteudo .texto h2{
    font-size: 1.5rem;
  }
  .fundo-escuro{
    padding-top: 30%;
    overflow: hidden;
  }
  }
        </style>
<body>

    <div class="tela-splash">
        <div class="fundo-escuro">
         <div class="row">
            <div class="container col-sm-6 conteudo">
                <div class="texto">
                  <img src="../Assets/img/logo_sms.png" class="logo-tela">
                <h2>Seja Bem-vindo ao Sistema!</h2>
                </div>

                <div class="row">
                  <div class="col-sm-6 container">
                  <a href="login.php" class="btn btn-warning btn-block  btn-lg btn-tela">Iniciar Sessão</a>
                  </div>

                  </div>
                </div>

            </div>
         </div> 
        </div>
        
  
  </body>
</html>
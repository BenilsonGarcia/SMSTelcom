<?php 
   include "../Components/header.php";
?>
        <style type="text/css">
      .tela-splash{
      width: 100%;
      height: 765px;
      background-image: url('../Assets/img/imagem.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
      overflow: hidden;
      }
      .fundo-escuro{
      width: 100%;
      height: 765px;
      padding-top: 2%;
      text-align: center;
      background-color: rgba(0,0,0,0.8);

      }
  .conteudo .texto{
    margin-bottom: 5%;
    color:#eee;
  }
  .conteudo .texto h2{
    font-size: 2.5rem;
  }
  .conteudo .btn-tela{
    margin-bottom: 2%;
  }
  .conteudo .card{
    text-align: left;
  }

  @media (max-width: 992px) {
 
  .conteudo .texto h2{
    font-size: 1.5rem;
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
                <h2>Alteração de Senha</h2>
                </div>
 <div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">


           <!-- Basic Form-->
              <div class="container col-sm-12 col-md-8 mb-5">
                <div class="card">
                  
                  <div class="card-body">
                    <form id="form_change_password" method="POST">
                      <div class="form-group">
                        <label class="form-control-label">Senha Antiga</label>
                        <input type="password" id="antiga_senha" placeholder="Senha antiga" class="form-control" required>
                      </div>
                      <div class="form-group">       
                        <label class="form-control-label">Nova Senha</label>
                        <input type="password" id="nova_senha" placeholder="Nova Senha" class="form-control" required>
                      </div>
                       <div class="form-group">       
                        <label class="form-control-label">Confirmar Senha</label>
                        <input type="password" id="conf_senha" placeholder="Confirmar senha"  class="form-control" required>
                         <div class="warning"></div>
                      </div>

                        <div class="row">
                        <div class="col-sm-6 container">
                        <a href="login.php" class="btn btn-outline-dark btn-tela">Login</a>
                        </div>
                         <div class="col-sm-6 container">
                        <button type="button" id="salvar" class="btn btn-warning btn-block  btn-tela">Salvar</button>
                        </div>
                      </div>

                    </form>

                      <div class="d-flex justify-content-left">
                        
                <div class="spinner-border text-warning" id="rolling" style="display: none" role="status">
                  <span class="sr-only">Loading...</span>
                </div>

                      </div>
                  

                  </div>
                </div>
              </div>
              <!-- Horizontal Form-->
        </div>
      </div>
    </div>

                </div>

            </div>
         </div> 
        </div>

   
    </script>
    <script src="../Assets/vendor/jquery/jquery.min.js"></script>
    <script src="../Assets/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="../Assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../Assets/vendor/jquery.cookie/jquery.cookie.js"> </script>


     <script type="module">
    import {AuthService} from '../../Domain/Services/AuthService.js';
    let _auth_service = new AuthService();
    
    $('#salvar').click(function(){
     var $senha_antiga = $('#antiga_senha').val(),
      $nova_senha = $('#nova_senha').val(), $conf_senha = $('#conf_senha').val();
        // verificar se as password sao iguais
      if($nova_senha == $conf_senha){
      let password_change_obj = {
      older: $senha_antiga,
      newer: $nova_senha
      }
      _auth_service.change_password(password_change_obj).then(data => console.log(data))
      
    }else{
    $('.warning').append('<span>Senhas diferentes! Tente novamente! </span>').css('color','red');
    }
     return false;
  })
     </script>
  
  </body>
</html>
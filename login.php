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
                 <a href="index.php"> <img src="../Assets/img/logo_sms.png" class="logo-tela"></a>
                <h2>Acesso ao Sistema</h2>
                </div>
 <div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">


           <!-- Basic Form-->
              <div class="container col-sm-12 col-md-8 mb-5">
                <div class="card">
                  
                  <div class="card-body">
                    <form id="form_login" method="POST">
                      <div class="form-group">
                        <label class="form-control-label">Usuário</label>
                        <input type="text" placeholder="Nome de usuário" id="username" name="username" class="form-control" required>
                      </div>
                      <div class="form-group">       
                        <label class="form-control-label">Senha</label>
                        <input type="password" placeholder="Palavra-passe" id="password" name="password" class="form-control" required>
                      </div>
                        <small class="small confirm"></small>
                        <div class="row">
                         <div class="col-sm-12 container mt-2 right">
                        <button  type="submit" class="btn btn-warning">Iniciar Sessão</button>
                        </div>
                      </div>

                    </form>
                  

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
    
    <script src="../Assets/vendor/jquery/jquery.min.js"></script>
    <script src="../Assets/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="../Assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../Assets/vendor/jquery.cookie/jquery.cookie.js"> </script>


     <script type="module">

       import {AuthService} from '../../Domain/Services/AuthService.js';
       let _auth_service = new AuthService();
       
        $('#form_login').submit(function(){
        
        let user_data = {
            username: $('#username').val(),
            password: $('#password').val()
        }

       _auth_service.obtain_token(user_data).then(data =>{
        //console.log(data)
    
        if(data.data.token){
          localStorage.setItem("token",data.data.token);
          var dados = {
            usuario: user_data.username
          }
          $.post('session.php', dados, function(data){
            if(data){
          console.log(' Verificando a sessao\n Estado - '+data);
          window.location.href='home.php'; }
            else{
          console.log(' Verificando a sessao\n Estado - '+data);
          alert('Tente iniciar Sessão novamente!');
            }

          });
        }else{
          //alert('Acesso Negado!');
          $('.confirm').html('Acesso não Autorizado!<br>Usuário ou Senha incorrecta!').css('color','red').fadeIn(function(){
            $('.confirm').fadeOut(3000);
          });
        }
       });

      
        return false;
       });
    
     </script>

  
  </body>
</html>
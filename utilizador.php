<?php 
   include "../Components/dashboard.php";
 ?>

      <div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">
  <br>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-dark">
            <li class="breadcrumb-item"><a class="text-warning" href="#">Funcionario</a></li>
            <li class="breadcrumb-item active" aria-current="page">Minha Lista de Funcionário</li>
          </ol>
        </nav>

                      <!-- Form Elements -->
              <div class="col-lg-12 mb-5">
                <div class="card">
                  <div class="card-header">
                      <div class="row">
                    <div class="col-sm-12 col-md-6">
                    <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-outline-warning"><i class="fas fa-user-plus"></i></button>
                    <button type="button" data-toggle="modal" data-target="#ficheiro" class="btn btn-outline-warning"><i class="fas fa-users"></i></button>
                  </div>
                <div class="col-sm-12 col-md-6">
                   
              <div class="input-group">
                <input type="text " class="form-control" placeholder="Procurar Funcionario">
                <div class="input-group-append">
                  <button class="btn btn-secondary text-warning" type="button">
                    <i class="fa fa-search"></i>
                  </button>
                </div>
              </div>
                </div>

              </div>
            </div>
                  <!-- Another variation with a button -->

  

                  <div class="card-body">
                  <div class=" table-responsive">
                  <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>Nome Completo</th>
                          <th>Usuário</th>
                          <th>Email</th>
                          <th>Grupo</th>
                          <th>Opção</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Benilson Garcia</td>
                          <td>GarciaB</td>
                          <td>Benilson@gmail.com</td>
                          <td>MST Sistemas</td>
                          <td><button type="button" data-toggle="modal" data-target="#editar" class="btn btn-outline-dark"><i class="fas fa-minus"></i></button>
                            <button type="button" data-toggle="modal" data-target="#deletar" class="btn btn-outline-danger"><i class="fas fa-trash"></i></button>
                          </td>


                        </tr>
                        <tr>
                          <td>Juclenio Antonio</td>
                          <td>AntonioB</td>
                          <td>Juclenio@gmail.com</td>
                          <td>MST Sistemas</td>
                          <td><button type="button" data-toggle="modal" data-target="#editar" class="btn btn-outline-dark"><i class="fas fa-minus"></i></button>
                            <button type="button" data-toggle="modal" data-target="#deletar" class="btn btn-outline-danger"><i class="fas fa-trash"></i></button>
                          </td>

                        </tr>
                        <tr>
                          <td>Oliveira Ngola</td>
                          <td>Oliveira12</td>
                          <td>Oliveira@acs.co.ao</td>
                          <td>MST Sistemas</td>
                         <td><button type="button" data-toggle="modal" data-target="#editar" class="btn btn-outline-dark"><i class="fas fa-minus"></i></button>
                            <button type="button" data-toggle="modal" data-target="#deletar" class="btn btn-outline-danger"><i class="fas fa-trash"></i></button>
                          </td>


                        </tr>
                        <tr>
                          <td>Mario Azulay</td>
                          <td>Mario12</td>
                          <td>Mario@sonangol.co.ao</td>
                          <td>MST Sistema</td>
                         <td><button type="button" data-toggle="modal" data-target="#editar" class="btn btn-outline-dark"><i class="fas fa-minus"></i></button>
                            <button type="button" data-toggle="modal" data-target="#deletar" class="btn btn-outline-danger"><i class="fas fa-trash"></i></button>
                          </td>

                        </tr>

                      </tbody>
                    </table>
                  </div>
                  <!--
                  PAGINACAO

                    <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end">
                      <li class="page-item disabled">
                        <a class="page-link text-warning" href="#" tabindex="-1" aria-disabled="true">Anterior</a>
                      </li>
                      <li class="page-item"><a class="page-link text-warning" href="#">1</a></li>
                      <li class="page-item"><a class="page-link text-warning" href="#">2</a></li>
                      <li class="page-item"><a class="page-link text-warning" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link text-warning" href="#">Proximo</a>
                      </li>
                    </ul>
                  </nav>
                  -->

                  </div>
                </div>
              </div>


        </div>

         <!-- Modal Adicionar novos funcionarios-->
 

                    <!-- Modal-->
                    <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                      <div role="document" class="modal-dialog">
                        <div class="modal-content" style="margin-top: 18%;">
                          <div class="modal-header">
                            <h4 id="exampleModalLabel" class="modal-title"> Novos Funcionarios</h4>
                            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                          </div>
                          <div class="modal-body">
                            <span style="color:#ddd;">Adicione os dados dos seus funcionarios</span><br><br>
                            <form action="" method="">
                             
                             <div class="row">
                                  <input type="hidden" name="id_entidade" id="id_entidade" >
                              <div class="col-sm-12 col-md-6">       
                                <label>Nome</label>
                                <input type="text" placeholder="Primeiro Nome" id="NomeUsuario" class="form-control">
                              </div>
                              <div class="col-sm-12 col-md-6" >       
                                <label>Sobrenome</label>
                                <input type="text" placeholder="Sobrenome" id="NomeUsuario" class="form-control">
                              </div>

                                <div class="col-sm-12 col-md-6">       
                                <label>Usuário</label>
                                <input type="text" placeholder="Nome de usuario " id="NomeUsuario" class="form-control">
                              </div>

                              <div class="col-sm-12 col-md-6">       
                                <label>Email</label>
                                <input type="email" placeholder="Email " id="Email" class="form-control">
                              </div>
                               <div class="col-sm-12 col-md-6">       
                                <label>Grupo</label>
                                <input type="text" placeholder="Grupo " id="Grupo" class="form-control">
                              </div>

                               </div>                           

                            </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-outline-danger">Cancelar</button>
                            <button id="Cadastrar" class="btn btn-outline-warning">Registar</button>
                          </div>
                        </div>
                      </div>
                    </div>


 <!-- Modal Editar  funcionarios-->
 

                    <!-- Modal-->
                    <div id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                      <div role="document" class="modal-dialog">
                        <div class="modal-content" style="margin-top: 18%;">
                          <div class="modal-header">
                            <h4 id="exampleModalLabel" class="modal-title"> Editar Funcionarios</h4>
                            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                          </div>
                          <div class="modal-body">
                            <span style="color:#ddd;">Edita os dados dos seus funcionarios</span><br><br>
                            <form action="" method="">
                             
                             <div class="row">
                                  <input type="hidden" name="id_entidade" id="id_entidade" >
                              <div class="col-sm-12 col-md-6">       
                                <label>Nome</label>
                                <input type="text" placeholder="Primeiro Nome" id="NomeUsuario" class="form-control">
                              </div>
                              <div class="col-sm-12 col-md-6" >       
                                <label>Sobrenome</label>
                                <input type="text" placeholder="Sobrenome" id="NomeUsuario" class="form-control">
                              </div>

                                <div class="col-sm-12 col-md-6">       
                                <label>Usuário</label>
                                <input type="text" placeholder="Nome de usuario " id="NomeUsuario" class="form-control">
                              </div>

                              <div class="col-sm-12 col-md-6">       
                                <label>Email</label>
                                <input type="email" placeholder="Email " id="Email" class="form-control">
                              </div>
                               <div class="col-sm-12 col-md-6">       
                                <label>Grupo</label>
                                <input type="text" placeholder="Grupo " id="Grupo" class="form-control">
                              </div>

                               </div>                           

                            </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-outline-danger">Cancelar</button>
                            <button id="Cadastrar" class="btn btn-outline-warning">Registar</button>
                          </div>
                        </div>
                      </div>
                    </div>


                      <!-- Modal deletar -->
<div class="modal fade" id="deletar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
                                <div class="modal-body">
              <div class="avatar bg-danger" style="margin-left:40%;">
                                     <span><i class="fas fa-trash"></i></span>

                                   </div>
                                   <p class="text-center">Tem certeza de que pretende deletar este item</p>
                          <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-outline-dark">Cancelar</button>
                            <button type="button" class="btn btn-outline-warning">Deletar</button>
                          </div>
                        </div>

    </div>
  </div>
</div>
                           <!-- Modal carregar ficheiros-->

                <div class="card-body">
  
                    <!-- Modal-->
                    <div id="ficheiro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                      <div role="document" class="modal-dialog">
                        <div class="modal-content" style="margin-top: 18%;">
                          <div class="modal-header">
                            <h4 id="exampleModalLabel" class="modal-title">Carregar Ficheiros</h4>
                            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                          </div>
                          <div class="modal-body">
                                <div class="input-group is-invalid">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="validatedInputGroupCustomFile" required>
                            <label class="custom-file-label" for="validatedInputGroupCustomFile">Carregar...</label>
                          </div>
                           </div>
                          <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-outline-danger">Cancelar</button>
                            <button type="button" class="btn btn-outline-warning">Salvar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <script src="js/charts-home.js"></script>
    <script src="js/front.js"></script>

    <script>

    $(document).ready(function(){
    
    var $id_entidade = 2; 
    var $token = "b97f3d07e4a9bdc3c7e3f9bb1fd9036699a36f25";
    var $table = $('.table > tbody ');
// ----------------------------------------------------
// --  Registrar Contactos ----

       $('#Cadastrar').click(function(){

        // $id_entidade = $("#id_entidade").val();       

        var $dados = {
         "PrimeiroNome" : $('#PrimeiroNome').val(),
         "Sobrenome" : $('#Sobrenome').val(), 
         "NomeUsuario" : $('#NomeUsuario').val(), 
         "Email" : $('#Email').val(), 
         "Grupo" : $('#Grupo').val()
       }; 

        var settings = {
      "url": "http://10.255.1.111/api/entidade/"+$id_entidade+"/funcionario",
      "method": "POST",
      "timeout": 10000,
      "beforeSend": function(){
        console.log('Processando...');
      },
      "complete": function(){
        console.log('Dados Submetidos...');
        ListTable();
      },
      "error": function (xhr, ajaxOptions, thrownError) {
        console.log(xhr.status);
        console.log(thrownError);
      },
      "headers": {    
        
          "Authorization": $token,        
          "Content-Type": "application/json",
          "Access-Control-Allow-Origin": "http://10.255.1.111/api/entidade/"+$id_entidade+"/funcionario",
          "Access-Control-Allow-Origin": "*"
      },
      "data": JSON.stringify($dados)
    };

      $.ajax(settings).done(function (response) {
      console.log('Form subetido');
      console.log(response);
      
      ListTable();
          
      });
           return false;      
        });
// -- Final of Registation
// SyntaxError: Failed to execute 'setRequestHeader' on 'XMLHttpRequest': 'Authorization token' is not a valid HTTP header field name.

    function ListTable(){
      
      var settings = {
      "url": "http://10.255.1.111/api/entidade/"+$id_entidade+"/funcionario-list?page=2",
      "method": "POST",
      "timeout": 10000,
      "beforeSend": function(){
        console.log('Processando o Request...');
      },
      "complete": function(){
        console.log('Recebendo dados Novos...');
      }, 
      "error": function (xhr, ajaxOptions, thrownError) {
        console.log(xhr.status);
        console.log(thrownError);
      },
      "headers": {
          "Authorization": 'Bearer '+ $token,
          "Content-Type": "application/json",
          "Access-Control-Allow-Origin": "http://10.255.1.111/api/entidade/"+$id_entidade+"/funcionario",
          "Access-Control-Allow-Origin": "*"
      }
      
    }; 

    $.ajax(settings).done(function (response) {
      console.log('Recebendo dados novos');

      var $tableBodyBegin = 'th scope="row"><input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="..."></th>';

      var $tableBodyEnd = '<td><button type="button" class="btn btn-primary"><i class="fas fa-minus"></i></button><button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button></td>';

      var $tableBodyContent = " <td> "+response.Nome+" "+ response.Sobrenome +" </td> <td>"+ 
      response.NomeUsuario +"</td> <td>"+ response.Email +"</td><td> "+ response.Grupo + "</td>" ;

      $tablee.append($tableBodyBegin + $tableBodyContent + $tableBodyEnd);
      
      });
           return false;      
             
    };
});
    </script>

  </body>
</html>
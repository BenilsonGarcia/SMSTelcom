<?php 
   include "../Components/dashboard.php";
 ?>

      <div class="page-holder w-100 d-flex flex-wrap">
      <div class="container-fluid px-xl-5">
<br>


        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-dark">
            <li class="breadcrumb-item"><a class="text-warning" href="#">Funcionarios</a></li>
            <li class="breadcrumb-item active" aria-current="page">Meus Funcionarios</li>
          </ol>
        </nav>
   <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Funcionarios</a>
    <a class="nav-link" id="nav-conta-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Grupos de Funcionario</a>
    <a class="nav-link" id="nav-perfil-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Perfis de Acesso</a>
   
  </div>
</nav>

<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
    <br>
  <div class="card">
  <div class="card-header">
   <div class="container">
      <br>
       <div class="row">
                    <div class="col-sm-12 col-md-6">
                    <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-outline-dark" title="Adicionar Funcionarios"><i class="fas fa-user-plus"></i></button>
                    <button type="button" data-toggle="modal" data-target="#modal_criar_grupo" class="btn btn-outline-dark" title="Adicionar Funcionarios"><i class="fas fa-user-friends"></i></button>
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
   
  </div>     
  <div class="card-body">
         <!-- Form Elements -->
              <div class="col-lg-12 mb-5">
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
                      <tbody id="tabela_funcionario">
                      
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

         <!-- Modal Adicionar novos funcionarios-->
 

                    <!-- Modal-->
                    <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                      <div role="document" class="modal-dialog">
                        <div class="modal-content" style="margin-top: 18%;">
                          <div class="modal-header">
                            <h4 id="exampleModalLabel" class="modal-title"> Novos Funcionários</h4>
                            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                          </div>
                          <div class="modal-body">
                            <span style="color:#ddd;">Adicione os dados dos seus funcionarios</span><br><br>
                            <form method="POST" id="Registrar_funcionario">
                             
                             <div class="row">
                                  <input type="hidden" name="id_entidade" id="id_entidade" >
                              <div class="col-sm-12 col-md-6">       
                                <label>Nome</label>
                                <input type="text" placeholder="Primeiro Nome" id="func_nome" class="form-control">
                              </div>
                              <div class="col-sm-12 col-md-6" >       
                                <label>Sobrenome</label>
                                <input type="text" placeholder="Sobrenome" id="func_sobre" class="form-control">
                              </div>

                                <div class="col-sm-12 col-md-6">       
                                <label>Grupos</label>
                                <select name="grupo_func" id="grupo_func" class="form-control">
                                 </select>
                              </div>

                              <div class="col-sm-12 col-md-6">       
                                <label>Email</label>
                                <input type="email" placeholder="Email " id="func_email" class="form-control">
                              </div>

                               </div>     
                           
                          </div>
                          <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-outline-dark">Cancelar</button>
                            <button type="submit" class="btn btn-outline-warning">Registrar</button>
                          </div>
                          </form>
                        </div>
                      </div>
                    </div>

                    <!-- Modal criar grupo de contacto -->
<div class="modal fade" id="modal_criar_grupo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="font-size:1.2rem;">Grupos de Funcionários</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="add_grupo_func" method="POST">
      <div class="modal-body">
                <div class="form-group">       
                     <label>Grupo</label>
                     <input type="text" placeholder="Descrição" id="grupo_nome" class="form-control" required>
                  </div>

                  <div class="form-group row">
                              <div class="col-sm-10" >
                              <select id="listar_permissao" class="form-control"> </select> 
                              </div>
                              <div class="col-sm-2">
                              <button class="btn btn-primary" id="add_permissao"> + </button>  
                              </div>

                            </div>
                  <div class="info">
                  <span style="color:orange; font-size:14px;">Permissão adicionada ao grupo!</span>
                  </div>
                  <div class="inputs">

                  </div>

            </div>
            <div class="modal-footer">
             <button type="reset" class="btn btn-outline-dark">Limpar dados</button>
              <button type="submit" class="btn btn-outline-warning">Adicionar</button>
            </div>
          </form>
          </div>
        </div>
</div>

                 

 <!-- Modal Editar  funcionarios-->
 

                    <!-- Modal-->
                    <div id="editar_funcionario_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
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
                                
                              <div class="col-sm-12 col-md-6">       
                                <label>Nome</label>
                                <input type="text" placeholder="Primeiro Nome" id="edit_nome_funcionario" class="form-control">
                              </div>
                              <div class="col-sm-12 col-md-6" >       
                                <label>Sobrenome</label>
                                <input type="text" placeholder="Sobrenome" id="edit_sobre_funcionario" class="form-control">
                              </div>

                                <div class="col-sm-12 col-md-6">       
                                <label>Usuário</label>
                                <input type="text" placeholder="Nome de usuario " id="edit_usuario_funcionario" class="form-control">
                              </div>

                              <div class="col-sm-12 col-md-6">       
                                <label>Email</label>
                                <input type="email" placeholder="Email " id="edit_email_funcionario" class="form-control">
                              </div>
                            
                               </div>                           

                            </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-outline-dark">Cancelar</button>
                            <button id="edit_funcionario" class="btn btn-outline-warning">Editar</button>
                          </div>
                        </div>
                      </div>
                    </div>


                      <!-- Modal deletar -->
<div class="modal fade" id="entidade_successo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
      <span><i class="fas fa-success"></i></span>
      </div>
      <p class="text-center">Nova Entidade Cadastrada com Sucesso!</p>
      <div class="modal-footer">
      <button type="button" data-dismiss="modal" class="btn btn-secondary btn-sm">OK</button>
      </div>
      </div>

    </div>
  </div>
</div>
  
</div>
  

  </div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-conta-tab">
    
    <br>
  <div class="card">
  <div class="card-header">
   <div class="container-fluid">
      <br>
      <h5>Grupos de Funcionarios</h5>
    </div>
   
  </div>     
  <div class="card-body">
    
  <div class=" table-responsive">
                  <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>Nome</th>
                          <th>Data da Criação</th>
                          <th>Criador</th>
                          <th>Entidade</th>
                          <th>Opção</th>
                        </tr>
                      </thead>
                      <tbody id="tabela_grupo_funcionario">
                        

                      </tbody>
                    </table>
                  </div>
    
  </div>
</div>
  
  </div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-perfil-tab">
    
    <br>
  <div class="card">
  <div class="card-header">
   <div class="container-fluid">
      <br>
      <h4>Restrições de Usuários</h4>
    </div>
   
  </div>     
  <div class="card-body table-responsive">
    
<table class="table table-borderles">
  <tbody>
    <tr>
      <td> 
        <div class="avatar" style="background-color:#484847;">
          <span>B</span>
       </div>
     </td>
      <td>
        <h5 style="color:#222;font-size:16px;font-weight: 400;">Benilson Garcia</h5>
        <span style="color:#b7b7b7">Administrador</span>
      </td>
      <td>
        <button class="btn btn-outline-dark" title="Limitar acesso" data-toggle="modal" data-target="#acesso">Restringir Acesso »</button>

      </td>
    </tr>
    <tr>
      <td> 
        <div class="avatar" style="background-color:#484847;">
          <span>B</span>
       </div>
     </td>
      <td>
        <h5 style="color:#222;font-size:16px;font-weight: 400;">Juclenio Antonio</h5>
        <span style="color:#b7b7b7">Modulo Mensagem</span>
      </td>
      <td>
        <div class="dropdown dropright">
            <span class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Detalhes </span>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#editar-acesso">Editar</a>
    <a class="dropdown-item text-danger" data-toggle="modal" data-target="#dele" href="#" >Eliminar</a>
  </div>
</div>
      </td>
    </tr>
  </tbody>
</table>
    
  </div>
</div>
  
  </div>
</div>



                    <!-- Modal para Adicionar restrições de acesso-->
                
                    <div id="acesso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                      <div role="document" class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 id="exampleModalLabel" class="modal-title">Restrições de Acesso</h4>
                            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                          </div>
                      <form id="form_permission" method="POST">
                          <div class="modal-body">
                            <p style="color:#ddd;">Limitar acesso aos Funcionários</p>
                          
                   <div class="form-group">
                  <label class="form-control-label">Utilizadores</label>
                  <select  class="form-control" id="funcionarios">
                    <option>Juclenio Antonio</option>
                    <option>Oliveira Ngola</option>
                    <option>Mario Azulay</option>
                    <option>Jay Trindade</option>
                    <option>João Ricardo</option>
                  </select>
                </div>
                 <div class="form-group">
                  <label class="form-control-label">Módulo de Acesso</label>
                  <select  class="form-control" id="permissoes">
                    <option>Modulo Mensagem</option>
                    <option>Modulo Campanha</option>
                    <option>Modulo Contacto</option>
                    <option>Modulo Funcionario</option>
                  </select>
                </div></div>
                          <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-outline-dark">Cancelar</button>
                            <button type="button" id="restrincao" class="btn btn-outline-warning">Restringir</button>
                          </div>
                        </form>
                        </div>
                      </div>
                    </div>
                  </div>

               <!-- Modal para editar restrições de acesso-->
                    
                    <div id="editar-acesso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                      <div role="document" class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 id="exampleModalLabel" class="modal-title"> Editar Restrições de Acesso</h4>
                            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                          </div>
                          <div class="modal-body">
                            <p style="color:#ddd;">Adicione os dados da Entidade</p>
                           <form id="formulario">
                   <div class="form-group">
                  <label class="form-control-label">Utilizadores</label>
                  <select  class="form-control" id="utilizador">
                    <option>Benilson Garcia</option>
                    <option>Juclenio Antonio</option>
                    <option>Oliveira Ngola</option>
                    <option>Mario Azulay</option>
                    <option>Jay Trindade</option>
                    <option>João Ricardo</option>
                  </select>
                </div>
                 <div class="form-group">
                  <label class="form-control-label">Módulo de Acesso</label>
                  <select  class="form-control" id="module">
                    <option>Administrador</option>
                    <option>Modulo Mensagem</option>
                    <option>Modulo Campanha</option>
                    <option>Modulo Contacto</option>
                    <option>Modulo Funcionario</option>
                  </select>
                </div>
                 
                    </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-outline-dark">Cancelar</button>
                            <button type="button" class="btn btn-outline-warning">Criar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>


                                      <!-- modal para activar pedido de entidade-->
                    <div id="act" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                      <div role="document" class="modal-dialog">
                        <div class="modal-content" style="margin-top: 18%;">
                         
                          <div class="modal-body">
              <div class="avatar" style="margin-left:40%;">
                   <span><img src="img/sucess.png" style="width: 65px;height: 65px;"></span>

                 </div>
                 <br>
                                 <p class="text-center">Entidade activada com sucesso!</p>
                          <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-outline-danger">Cancelar</button>
                            <button type="button" class="btn btn-outline-warning">Confirmar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                   

                       <!-- Modal deletar funcionario-->

                    <div id="deletar_funcionario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                      <div role="document" class="modal-dialog">
                        <div class="modal-content" style="margin-top: 18%;">
                         <form id="form_deletar_entidade">
                          <div class="modal-body">
                                   <div class="avatar bg-danger" style="margin-left:40%;">
                                     <span><i class="fas fa-trash"></i></span>

                                   </div>
                                   <p class="text-center">Tem certeza de que pretende deletar este item</p>
                                   <input type="hidden" name="id_entidade" id="id_funcionario">
                          <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-outline-dark">Cancelar</button>
                            <button type="button" class="btn btn-outline-warning" onclick="deletar_funcionario_id(1)" >Ok</button>
                          </div>
                        </div>
                      </form>
                        </div>
                      </div>
                  </div>
                </div>

              <!-- Modal deletar entidades-->

                    <div id="deletar_entidade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                      <div role="document" class="modal-dialog">
                        <div class="modal-content" style="margin-top: 18%;">
                         
                          <div class="modal-body">
                                   <div class="avatar bg-danger" style="margin-left:40%;">
                                     <span><i class="fas fa-trash"></i></span>

                                   </div>
                                   <p class="text-center">Tem certeza de que pretende deletar este item</p>
                                   <input type="hidden" name="id_entidade" id="id_entidade">
                          <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-outline-dark">Cancelar</button>
                            <button type="button" class="btn btn-outline-warning" onclick="deletar_entidade_id(1)">Deletar</button>
                          </div>
                        </div>
                      </div>
                  </div>
    </div>
    
    <script src="../Assets/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="../Assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../Assets/vendor/jquery.cookie/jquery.cookie.js"> </script>

    <script type="module">
        
      import {EntidadeService} from '../../Domain/Services/EntidadeService.js';
      import {TipoEntidadeService} from '../../Domain/Services/TipoEntidadeService.js';
      import {ContatoService} from '../../Domain/Services/ContatoService.js';
      let _entidade_service = new EntidadeService();
      let _tipo_entidade_service = new TipoEntidadeService();
      let _contato_service = new ContatoService();


     // Editando dados da Entidade
      function editar_entidade_modal(id_entidade){
           _entidade_service.selecionar_entidade_service(id_entidade).then(data => function(data){
          $('#edit_nome_entidade').val(data.Nome);
          $('#edit_email_entidade').val(data.Email);
          $('#edit_nif_entidade').val(data.Nif);
          $('#edit_endereco_entidade').val(data.Endereco);
          $('#edit_tipoEntidade_entidade').val(data.TipoEntidade);
           $('#editar_entidade_modal').modal('show');
           });
           
        }

        // Editando dados do funcionario
      function editar_funcionario_modal(id_funcionario){
        _entidade_service.selecionar_funcionario_service(id_funcionario).then(data=> function(data){
        $('#edit_nome_funcionario').val(data.PrimeiroNome);
        $('#edit_sobre_funcionario').val(data.Sobrenome);
        $('#edit_usuario_funcionario').val(data.NomeUsuario);
        $('#edit_email_funcionario').val(data.Email);
        $('#editar_funcionario_modal').modal('show');
         });
         
        }
        // Mostrar informacao da BD
        //function info_entidade_modal(id_entidade){
        //_entidade_service.selecionar_entidade_service(id_entidade).then(data=> function(data){
          //$('#info_table').html(
          //         '<tr>'+
          //         '<th scope="col">'+Nome Da Entidade:+'</th>'+
          //         '<td>'+data.Nome+'</td>'+
          //         '</tr>'+
          //         '<tr>'+
          //         '<th scope="col">'+Email:+'</th>'+
          //         '<td>'+data.Email+'</td>'+
          //         '</tr>'+
          //         '<tr>'+
          //         '<th scope="col">'+Endereço:+'</th>'+
          //         '<td>'+data.Endereco+'</td>'+
          //         '</tr>'+
          //         '<tr><th scope="col">'+Nif:+'</th>'+
          //         '<td>'+data.Nif+'</td>'+
          //         '</tr>'+
          //         '<tr>'+
          //         '<th scope="col">'+Tipo de Entidade:+'</th>'+
          //         '<td>'+data.TipoEntidade+'</td>'+
          //         '</tr>'
          //);
          //$('#info_entidade_modal').modal('show');
        //}}
    </script>
    <script type="module">
      import {EntidadeService} from '../../Domain/Services/EntidadeService.js';
      import {TipoEntidadeService} from '../../Domain/Services/TipoEntidadeService.js';

      let _entidade_service = new EntidadeService();
      let _tipo_entidade_service = new TipoEntidadeService()
    
      $(document).ready(function(){
        var valor_anterior = "", valor_atual = "";
        
        $('.info').fadeOut(); //desaparecer
          // adicionar contactos
          $("#add_permissao").click(function(e){
            e.preventDefault();
            $('.info').fadeIn(1000, function(){
              $(this).fadeOut();
            });
            valor_atual = $('#listar_permissao').val(); // atribui-se o valor a valor novo
            if(valor_anterior == valor_atual){ // verifica se os contatos sao iguais
              $('.info').empty();//limpar os dados da DIV
              $('.info').prepend('<span class="text-danger"> Permissão já adicionada!</span>');
              $('.info').fadeIn(1000, function(){
              $(this).fadeOut();
            });
            }else{
              valor_anterior = $('#listar_permissao').val();// atribui-se o valor a valor novo
              $('.info').empty();//limpar os dados da DIV
              $('.info').prepend('<span class="text-warning"> Permissão adicionado ao Grupo!</span>');
              $('.info').fadeIn(1000, function(){
              $(this).fadeOut();
            });
              $('.inputs').prepend('<input type="hidden" name="grupo_contato[]" id="grupo_permissao" class="form-control" value="'+$('#listar_permissao').val()+'">');
              // Adiciona campos
            }
          })
            
      });
      
      $('#Registrar_funcionario').submit(function(e){
        e.preventDefault();
        
          // Criar novo funcionario
        let novo_funcionario_obj = {
             PrimeiroNome:$('#func_nome').val(),
             Sobrenome:$('#func_sobre').val(),
             Grupo:$('#grupo_func').val(),
             Email:$('#func_email').val()
            // Grupo: 3
         }
         _entidade_service.registar_funcionario_service(novo_funcionario_obj).then(function(data){
          if(typeof(data.data.id) != 'undefined'){
            alert('Funcionário foi adicionado com Sucesso!');
            console.log('Funcionário foi adicionado com Sucesso'+data);
             window.location.reload(true);
          }
            else{
              alert('Funcionário não foi adicionado com Sucesso!');
            console.log('Funcionário não foi adicionado com Sucesso'+data)
          }
            
         });
         return false;

      });
      //Registrar grupo de funcionario
      $('#add_grupo_func').submit(function(e){
        e.preventDefault();
        var permissao = $("input[name^='grupo_permissao[]']");
            
            //var inputs = jQuery('input[name^="grupo_contato"]');
            var values = []; //array contactos
            for(var i = 0; i < permissao.length; i++){
              values.push($(permissao[i]).val());
            }
            
            let novo_grupo = {
            Nome:$('#grupo_nome').val(),
            Permissao: values
        }
        
        _entidade_service.registar_grupo_funcionario_service(novo_grupo).then(function(data){
          if(typeof(data.data.id) != 'undefined'){
            alert('Grupo de Funcionário criado com Sucesso!');
            console.log('Grupo de Funcionário criado com Sucesso'+data);
            window.location.reload(true);
          }
            else{
              alert('Grupo de Funcionário não foi criado com Sucesso!');
            console.log('Grupo de Funcionário não foi criado com Sucesso'+data)
          }
            
         });
      });

            $('#editar_funcionario').click(function(){
          // Update funcionario

          let update_funcionario_obj = {
             id:$('#edit_id_funcionario'),
             PrimeiroNome:$('Nome_funcionario').val(),
             Sobrenome:$('sobrenome_funcionario').val(),
             NomeUsuario:$('usuario_funciorio').val(),
             Email:$('Email_funcionario').val()
             //Grupo: 3
         }
        
         _entidade_service.actualizar_funcionario_service(update_funcionario_obj).then(data => console.log('actualizar dados do funcionario',data));
         return false;

      });

       // Eliminar funcionario
      function eliminar_funcionario(id){
        var $id = $('#id_funcionario').val();
        _entidade_service.eliminar_funcionario_service(id_funcionario).then(data => console.log('eliminar funcionario',data));
      };


// LISTAR FUNCIONARIOS
 function listar_funcionarios(){

        _entidade_service.listar_funcionarios_service().then(data => {  
          data.data.results.forEach((funcionarios)=>{
               let entidades_table_data = `
                  <tr>
                    <td> ${ funcionarios.PrimeiroNome } ${ funcionarios.Sobrenome } </td>
                    <td> ${ funcionarios.Usuario } </td>
                    <td> ${ funcionarios.Email }</td>
                    <td> ${ funcionarios.Grupo } </td>
                    <td>
                      <button type="button" title="Editar Perfil Funcionário" onclick="editar_funcionario_modal(${funcionarios.id})" class="btn btn-outline-dark"><i class="fas fa-minus"></i>
                      </button>
                      <button type="button" title="Remover Funcionário" onclick=" event.preventDefault(); var confirmacao = confirm('Pretendes remover este Funcionários do Sistema?'); if (!confirmacao){ return false; } " class="btn btn-outline-danger"><i class="fas fa-trash"></i>
                      </button>
                    </td>
                  </tr>
                  `

                  $('#tabela_funcionario').append(entidades_table_data); 
                                            
          
          })});
}

// LISTAR FUNCIONARIOS Grupos
function listar_funcionarios_grupos(){

    _entidade_service.listar_grupo_funcionario_service().then(data => {  
  data.data.results.forEach((grupo)=>{
       let entidades_table_data = `
          <tr>
            <td> ${grupo.Nome} </td>
            <td> ${ grupo.DataCriacao } </td>
            <td> ${grupo.Criador} </td>
            <td> ${ grupo.Entidade } </td>
            <td>
              <button type="button" title="Editar Perfil Funcionário" onclick="editar_funcionario_modal(${funcionarios.id})" class="btn btn-outline-dark"><i class="fas fa-minus"></i>
              </button>
              <button type="button" title="Remover Funcionário" onclick=" event.preventDefault(); var confirmacao = confirm('Pretendes remover este Funcionários do Sistema?'); if (!confirmacao){ return false; } " class="btn btn-outline-danger"><i class="fas fa-trash"></i>
              </button>
            </td>
          </tr>
          `

          $('#tabela_grupo_funcionario').append(entidades_table_data); 
                                    
  
  })});
}

// LISTAR FUNCIONARIOS Grupos
function listar_grupo(){

_entidade_service.listar_grupo_funcionario_service().then(data => {  
data.data.results.forEach((grupo)=>{
   let funcionario_options = `
      <option value='${grupo.id}'>${grupo.Nome} </option>
      `

      $('#grupo_func').append(funcionario_options); 
                                

})});
}

function listar_permission(){

_entidade_service.listar_admin_permissoes_service().then(data => {  
data.data.results.forEach((permission)=>{
 let funcionario_options = `
    <option value='${permission.id}'>${permission.codename} </option>
    `

    $('#listar_permissao').append(funcionario_options); 
                              

})});
}
      listar_funcionarios();
      listar_grupo();//para o select dos grupos
      listar_permission();//para o select de permission
      listar_funcionarios_grupos();


    </script>
    
  </body>
</html>
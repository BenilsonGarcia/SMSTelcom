<?php 
   include "../Components/dashboard.php";
 ?>

      <div class="page-holder w-100 d-flex flex-wrap">
      <div class="container-fluid px-xl-5">
<br>
<br>
   <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Planos</a>
    <a class="nav-link" id="nav-conta-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Contas</a>
    <a class="nav-link" id="nav-entidade-tab" data-toggle="tab" href="#nav-entidade" role="tab" aria-controls="nav-contact" aria-selected="false">Entidades</a>
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
                    <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-outline-dark" title="Adicionar Planos"><i class="fas fa-lightbulb"></i></button>
                  </div>
                <div class="col-sm-12 col-md-6">
                   
              <div class="input-group">
                <input type="text " class="form-control" placeholder="Procurar planos">
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
                          <th>Nome</th>
                          <th>Total de SMS</th>
                          <th>Total a Cobrar</th>
                          <th>Data de Criação</th>
                          <th>Opção</th>
                        </tr>
                      </thead>
                      <tbody id="tabela_planos">
                      <input type="hidden" class="btn_eliminar" id="planos_x" />
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
                            <h4 id="exampleModalLabel" class="modal-title"> Novos Planos</h4>
                            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                          </div>
                          <div class="modal-body">
                            <span style="color:#ddd;">Adicione os dados dos planos</span><br><br>
                            <form action="" method="">
                             
                             <div class="row">
                                  <input type="hidden" name="id_plano" id="id_plano" >
                              <div class="col-sm-12 col-md-6">       
                                <label>Nome</label>
                                <input type="text" placeholder=" Nome do Plano" id="plano_nome" class="form-control">
                              </div>
                              <div class="col-sm-12 col-md-6" >       
                                <label>Total de SMS</label>
                                <input type="text" placeholder="Total de SMS" id="plano_sms" class="form-control">
                              </div>

                                <div class="col-sm-12 col-md-6">       
                                <label>Preço a Cobrar</label>
                                <input type="number" placeholder="Preços a cobrar" id="plano_preco" class="form-control">
                              </div>

                              <div class="col-sm-12 col-md-6">       
                                <label>Data</label>
                                <input type="date" placeholder="data criação" id="plano_data" class="form-control">
                              </div>

                               </div>                           

                            </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-outline-dark">Cancelar</button>
                            <button id="Registrar_plano" class="btn btn-outline-warning">Registrar</button>
                          </div>
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
      <h5>Contas Cadastradas</h5>
    </div>
   
  </div>     
  <div class="card-body">
    
  <div class=" table-responsive">
                  <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>Saldo</th>
                          <th>Data da Criação</th>
                          <th>Plano</th>
                          <th>Entidade</th>
                          <th>Opção</th>
                        </tr>
                      </thead>
                      <tbody id="tabela_das_contas">
                      <input type="hidden" class="btn_ver_historico" id="historico_x" />

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

    <div class="tab-pane fade" id="nav-entidade" role="tabpanel" aria-labelledby="nav-entidade-tab">
    
    <br>
  <div class="card">
  <div class="card-header">
   <div class="container-fluid">
      <br>
      <div class="row">
        <div class="col-sm-12 col-md-10">
      <h4>Lista das Entidades</h4>          
        </div>
    <div class="col-sm-12 col-md-2">
      
     <button class="btn btn-outline-dark" title="Adicionar novas Entidades" data-toggle="modal" data-target="#entidade">Registrar »</button>
    </div>

      </div>
    </div>
   
  </div>    
  <div class="card-body table-responsive">
    
<table class="table table-borderles">
  <tbody id="tabela_entidade">
  <input type="hidden" class="btn_eliminar" id="entidade_x" />
  <input type="hidden" class="btn_editar_entidade" id="editEntidade_x" />
  </tbody>
</table>
    
  </div>
</div>
  
  </div>
</div>
             <!-- Modal desativar conta-->
 
             <div id="ativador" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                      <div role="document" class="modal-dialog">
                        <div class="modal-content" style="margin-top: 18%;">
                         
                          <div class="modal-body">
                                   <div class="avatar bg-danger" style="margin-left:45%;">
                                     <span><i class="far fa-stop-circle"></i></span>

                                   </div>
                                   <p class="text-center">Se desativar a conta poderá perder privilegio de acesso aos módulos</p>
                          <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-outline-dark">Cancelar</button>
                            <button type="button" class="btn btn-outline-warning">Desativar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                 
                  </div>

  <!-- Modal para informações da entidade-->

                <div id="info_entidade_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">

                      <div role="document" class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 id="exampleModalLabel" class="modal-title text-muted">Informações da Entidade</h4>
                            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                          </div>
                          <div class="modal-body">
                              <table class="table">
                            <tbody id="info_table">
                              <tr>
                                <th scope="col">Nome Da Entidade:</th>
                                <td>Mstelcom</td>
                              </tr>
                              <tr>
                                <th scope="col">Email:</th>
                                <td>Mstelcom@gmail.com</td>
                              </tr>
                              <tr>
                                <th scope="col">Endereço:</th>
                                <td>Mutamba,Rua 12 serpapinto</td>
                              </tr>
                              <tr>
                                <th scope="col">Nif:</th>
                                <td>00988746474LA</td>
                              </tr>
                              <tr>
                                <th scope="col">Tipo de Entidade:</th>
                                <td>Pública</td>
                              </tr>
                            </tbody>
                          </table>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Modal de Historicos de conta-->

                <div id="historico_conta"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                <div role="document" class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 id="exampleModalLabel" class="modal-title text-muted">Informações da Entidade</h4>
                      <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <table class="table">
                      <tbody id="table_historico_conta">
                        <tr>
                          <th scope="col">Nome Da Entidade:</th> 
                          <td id="hist_entidade">Mstelcom</td>
                        </tr>
                        <tr>
                          <th scope="col">Conta:</th>
                          <td id="hist_criador">Mstelcom@gmail.com</td>
                        </tr>
                        <tr>
                          <th scope="col">plano:</th>
                          <td id="hist_plano">Mutamba,Rua 12 serpapinto</td>
                        </tr>
                        <tr>
                          <th scope="col">Saldo:</th>
                          <td id="hist_saldo">00988746474LA</td>
                        </tr>
                        <tr>
                          <th scope="col">Data de Registro:</th>
                          <td id="hist_data">00988746474LA</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                  </div>
                </div>
                </div>

                <div id="entidade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                      <div role="document" class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 id="exampleModalLabel" class="modal-title">Nova entidade</h4>
                            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                          </div>
                            <form id="register_entidade" method="POST" action="#">
                          <div class="modal-body">
                            <span style="color:#ddd;">Adicione os dados da Entidade</span><br><br>
                             
                            <div class="form-group">
                        <label class="form-control-label">Entidade</label>
                        <input type="text" id="Entidade_nome" placeholder="Nome" class="form-control" required>
                      </div>
                      <div class="form-group">       
                        <label class="form-control-label">Email</label>
                        <input type="Email" id="Entidade_email" placeholder="Email" class="form-control" required>
                      </div>
                   <div class="form-group">
                    <label class="form-control-label">Endereço</label>
                    <input type="text"  placeholder="Endereço da Entidade" class="form-control" id="Entidade_endereco" placeholder="Munícipio, Bairro" required>
                  </div>  
                  <div class="form-group">       
                      <label class="form-control-label">NIF</label>
                      <input type="text" id="Entidade_nif" placeholder="Numero de Nif" class="form-control" required>
                 </div>

                <div class="form-group " id="tipo_entidade_id">
                  <label class="form-control-label">Tipo de Entidade</label>
                  <select class="form-control" id="Entidade_tipo" required>
                  <option value="1">Pública</option>                    
                  <option value="2">Popular</option>
                  <option value="3">Privada</option>
                  </select>
                </div>                        

                          
                          </div>
                          <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-outline-dark">Cancelar</button>
                            <button type="submit" class="btn btn-outline-warning">Criar</button>
                          </div>
                            </form>
                        </div>
                      </div>
                    </div>
                  </div>
                   <!-- Modal Editar entidades-->
                   
                    <div id="editar_entidade_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                      <div role="document" class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 id="exampleModalLabel" class="modal-title">Editar entidade</h4>
                            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                          </div>
                          <form id="editar_entidade" method="POST">
                          <div class="modal-body">
                            <p style="color:#ddd;">Editar os dados da Entidade</p>
                           
                      <div class="form-group">
                        <label class="form-control-label">Entidade</label>
                        <input type="text" id="edit_nome_entidade" placeholder="Nome" class="form-control">
                      </div>
                      <div class="form-group">       
                        <label class="form-control-label">Email</label>
                        <input type="Email" id="edit_email_entidade" placeholder="Email" class="form-control">
                      </div>
                   <div class="form-group">
                  <label class="form-control-label">Endereço</label>
                  <input type="text" id="edit_endereco_entidade" placeholder="Munícipio, Bairro" class="form-control">
                     
                </div>
                <div class="form-group">       
                        <label class="form-control-label">NIF</label>
                        <input type="text" id="edit_nif_entidade" placeholder="Numero de Nif" class="form-control">
                 </div>
                  <!--
                  <div class="form-group">       
                        <label class="form-control-label text-uppercase">Saldo</label>
                        <input type="text" id="Saldo" class="form-control">
                 </div>
                  < -->
                <div class="form-group">
                  <label class="form-control-label">Tipo de Entidade</label>
                  <select class="form-control" id="edit_tipoEntidade">
                    <option value="1">Pública</option>  
                    <option value="2">Privada</option>  
                    <option value="3">Comercial</option>                                                        
                  </select>
                <!--
                 <div class="form-group">       
                        <label class="form-control-label text-uppercase">Criador</label>
                        <input type="text" id="Criador" placeholder="Assinatura" class="form-control">
                 </div>
                 -->
                 <!--
                 <div class="form-group">       
                        <label class="form-control-label text-uppercase">Data de Criacao</label>
                        <input type="date" id="data" placeholder="dd/mm/ano" class="form-control">
                 </div>
                 -->
                 <!--
                  <div class="form-group">       
                        <label class="form-control-label text-uppercase">Admin</label>
                        <input type="text" id="Admin" placeholder="Assinatura" class="form-control">
                 </div>
               -->
                          </div>
                          <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-outline-dark">Cancelar</button>
                            <button type="submit" class="btn btn-outline-warning">Actualizar</button>
                          </div>
                           </form>
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
      import {ContaService} from '../../Domain/Services/ContaService.js';
      let _entidade_service = new EntidadeService();
      let _tipo_entidade_service = new TipoEntidadeService();
      let _conta_service = new ContaService();
     

        // Historico de conta
      function historico_conta(id_conta){
        _conta_service.historico_plano_service().then(data => {
  console.log(data);  
        data.data.results.forEach((historico)=>{
             let entidades_table_data = `
                <tr>
                  <td> ${ historico.Entidade } </td>
                  <td> ${ historico.Conta } </td>
                  <td> ${ historico.Plano } </td>
                  <td> ${ historico.Saldo } </td>
                  <td> ${ historico.DataCriacao } </td>
                  <td> 
                  <button type="button" title="Historicos das contas" onclick="historico_conta(historico.id)"  data-toggle="modal" data-target="#historico_conta" class="btn btn-outline-dark">Historicos
                  </button>
                  </td>
                </tr>
                `

                $('#table_historico_conta').append(entidades_table_data); 
                                          
        
        })});
           
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
      import {PlanoService} from '../../Domain/Services/PlanoService.js';
      import {ContaService} from '../../Domain/Services/ContaService.js';

      let _entidade_service = new EntidadeService();
      let _tipo_entidade_service = new TipoEntidadeService();
      let _plano_service = new PlanoService();
      let _conta_service = new ContaService();
      
      $('#listar_tipo_entidade').click(()=>{
        alert("estou a funcionar");
        _tipo_entidade_service().listar_tipo_entidade_service().then( tipos_entidade => {
            tipos_entidade.data.results.forEach((tipo_entidade)=>{
              console.log(tipo_entidade)           
            })
        })

      })
         
       //Registro das entidades   
      $('#register_entidade').submit(function(e){
        // Evita submeter sem a validacao
        e.preventDefault();
        let nova_entidade_obj = {
        Nome: $('#Entidade_nome').val(),
        Nif: $('#Entidade_nif').val(),
        Email: $('#Entidade_email').val(),
        Endereco: $('#Entidade_endereco').val(),
        TipoEntidade: $('#Entidade_tipo').val(),
        Plano: 1

        }
        _entidade_service.registar_entidade_service(nova_entidade_obj).then(data =>{
          var id_entidade = data.data.id;
          if(typeof(id_entidade) == 'number'){
         console.log('Entidade cadastrada com sucesso!',data);
         //$('#entidade_successo').modal('show'); 
         // Recarregar a page
         window.location.reload(true);
       
          }else{

         console.log('Entidade não foi registrado no sistema!',data);
         alert('Entidade não foi registrado no sistema, \nVerifique os dados submetidos!');
          }
         // Atualizar a tabela
        });
        return false;
      });
        // Editar entidades
        $('#editar_entidade').submit(function(e){
        // Evita submeter sem a validacao
        e.preventDefault();
        let update_entidade_obj = {
        Nome: $('#edit_entidade_nome').val(),
        Nif: $('#edit_nif_entidade').val(),
        Email: $('#edit_email_entidade').val(),
        Endereco: $('#edit_endereco_entidade').val(),
        TipoEntidade: $('#edit_tipoEntidade').val()
        //Plano: 1

        }

        _entidade_service.actualizar_entidade_service(update_entidade_obj).then(data =>{
          var id_entidade = data.data.id;
          console.log('Informações ',data);
          if(typeof(id_entidade) == 'number'){
         console.log('Informações actualizadas com sucesso!',data);
         alert('Informações actualizadas com sucesso');
         //$('#entidade_successo').modal('show'); 
         // Recarregar a page
         window.location.reload(true);
       
          }else{

         console.log('Informações não actualizadas com sucesso!',data);
         alert('Informações não actualizadas!\nVerifique os dados submetidos!');
          }
         // Atualizar a tabela
        });
        return false;
      });

      $('#Registrar_plano').click(function(){
          // Criar novo plano
        let novo_plano_obj = {
             Nome:$('plano_nome').val(),
             TotalSMS:$('plano_sms').val(),
             TotalACobrar:$('plano_preco').val(),
             DataCriacao:$('plano_data').val()
             //criador do plano
         }
         _plano_service.registar_plano_service(novo_plano_obj).then(data => console.log('registo de novo plano',data));
         return false;

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

// LISTAR ENTIDADE       
     function listar_entidades(){

        _entidade_service.listar_entidade_service().then(data => {        
          data.data.results.forEach((entidade)=>{
            _tipo_entidade_service.selecionar_tipo_entidade_service(entidade.TipoEntidade).then(tipo_entidade => {              
               let entidades_table_data = `
                  <tr>
                    <td> 
                      <div class="avatar" style="background-color:#484847;">
                        <span>${entidade.Nome[0]}</span>
                      </div>
                    </td>

                    <td>
                      <h5 style="color:#222;font-size:16px;font-weight: 400;">${ entidade.Nome }</h5>
                      <span style="color:#b7b7b7">${ tipo_entidade.data.Nome }</span>
                    </td>

                    <td>
                    <button title="Editar Entidade ${entidade.id}" id="entidade_${entidade.id}" class="btn btn-success btn-sm" onmousedown="  $('.btn_editar_entidade').attr('id', 'editEntidade_'+${entidade.id} );  $('.btn_editar_entidade').trigger('click'); "><i class="fas fa-edit"></i></button>
                    <button title="Informações sobre Entidade ${entidade.id}" id="entidade_${entidade.id}" class="btn btn-outline-dark btn-sm" onmousedown=" alert('Informacao'); "><i class="fas fa-info"></i></button>
                    <button title="Remover Entidade ${entidade.id}" id="entidade_${entidade.id}" class="btn btn-danger btn-sm" onmousedown=" $('.btn_eliminar').attr('id', 'entidade_'+${entidade.id} );  $('.btn_eliminar').trigger('click'); "><i class="fas fa-trash"></i></button>
                    </td>
                  </tr>
                  `

                  $('#tabela_entidade').prepend(entidades_table_data); 
                                            
            })
          })})

     }  
     // editar entidades
     $('.btn_editar_entidade').click(function(){
      let id = Number($(this).attr('id').split('_')[1]);
      _entidade_service.selecionar_entidade_service(id).then(data => {  
      //console.log(data.data);
      var endereco = data.data.Endereco;
      //endereco = enderco.split(','); separar as virgulas
       $('#edit_nome_entidade').val(data.data.Nome); 
       $('#edit_email_entidade').val(data.data.Email); 
       $('#edit_endereco_entidade').val(endereco); 
       $('#edit_nif_entidade').val(data.data.Nif); 
      if(data.data.TipoEntidade == 1)
       $('#edit_tipoEntidade').append('<option value="'+data.data.TipoEntidade+'" selected style="display:none" >Pública</option>'); 
       else if(data.data.TipoEntidade == 2)
       $('#edit_tipoEntidade').append('<option value="'+data.data.TipoEntidade+'" selected style="display:none">Privada</option>');
       else if(data.data.TipoEntidade == 3)
       $('#edit_tipoEntidade').append('<option value="'+data.data.TipoEntidade+'" selected style="display:none">Comercial</option>'); 
       
       $('#editar_entidade_modal').modal('show');
        
        
      });

     });
     // Eliminar Entidade
    $('.btn_eliminar').click(function(){
            //event.preventDefault(); 
            var confirmacao = confirm('Pretendes remover esta Entidade do Sistema?');
            if (!confirmacao){ return false; }
            else{
            
            let id = Number($(this).attr('id').split('_')[1])      
            _entidade_service.eliminar_entidade_service(id).then(function(data){
                console.log(data);
                if(data.data.status == 204)
                {
                  alert('Entidade foi Eliminada da Lista!');
                  console.log('Entidade foi Eliminada, Entidade '+id);
                  window.location.reload(true);
                 
                }else
                {
                  alert('Entidade não foi Eliminada com sucesso!');
                  console.log('Entidade não foi Eliminada, Entidade '+id);
                }
                

            })
        }
        
      });

                // Eliminar planos
    $('.btn_eliminar').click(function(){
            //event.preventDefault(); 
            var confirmacao = confirm('Pretendes remover este plano do Sistema?');
            if (!confirmacao){ return false; }
            else{
            
            let id = Number($(this).attr('id').split('_')[1])      
            _plano_service.eliminar_plano_service(id).then(function(data){
                console.log(data);
                if(data.data.status == 204)
                {
                  alert('Plano foi Eliminada da Lista!');
                  console.log('Plano foi Eliminado, plano '+id);
                  window.location.reload(true);
                 
                }else
                {
                  alert('Plano não foi Eliminada com sucesso!');
                  console.log('Plano não foi Eliminado,Plano '+id);
                }
                

            })
        }
        
      });
// LISTAR planos
 function listar_plano(){

  _plano_service.listar_plano_service().then(data => {
    console.log(data);  
          data.data.results.forEach((plano)=>{
               let entidades_table_data = `
                  <tr>
                    <td> ${ plano.Nome } </td>
                    <td> ${ plano.TotalSMS } </td>
                    <td> ${ plano.TotalACobrar } </td>
                    <td> ${ plano.DataCriacao } </td>
                    <td>
                      <button type="button" title="Editar Plano" onclick="editar_funcionario_modal(${plano.id})" class="btn btn-outline-dark"><i class="fas fa-minus"></i>
                      </button>
                      <button type="button" title="Remover plano ${plano.id}"  id="sms_${plano.id}" class="btn btn-outline-danger" onmousedown=" $('.btn_eliminar').attr('id', 'contato_'+${plano.id} );  $('.btn_eliminar').trigger('click'); "><i class="fas fa-trash"></i>
                      </button>
                    </td>
                  </tr>
                  `

                  $('#tabela_planos').append(entidades_table_data); 
                                            
          
          })});
}

     // ver Historicos de contas
     $('.btn_ver_historico').click(function(){
      let id = Number($(this).attr('id').split('_')[1]);
      _conta_service.historico_plano_service(id).then(data => {  
      //console.log(data.data);
       $('#hist_entidade').val(data.data.Entidade); 
       $('#hist_saldo').val(data.data.Saldo); 
       $('#hist_plano').val(data.data.Plano); 
       $('#hist_criador').val(data.data.Criador); 
       $('#hist_data').val(data.data.DataCriacao); 
       $('#historico_conta').modal('show'); 
        
        
      });

     });
// LISTAR contas cadastradas
function listar_conta(){

  _conta_service.listar_conta_service().then(data => {
  console.log(data);  
        data.data.results.forEach((conta)=>{
             let entidades_table_data = `
                <tr>
                  <td> ${ conta.Saldo } </td>
                  <td> ${ conta.DataCriacao } </td>
                  <td> ${ conta.Plano } </td>
                  <td> ${ conta.Entidade } </td>
                  <td> 
                  <button type="button" title="Historicos das contas ${conta.id}" id="entidade_${conta.id}" class="btn btn-outline-dark"   onmousedown="$('.btn_ver_historico').attr('id', 'historicov_'+${conta.id} );  $('.btn_ver_historico').trigger('click'); ">Historicos
                  </button>   
                  </td>
                </tr>
                `

                $('#tabela_das_contas').append(entidades_table_data); 
                                          
        
        })});
}
        listar_entidades();
        listar_plano();
        listar_conta();
    </script>
    
  </body>
</html>
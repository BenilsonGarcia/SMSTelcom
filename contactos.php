<?php 
   include "../Components/dashboard.php";
 ?>
<div class="page-holder w-100 d-flex flex-wrap">
    <div class="container-fluid px-xl-5">
      <br>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-dark">
          <li class="breadcrumb-item"><a class="text-warning" href="#">Contactos</a></li>
          <li class="breadcrumb-item active" aria-current="page">Lista de contactos</li>
        </ol>
      </nav>

      <!-- Form Elements -->
      <div class="">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-sm-12 col-md-6">
                <button type="button" data-toggle="modal" title="Adicionar Contactos indivual" data-target="#Addcont" class="btn btn-outline-dark"><i class="fas fa-user-plus"></i></button>
                <button type="button" data-toggle="modal" title="Adicionar Grupos de Contactos" data-target="#modal_criar_grupo" class="btn btn-outline-dark"><i class="fas fa-users"></i></button>
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

                  <br>
              <div class="container">      
              <div class="table-responsive">
              <table class="table table-striped table-borderless" id="tabela">
              <thead>
              <tr>
                  <th>Entidade</th>
                  <th>Nome Completo</th>
                  <th>Contactos</th>
                  <th>Opção</th>
                </tr>
                
              </thead>
              <tbody id="contato_list">
                <input type="hidden" class="btn_eliminar" id="contato_x" />
              </tbody>
              </table>
            
              <nav aria-label="Page navigation example" style="color:#eee;">  
                            <ul class="pagination justify-content-end" style="margin-left: 850px;margin-top:2%;">
                              <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <span aria-hidden="true">&laquo;</span></a>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item">
                                <a class="page-link" href="#"> <span aria-hidden="true">&raquo;</span></a>
                              </li>
                            </ul>
                          </nav>
            </div></div>
            

          <!-- Modal criar contacto -->
          <div class="modal fade" id="Addcont" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" id="exampleModalLabel" style="font-size:1.2rem;">Novos Contactos</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form id="register_contacto" method="POST">
                <div class="modal-body">
                  <p style="color:#ddd;">Adicione os dados do Contacto</p>
                  <div class="form-group">       
                      <label>Nome</label>
                      <input type="text" placeholder="Nome " id="Contacto_nome" class="form-control" required>
                    </div>
                  <div class="form-group">       
                      <label>Contacto</label>
                      <input type="number" placeholder="Telefone " id="Contacto_telefone" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-outline-warning">Criar</button>
                </div>
                  </form>
              </div>
            </div>
          </div>
          <!-- Modal editar contacto -->
          <div class="modal fade" id="editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" id="exampleModalLabel" style="font-size:1.2rem;">Editar Contactos</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p style="color:#ddd;">Altera  os dados do Contacto</p>
                  <form>
                    <div class="form-group">       
                      <label>Nome</label>
                        <input type="hidden" id="edit_id"  name="id">
                      <input type="text" placeholder="Nome" id="edit_nome" class="form-control">
                    </div>
                  <div class="form-group">       
                      <label>Contacto</label>
                      <input type="number" placeholder="Telefone " id="edit_telefone" class="form-control">
                    </div>

                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Cancelar</button>
                  <button type="button" id="edit_contact" class="btn btn-outline-warning">Editar</button>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal criar grupo de contacto -->
          <div class="modal fade" id="modal_criar_grupo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel" style="font-size:1.2rem;">Grupos de Contactos</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form id="new_grupo" name="grupo_contatos">
                <div class="modal-body">
                          <div class="form-group">       
                              <label>Nome</label>
                              <input type="text" placeholder="Nome do Grupo" id="grupo_nome" class="form-control" required>
                            </div>

                            <div class="form-group row">
                              <div class="col-sm-10" >
                              <select id="lista_contatos" class="form-control"> </select> 
                              </div>
                              <div class="col-sm-2">
                              <button class="btn btn-primary" id="add_contato"> + </button>  
                              </div>

                            </div>
                            <div class="info">
                            <span style="color:orange; font-size:14px;">Contacto adicionado ao grupo!</span>
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
  <!-- Modal deletar -->
<div class="modal fade" id="deletar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="form_deletar" method="GET">
        <div class="modal-body">
          <div class="avatar bg-danger" style="margin-left:40%;">
            <span><i class="fas fa-trash"></i></span>
          </div>
          <p class="text-center">Tem certeza de que pretende deletar este item</p>
          <input type="hidden" name="id_contact">
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-outline-dark">Limpar dados</button>
            <button type="button" id="deletar_contact" class="btn btn-outline-warning">Deletar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="../Assets/vendor/popper.js/umd/popper.min.js"> </script>
<script src="../Assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="../Assets/vendor/jquery.cookie/jquery.cookie.js"> </script>
<script>
  // function editar_contato(id) {
  //         console.log(id)
  //       }
</script>
<script type="module">
          import {ContatoService} from '../../Domain/Services/ContatoService.js';
          let _contato_service = new ContatoService();
          let _service = new ContatoService();   

        // Listar Contatos
        $(document).ready(function() { 
          /* code here */
          var valor_anterior = "", valor_atual = "";
          //Listar contactos na Tabela
          _contato_service.listar_contato_service().then(function(data){            
            data.data.results.forEach(function(item){

              let contatos_table_data = `
              <tr>
              <td>${item.Conta}</td>
              <td>${item.Nome}</td>
              <td>${item.Telefone}</td>
              <td>
              <button type="button" title="Editar Perfil Funcionário" class="btn btn-outline-dark"><i class="fas fa-minus"></i>
              </button>
              <button title="Remover Funcionário ${item.id}" id="contato_${item.id}" class="btn btn-outline-danger" onmousedown=" $('.btn_eliminar').attr('id', 'contato_'+${item.id} );  $('.btn_eliminar').trigger('click'); "><i class="fas fa-trash"></i>
              </button>
              </td>
              </tr>
            `;
            $('#contato_list').append(contatos_table_data)
            })
          });
          //eliminar contactos
          $('.btn_eliminar').click(function(){
            //event.preventDefault(); 
            var confirmacao = confirm('Pretendes remover este Funcionários do Sistema?');
            if (!confirmacao){ return false; }
            else{
            
            let id = Number($(this).attr('id').split('_')[1])            
            _service.eliminar_contato_service(id).then(function(data){
                console.log(data);
                if(data.data.status == 204)
                {
                  alert('Contacto Eliminado da Lista!');
                  console.log('Contacto foi eliminado, contacto '+id);
                  window.location.reload(true);
                 
                }else
                {
                  alert('Contacto não foi eliminado com sucesso!');
                  console.log('Contacto não foi eliminado, contacto '+id);
                }
                

            })
        }
      });
          //Configuracoes dos grupos de contatos
          $('.info').fadeOut(); //desaparecer
          // adicionar contactos
          $("#add_contato").click(function(e){
            e.preventDefault();
            $('.info').fadeIn(1000, function(){
              $(this).fadeOut();
            });
            valor_atual = $('#lista_contatos').val(); // atribui-se o valor a valor novo
            if(valor_anterior == valor_atual){ // verifica se os contatos sao iguais
              $('.info').empty();//limpar os dados da DIV
              $('.info').prepend('<span class="text-danger"> Contacto já adicionado!</span>');
              $('.info').fadeIn(1000, function(){
              $(this).fadeOut();
            });
            }else{
              valor_anterior = $('#lista_contatos').val();// atribui-se o valor a valor novo
              $('.info').empty();//limpar os dados da DIV
              $('.info').prepend('<span class="text-warning"> Contacto adicionado ao Grupo!</span>');
              $('.info').fadeIn(1000, function(){
              $(this).fadeOut();
            });
              $('.inputs').prepend('<input type="hidden" name="grupo_contato[]" id="grupo_contatos" class="form-control" value="'+$('#lista_contatos').val()+'">');
              // Adiciona campos
            }
            

          });
          // Salvar novo Grupo de contatos
          $("#new_grupo").submit(function(e){
            e.preventDefault();
            var contatos = $("input[name^='grupo_contato[]']");
            
            //var inputs = jQuery('input[name^="grupo_contato"]');
            var values = []; //array contactos
            for(var i = 0; i < contatos.length; i++){
              values.push($(contatos[i]).val());
            }
            
            let novo_grupo_contato = {
            Nome:$('#grupo_nome').val(),
            Contatos: values
        }
        _contato_service.registar_grupo_contato_service(novo_grupo_contato).then(data => console.log('registar grupo de contatos',data))
          });
           // Listar contactos no grupo 
          listar_contactos();
        });

        
        //Registo de contato

        function listar_contactos(){
          _contato_service.listar_contato_service().then(function(data){            
            data.data.results.forEach(function(item){
              var entidades_contactos = '<option value="'+item.Telefone+'">'+item.Nome+'</option>';
               
              $('#lista_contatos').append(entidades_contactos);
        })});
        }

        $('#register_contacto').submit(function(e){
         e.preventDefault();
       
          let novo_contato = {
            Nome:$('#Contacto_nome').val(),
            Telefone: $('#Contacto_telefone').val()           
          }

          _contato_service.registar_contato_service(novo_contato).then(function(data){          
            if (typeof(data.data.id) != 'undefined') {
              alert('Novo Contacto adicionado!');
              window.location.reload(true);
            }else{
              alert('Não foi possivel adicionar contato')
            }
          })
      });

        //Edit contact
        

        $('#editar_contato_id').on('click', function(){          
          _contato_service_listar_contato_service().then(function(data){
            alert('alfjd')
            console.log(data)
          })
        });

          //edit contact group
           $('#edit_group_contact').click(function(){ /*CRIAR ESSE MODAL PARA UPDATE*/
          let update_grupo_contato = {
            id:$('#edit_id_group').val(),
            //Contactos:$('#contacts')
            Nome:$('#edit_nome_group').val(),
          }
        _contato_service.actualizar_grupo_contato_service(update_grupo_contato).then(data => console.log('actualizar grupo contata',data));
          });
          //eliminar_group_contact
          $('#deletar_contact_group').click(function(){ /*CRIAR ESSE MODAL PARA ELIMINAR GROUP*/
          var $id = $('#id_contact_group').val();
          _contato_service.eliminar_grupo_contato_service($id).then(data => console.log('eliminar grupo contato', data))
        });   
    </script>
</body>
</html>
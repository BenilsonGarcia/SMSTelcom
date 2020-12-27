<?php 
   include "../Components/dashboard.php";
 ?>
   <div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">
  <br>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-dark">
            <li class="breadcrumb-item"><a class="text-warning" href="#">Campanhas</a></li>
            <li class="breadcrumb-item active" aria-current="page">Campanhas Realizadas</li>
          </ol>
        </nav>

                      <!-- Form Elements -->
              <div class="col-lg-12 mb-5">
                <div class="card">
                  <div class="card-header">  
                    <div class="row">
                    <div class="col-sm-12 col-md-6">
                    <button type="button" data-toggle="modal" title="Criar Nova Campanha" data-target="#camp" class="btn btn-outline-dark"><i class="far fa-paper-plane"></i></button>
                    
                  </div>
                    <div class="col-sm-12 col-md-6">
                <div class="input-group">
                  <input type="text " class="form-control" placeholder="Procurar Campanha">
                  <div class="input-group-append">
                    <button class="btn btn-secondary text-warning" type="button">
                      <i class="fa fa-search"></i>
                    </button>
                 </div>
                </div>
            </div>
          </div>
        </div>
        <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>Entidade</th>
                          <th>Assunto</th>
                          <th>Conteudo</th>
                          <th>Data de criação</th>
                          <th>Opção</th>
                        </tr>
                      </thead>
                      <tbody id="table_campanha_list">
                      <input type="hidden" class="btn_eliminar" id="campanha_x" />
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
</div>


        </div>

                    <div class="card-body">
  
                    <!-- Modal-->
                    <div id="camp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                      <div role="document" class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 id="exampleModalLabel" class="modal-title">Nova Campanha</h4>
                            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                          </div>
                          <form method="POST" action="#" id="register_campanha">
                          <div class="modal-body">
                              <span style="color:#ddd;">Destinatário</span>
                              <div class="row">
                                <div class="col-sm-12">
                                  <div class="form-group">       
                                <label>Para:</label>
                                <div class="row">
                                
                                <div class="col-sm-10" >
                                  <select id="sms_grupo" class="form-control"> </select> 
                                  </div>
                                  <div class="col-sm-2">
                                  <button class="btn btn-warning" id="add_contato"> + </button>  
                                  </div>

                                </div>

                                </div>
                                <div class="info">
                                <span style="color:orange; font-size:14px;">Grupo adicionado!</span>
                                </div>
                                <div class="inputs">

                                </div>
                              
                              </div>

                              </div>
                              <div class="form-group">
                                  <label for="sms_assunto">Assunto:</label>
                                  <input type="text" name="sms_asssunto" id="sms_assunto" class="form-control" required>
                              </div>
                             
                             <div class="form-group">
                                <label for="sms"> Descrever a campanha:</label>
                                <textarea id="sms" class="form-control" style="height:200px;resize:none" required></textarea> 
                              </div>

                              <div class="form-group">
                                  <label for="sms_data">Data Agendada:</label>
                                  <input type="dateTime-local" id="sms_data" class="form-control" required>
                              </div>
                          </div>
                          <div class="modal-footer">
                            <button type="reset" class="btn btn-outline-dark">Limpar</button>
                            <button type="submit" class="btn btn-outline-warning">Enviar</button>
                          </div>
                        </form>

                        </div>
                      </div>
                    </div>
                  </div>


    </div>


                           <!-- Modal deletar-->
 

                  <div class="card-body">
                    <div id="deletar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                      <div role="document" class="modal-dialog">
                        <div class="modal-content" style="margin-top: 18%;">
                         
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
    <!-- JavaScript files-->
 <script src="../Assets/vendor/jquery/jquery.min.js"></script>
    <script src="../Assets/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="../Assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../Assets/vendor/jquery.cookie/jquery.cookie.js"> </script>


    <script type="module">
      import {CampanhaService} from '../../Domain/Services/CampanhaService.js';
      import {ContatoService} from '../../Domain/Services/ContatoService.js';
      let _contato_service = new ContatoService();
      let _campanha_service = new CampanhaService();
          //criar Campanha  
      var valor_anterior = "", valor_atual = "";
      //Configuracoes dos grupos de contatos
      $('.info').fadeOut(); //desaparecer
      // adicionar contactos
      $("#add_contato").click(function(e){
        e.preventDefault();
            $('.info').fadeIn(1000, function(){
              $(this).fadeOut();
            });
            valor_atual = $('#sms_grupo').val(); // atribui-se o valor a valor novo
            if(valor_anterior == valor_atual){ // verifica se os contatos sao iguais
              $('.info').empty();//limpar os dados da DIV
              $('.info').prepend('<span class="text-danger"> Contacto já adicionado!</span>');
              $('.info').fadeIn(1000, function(){
              $(this).fadeOut();
            });
            }else{
              valor_anterior = $('#sms_grupo').val();// atribui-se o valor a valor novo
              $('.info').empty();//limpar os dados da DIV
              $('.info').prepend('<span class="text-warning"> Contacto adicionado ao Grupo!</span>');
              $('.info').fadeIn(1000, function(){
              $(this).fadeOut();
            });
              $('.inputs').prepend('<input type="hidden" name="grupo_contato[]" id="grupo_contatos" class="form-control" value="'+$('#sms_grupo').val()+'">');
              // Adiciona campos
            }
          });

      $('#register_campanha').submit(function(e){
        // Evita submeter sem a validacao
        e.preventDefault();
        
        var contatos = $("input[name^='grupo_contato[]']");
            
        //var inputs = jQuery('input[name^="grupo_contato"]');
        var values = []; //array contactos
        for(var i = 0; i < contatos.length; i++){
          values.push($(contatos[i]).val());
        }
        
         let sms_campanha = {
            Grupos: values, //o destino da campanha
            //Mensagem: $('#sms').val(),
            Nome: $('#sms_assunto').val(),
            DataEnvio: $('#sms_data').val(),
            ModeloSMS: 1
          //Grupos: [1]
        }

          _campanha_service.registar_campanha_service(sms_campanha).then(data => {
          var id_sms = data.data.id;
          if(typeof(id_sms) == 'number'){
         alert('Campanha criada',data);
         //$('#entidade_successo').modal('show'); 
         // Recarregar a page
         window.location.reload(true);
       
          }else{

         console.log('Campanha não foi criada...',data);
         alert('Campanha não foi criada, \nTente adicionar Grupos de Contacto!');
          }
         // Atualizar a tabela
        });
        return false;
      });
       // Listar Campanha
       $(document).ready(function() { 
 
        _campanha_service.listar_campanha_service().then(function(data){            
            data.data.results.forEach(function(item){
              var dataEnvio = new Date(item.DataCriacao);
              dataEnvio = dataEnvio.toLocaleString('PT-br');
              let table_campanha = `
                <tr>
                  <td>${item.Conta}</td>
                  <td>${item.Nome}</td>
                  <td>${item.Mensagem}</td>
                  <td>${dataEnvio}</td>
                  <td>
                  <button title="Remover Campanha ${item.id}" id="sms_${item.id}" class="btn btn-outline-danger" onmousedown=" $('.btn_eliminar').attr('id', 'contato_'+${item.id} );  $('.btn_eliminar').trigger('click'); "><i class="fas fa-trash"></i>
                  </td>
                </tr>
              `;
            $('#table_campanha_list').append(table_campanha);
            })
          });
          // Listar grupos de contatos
          listar_contactos();
        });

          // Eliminar Campanha
    $('.btn_eliminar').click(function(){
            //event.preventDefault(); 
            var confirmacao = confirm('Pretendes remover esta Campanha do Sistema?');
            if (!confirmacao){ return false; }
            else{
            
            let id = Number($(this).attr('id').split('_')[1])      
            _campanha_service.eliminar_campanha_service(id).then(function(data){
                console.log(data);
                if(data.data.status == 204)
                {
                  alert('Campanha foi Eliminada da Lista!');
                  console.log('Campanha foi Eliminada, SMS '+id);
                  window.location.reload(true);
                 
                }else
                {
                  alert('Campanha não foi Eliminada com sucesso!');
                  console.log('Campanha não foi Eliminada, SMS '+id);
                }
                

            })
        }
        
      });
        // Listar grupos de contatos
        function listar_contactos(){
          _contato_service.listar_grupo_contato_service().then(function(data){            
            data.data.results.forEach(function(item){
              var entidades_grupo_contatos = '<option value="'+item.id+'">'+item.Nome+'</option>'; 
              $('#sms_grupo').append(entidades_grupo_contatos);
        })});
        }
        

    </script>
  </body>
</html>
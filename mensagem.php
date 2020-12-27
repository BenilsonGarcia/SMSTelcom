<?php 
   include "../Components/dashboard.php";
 ?>

      <div class="page-holder w-100 d-flex flex-wrap">
      <div class="container-fluid px-xl-5">
  <br>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-dark">
            <li class="breadcrumb-item"><a class="text-warning" href="#">Mensagens</a></li>
            <li class="breadcrumb-item active" aria-current="page">Mensagem Enviadas</li>
          </ol>
        </nav>

                      <!-- Form Elements -->
              <div class="col-lg-12 mb-5">
                <div class="card">
                  <div class="card-header">
                     <div class="row">
                    <div class="col-sm-12 col-md-6">
                    <button type="button" data-toggle="modal" title="Criar Mensagem" data-target="#myModal" class="btn btn-outline-dark"><i class="far fa-paper-plane"></i></button>
                    
                  </div>
                    <div class="col-sm-12 col-md-6">
                    <div class="input-group">
                      <input type="text " class="form-control" id="entrada" placeholder="Procurar Mensagem">
                      <div class="input-group-append">
                        <button class="btn btn-secondary text-warning" type="button">
                          <i class="fa fa-search"></i>
                        </button>
                      </div>
                    </div>
                  </div>
  
</div>
</div>                  <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>Entidade</th>
                          <th>Origem</th>
                          <th>Mensagem</th>
                          <th>Destino</th>
                          <th>Data envio</th>
                          <th>Opção</th>
                        </tr>
                      </thead>
                      <tbody id="tabela_sms">
                      <input type="hidden" class="btn_eliminar" id="sms_x" />
                      </tbody>
                    </table>
                  </div> 
                   
                  </div>
                </div>
              </div>


        </div>

         <!-- Modal Form-->
                 <!-- Modal-->

                    <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                      <div role="document" class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 id="exampleModalLabel" class="modal-title">Nova Mensagem</h4>
                            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                          </div>
                            <form method="POST" action="#" id="register_sms">
                          <div class="modal-body">
                              <span style="color:#ddd;">Destinatário</span>
                              <div class="row">
                                <div class="col-sm-12">
                                  <div class="form-group">       
                                <label>Para:</label>
                              <select name="destino_simples" id="destino_simples" class="form-control">
                              
                            </select>
                              </div>
                              
                              </div>

                              </div>
                             <div class="form-group">
                                <label>Descrever Mensagem:</label>
                                <textarea id="sms" class="form-control" required style="height:200px;resize:none"></textarea> 
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

                           <!-- Modal deletar-->

                    <div id="deletar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                      <div role="document" class="modal-dialog">
                        <div class="modal-content" style="margin-top: 18%;">
                         <form id="form_delete"> 
                          <div class="modal-body">
                                   <div class="avatar bg-danger" style="margin-left:40%;">
                                     <span><i class="fas fa-trash"></i></span>

                                   </div>
                                   <p class="text-center">Tem certeza de que pretende deletar este item</p>
                                   <input type="hidden" name="id_sms" id="id_sms">
                          <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-outline-dark">Cancelar</button>
                            <button type="button" id="deletar_sms" class="btn btn-outline-warning">Deletar</button>
                          </div>
                        </div>
                      </form>
                        </div>
                      </div>
                  </div>

    <script src="../Assets/vendor/jquery/jquery.min.js"></script>
    <script src="../Assets/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="../Assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../Assets/vendor/jquery.cookie/jquery.cookie.js"> </script>



    <script type="module">
        import {SMSService} from '../../Domain/Services/SMSService.js';
        import {ContatoService} from '../../Domain/Services/ContatoService.js';
        
        let _contato_service = new ContatoService();
        let _sms_service = new SMSService();

        

      //Enviar SMS   
      $('#register_sms').submit(function(e){
        // Evita submeter sem a validacao
        e.preventDefault();

         let sms_simples = {
          Contato:$('#destino_simples').val(),
          Conteudo: $('#sms').val()
        }

       _sms_service.enviar_sms_simples_service(sms_simples).then(data => {
          var id_sms = data.data.id;
          if(typeof(id_sms) == 'number'){
         alert('Mensagem enviada com sucesso!',data);
         //$('#entidade_successo').modal('show'); 
         // Recarregar a page
         window.location.reload(true);
       
          }else{

         console.log('Mensagem não foi enviada! Tente de novo...',data);
         alert('Mensagem não foi enviada, \nVerifique o Contacto!');
          }
         // Atualizar a tabela
        });
        return false;
      });
      // Eliminar SMS
    $('.btn_eliminar').click(function(){
            //event.preventDefault(); 
            var confirmacao = confirm('Pretendes remover esta Mensagem do Sistema?');
            if (!confirmacao){ return false; }
            else{
            
            let id = Number($(this).attr('id').split('_')[1])      
            _sms_service.eliminar_modelo_sms_service(id).then(function(data){
                console.log(data);
                if(data.data.status == 204)
                {
                  alert('A Mensagem foi Eliminada da Lista!');
                  console.log('Mensagem foi Eliminada, SMS '+id);
                  window.location.reload(true);
                 
                }else
                {
                  alert('Mensagem não foi Eliminada com sucesso!');
                  console.log('Mensagem não foi Eliminada, SMS '+id);
                }
                

            })
        }
        
      });
      //Listar SMS 
      function listar_sms(){

        _sms_service.listar_sms_service().then(data => {
          console.log(data);
         data.data.results.forEach((sms)=>{
              var dataEnvio = new Date(sms.DataEnvio);
              dataEnvio = dataEnvio.toLocaleString('PT-br');

               let entidades_table_data = `
                  <tr>
                    <td> 
                      ${sms.Conta}
                    </td>
                      <td> 
                      ${sms.Origem}
                    </td>
                      <td> 
                      ${sms.Conteudo}
                    </td>
                      <td> 
                        ${sms.Destino}
                      </td>
                      <td> 
                      ${dataEnvio}
                    </td>
                    <td>
                    <button title="Remover SMS ${sms.id}" id="sms_${sms.id}" class="btn btn-outline-danger" onmousedown=" $('.btn_eliminar').attr('id', 'contato_'+${sms.id} );  $('.btn_eliminar').trigger('click'); "><i class="fas fa-trash"></i>
                    </button>
                    </td>
                    </tr>
                     `
                  $('#tabela_sms').append(entidades_table_data); 
        
        }
        )})};
        
        function listar_contactos(){
          _contato_service.listar_contato_service().then(function(data){            
            data.data.results.forEach(function(item){
              var entidades_contactos = '<option value="'+item.id+'">'+item.Nome+' ('+item.Telefone+')</option>'; 
              $('#destino_simples').append(entidades_contactos);
        })});
        }

        listar_sms();
        listar_contactos();
    

    </script>



 
  </body>
</html>
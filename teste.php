<?php 
   include "../Components/header.php";
?>
<style type="text/css">
	.conteudo{
		margin-bottom: 5%;
	}
</style>
<body>

<div class="card-body">
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
                        
                      </tbody>
                    </table>
                  </div> 
                   
                  </div>
                </div>
              </div>


        </div>
       <script src="../Assets/vendor/jquery/jquery.min.js"></script>
 <script type="module">        
       import {SMSService} from '../../Domain/Services/SMSService.js';
        let _sms_service = new SMSService();
        
          $('#eliminar_sms').click(function(e){
        // Evita submeter sem a validacao
        e.preventDefault();
        alert("ola");
        var id = $("#id_sms").val();
        _sms_service.eliminar_sms_simples(id).then(data => console.log('Mensagem removida do Sistema',data));

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
            <input type="hidden" id="eliminar_id_sms" value="${sms.id}">
            <button type="button" id="eliminar_sms" alert("ola"); class="btn btn-outline-danger">
            <i class="fas fa-trash"></i>
             </button>
            </td>
            </tr>
             `
          $('#tabela_sms').append(entidades_table_data); 

}
)})};
listar_sms();
	
 </script>

</body>
</html>
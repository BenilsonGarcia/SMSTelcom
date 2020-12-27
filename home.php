<?php 
   include "../Components/dashboard.php";
 ?>
      <div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">
          <section class="py-5">
            <div class="row">
              <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
                <div class="bg-whites shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                  <div class="flex-grow-1 d-flex align-items-center">
                    <div class="dot mr-3 bg-warning"></div>
                    <div class="text">
                      <h6 class="mb-0">Total de Campanha</h6><span class="text-gray" id="total_camp"></span>
                    </div>
                  </div>
                  <div class="icon text-white bg-warning"><i class="fas fa-server"></i></div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
                <div class="bg-whites shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                  <div class="flex-grow-1 d-flex align-items-center">
                    <div class="dot mr-3 bg-warning"></div>
                    <div class="text" id="todas_sms" >
                      <h6 class="mb-0">Total de SMS</h6>
                      <span class="text-gray" id="total_sms"></span>
                    </div>
                  </div>
                  <div class="icon text-white bg-warning"><i class="far fa-clipboard"></i></div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
                <div class="bg-whites shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                  <div class="flex-grow-1 d-flex align-items-center">
                    <div class="dot mr-3 bg-red"></div>
                    <div class="text">
                      <h6 class="mb-0">Total de SMS Agendadas</h6><span class="text-gray" id="total_sms_agendada"></span>
                    </div>
                  </div>
                  <div class="icon text-white bg-red"><i class="fa fa-dolly-flatbed"></i></div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
                <div class="bg-whites shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                  <div class="flex-grow-1 d-flex align-items-center">
                    <div class="dot mr-3 bg-success"></div>
                    <div class="text">
                      <h6 class="mb-0">Total de SMS Enviada</h6><span class="text-gray" id="total_sms_enviada"></span>
                    </div>
                  </div>
                  <div class="icon text-white bg-success"><i class="fas fa-receipt"></i></div>
                </div>
              </div>
            </div>
          </section>


          <section>
            <div class="row">
              <div class="col-sm-12 col-md-12">
                <div class="card mb-5 mb-lg-0">         
                  <div class="card-header">
                    <h2 class="h6 mb-0">Campanhas Realizadas Nos ultimos Meses</h2>
                  </div>
                  <div class="card-body" id="lista_campanha_por_mes">
                    
                  </div>
                </div>
              </div>
             
            </div>
          </section>

        </div>

      </div>
    </div>
    <!-- JavaScript files-->
    
  </body>

  <script type="module">

import {RelatorioService} from '../../Domain/Services/RelatorioService.js';
let _relatorio_service = new RelatorioService();

_relatorio_service.relatorio_sms_service().then(function(data){
  console.log(data);
  $('#total_sms').text(data.data.totalSMS);
  $('#total_sms_agendada').text(data.data.totalSMSAgendada);
  $('#total_sms_enviada').text(data.data.totalSMSEnviada);

});
_relatorio_service.relatorio_campanha_service().then(function(data){
  console.log(data);
  var mes = '', total = 0, meses = ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'];
  var cont = 0;
  $('#total_camp').text(data.data.totalCampanha);

while(cont<=11){
    mes = meses[cont];
    total = data.data.totalCampanhaPorMes[mes];
    if(total<4)//o maximo de campanha feita no mes
    var bullet = '</span><span class="dot dot-sm ml-2 bg-red"></span>';
    else
    var bullet = '</span><span class="dot dot-sm ml-2 bg-warning"></span>';
    
    let campanhas_por_mes = `
    <div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row">
                      <div class="left d-flex align-items-center">
                        <div class="icon icon-lg shadow mr-3 "><i class="fas fa-calendar-minus"></i></div>
                        <div class="text">
                          <h6 class="mb-0 d-flex align-items-center"> <span>${mes}
                          ${bullet}
                          </h6>
                        </div>
                      </div>
                      <div class="right ml-5 ml-sm-0 pl-3 pl-sm-0">
                        <h5>${total}</h5>
                      </div>
                    </div> <hr>
                    
                    `;
      cont++;
      $('#lista_campanha_por_mes').prepend(campanhas_por_mes);
  }
});

</script>
</html>
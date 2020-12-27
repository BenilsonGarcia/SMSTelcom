<?php 
   include "../Components/dashboard.php";
 ?>
   <div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">
  <br>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-dark">
            <li class="breadcrumb-item"><a class="text-warning" href="#">Históricos</a></li>
            <li class="breadcrumb-item active" aria-current="page">Campanhas e Mensagens</li>
          </ol>
        </nav>

<div class="row">
<div class="container">
<div class="chart-container col-sm-12" style="position: relative; height:40vh; width:80vw">
    <canvas id="myChart"></canvas>
</div>
</div>
</div>
</div>
</div>



        <script type="module">

import {RelatorioService} from '../../Domain/Services/RelatorioService.js';
let _relatorio_service = new RelatorioService();


$(document).ready(function(){

  var mes = '', total_sms = [], total_camp = [] , meses = ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'];
  

//gera total de sms
_relatorio_service.relatorio_sms_service().then(function(data){
  console.log(data);

var cont = 0;

while(cont<=11){
    mes = meses[cont];
    total_sms.push(data.data.totalPorMes[mes]);
    cont++;
  }

  return mostrar_grafico(total_sms, total_camp, meses);
});
//gera total de campanhas
_relatorio_service.relatorio_campanha_service().then(function(data){
  console.log(data);
  var cont = 0;

while(cont<=11){
    mes = meses[cont];
    total_camp.push(data.data.totalCampanhaPorMes[mes]);
    cont++;
  }
  
return mostrar_grafico(total_sms, total_camp, meses);
});

});

function mostrar_grafico( tot_sms, tot_camp, meses){
  
var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
        // The data for our dataset
   
    data: {
       
         labels: meses,
        datasets: [{
            label: 'Campanhas Realizadas',
            backgroundColor: 'rgba(0, 0, 0, 0.1)',
            borderColor: '#222',
            data: tot_camp
        },
        {
            label: 'Mensagens Enviadas',
            backgroundColor: 'rgba(0, 0, 0, 0.1)',
            borderColor: 'orange',
            data: tot_sms
        }]
    },

    // Configuration options go here
    options: {
        scales: {
            yAxes: [{
                stacked: true
            }]
        }
    }
});
}
        </script>
  </body>
</html>
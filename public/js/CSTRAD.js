$(document).ready(function(){
    var ctx = document.getElementById("FlujoDeAccidentes").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data:
        {
            labels: ["Arica", "Coquimbo", "Valparaiso", "Santiago", "Rancagua", "Concepción"],
            datasets: [{
                label: 'Accidentes',
                data: [12, 19, 3,5, 2,3],
                backgroundColor: [
                    'rgba(192, 57, 43, 0.8)',
                    'rgba(231, 76, 60, 0.8)',
                    'rgba(155, 89, 182, 0.8)',
                    'rgba(41, 128, 185, 0.8)',
                    'rgba(142, 68, 173, 0.8)',
                    'rgba(52, 152, 219, 0.8)'
                ],
                bordercolor: '#fff'
            }, {
                label: 'Buses',
                data: [5, 4, 8,10, 7,12],
                backgroundColor: [
                    'rgba(26, 188, 156, 0.8)',
                    'rgba(22, 160, 133, 0.8)',
                    'rgba(39, 174, 96, 0.8)', 
                    'rgba(255, 159, 64, 0.8)', 
                    'rgba(46, 204, 113, 0.8)',
                    'rgba(241, 196, 15, 0.8)'
                ],
                bordercolor: '#aaa'
            }]
        },
        options: {
            title: {
                display: true,
                text: "Flujo de accidentes"
            },
            reponsive: true,
            scales: {
                xAxes: [{
                    stacked: true
                }],
                yAxes: [{
                    stacked: true
                }]
            }
        }

        });
    });
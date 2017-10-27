$(document).ready(function(){
    var url = "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js";    
    var ctx = document.getElementById('accidentesDiarios').getContext('2d');
    $.getScript(url, function(){
        var myBarChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Santiago", "Concepción", "Arica"],
                datasets: {
                    label: "Ciudad",
                    backgroundColor: ['#aaa','#000','#eee'],
                    data: [2,3,5]
                },
            },
            options: {
                legend: {display: false},
                title: {
                    display: true,
                    text: 'Cantidad de accidentes diarios'
                }
            }
        });        
    });
});
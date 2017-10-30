$(document).ready(function(){
    var ctx = document.getElementById("accidentesDiarios").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: 
        {
            labels: ["08:00:00", "10:00:00", "12:00:00", "14:00:00", "16:00:00", "18:00:00"],
            datasets: [{
                data: [12, 19, 3,5, 2,3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
});
  

var ctx = document.getElementById('myChart');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'pie',

    // The data for our dataset
    data: {
        labels: ['Desktop', 'Mobiel', 'Tablet', 'Anders'],
        datasets: [{
            backgroundColor: ['#7D0000', '#004179', '#0088AC', '#DCAA33'],
            borderColor: '#fff',
            data: [4, 10, 5, 2]
        }]
    },

    // Configuration options go here
    options: {}
});
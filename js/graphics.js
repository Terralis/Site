//geral//
var ctx = document.getElementById('myChart').getContext('2d');
var mixedChart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
   data: {
        datasets: [{
            label: 'Aproveitamento',
            borderColor: '#346b60',
            backgroundColor: 'transparent',
            data: [15, 10, 30],
            type: 'line',
            // this dataset is drawn on top
            order: 1,
        }, {
            label: 'Questões',
            backgroundColor: 'rgba(85, 171, 160, 0.8)',
            data: [10, 20, 30],
            // this dataset is drawn below
            order: 2
        }, {
            label: 'Acertos',
            backgroundColor: 'rgba(154, 204, 147, 0.8)',
            data: [10, 20, 30],
            // this dataset is drawn below
            order: 3
        }],
        labels: ['Biologia', 'Física', 'Química']
    },

    // Configuration options go here
    options: {
    	maintainAspectRatio: false,
    	scales: {
      yAxes: [{
      	display: true,
        id: 'A',
        type: 'linear',
        position: 'left',
        ticks:{
        	beginAtZero: true
        }
      }]
    }
}
});

//biologia//
var ctx = document.getElementById('bio').getContext('2d');
var chart = new Chart(ctx, {
// The type of chart we want to create
type: 'doughnut',

// The data for our dataset
data: {
    labels: ['Acertos', 'Erros'],
    datasets: [{
    label: 'My First dataset',
    backgroundColor: ['#346b60', '#c1c1c1'],
    borderColor: 'white',
    data: [5, 10]
    }]
  },

    // Configuration options go here
    options: {}
});
//física//
var ctx = document.getElementById('fis').getContext('2d');
var chart = new Chart(ctx, {
// The type of chart we want to create
type: 'doughnut',

// The data for our dataset
data: {
    labels: ['Acertos', 'Erros'],
    datasets: [{
    label: 'My First dataset',
    backgroundColor: ['#346b60', '#c1c1c1'],
    borderColor: 'white',
    data: [7, 10]
    }]
  },

    // Configuration options go here
    options: {}
});
//química//
var ctx = document.getElementById('qui').getContext('2d');
var chart = new Chart(ctx, {
// The type of chart we want to create
type: 'doughnut',

// The data for our dataset
data: {
    labels: ['Acertos', 'Erros'],
    datasets: [{
    label: 'My First dataset',
    backgroundColor: ['#346b60', '#c1c1c1'],
    borderColor: 'white',
    data: [14, 10]
    }]
  },

    // Configuration options go here
    options: {}
});


// var ctx = document.getElementById('myChart').getContext('2d');
// var mixedChart = new Chart(ctx, {
//     // The type of chart we want to create
//     type: 'bar',

//     // The data for our dataset
//    data: {
//         datasets: [{
//             label: 'Bar Dataset',
//             data: [10, 20, 30, 40],
//             // this dataset is drawn below
//             order: 1
//         }, {
//             label: 'Line Dataset',
//             data: [15, 10, 30, 15],
//             type: 'line',
//             // this dataset is drawn on top
//             order: 2
//         }],
//         labels: ['January', 'February', 'March', 'April']
//     },

//     // Configuration options go here
//     options: {}
// });
	
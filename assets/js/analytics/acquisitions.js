var ctx = document.getElementById("lineChart");

var stars = [135850, 52122, 148825, 16939, 9763];
var frameworks = ["React", "Angular", "Vue", "Hyperapp", "Omi"];

var myChart = new Chart(ctx, {
  type: "bar",
  data: {
    labels: frameworks,
    datasets: [
      {
        label: "Github Stars",
        data: stars,
      },
    ],
  },
});


var ctx = document.getElementById('donutChart').getContext('2d');

    // Define the data for the chart
    var data = {
      labels: ['Red', 'Blue', 'Yellow'],
      datasets: [{
        data: [300, 50, 100],
        backgroundColor: [
          'rgb(255, 99, 132)',
          'rgb(54, 162, 235)',
          'rgb(255, 205, 86)'
        ],
        hoverOffset: 4 // Set this to add spacing when hovering over a segment
      }]
    };

    // Define the options for the chart
    var options = {
      responsive: false, // Set to true to make the chart responsive
      plugins: {
        legend: {
          position: 'bottom' // Position of the legend
        }
      }
    };

    // Create the donut chart
    var myChart = new Chart(ctx, {
      type: 'doughnut',
      data: data,
      options: options
    });
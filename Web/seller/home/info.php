

    <?php
include "../php/getSellerDashboard.php";
?>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

<canvas id="myChart" height="30vh" width="80vw"></canvas>


<div class="w3-row">
  <div class="w3-col s6  w3-center"><canvas id="myChart2"></canvas>
</div>
  <div class="w3-col s6  w3-center"><canvas id="myChart3"></canvas></div>
</div>


<script>

var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels:   <?php  echo $datesOutputSales; ?>,
        datasets: [{
            label: 'Sales of this month',
            backgroundColor: 'rgb(184, 222, 186,0.3)',
            borderColor: 'rgb(74, 92, 255)',
            data: <?php  echo $valuesOutputSales; ?>,
        }]
    },

    // Configuration options go here
    options: {}
});
</script>



<script>

var ctx = document.getElementById('myChart2').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels:   <?php  echo $itemOutputNames; ?>,
        datasets: [{
            label: 'Sales of this month',
            backgroundColor: 'rgb(20, 217, 49,0.5)',
            borderColor: 'rgb(255, 99, 132)',
            data: <?php  echo $itemOutputSales; ?>,
        }]
    },

    // Configuration options go here
    options: {}
});
</script>



           
<script>
var ctx = document.getElementById("myChart3").getContext("2d");

var data = {
    labels: <?php  echo $itemOutputNames1; ?>,
    datasets: [
        {
            label: "Ad Viewed ",
            backgroundColor:  'rgb(92, 237, 206,0.5)',
            data: <?php  echo $itemOutputorderCount; ?>,
        },
        {
            label: "Orders",
            backgroundColor: 'rgb(219, 61, 116,0.5)',
            data: <?php  echo $itemOutputViewCount; ?>,
        }
    ]
};

var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: {
        barValueSpacing: 20,
        scales: {
            yAxes: [{
                ticks: {
                    min: 0,
                }
            }]
        }
    }
});
</script>
<div>
<div class="w3-row-padding w3-margin-bottom ">

    <div class="w3-quarter">
      <div class="w3-container w3-red w3-hover-shadow  w3-padding-16 w3-panel w3-border w3-round-xlarge">
      <div class="w3-left"><i class="fa fa-items w3-xxxlarge"></i></div>
      <div class="w3-right">
          <h3>52</h3>
        </div>
        <div class="w3-clear"></div>
        <h4><a>Items</a></h4>
      </div>
    </div>

    <div class="w3-quarter">
      <div class="w3-container  w3-hover-shadow w3-blue w3-padding-16 w3-panel w3-border w3-round-xlarge">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>99</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Customers</h4>
      </div>
    </div>

    <div class="w3-quarter">
      <div class="w3-container  w3-hover-shadow w3-teal w3-padding-16 w3-panel w3-border w3-round-xlarge">
        <div class="w3-left "><i class="fa fa-bell w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>23</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>New Orders</h4>
      </div>
    </div>

    <div class="w3-quarter">
      <div class="w3-container  w3-hover-shadow w3-orange w3-text-white w3-padding-16 w3-panel w3-border w3-round-xlarge">
        <div class="w3-left"><i class="fa fa-history w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>50</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Shipped Orders</h4>
      </div>
    </div>

    </div>
    </div>


    <div  class="w3-half "  style="margin-left:25%">
    <div class=" w3-card-4 w3-margin  w3-panel w3-border w3-round-xxlarge" >
    <canvas id="myChart" width="400" height="400"></canvas>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
        datasets: [{
            label: 'Item Sales',
            data: [12, 19, 3, 5, 2, 3,9],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 200, 86, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>


</div>
    </div>



    <div>
<div class="w3-row-padding w3-margin-bottom ">

    <div class="w3-third ">
      <div class="w3-card w3-margin  w3-panel w3-border w3-round-xxlarge">
        <div class="w3-clear"></div>
     
        <canvas id="myChart-1" ></canvas>
<script>
var ctx = document.getElementById('myChart-1').getContext('2d');
var myLineChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
        datasets: [{
            label: 'Last Week  Sales',
            data: [3, 3, 5, 5, 7, 9,10],
            borderColor: [
              'rgba(5, 12, 235, 1)',
                
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
      </div>
    </div>

    <div class="w3-third ">
      <div class=" w3-card w3-margin  w3-panel w3-border w3-round-xxlarge">
        <div class="w3-clear"></div>
     
        <canvas id="myChart-2" ></canvas>
<script>
var ctx = document.getElementById('myChart-2').getContext('2d');
var myLineChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['1st Week', '2nd Week', '3rd Week','4th Week'],
        datasets: [{
            label: 'Last Month Sales',
            data: [12,14,14,17],
            borderColor: [
              'rgba(160, 20, 12, 8)',
                
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
      </div>
    </div>


    <div class="w3-third ">
      <div class="w3-card w3-margin  w3-panel w3-border w3-round-xxlarge">
        <div class="w3-clear"></div>
     
        <canvas id="myChart-3" ></canvas>
<script>
var ctx = document.getElementById('myChart-3').getContext('2d');
var myLineChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Aip', 'May', 'Jun', 'Jul','Aug','Sep','oct','Nov','Dec'],
        datasets: [{
            label: 'Last Year Sales',
            data: [10,9,3,8,9,10,11,13,14,16,17,19],
            borderColor: [
              'rgba(5, 132, 25, 1)',
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
      </div>
    </div>

    </div>
    </div>

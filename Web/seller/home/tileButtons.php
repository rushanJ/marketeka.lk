<div class="w3-row-padding w3-margin-bottom ">

    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16 w3-panel w3-border w3-round-xlarge">
      <div class="w3-left"><i class="fa fa-items w3-xxxlarge"></i></div>
      <div class="w3-right">
          <h3>52</h3>
        </div>
        <div class="w3-clear"></div>
        <h4><a>Items</a></h4>
      </div>
    </div>

    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16 w3-panel w3-border w3-round-xlarge">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>99</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Customers</h4>
      </div>
    </div>

    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16 w3-panel w3-border w3-round-xlarge">
        <div class="w3-left "><i class="fa fa-bell w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>23</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>New Orders</h4>
      </div>
    </div>

    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16 w3-panel w3-border w3-round-xlarge">
        <div class="w3-left"><i class="fa fa-history w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>50</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Shipped Orders</h4>
      </div>
    </div>
    </div>
    


    <div style="margin-left:15%" >
    <div class=" w3-card-4 w3-margin  w3-panel w3-border w3-round-xxlarge" >
    <canvas id="myChart" width="1000" height="400"></canvas>
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

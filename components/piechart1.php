<?php
  $con = mysqli_connect("localhost","root","","horizon_gym");
  if (mysqli_connect_error()) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['monthName', 'totalMembers'],
          <?php
         $sql = "SELECT 
         MONTHNAME(joinDate) AS monthName,
         COUNT(*) AS totalMembers
     FROM 
         member_details
     GROUP BY 
         MONTH(joinDate)
     ORDER BY 
         MONTH(joinDate);
     "
     ;
         $fire = mysqli_query($con,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['monthName']."',".$result['totalMembers']."],";
          }

         ?>
        ]);

        var options = {
          title: 'TOTAL NEW MEMBERS IN EACH MONTH',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="donutchart" style="width: 900px; height: 500px;"></div>
  </body>
</html>
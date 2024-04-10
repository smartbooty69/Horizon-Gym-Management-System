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
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['memberGender', 'total_count'],
         <?php
         $sql = "SELECT memberGender, COUNT(*) AS total_count
         FROM member_details
         WHERE memberGender IS NOT NULL AND memberGender <> ''
         GROUP BY memberGender;
         ";
         $fire = mysqli_query($con,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['memberGender']."',".$result['total_count']."],";
          }

         ?>
        ]);

        var options = {
          title: 'GENDER DISTRIBUTION'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>
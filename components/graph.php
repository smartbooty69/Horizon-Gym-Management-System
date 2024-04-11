<?php
$con = mysqli_connect("localhost", "root", "", "horizon_gym");
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
                ['Age Group', 'Total People'],
                <?php
                $sql = "SELECT CONCAT(FLOOR(memberAge / 5) * 5 + 1, ' - ', FLOOR(memberAge / 5) * 5 + 5) AS age_group,
                               COUNT(*) AS total_people
                        FROM member_details
                        WHERE memberAge BETWEEN 15 AND 70
                        GROUP BY FLOOR(memberAge / 5)
                        ORDER BY FLOOR(memberAge / 5)";
                $fire = mysqli_query($con, $sql);

                while ($result = mysqli_fetch_assoc($fire)) {
                    echo "['" . $result['age_group'] . "', " . $result['total_people'] . "],";
                }
                ?>
            ]);

            var options = {
                title: 'Age Distribution',
                legend: { position: 'none' },
                chartArea: { width: '80%', height: '70%' }
            };

            var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>
</head>
<body>
    <div id="chart_div" style="width: 100%; height: 100%;"></div>
</body>
</html>

<?php
mysqli_close($con);
?>

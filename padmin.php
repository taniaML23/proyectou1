
<html>
    
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Lunes',     2],
          ['Martes',      2],
          ['Miercoles',  2],
          ['Viernes', 7],
          ['Sábado',    10],
          ['Domingo',    8]
        ]);

        var options = {
          title: 'Dias frecuentes en que se rentan los salones de eventos',
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


  <div class="bg-light p-5 rounded mt-3">
    <a class="btn btn-lg btn-primary" href="index.php" role="button">Salir &raquo;</a>
  </div>

</html>
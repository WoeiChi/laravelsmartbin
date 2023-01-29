@extends('master')
@section('content')

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          //['Date', 'Paper', 'Plastic', 'Metal', 'Others'],
          ['Compartment', 'Remaining Capacity'],
          <?php 
          foreach($data as $item){
            echo $item; 
          }
          ?>
          
        ]);

        var options = {
          title : 'Daily Recycle Rate',
          vAxis: {title: 'Recyle Bin Remaining Capacity'},
          hAxis: {title: 'Compartment'},
          seriesType: 'bars',
          series: {5: {type: 'line'}}
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="chart_div" style="width: 900px; height: 500px;"></div>
  </body>
</html>

@endsection

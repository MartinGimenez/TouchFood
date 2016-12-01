@extends('admin.template.main')

@section('content')

<body>
    <div class="row">
        <div class="card">    
            <div class="container white darken-3">
                <div class="content center white darken-3">
                <h5 class="red-text">Tu comida a un toque</h5>
                <div class="stroke-custom">touch<b>food</b></div>
       <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Pedidos", { role: "style" } ],
        ["Comidas", {{$comidas}}, "#b87333"],
        ["Bebidas", {{$bebidas}}, "silver"],
        ["Postres", {{$postres}}, "gold"],
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Pedidos",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
<div id="columnchart_values" style="width: 900px; height: 300px;"></div>
                <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Mesas', 'Disponibilidad'],
          ['Disponibles', {{ $disponibles }}],
          ['Ocupadas',     {{ $ocupadas }}],
        ]);

        var options = {
          title: 'Reporte de mesas',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 600px; height: 200px;"></div>
  </body>
</html>

                <style type="text/css"> 
                    .stroke-custom {
                    color: red;
                    font-family: Calibri;
                    font-size: 80px;
                    }

                <style type="text/css"> 
                    .stroke1 {
                    color: red;
                    font-family: Calibri;
                    font-size: 20px;
                    }   
                </style>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection
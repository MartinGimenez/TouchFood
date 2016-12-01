@extends('admin.template.main')

@section('content')


  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    google.charts.setOnLoadCallback(drawChart1);
    google.charts.setOnLoadCallback(drawChart2);
    
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
        //width: 600,
        //height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }


      function drawChart1() {
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

      function drawChart2() {
      var data = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],
        ['Pagos', {{ $pago }}],
        ['Impagos', {{ $impago }}]
      ]);

      var options = {
        title: 'Estado Pedidos',
        pieHole: 0.4,
      };

      var chart = new google.visualization.PieChart(document.getElementById('donutchart2'));
      chart.draw(data, options);
    }

    </script>

<body>
        <div id="columnchart_values" style="width: 1000px; height: 400px;"></div>
<!--         //<a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a> -->

        <div class="row">
            <div class="col s12 m5">
              <div class="card red darken-1">
                <div class="card-content white-text">
                  <span class="card-title" align="center">Recaudación Diaria</span>
                  <h4 align="center">$3500</h4>
                  </span>
                </div>

              </div>
            </div>

            <div class="col s12 m5">
              <div class="card green darken-1">
                <div class="card-content white-text">
                  <span class="card-title" align="center">Recaudación Mensual</span>
                  <h4 align="center">$118.010</h4>
                </div>

              </div>
            </div>
        </div>



        <div id="donutchart2" style="width: 700px; height: 400px;"></div>
        
        <div id="piechart_3d" style="width: 700px; height: 400px;"></div>


        <style type="text/css"> 
            .stroke-custom {
            color: red;
            font-family: Calibri;
            font-size: 80px;
            }
        </style>

        <style type="text/css"> 
            .stroke1 {
            color: red;
            font-family: Calibri;
            font-size: 20px;
            }   
        </style>

        <a href="{{ route('sobre-nosotros-admin') }}" <button type="button" class="white-text waves-effect waves-light btn-large red darken-2 z-depth-3">Acerca de nosotros<i class="material-icons right">assignment_ind</i></button></a>
</body>

@endsection
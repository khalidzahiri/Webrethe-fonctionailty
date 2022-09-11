@extends('layouts.app')
@section('content')
    <p> je suis la page des modules</p>
    @if($modules->count() > 0)
        @foreach($modules as $module)
            <h2><a href="{{ route('module.show', ['id'=> $module ->id]) }}">{{ $module->name }}</a></h2>
        @endforeach
    @else
        <snap>aucun module dans la base de données</snap>
    @endif

    <html>
    <head>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Year', 'Sales', 'Expenses'],
                    ['2004',  1000,      400],
                    ['2005',  1170,      460],
                    ['2006',  660,       1120],
                    ['2007',  1030,      540]
                ]);

                var options = {
                    title: 'Company Performance',
                    curveType: 'function',
                    legend: { position: 'bottom' }
                };

                var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

                chart.draw(data, options);
            }
        </script>
    </head>
    <body>
    <div id="curve_chart" style="width: 900px; height: 500px"></div>
    </body>
    </html>

@endsection
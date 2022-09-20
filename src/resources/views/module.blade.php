{{--on herite de notre fichier layout--}}
@extends('layouts.app')

{{--le contenue de la page--}}
@section('content')
    <div class="w-full max-w-sm p-9">

        {{-- recuperation du nom de modele dans la base de données--}}
        <h1 class="m-9"><a class=" flex justify-around  m-2 shadow bg-sky-400 hover:bg-blue-500 active:bg-blue-600 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded transform hover:scale-110 motion-reduce:transform-none" href="{{ route('module.show', ['id'=> $module ->id]) }}">{{ $module->name }}</a> </h1>

        {{--cntenaire du graphique --}}
        <div class="m-auto ml-3 ">
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
                google.charts.load('current', {'packages':['line']});
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {

                    var data = new google.visualization.DataTable();
                    data.addColumn('number', 'Day');
                    data.addColumn('number', 'Number of data');
                    data.addColumn('number', 'Temperature');
                    data.addColumn('number', 'Vitesse');

                    data.addRows([
                        [1,  37.8, 80.8, 41.8],
                        [2,  30.9, 69.5, 32.4],
                        [3,  25.4,   57, 25.7],
                        [4,  11.7, 18.8, 10.5],
                        [5,  11.9, 17.6, 10.4],
                        [6,   8.8, 13.6,  7.7],
                        [7,   7.6, 12.3,  9.6],
                        [8,  12.3, 29.2, 10.6],
                        [9,  16.9, 42.9, 14.8],
                        [10, 12.8, 30.9, 11.6],
                        [11,  5.3,  7.9,  4.7],
                        [12,  6.6,  8.4,  5.2],
                        [13,  4.8,  6.3,  3.6],
                        [14,  4.2,  6.2,  3.4]
                    ]);

                    var options = {
                        /*chart: {
                            title: 'Ici vous trouverez les donnée pour chaque Module',
                            subtitle: ''
                        },*/
                        width: 900,
                        height: 500,
                        // axes: {
                        //     x: {
                        //         0: {side: 'top'}
                        //     }
                        // }
                    };

                    var chart = new google.charts.Line(document.getElementById('line_top_x'));

                    chart.draw(data, google.charts.Line.convertOptions(options));
                }
            </script>
        </div>

        <div id="line_top_x"></div>
    </div>



@endsection
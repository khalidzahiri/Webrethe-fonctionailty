@extends('layouts.app')
@section('content')
    <div class="w-full max-w-sm">
        <div class="w-100 ml-3 m-auto">
            <p class=""> les modules disponible Sont: </p>

            {{-- boucle de recuperation des nom des models dans la base de données--}}
            <div class=" flex min-w-0 w-100 justify-items-center justify-between ml-3">
                @if($modules->count() > 0 )
                    @foreach($modules as $module)
                        <h2><a class=" flex justify-around  m-2 shadow bg-sky-400 hover:bg-blue-500 active:bg-blue-600 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded transform hover:scale-110 motion-reduce:transform-none" href="{{ route('module.show', ['id'=> $module ->id]) }}">{{ $module->name }}</a></h2>
                    @endforeach
                @else
                    <span>aucun module dans la base de données</span>
                @endif
            </div>
        </div>

        {{--cntenaire du graphique --}}
        <div class="m-auto ">
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                        ['Module', 'number of data', 'Created at'],
                        ['2004',  1000,      400],
                        ['2005',  1170,      460],
                        ['2006',  660,       1120],
                        ['2007',  1030,      540]
                    ]);

                    var options = {
                        title: 'Modules Performance',
                        curveType: 'function',
                        legend: { position: 'bottom' }
                    };

                    var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

                    chart.draw(data, options);
                }
            </script>

            <div id="curve_chart" style="width: 900px; height: 500px"></div>
        </div>

    </div>
@endsection
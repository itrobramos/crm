@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col">
        <div class="card shadow">
            <div class="card-header border-0">
                <h3 class="mb-0">Reportes</h3>
            </div>

            <div class="row">
                <div class="nav nav-tabs nav-fill" style = "width:100%;" id="nav-tab" role="tablist">
                    <a class="nav-item nav-control nav-link col-4" active" id="nav-home-tab" data-toggle="tab"
                        href="#nav-semanal" role="tab" aria-controls="nav-semanal" aria-selected="true" style="font-size:1em;">Semanal</a>
                    <a class="nav-item nav-control nav-link col-4" id="nav-mensual-tab" data-toggle="tab" href="#nav-mensual"
                        role="tab" aria-controls="nav-mensual" aria-selected="false" style="font-size:1em;">Mensual</a>
                    <a class="nav-item nav-control nav-link col-4" id="nav-anual-tab" data-toggle="tab" href="#nav-anual"
                        role="tab" aria-controls="nav-anual" aria-selected="false" style="font-size:1em;">Anual</a>
                </div>
            </div>

            <div class="tab-content row" id="nav-tabContent">

                <div class="tab-pane fade show col-10 active" id="nav-semanal" role="tabpanel" aria-labelledby="nav-semanal-tab">
                    <center><div id="weekgraph" class="col-sm-12" style="height: 250px;"></div></center>

                    <br>                    <br>                    <br>

                    <table class='table table-responsive align-items-center table-flush'>
                        <thead class="thead-light">
                            <th>Año</th>
                            <th>Semana</th>
                            <th>Ingresos</th>
                            <th>Egresos</th>
                            <th>Balance</th>
                        </thead>
                        @foreach($week_finances_tab as $item)
                        <tr>
                            <td>{{$item['year']}}</td>
                            <td>{{$item['week']}}</td>
                            <td>{{$item['ingresos']}}</td>
                            <td>{{$item['egresos']}}</td>
                            <td>{{$item['total']}}</td>
                        </tr>
                        @endforeach
                    </table>

                </div>

                <div class="tab-pane fade show col-10" id="nav-mensual" role="tabpanel" aria-labelledby="nav-mensual-tab">

                    <center><div id="monthgraph" class ="col-12" style="height: 250px;"></div></center>

                    <br>                    <br>                    <br>

                    <table class='table table-responsive align-items-center table-flush'>
                        <thead class="thead-light">
                            <th>Año</th>
                            <th>Mes</th>
                            <th>Ingresos</th>
                            <th>Egresos</th>
                            <th>Balance</th>
                        </thead>
                        @foreach($month_finances_tab as $item)
                        <tr>
                            <td>{{$item['year']}}</td>
                            <td>{{$item['month']}}</td>
                            <td>{{$item['ingresos']}}</td>
                            <td>{{$item['egresos']}}</td>
                            <td>{{$item['total']}}</td>
                        </tr>
                        @endforeach
                    </table>

                </div>

                <div class="tab-pane fade show col-10" id="nav-anual" role="tabpanel" aria-labelledby="nav-anual-tab">
                    <center><div id="anual" class ="col-10" style="height: 250px;"></div></center>


                    <table class='table table-responsive align-items-center table-flush'>
                        <thead class="thead-light">
                            <th>Año</th>
                            <th>Ingresos</th>
                            <th>Egresos</th>
                            <th>Balance</th>
                        </thead>
                        @foreach($anual_finances_tab as $item)
                        <tr>
                            <td>{{$item['year']->year}}</td>
                            <td>{{$item['ingresos']}}</td>
                            <td>{{$item['egresos']}}</td>
                            <td>{{$item['total']}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>

                <br>
            </div>

        </div>
    </div>
</div>

<script type="text/javascript">

$(".table").dataTable();

var data = [

    @foreach ($anual_finances as $finance)
    {
        y: '{{$finance->year}}'
        @if($finance->type == 'I')
            , a: {{$finance->total}}
        @else
            , b: {{$finance->total}}
        @endif,
    },
    @endforeach
    ],
    config = {
      data: data,
      xkey: 'y',
      ykeys: ['a', 'b'],
      xLabelMargin: 0,
      labels: ['Ingresos', 'Egresos'],
      fillOpacity: 0.6,
      hideHover: 'auto',
      behaveLikeLine: true,
      resize: true,
      pointFillColors:['#ffffff'],
      pointStrokeColors: ['black'],
      barColors:['#B2E882','#F43A4B']
    };
    config.element = 'anual';
    Morris.Bar(config);


    var data = [
        @foreach ($month_finances_tab as $finance)
        {
            y: '{{$finance["year"]}}-{{$finance["month"]}}',
            a: {{$finance["ingresos"]}},
            b: {{$finance["egresos"]}}
        },
        @endforeach
    ],
    config = {
    data: data,
    xkey: 'y',
    ykeys: ['a', 'b'],
    xLabelMargin: 0,
    labels: ['Ingresos', 'Egresos'],
    fillOpacity: 0.6,
    hideHover: 'auto',
    behaveLikeLine: true,
    resize: true,
    pointFillColors:['#ffffff'],
    pointStrokeColors: ['black'],
    barColors:['#B2E882','#F43A4B']
    };
    config.element = 'monthgraph';
    Morris.Bar(config);

    var data = [
        @foreach ($week_finances_tab as $finance)
        {
            y: '{{$finance["year"]}}-{{$finance["week"]}}',
            a: {{$finance["ingresos"]}},
            b: {{$finance["egresos"]}}
        },
        @endforeach
    ],
    config = {
    data: data,
    xkey: 'y',
    ykeys: ['a', 'b'],
    xLabelMargin: 0,
    labels: ['Ingresos', 'Egresos'],
    fillOpacity: 0.6,
    hideHover: 'auto',
    behaveLikeLine: true,
    resize: true,
    pointFillColors:['#ffffff'],
    pointStrokeColors: ['black'],
    barColors:['#B2E882','#F43A4B']
    };
    config.element = 'weekgraph';
    Morris.Bar(config);



</script>


@endsection


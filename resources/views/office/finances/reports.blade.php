@extends('layouts.app')



@section('content')



<div class="row">
    <div class="col">
        <div class="card shadow">
            <div class="card-header border-0">
                <h3 class="mb-0">Reportes</h3>
            </div>

            <nav>
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <a class="nav-item nav-control nav-link active" id="nav-home-tab" data-toggle="tab"
                        href="#nav-semanal" role="tab" aria-controls="nav-semanal" aria-selected="true">Semanal</a>
                    <a class="nav-item nav-control nav-link" id="nav-mensual-tab" data-toggle="tab" href="#nav-mensual"
                        role="tab" aria-controls="nav-mensual" aria-selected="false">Mensual</a>
                    <a class="nav-item nav-control nav-link" id="nav-anual-tab" data-toggle="tab" href="#nav-anual"
                        role="tab" aria-controls="nav-anual" aria-selected="false">Anual</a>
                </div>
            </nav>

            <div class="tab-content" id="nav-tabContent">

                <div class="tab-pane fade show active" id="nav-semanal" role="tabpanel"
                    aria-labelledby="nav-semanal-tab">
                </div>

                <div class="tab-pane fade show" id="nav-mensual" role="tabpanel"
                    aria-labelledby="nav-mensual-tab">
                </div>

                <div class="tab-pane fade show" id="nav-anual" role="tabpanel" aria-labelledby="nav-anual-tab">
                    <center><div id="anual" style="height: 250px; width:400px;"></div></center>

                    <br>
                    
                    <table class='table align-items-center table-flush'>
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
      labels: ['Ingresos', 'Egresos'],
      fillOpacity: 0.6,
      hideHover: 'auto',
      behaveLikeLine: true,
      resize: true,
      pointFillColors:['#ffffff'],
      pointStrokeColors: ['black'],
      lineColors:['green','red']
  };
config.element = 'anual';
Morris.Line(config);
</script>


@endsection


@extends('adminlte::page')

@section('title', 'Dashboard')
@section('content_header')

<h1></h1>
@stop
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <b>Horario de Clases</b>
    </div>
    <div class="card-body">
        <table class="cal">
            <thead>
                <tr>
                    <th></th>
                    <th>Lun</th>
                    <th>Mar</th>
                    <th>Mié</th>
                    <th>Jue</th>
                    <th>Vie</th>

                </tr>

            </thead>
            
            <tbody>
            
                <tr>
                    <td class="horas">8:30 a 9:25 </td>
                    @foreach($schedule as $hora)
                    @if($hora->day=="Monday" && $hora->entry >= '08:00:00' && $hora->departure <= '10:00:00')
                    <td>{{$hora->namesub}}</td>
                    @elseif($hora->day=="Thuesday"&& $hora->entry >= '08:00:00' && $hora->departure <= '10:00:00')
                    <td class="">{{$hora->namesub}}</td>
                    @elseif($hora->day=="Wednesday" && $hora->entry >= '08:00:00' && $hora->departure <= '10:00:00')
                    <td class="">{{$hora->namesub}}</td>
                    @elseif($hora->day=="Thursday" && $hora->entry >= '08:00:00' && $hora->departure <= '10:00:00')
                    <td class="">{{$hora->namesub}}</td>
                    @elseif($hora->day=="Friday" && $hora->entry >= '08:00:00' && $hora->departure <= '10:00:00')
                    <td class="">{{$hora->namesub}}</td>
                    @else
                    <td></td>
                    @endif
                    @endforeach
                </tr>

                <tr>
                    <td class="horas">9:25 a 10:20 </td>
                    @foreach($schedule as $hora)
                    @if($hora->day=="Monday" && $hora->entry >= '10:00:00' && $hora->departure <= '12:00:00')
                    <td>{{$hora->namesub}}</td>
                    @elseif($hora->day=="Thuesday"&& $hora->entry >= '10:00:00' && $hora->departure <= '12:00:00')
                    <td class="">{{$hora->namesub}}</td>
                    @elseif($hora->day=="Wednesday" && $hora->entry >= '10:00:00' && $hora->departure <= '12:00:00')
                    <td class="">{{$hora->namesub}}</td>
                    @elseif($hora->day=="Thursday" && $hora->entry >= '10:00:00' && $hora->departure <= '12:00:00')
                    <td class="">{{$hora->namesub}}</td>
                    @elseif($hora->day=="Friday" && $hora->entry >= '10:00:00' && $hora->departure <= '12:00:00')
                    <td class="">{{$hora->namesub}}</td>
                    @else
                    <td></td>
                    @endif
                    @endforeach
                </tr>
                <tr>
                    <td class="horas">10:20 a 11:10 </td>
                    @foreach($schedule as $hora)
                    @if($hora->day=="Monday" && $hora->entry >= '14:00:00' && $hora->departure <= '16:00:00')
                    <td>{{$hora->namesub}}</td>
                    @elseif($hora->day=="Thuesday"&& $hora->entry >= '14:00:00' && $hora->departure <= '16:00:00')
                    <td class="">{{$hora->namesub}}</td>
                    @elseif($hora->day=="Wednesday" && $hora->entry >= '14:00:00' && $hora->departure <= '16:00:00')
                    <td class="">{{$hora->namesub}}</td>
                    @elseif($hora->day=="Thursday" && $hora->entry >= '14:00:00' && $hora->departure <= '16:00:00')
                    <td class="">{{$hora->namesub}}</td>
                    @elseif($hora->day=="Friday" && $hora->entry >= '14:00:00' && $hora->departure <= '16:00:00')
                    <td class="">{{$hora->namesub}}</td>
                    @else
                    <td></td>
                    @endif
                    @endforeach
                </tr>
                <tr>
                    <td class="horas">11:10 a 11:35 </td>
                    <td class="recreo">Recreo </td>
                    <td class="recreo">Recreo </td>
                    <td class="recreo">Recreo </td>
                    <td class="recreo">Recreo </td>
                    <td class="recreo">Recreo </td>

                <tr>
                    <td class="horas">11:35 a 12:30 </td>
                    @foreach($schedule as $hora)
                    @if($hora->day=="Monday" && $hora->entry >= '16:00:00' && $hora->departure <= '18:00:00')
                    <td>{{$hora->namesub}}</td>
                    @elseif($hora->day=="Thuesday"&& $hora->entry >= '16:00:00' && $hora->departure <= '18:00:00')
                    <td class="">{{$hora->namesub}}</td>
                    @elseif($hora->day=="Wednesday" && $hora->entry >= '16:00:00' && $hora->departure <= '18:00:00')
                    <td class="">{{$hora->namesub}}</td>
                    @elseif($hora->day=="Thursday" && $hora->entry >= '16:00:00' && $hora->departure <= '18:00:00')
                    <td class="">{{$hora->namesub}}</td>
                    @elseif($hora->day=="Friday" && $hora->entry >= '16:00:00' && $hora->departure <= '18:00:00')
                    <td class="">{{$hora->namesub}}</td>
                    @else
                    <td></td>
                    @endif
                    @endforeach
                </tr>

                <tr>
                    <td class="horas">12:30 a 13:25 </td>
                    <td class=""> </td>
                    <td class="">  </td>
                    <td class=""> </td>
                    <td class="">  </td>
                    <td class=""> </td>
                </tr>
                <tr>
                    <td class="horas">13:25 a 14:15</td>
                    <td class=""> </td>
                    <td class="">  </td>
                    <td class=""> </td>
                    <td class=""> </td>
                    <td class="">  </td>

                </tr>
                
            </tbody>
        </table>
    </div>
</div>


@stop
@section('css')
<style>
    table.cal {
        display: inline-block;
        min-height: 600px;
        width: 97%;
        color: #06425c;
        border-spacing: 0;
        border: 1px solid grey;
        border-radius: 20px 20px 20px 20px;
        padding: 2%;
        margin: 2%;
    }

    thead>tr>th {
        background-color: #29a6F6;
        border: 1px solid white;
        border-radius: 10px;
        height: 50px;
        text-align: center;
        vertical-align: center;
        font-size: 25px;
        margin: 1%;
        padding: 1%;
    }

    tr:nth-child(odd) {

        border-radius: 10px 10px 10px 10px;
        padding: 1%;
        margin: 1%;
    }

    tr:nth-child(even) {
        border-radius: 10px 10px 10px 10px;
        padding: 1%;
        margin: 1%;
    }

    tr:last-child {
        border-radius: 0 0 10px 10px;
        padding: 1%;
        margin: 1%;
    }

    tr:last-child>td:first-child {
        border-radius: 10px;
        padding: 1%;
        margin: 1%;
    }

    tr:last-child>td:last-child {
        padding: 1%;
        margin: 1%;
        border-radius: 10px;
    }

    table.cal>tbody>th,
    td {
        display: in-line;
        width: 10%;
        margin: 2%;
        padding: 2%;
        height: 60px;
        border: 2px outset white;
        vertical-align: top;

        text-align: center;
        border-radius: 10px;
    }

    th {
        text-align: center;
        background: #ffffff;
        border: 2px outset grey;
    }

    .horas {
        margin: 0;
        padding: 0;
        background-color: #FFD180;
    }
</style>
@stop
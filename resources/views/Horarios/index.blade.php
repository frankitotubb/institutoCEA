@extends('layouts.principal')

@section('content')
<div class="card-header">
                <h3 class="card-title">
                <i class="fas fa-clock mr-1"></i>
                GESTIONAR HORARIO    
                </h3>
                <div class="float-right d-sm-block"> 
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                        <a href="{{url('mispedidos/create')}}" class="btn btn-success"><i class="fa fa-plus"></i>&nbsp; Agregar</a>
                    </div> 
                </div>
</div><!-- /.card-header -->
<div class="content">
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Hora Inicio</th>
            <th>Hora Fin</th>
            <th>Turno</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody>
        @foreach($horarios as $horario)
        <tr>
            <td>{{ $horario->id }}</td>
            <td>{{ $horario->horainicio }}</td>
            <td>{{ $horario->horafin }}</td>
            <td>{{ $horario->turno }}</td>
            <td>{{ $horario->estado }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

</div>
@endsection
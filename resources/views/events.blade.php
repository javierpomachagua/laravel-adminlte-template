@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Eventos</h1>
@stop

@section('content')
    <x-adminlte-card title="Lista de Eventos">
        <div class="card-body">
            <x-adminlte-datatable id="table1" :heads="$heads" striped head-theme="dark" with-buttons>
                @foreach($events as $event)
                    <tr>
                        <td>{{ $event->id }}</td>
                        <td>{{ $event->name }}</td>
                        <td>{{ $event->description }}</td>
                        <td>{{ $event->status }}</td>
                        <td>{{ $event->type }}</td>
                        <td>{{ $event->date }}</td>
                    </tr>
                @endforeach
            </x-adminlte-datatable>
        </div>
    </x-adminlte-card>
@endsection

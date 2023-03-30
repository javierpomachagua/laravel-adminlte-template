@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Registrar Evento</h1>
@endsection

@section('content')
    <div>
        <div class="row">
            <x-adminlte-input name="name" label="Nombre" placeholder="Nombre del evento"
                              fgroup-class="col-md-6"/>
        </div>
        <div class="row">
            <x-adminlte-textarea name="description" label="Descripción" placeholder="Descripción del evento"
                                 fgroup-class="col-md-6"/>
        </div>
        <div class="row">
            <x-adminlte-select name="status" label="Estado" fgroup-class="col-md-6">
                <x-slot name="prependSlot">
                    <div class="input-group-text bg-gradient-info">
                        <i class="fas fa-building"></i>
                    </div>
                </x-slot>
                <option>Seleccione</option>
                <option>Borrador</option>
                <option>Publicado</option>
            </x-adminlte-select>
        </div>
        <div class="row">
            <x-adminlte-select2 name="type" label="Tipo"
                                data-placeholder="Seleccione" fgroup-class="col-md-6">
                <x-slot name="prependSlot">
                    <div class="input-group-text bg-gradient-info">
                        <i class="fas fa-building"></i>
                    </div>
                </x-slot>
                <option value=""></option>
                <option>Concierto</option>
                <option>Fútbol</option>
                <option>Teatro</option>
                <option>Standup Comedy</option>
                <option>Festival</option>
                <option>Museo</option>

            </x-adminlte-select2>

        </div>
        <div class="row">
            @php
                $config = ['format' => 'YYYY-MM-DD'];
            @endphp
            <x-adminlte-input-date name="date" label="Fecha" :config="$config" placeholder="Seleccione"
                                   fgroup-class="col-md-6">
                <x-slot name="prependSlot">
                    <div class="input-group-text bg-gradient-info">
                        <i class="fas fa-calendar"></i>
                    </div>
                </x-slot>
            </x-adminlte-input-date>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <x-adminlte-button label="Registrar" theme="primary" icon="fas fa-save"/>
            </div>

        </div>
    </div>
@endsection

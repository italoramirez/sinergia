@extends('layouts.app')



@section('content')



@if ('session')

@endif

<div class="container">

    <div class="mb-3 d-flex justify-content-end">
        <a href="{{ route('paciente.create') }}" class="btn btn-primary">Registrar</a>
    </div>
    @if (session('estado'))
        <div class="alert alert-success text-center">
            ¡Registro creado correctamente!
        </div>
    @endif
    @if (session('actualizado'))
        <div class="alert alert-success text-center">
            ¡Registro actualizado correctamente!
        </div>
    @endif


    <table id="pacientes" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Tipo Documento</th>
                <th>Documento</th>
                <th>Departamento</th>
                <th>Municipio</th>
                <th>Genero</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($paciente as $key => $pacientes)

                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $pacientes->nombre }} {{ $pacientes->nombre2 }}</td>
                    <td>{{ $pacientes->apellido1 }} {{ $pacientes->apellido2 }}</td>
                    <td>{{ $pacientes->documento->nombre }}</td>
                    <td>{{ $pacientes->numero_documento }}</td>
                    <td>{{ $pacientes->departamento->nombre }}</td>
                    <td>{{ $pacientes->municipio->nombre }}</td>
                    <td>{{ $pacientes->genero->nombre }}</td>
                    <td>
                        <a class="btn btn-info d-block w-100 mb-2" href="{{ route('paciente.edit', ['paciente' => $pacientes->id]) }}">Editar</a>

                        <eliminar-paciente
                        paciente-id = {{ $pacientes->id }}
                        >
                           
                        </eliminar-paciente>

                        {{-- <form action="{{ route('paciente.destroy', ['paciente' => $pacientes->id]) }}" method="POST">
                            @csrf
                            @method('delete')
                            <input type="submit" class="d-block w-100 btn btn-danger" value="Eliminar &times;">
                        </form> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection
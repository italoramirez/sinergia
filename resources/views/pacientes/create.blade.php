@extends('layouts.app')

@section('content')
<!-- general form elements -->
<div class="row">
    <div class="col-md-4"></div>

    <div class="card card-primary col-md-4">
        <div class="">
            <h3 class="d-flex justify-content-center pt-3 card-title">Registro de Pacientes</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="{{ route('paciente.store') }}" novalidate>
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="tipo_documento">Tipo Documento</label>
                    <select class="form-control select2" style="width: 100%;" name="tipo_documento">
                        <option disabled selected>-- Seleccione --</option>
                        @foreach($tipo_documento as $key => $documento)
                        <option {{ old('tipo_documento') == $documento->id ? 'selected' : '' }}
                            value="{{ $documento->id }}">
                            {{ $documento->nombre }}
                        </option>
                        @endforeach
                    </select>

                    @error('tipo_documento')
                    <div class="alert alert-danger">
                        <strong class="font-bold">¡Error!</strong>
                        <p class="block">{{ $message }}</p>
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="documento">Documento</label>
                    <input type="text" name="documento" class="form-control" id="documento"
                        placeholder="Ingrese Documento">
                    @error('documento')
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded
                                relative mt-3 mb-6" role="alert">
                        <strong class="font-bold">¡Error!</strong>
                        <p class="block">{{ $message }}</p>
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nombre">Primer Nombre</label>
                    <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Ingrese Nombre">
                    @error('nombre')
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded
                                relative mt-3 mb-6" role="alert">
                        <strong class="font-bold">¡Error!</strong>
                        <p class="block">{{ $message }}</p>
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nombre2">Segundo Nombre</label>
                    <input type="text" class="form-control" id="nombre2" placeholder="Ingrese Segundo Nombre">
                    @error('nombre2')
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded
                                relative mt-3 mb-6" role="alert">
                        <strong class="font-bold">¡Error!</strong>
                        <p class="block">{{ $message }}</p>
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="apellido1">Apellido</label>
                    <input type="text" class="form-control" id="apellido1" placeholder="Ingrese Apellido" name="apellido">
                    @error('apellido1')
                    <div class="alert alert-danger" role="alert">
                        <strong class="font-bold">¡Error!</strong>
                        <p class="block">{{ $message }}</p>
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="apellido2">Segundo Apellido</label>
                    <input type="text" class="form-control" id="apellido2" placeholder="Ingrese Segundo Apellido" name="apellido2">
                    @error('apellido2')
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded
                                relative mt-3 mb-6" role="alert">
                        <strong class="font-bold">¡Error!</strong>
                        <p class="block">{{ $message }}</p>
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="genero">Género</label>
                    <select class="form-control select2" style="width: 100%;" name="genero">
                        <option disabled selected>-- Seleccione --</option>
                        @foreach($genero as $key => $generos)
                        <option {{ old('genero') == $generos->id ? 'selected' : '' }} value="{{ $generos->id }}">
                            {{ $generos->nombre }}
                        </option>
                        @endforeach
                    </select>
                    @error('genero')
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded
                                relative mt-3 mb-6" role="alert">
                        <strong class="font-bold">¡Error!</strong>
                        <p class="block">{{ $message }}</p>
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="departamento">Departamento</label>
                    <select class="form-control select2" style="width: 100%;" name="departamento">
                        <option disabled selected>-- Seleccione --</option>
                        @foreach($departamento as $key => $departamentos)
                        <option {{ old('genero') == $generos->id ? 'selected' : '' }} value="{{ $departamentos->id }}">
                            {{ $departamentos->nombre }}
                        </option>
                        @endforeach
                    </select>
                    @error('departamento')
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded
                                relative mt-3 mb-6" role="alert">
                        <strong class="font-bold">¡Error!</strong>
                        <p class="block">{{ $message }}</p>
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="munuicipio">Municipio</label>
                    <select class="form-control select2" style="width: 100%;" name="munuicipio">
                        <option disabled selected>-- Seleccione --</option>
                        @foreach($municipio as $key => $municipios)
                        <option {{ old('departamento') == $municipios->id ? 'selected' : '' }}
                            value="{{ $municipios->id }}">
                            {{ $municipios->nombre }}
                        </option>
                        @endforeach
                    </select>
                    @error('departamento')
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded
                                relative mt-3 mb-6" role="alert">
                        <strong class="font-bold">¡Error!</strong>
                        <p class="block">{{ $message }}</p>
                    </div>
                    @enderror
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Registrar</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
    <div class="col-md-4"></div>
</div>
@endsection
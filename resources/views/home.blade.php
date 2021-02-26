@extends('layouts.app')

@section('style')

<link rel="stylesheet" href="https://code.jquery.com/jquery-3.5.1.js">
<link rel="stylesheet" href=https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js">
@endsection

@section('content')

<div class="container">

    <div class="mb-3 d-flex justify-content-end">
        <a href="{{ route('paciente.create') }}" class="btn btn-primary">Registar</a>
    </div>
    
    <table id="pacientes" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Nombres</th>
                <th>Tipo Documento</th>
                <th>Apellidos</th>
                <th>Genero</th>
                <th>Departamento</th>
                <th>Municipio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
                <td>
                    <a class="btn btn-info"><i class="text-white fas fa-pencil-alt"></i></a>
                    <a class="btn btn-danger"><i class="fas fa-trash-alt"></i></i></a>
                </td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td><td>
                    <a class="btn btn-info"><i class="text-white fas fa-pencil-alt"></i></a>
                    <a class="btn btn-danger"><i class="fas fa-trash-alt"></i></i></a>
                </td>
            </tr>
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
                <td>
                    <a class="btn btn-info"><i class="text-white fas fa-pencil-alt"></i></a>
                    <a class="btn btn-danger"><i class="fas fa-trash-alt"></i></i></a>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>

</div>


<script>

</script>
@endsection

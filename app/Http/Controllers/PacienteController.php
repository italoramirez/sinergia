<?php

namespace App\Http\Controllers;

use App\Departamento;
use App\Genero;
use App\Municipio;
use App\TipoDocumento;

use App\Paciente;
use Faker\Provider\sv_SE\Municipality;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Builder\Param;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paciente = Paciente::with('departamento', 'municipio', 'documento', 'genero')->get();
        
        return view('pacientes.index', compact('paciente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tipo_documento = TipoDocumento::all(['id','nombre']);
        $genero = Genero::all(['id','nombre']);
        $departamento = Departamento::all(['id','nombre']);
        $municipio = Municipio::all(['id','nombre']);

       return view('pacientes.create', compact('tipo_documento', 'genero', 'departamento', 'municipio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $data = $request->validate([
            'documento' => 'required|min:5',
            'tipo_documento_id' => 'required',
            'nombre' => 'required',
            'nombre2' => '',
            'apellido1' => 'required',
            'apellido2' => '',
            'genero_id' => 'required',
            'departamento_id' => 'required',
            'municipio_id' => 'required',
        ]);
        Paciente::createPaciente($data);
        return redirect()->route('paciente.index')->with('estado', 'Paciente almacedado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit(Paciente $paciente)
    {
        // $paciente = Paciente::all('id', 'numero_documento', 'nombre', 'nombre2', 'apellido1', 'apellido2', 'departamento_id', 'municipio_id');
        $tipo_documento = TipoDocumento::all(['id','nombre']);
        $genero = Genero::all(['id','nombre']);
        $departamento = Departamento::all(['id','nombre']);
        $municipio = Municipio::all(['id','nombre']);

       return view('pacientes.edit', compact('paciente', 'tipo_documento', 'genero', 'departamento', 'municipio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paciente $paciente)
    {
        
        // return $request;
        $data = $request->validate([
            'documento' => 'required|min:5',
            'tipo_documento_id' => 'required',
            'nombre' => 'required|min:5',
            'nombre2' => '',
            'apellido1' => 'required',
            'apellido2' => '',
            'genero_id' => 'required',
            'departamento_id' => 'required',
            'municipio_id' => 'required',
        ]);
        
        $paciente->numero_documento = $data['documento'];
        $paciente->tipo_documento_id = $data['tipo_documento_id'];
        $paciente->nombre = $data['nombre'];
        $paciente->nombre2 = $data['nombre2'];
        $paciente->apellido1 = $data['apellido1'];
        $paciente->apellido2 = $data['apellido2'];
        $paciente->genero_id = $data['genero_id'];
        $paciente->departamento_id = $data['departamento_id'];
        $paciente->municipio_id = $data['municipio_id'];

        $paciente->save();


        // Paciente::createPaciente($data);
        return redirect()->route('paciente.index')->with('actualizado', 'Paciente almacedado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente)
    {
        
        $paciente->delete();
        return redirect()->route('paciente.index')->with('estado', 'Paciente almacedado correctamente');
    }
}

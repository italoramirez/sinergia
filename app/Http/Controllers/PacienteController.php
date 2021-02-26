<?php

namespace App\Http\Controllers;

use App\Departamento;
use App\Genero;
use App\Municipio;
use App\TipoDocumento;

use App\Paciente;
use Faker\Provider\sv_SE\Municipality;
use Illuminate\Http\Request;
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
        //
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
        return $request;
        $data = $request->validate([
            'tipo_documento' => 'required|exists:App\TipoDocumento,id',
            'documento' => 'required|min:5',
            'nombre' => 'required|min:5',
            'nombre2' => '',
            'apellido' => 'required',
            'apellido2' => '',
            'genero' => 'required',
            'departamento' => 'required',
            'munuicipio' => 'required',
        ]);


        DB::insert('insert into ');
        // $paciente = new Paciente($data);
        // $paciente->save();

        // auth()->user()->paciente()->create([
        //     'tipo_documento' => $data['ipo_documento'],
        //     'documento' => $data['documento'],
        //     'nombre' => $data['nombre'],
        //     'nombre2' => $data['nombre2'],
        //     'apellido' => $data['apellido'],
        //     'apellido2' => $data['apellido2'],
        //     'genero' => $data['genero'],
        //     'departamento' => $data['departamento'],
        //     'munuicipio' => $data['munuicipio'],
        // ]);

        return redirect()->route('home');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente)
    {
        //
    }
}

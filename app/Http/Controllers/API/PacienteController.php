<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\admin\Paciente;
use App\Http\Controllers\Controller;
use App\Http\Resources\PacienteResource;
use App\Http\Resources\PacienteCollection;
use App\Http\Requests\admin\crearPacienteRequest;
use App\Http\Requests\admin\ActualizarPacienteRequest;

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
        // return PacienteResource::collection(Paciente::all()); //anterior|
        // $pacientes = Paciente::get();
        $pacientes = Paciente::paginate(10);
        return new PacienteCollection($pacientes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(crearPacienteRequest $request)
    {
        //
        // Paciente::create($request->all());
        // return response()->json(['res' => 'true', 'msg' => 'Registro con éxito'], 200);
        return (new PacienteResource(Paciente::create($request->all())))->additional(['msg' => 'Paciente registrado correctamente']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {
        //
        // return response()->json(['res' => true, 'Paciente' => $paciente], 200);
        return (new PacienteResource($paciente))->additional(['msg' => 'Paciente seleccionado correctamente']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admin\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(ActualizarPacienteRequest $request, Paciente $paciente)
    {
        //
        $paciente->update($request->all());
        // return response()->json(['res' => true, 'mensaje' => 'Actualizado con éxito'], 200);
        return (new PacienteResource($paciente))->additional(['msg' => 'Paciente actualizado correctamente'])->response()->setStatusCode(202);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente)
    {
        //
        $paciente->delete();
        // return response()->json(['res' => true, 'mensaje' => 'Eliminado con éxito'], 200);
        return (new PacienteResource($paciente))->additional(['msg' => 'Paciente eliminado correctamente']);
    }
}

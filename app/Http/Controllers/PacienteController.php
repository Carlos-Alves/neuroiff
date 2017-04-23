<?php

namespace Neuroiff\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Neuroiff\Http\Requests\PacienteRequest;
use Neuroiff\Paciente;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Paciente::query()->paginate(10);
        return view('neuroiff.pacientes.index', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('neuroiff.pacientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PacienteRequest $request)
    {
        Paciente::create($request->all());
        return redirect()->route('neuroiff.pacientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {
        return view('neuroiff.pacientes.show', compact('paciente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Paciente $paciente
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit(Paciente $paciente)
    {
        return view('neuroiff.pacientes.edit', compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Paciente $paciente
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(PacienteRequest $request, Paciente $paciente)
    {
        $paciente->fill($request->all());
        $id = $paciente->save();
        //$id = $paciente->save();
        return redirect()->route('neuroiff.pacientes.show', ['paciente' =>$paciente->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente)
    {
        $paciente->delete();
        return redirect()->route('neuroiff.pacientes.index');
    }


}

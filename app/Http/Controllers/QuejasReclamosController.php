<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuejaReclamo;

class QuejasReclamosController extends Controller
{
    public function index()
    {
        $quejasReclamos = QuejaReclamo::paginate();
        return view('quejas_reclamos.index', compact('quejasReclamos'))
            ->with('i', (request()->input('page', 1) - 1) * $quejasReclamos->perPage());
    }

    public function create()
    {
        return view('quejas_reclamos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'correo' => 'required|email',
            'mensaje' => 'required',
        ]);

        QuejaReclamo::create([
            'nombre' => $request->nombre,
            'correo' => $request->correo,
            'mensaje' => $request->mensaje,
        ]);

        return redirect()->route('quejas_reclamos.index')->with('success', 'Queja o reclamo enviado correctamente.');
    }

    public function show(string $id)
    {
        //aqui el codigo
    }

    public function edit(string $id)
    {
        $quejaReclamo = QuejaReclamo::findOrFail($id);
        return view('quejas_reclamos.edit', compact('quejaReclamo'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required',
            'correo' => 'required|email',
            'mensaje' => 'required',
        ]);

        $quejaReclamo = QuejaReclamo::findOrFail($id);
        $quejaReclamo->update([
            'nombre' => $request->nombre,
            'correo' => $request->correo,
            'mensaje' => $request->mensaje,
        ]);

        return redirect()->route('quejas_reclamos.index')->with('success', 'Queja o reclamo actualizado correctamente.');
    }

    public function destroy(string $id)
    {
        QuejaReclamo::destroy($id);
        return redirect()->route('quejas_reclamos.index')->with('success', 'Queja o reclamo eliminado correctamente.');
    }
}

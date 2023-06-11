<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //    
        $productos = Producto::paginate();
        return view('producto.index', compact('productos'))
        ->with('i', (request()->input('page', 1)-1)* $productos->perPage());
    }
    
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $productos = Producto::all();
        return view('producto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //recepcionar todos los datos
        $productoData = request()->except("_token");
        Producto::insert($productoData);
        return redirect()->route('producto.index');                
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        //recuperar los datos
        $producto=Producto::findOrFail($id);
        $productos=Producto::all();
        return view('producto.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $productoData=request()->except(['_token', '_method']);
        Producto::where('id', '=', $id)->update($productoData);
        return redirect('producto');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Producto::destroy($id);
        return redirect('producto');
    }
}

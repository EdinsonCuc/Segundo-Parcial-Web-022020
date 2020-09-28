<?php

namespace App\Http\Controllers;

use App\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['productos']=productos::paginate(5);        
        return view('productos.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $campos=[
            'Codigo'=>'required|string|max:100',
            'Descripcion'=>'required|string|max:100',
            'Precio_compra'=>'required|string|max:100',
            'Precio_venta'=>'required|string|max:100',
            'Ganancia'=>'required|string|max:100',
            'Existencia'=>'required|string|max:100'
        ];
        $Mensaje=["required"=>'El :attribute es requerido'];
        $this->validate($request,$campos,$Mensaje);
        
       //$datosProductos=request()->all();
       
       $datosProductos=request()->except('_token');
       
       productos::insert($datosProductos);
       
       //return response()->json($datosProductos);
       return redirect('productos')->with('Mensaje','Producto agregado con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(Productos $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $productos=productos::findOrFail($id);

        return view('productos.edit',compact('productos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $campos=[
            'Codigo'=>'required|string|max:100',
            'Descripcion'=>'required|string|max:100',
            'Precio_compra'=>'required|string|max:100',
            'Precio_venta'=>'required|string|max:100',
            'Ganancia'=>'required|string|max:100',
            'Existencia'=>'required|string|max:100'
        ];
        $Mensaje=["required"=>'El :attribute es requerido'];
        $this->validate($request,$campos,$Mensaje);


        $datosProductos=request()->except(['_token','_method']);
        productos::where('id','=',$id)->update($datosProductos);
       
        //$productos=productos::findOrFail($id);
        //return view('productos.edit',compact('productos'));

        return redirect('productos')->with('Mensaje','Producto modificado con Exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        productos::destroy($id);
        return redirect('productos')->with('Mensaje','Producto eliminado con Exito');
    }
}

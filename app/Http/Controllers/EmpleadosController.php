<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Empleado;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $empleados = DB::table('empleados')->select('empleados.id', 'empleados.nombre as empleado_nombre', 'apellidos', 'empleados.correo', 'telefono','companies.nombre')->leftJoin('companies', 'empleados.company_id', '=', 'companies.id')->simplePaginate(10);
        return view('empleados.index',['empleados'=>$empleados]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companias = DB::table('companies')->get();
        //
        $user=Auth::user();
        return view('empleados.create',['user'=>$user,'title'=>'Agregar empleado','companias'=>$companias]);
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
        $this->validate($request,[ 'nombre'=>'required', 'apellidos'=>'required', 'company_id'=>'required']);
        Empleado::create($request->all());
        return redirect()->route('empleados.index')->with('success','Registro creado satisfactoriamente');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $companias = DB::table('companies')->get();
        //
        $empleado=empleado::find($id);
        return view('empleados.edit',['empleado'=>$empleado,'companias'=>$companias]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[ 'nombre'=>'required', 'apellidos'=>'required', 'company_id'=>'required']);

        empleado::find($id)->update($request->all());
        return redirect()->route('empleados.index')->with('success','Registro actualizado satisfactoriamente');
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Empleado::find($id)->delete();
        return redirect()->route('empleados.index')->with('success','Registro eliminado satisfactoriamente');
    }
}

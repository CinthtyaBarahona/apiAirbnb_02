<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\GuardarServLugarRequest;
use App\Http\Requests\ActualizarServLugaresRequest;
use App\Http\Resources\ServLugaresResource;

use App\Models\ServLugar;

class ServLugaresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ServLugaresResource::collection(ServLugar::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarServLugarRequest $request)
    {
        /*Cliente::create($request->all());
        return response()->json([
            'res'=> true,
            'msg'=>'Cliente guardado correctamente'
        ], 200);*/

        return (new ServLugaresResource(ServLugar::create($request->all())))
        ->additional(['msg' => 'Servicio por lugar registrado correctamente']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ServLugar $servlugar)
    {
        /*return response()->json([
            'res' => true,
            'cliente' => $cliente
        ], 200);*/

        return new ServLugaresResource($servlugar);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ActualizarServLugarRequest $request, ServLugar $servlugar)
    {
        /*$cliente->update($request->all());
        return response()->json([
            'res' => true,
            'msg' => 'Cliente actualizado correctamente'
        ], 200);*/
        $servlugar->update($request->all());
        return (new ServLugarResource($servlugar))
        ->additional(['msg' => 'Servicio por lugar actualizado correctamente'])
        ->response()
        ->setStatusCode(202);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServLugar $servlugar)
    {
        /*$cliente->delete();
        return response()->json([
            'res' => true,
            'msg' => 'Cliente eliminado correctamente'
        ], 200);*/
        $servlugar->delete();
        return response()->json([
            'data' => $servlugar,
            'msg' => 'Eliminado'
        ]);
    }
}

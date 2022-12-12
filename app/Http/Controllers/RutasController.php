<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\GuardarRutaRequest;
use App\Http\Requests\ActualizarRutaRequest;
use App\Http\Resources\RutaResource;
use App\Models\Ruta;

use Illuminate\Http\Request;

class RutasController extends Controller
{
    public function index()
    {
        return RutaResource::collection(Ruta::all());
    }

    public function store(GuardarRutaRequest $request)
    {
        return (new RutaResource(Ruta::create($request->all())))
        ->additional(['msg' => 'Ruta Registrada correctamente!!']);
    }

    public function show(Ruta $ruta)
    {
        return new RutaResource($ruta);
    }

    public function update(ActualizarRutaRequest $request, Ruta $ruta)
    {
        $ruta->update($request->all());
        return (new RutaResource($ruta))
        ->additional(['msg' => 'Ruta actualizada correctamente!!'])
        ->response()
        ->SetStatusCode(202);
    }

    public function destroy(Ruta $ruta)
    {
        $ruta->delete();
        return(new RutaResource($ruta))
        ->additional(['msg' => 'Ruta eliminada correctamente!!']);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public static function create(){

        return view('projects.create');
    }

    public static function store(Request $request){

        $validated = $request->validate([
            'nombreProyecto' => 'required',
            'fuenteFondos' => 'required',
            'montoPlanificado' => 'required',
            'montoPatrocinado' => 'required',
            'montoFondosPropios' => 'required',
        ]);

        Project::create([
            'nombreProyecto' => $request->nombreProyecto,
            'fuenteFondos' => $request->fuenteFondos,
            'montoPlanificado' => $request->montoPlanificado,
            'montoPatrocinado' => $request->montoPatrocinado,
            'montoFondosPropios' => $request->montoFondosPropios
        ]);

        return redirect()->route('index')->with('mensaje', 'Proyecto agregado correctamente');
    }

    public static function edit($id){
        $proyecto = Project::find($id);

        return view('projects.edit', [
            'proyecto' => $proyecto
        ]);
    }

    public static function update(Request $request, $id){
        $proyecto = Project::find($id);

        $validated = $request->validate([
            'nombreProyecto' => 'required',
            'fuenteFondos' => 'required',
            'montoPlanificado' => 'required',
            'montoPatrocinado' => 'required',
            'montoFondosPropios' => 'required',
        ]);

        Project::where('id', $id)->update([
            'nombreProyecto' => $request->nombreProyecto,
            'fuenteFondos' => $request->fuenteFondos,
            'montoPlanificado' => $request->montoPlanificado,
            'montoPatrocinado' => $request->montoPatrocinado,
            'montoFondosPropios' => $request->montoFondosPropios
        ]);

        $resultado = $proyecto->save();

        if($resultado) return redirect()->route('index')->with('mensaje', 'Proyecto actualizado correctamente');
    }


    public static function show($id){
        $proyecto = Project::find($id);

        return view('projects.show', [
            'proyecto' => $proyecto
        ]);
    }

    public static function destroy(Request $request){
        $proyecto = Project::find($request->id);

        if(!$proyecto) return redirect()->route('index')->with('mensaje', 'Error! Intentalo nuevamente');

        $resultado = $proyecto->delete();
        if($resultado) return redirect()->route('index')->with('mensaje', 'Proyecto eliminado correctamente');
    }
}

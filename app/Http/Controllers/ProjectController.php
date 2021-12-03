<?php

namespace App\Http\Controllers;

use Image;
use Session;
use App\Models\User;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    
    public function index()
    {
        $projects = Project::all();
        $users = User::all();

        return view('project.index')->with('projects', $projects)->with('users', $users);
    }

    
    public function create()
    {
        $users = User::all();

        return view('project.create')->with('projects', $projects)->with('users',$users);
    }

    
    public function store(Request $request)
    {
        $project = new Project;

        $project->title = $request->title;
        $project->description = $request->description;
        //$project->user_id = $request->user_id;
        //$project->file = $request->file;
        //$project->category_id = $request->category_id;

        ///Funcionalidad de Imagen
        $archivo_imagen=$request->file('file');
        $nombre_archivo = $request->name . '.' . $archivo_imagen-> getClientOriginalExtension();
        $ubicacion = public_path('img/' . $nombre_archivo);

        Image::make($archivo_imagen)->resize(1200, null, function ($constraint) {
            $constraint->aspectRatio();
        })->save($ubicacion);

        /// Guaradar en base de datos
        $project->file = $nombre_archivo;    
        ///
        
        $project->save();

        $users = User::all();

        Session::flash('Exito','Proyecto Agregado');

        return redirect()->back();


    }

    
    public function show( $id)
    {
        //
    }

    
    public function edit( $id)
    {
        $project = Project::find($id);
        $users = User::all();

        return view('project.edit')->with('project', $project)->with('users',$users);
    }

    
    public function update(Request $request, $id)
    {
        $project = Project::find($id);
        $users = User::all();

        $project->title = $request->title;
        $project->description = $request->description;
        //$project->user_id = $request->user_id;
        //$project->file = $request->file;
        //$project->category_id = $request->category_id;

        ///Funcionalidad de Imagen
        $archivo_imagen=$request->file('file');
        $nombre_archivo = $request->name . '.' . $archivo_imagen-> getClientOriginalExtension();
        $ubicacion = public_path('img/' . $nombre_archivo);

        Image::make($archivo_imagen)->resize(1200, null, function ($constraint) {
            $constraint->aspectRatio();
        })->save($ubicacion);

        /// Guaradar en base de datos
        $project->file = $nombre_archivo;    
        ///

        $project->save();

        Session::flash('Nice','Proyecto actualizado');

        return redirect()->route('proyectos.index')->with('project', $project)->with('user', $users);

    }

    
    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();

        Session::flash('Seguro?','Pues se eliminó tu proyecto');
        return redirect()->back();
    }
}

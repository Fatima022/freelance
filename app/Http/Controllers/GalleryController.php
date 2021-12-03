<?php

namespace App\Http\Controllers;

use Image;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    
    public function index()
    {
        $images = Gallery::all();
        return view('welcome')->with('images',$images);
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $image = new Gallery;

        ///Funcionalidad de Imagen
        $archivo_imagen=$request->file('image');
        $nombre_archivo = $request->name . '.' . $archivo_imagen-> getClientOriginalExtension();
        $ubicacion = public_path('img/' . $nombre_archivo);

        Image::make($archivo_imagen)->resize(800, null, function ($constraint) {
            $constraint->aspectRatio();
        })->save($ubicacion);

        /// Guaradar en base de datos
        $image->file= $nombre_archivo;
        ///

        $image->save();

        return redirect()->back();
    }

    
    public function show(Gallery $gallery)
    {
        //
    }

    
    public function edit(Gallery $gallery)
    {
        //
    }

    
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    
    public function destroy(Gallery $gallery)
    {
        //
    }
}

<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\File;

class FormController extends Controller
{
    public function upload(Request $request)
    {
        // Validar que se haya subido un archivo
        $request->validate([
            'file' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048', // Ajusta los tipos de archivo y tamaño según tus necesidades
        ]);

        // Subir el archivo y guardar el path
        $archivo = $request->file('file');
        $path = Storage::put('imagenes', $archivo);

        // Guardar el path en la base de datos
        File::create(['path' => $path]);

        // Redirigir de vuelta con un mensaje de éxito
        return redirect()->back()->with('success', 'Archivo subido correctamente.');
    }

    public function download()
    {
        // Obtener el último archivo subido
        $file = File::latest()->first();

        if (!$file) {
            return redirect()->back()->with('error', 'No hay archivos para descargar.');
        }

        // Descargar el archivo usando el path almacenado
        return Storage::download($file->path);
    }
}
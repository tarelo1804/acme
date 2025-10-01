<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ArchitecturalDrawing;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DrawingController extends Controller
{
    public function index()
    {
        $drawings = ArchitecturalDrawing::with('project')->get();
        $projects = Project::all();
        return view('admin.drawings', compact('drawings', 'projects'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'project_id' => 'required|exists:projects,id',
            'file' => 'required|mimes:pdf,jpg,jpeg,png|max:10240'
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $originalName = $file->getClientOriginalName();
            
            // Guardar con nombre único pero mantener el nombre original
            $uniqueName = time() . '_' . $originalName;
            $file->move(public_path('drawings'), $uniqueName);

            ArchitecturalDrawing::create([
                'name' => $request->name,
                'description' => $request->description,
                'project_id' => $request->project_id,
                'file_path' => $uniqueName,
                'version' => 1
            ]);

            return redirect()->route('admin.drawings.index')->with('success', 'Plano agregado correctamente');
        }

        return back()->with('error', 'Error al subir el archivo');
    }

    public function destroy($id)
    {
        $drawing = ArchitecturalDrawing::findOrFail($id);
        
        // Eliminar el archivo físico
        $filePath = public_path('drawings/' . $drawing->file_path);
        if (File::exists($filePath)) {
            File::delete($filePath);
        }
        
        $drawing->delete();
        
        return redirect()->route('admin.drawings.index')->with('success', 'Plano eliminado correctamente');
    }

    public function show($id)
    {
        $drawing = ArchitecturalDrawing::findOrFail($id);
        return response()->file(public_path('drawings/' . $drawing->file_path));
    }

    public function download($id)
    {
        $drawing = ArchitecturalDrawing::findOrFail($id);
        return response()->download(
            public_path('drawings/' . $drawing->file_path),
            basename($drawing->file_path)
        );
    }
}
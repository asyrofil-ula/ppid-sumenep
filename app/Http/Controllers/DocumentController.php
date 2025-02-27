<?php

namespace App\Http\Controllers;

use App\Models\InformasiPublik;
use App\Models\Infografis;
use App\Models\FileInformasiPublik;
use Faker\Core\File;

class DocumentController extends Controller
{
    public function showFile_informasi_publik($id)
    {
        $informasi = InformasiPublik::findOrFail($id);
        $filePath = storage_path('app/public/' . $informasi->path_dokumen);
        if (file_exists($filePath)) {
            return response()->file($filePath);
        } else {
            abort(404);
        }
    }

    public function showFile_file_informasi_publik($id)
    {
        $file = FileInformasiPublik::findOrFail($id);  
        $filePath = storage_path('app/public/' . $file->file);
        if (file_exists($filePath)) {
            return response()->file($filePath);
        } else {
            abort(404);
        } 
    }

    public function showFile_infografis($id)
    {
        $infografis = Infografis::findOrFail($id);
        $filePath = storage_path('app/public/' . $infografis->path_dokumen);
        if (file_exists($filePath)) {
            return response()->file($filePath);
        } else {
            abort(404);
        }
    }
}

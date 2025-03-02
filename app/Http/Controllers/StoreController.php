<?php

namespace App\Http\Controllers;

use App\Models\Infografis;
use App\Models\InformasiPublik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use App\Models\AplikasiLayanan;
use App\Models\InformasiPublikDetail;
use App\Models\FileInformasiPublik;
use App\Models\Galeri;
use Faker\Core\File;

class StoreController extends Controller
{
    public function store_informasi_public(Request $request)
    {
        $validatedData = $request->validate([
            'nama_informasi' => 'required|string|max:255',
            'klasifikasi_informasi_id' => 'required|exists:klasifikasi_informasi,id',
            'jenis_informasi_id' => 'required|exists:jenis_informasi,id',
            'detail_jenis_informasi_id' => 'required|exists:detail_jenis_informasi,id',
            'nama_dokumen' => 'required|string|max:255',
            'file_pdf' => 'required|file|mimes:pdf|max:5048',
            'is_active' => 'sometimes|accepted'
        ], [
            'klasifikasi_informasi_id.exists' => 'Klasifikasi informasi tidak valid',
            'jenis_informasi_id.exists' => 'Jenis informasi tidak valid',
            'detail_jenis_informasi_id.exists' => 'Detail jenis informasi tidak valid',
            'file_pdf.required' => 'Upload Dokumen tidak boleh kosong',
            'nama_dokumen.required' => 'Nama dokumen tidak boleh kosong',
            'file_pdf.mimes' => 'Dokumen harus berformat PDF',
            'file_pdf.max' => 'Dokumen maksimal 5MB'
        ]);
    
        DB::beginTransaction();
    
        try {
            $filePath = null;
            
            // Handle file upload
            if ($request->hasFile('file_pdf')) {
                $file = $request->file('file_pdf');
                $fileName = time() . '-' . $request->nama_dokumen . '.' . $file->getClientOriginalExtension();
                $filePath = $file->storeAs('informasi_publik', $fileName, 'public');
            }
    
            // Create informasi publik
            $informasi = InformasiPublik::create([
                'klasifikasi_informasi_id' => $validatedData['klasifikasi_informasi_id'],
                'jenis_informasi_id' => $validatedData['jenis_informasi_id'],
                'detail_jenis_informasi_id' => $validatedData['detail_jenis_informasi_id'],
                'nama_informasi' => $validatedData['nama_informasi'],
                'nama_dokumen' => $validatedData['nama_dokumen'],
                'path_dokumen' => $filePath ? str_replace('public/', '', $filePath) : null,
                'is_active' => $request->has('is_active'),
                'post_by' => Auth::user()->name ?? null,
            ]);
    
            DB::commit();
    
            Alert::success('Berhasil', 'Data berhasil disimpan');
            return redirect()->back();
    
        } catch (\Exception $e) {
            DB::rollBack();
            
            if (isset($filePath)) {
                Storage::disk('public')->delete($filePath);
            }
    
            return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
        
    }

    public function store_informasi_public_detail(Request $request)
    {
        $validatedData = $request->validate([
            'informasi_publik_id' => 'required|exists:informasi_publik,id',
            'description' => 'required|string',
            'is_active' => 'sometimes|accepted'
        ], [
            'informasi_publik_id.exists' => 'Informasi publik tidak valid',
            'description.required' => 'Deskripsi tidak boleh kosong',
            // 'is_active.accepted' => 'Isi dengan ya atau tidak'
        ]);

        DB::beginTransaction();
    
        try {
            $informasi = InformasiPublikDetail::create([
                'informasi_publik_id' => $validatedData['informasi_publik_id'],
                'description' => $validatedData['description'],
                'is_active' => $request->has('is_active'),
                'post_by' => Auth::user()->name ?? null,
            ]);
            // dd($informasi);
    
            DB::commit();
    
            Alert::success('Berhasil', 'Data berhasil disimpan');
            return redirect()->back();
    
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function store_file_informasi_publik(Request $request)
    {
        $validatedData = $request->validate([
            'informasi_publik_detail_id' => 'required|exists:informasi_publik_details,id',
            'deskripsi' => 'required|string',
            'file_pdf' => 'required|file|mimes:pdf|max:5048',
            'is_active' => 'sometimes|accepted',
            // 'post_by' => 'required|string|max:255',
        ],
        [
            'informasi_publik_detail_id.exists' => 'Informasi publik detail tidak valid',
            'file_pdf.required' => 'Upload Dokumen tidak boleh kosong',
            'deskripsi.required' => 'Deskripsi tidak boleh kosong',
            'file_pdf.mimes' => 'Dokumen harus berformat PDF',
            'file_pdf.max' => 'Dokumen maksimal 5MB',
            // 'post_by.required' => 'Post by tidak boleh kosong',
        ]);
    
        DB::beginTransaction();
    
        try {
            $filePath = null;
            
            // Handle file upload
            if ($request->hasFile('file_pdf')) {
                $file = $request->file('file_pdf');
                $fileName = time() . '-' . $request->deskripsi . '.' . $file->getClientOriginalExtension();
                $filePath = $file->storeAs('file_informasi_publik', $fileName, 'public');
            }

            // Create informasi publik
            $informasi = FileInformasiPublik::create([
                'informasi_publik_detail_id' => $validatedData['informasi_publik_detail_id'],
                'deskripsi' => $validatedData['deskripsi'],
                'file' => $filePath ? str_replace('public/', '', $filePath) : null,
                'is_active' => $request->has('is_active'),
                'post_by' => Auth::check() ? Auth::user()->name : '',
            ]);
    
            DB::commit();
    
            Alert::success('Berhasil', 'Data berhasil disimpan');
            return redirect()->back();
    
        } catch (\Exception $e) {
            DB::rollBack();
            
            if (isset($filePath)) {
                Storage::disk('public')->delete($filePath);
            }
    
            return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function store_infografis(Request $request)
    {
        $validatedData = $request->validate([
            'nama_infografis' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'nama_dokumen' => 'required|string|max:255',
            'file_pdf' => 'required|mimes:jpeg,jpg,png,gif|max:5048',
            'is_active' => 'sometimes|accepted'
        ], [
            'nama_infografis.required' => 'Nama infografis tidak boleh kosong',
            'description.required' => 'Deskripsi tidak boleh kosong',
            'file_pdf.required' => 'Upload Dokumen tidak boleh kosong',
            'nama_dokumen.required' => 'Nama dokumen tidak boleh kosong',
            'file_pdf.mimes' => 'Dokumen harus berformat Gambar',
            'file_pdf.max' => 'Dokumen maksimal 5MB'
        ]);
    
        DB::beginTransaction();
    
        try {
            $filePath = null;
            
            // Handle file upload
            if ($request->hasFile('file_pdf')) {
                $file = $request->file('file_pdf');
                $fileName = time() . '-' . $request->nama_dokumen . '.' . $file->getClientOriginalExtension();
                $filePath = $file->storeAs('infografis', $fileName, 'public');
            }
    
            // Create informasi publik
            $informasi = Infografis::create([
                'nama_infografis' => $validatedData['nama_infografis'],
                'description' => $validatedData['description'],
                'nama_dokumen' => $validatedData['nama_dokumen'],
                'path_dokumen' => $filePath ? str_replace('public/', '', $filePath) : null,
                'is_active' => $request->has('is_active'),
                'post_by' => Auth::user()->name ?? null,
            ]);
    
            DB::commit();
            Alert::success('Berhasil', 'Data berhasil disimpan');
            return redirect()->back();
    
        } catch (\Exception $e) {
            DB::rollBack();
            if (isset($filePath)) {
                Storage::disk('public')->delete($filePath);
            }
            return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
        
    }

    public function store_galery(Request $request){

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'path_img' => 'required|mimes:jpeg,jpg,png,gif|max:5048',
            'is_active' => 'sometimes|accepted'
        ], [
            'title.required' => 'Title tidak boleh kosong',
            'description.required' => 'Description tidak boleh kosong',
            'path_img.required' => 'Upload Gambar tidak boleh kosong',
            'path_img.mimes' => 'Gambar harus berformat Gambar',
            'path_img.max' => 'Gambar maksimal 5MB'
        ]);
        try {
            $filePath = null;
            
            // Handle file upload
            if ($request->hasFile('path_img')) {
                $file = $request->file('path_img');
                $fileName = time() . '-' . $request->title . '.' . $file->getClientOriginalExtension();
                $filePath = $file->storeAs('galeri', $fileName, 'public');
            }
    
            // Create informasi publik
            $informasi = Galeri::create([
                'title' => $validatedData['title'],
                'description' => $validatedData['description'],
                'path_img' => $filePath ? str_replace('public/', '', $filePath) : null,
                'is_active' => $request->has('is_active'),
                'post_by' => Auth::user()->name ?? null,
            ]);
    
            Alert::success('Berhasil', 'Data berhasil disimpan');
            return redirect()->back();
    
        } catch (\Exception $e) {
            if (isset($filePath)) {
                Storage::disk('public')->delete($filePath);
            }
            return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function store_aplikasi_layanan_publik(Request $request)
    {

        $validatedData = $request->validate([
            'nama_aplikasi' => 'required|string|max:255',
            'description' => 'required|string',
            'link' => 'required|url',
            'is_active' => 'sometimes|accepted'
        ], [
            'nama_aplikasi.required' => 'Nama aplikasi tidak boleh kosong',
            'description.required' => 'Description tidak boleh kosong',
            'link.required' => 'Link tidak boleh kosong',
            'link.url' => 'Link harus berupa URL',
        ]);
        try {
            $data = [
                'nama_aplikasi' => $validatedData['nama_aplikasi'],
                'description' => $validatedData['description'],
                'url' => $validatedData['link'],
                'is_active' => $request->has('is_active'),
                'post_by' => Auth::user()->name ?? null,
            ];
            AplikasiLayanan::create($data);
            Alert::success('Berhasil', 'Data berhasil disimpan');
            return redirect()->back();
        } catch (\Exception $e) {
            Alert::error('Gagal', 'Data gagal disimpan');
            return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
    }
}

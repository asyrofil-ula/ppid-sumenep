<?php

namespace App\Http\Controllers;

use App\Models\DetailJenisInformasi;
use App\Models\Infografis;
use App\Models\InformasiPublik;
use App\Models\KlasifikasiInformasi;
use App\Models\JenisInformasi;
use App\Models\AplikasiLayanan;
use App\Models\InformasiPublikDetail;
use App\Models\FileInformasiPublik;
use App\Models\Galeri;


class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function visi_misi()
    {
        return view('user.pages.visi-misi');
    }

    public function tentang_ppid()
    {
        return view('user.pages.tentang-ppid');
    }

    public function dasar_hukum()
    {
        return view('user.pages.dasar-hukum');
    }

    public function tugas_dan_fungsi_ppid_sumenep()
    {
        return view('user.pages.tugas-dan-fungsi-ppid-sumenep');
    }

    public function struktural_organisasi()
    {
        return view('user.pages.stuktural-organisasi');
    }

    public function maklumat_pelayanan()
    {
        return view('user.pages.maklumat-pelayanan');
    }

    public function prosedur_permintaan_informasi_ppid_sumenep()
    {
        return view('user.pages.prosedur-permintaan-informasi-ppid-sumenep');
    }

    public function prosedur_pengajuan_keberatan_ppid_sumenep()
    {
        return view('user.pages.prosedur-pengajuan-keberatan-ppid-sumenep');
    }

    public function prosedur_sengketa_informasi_ppid_sumenep()
    {
        return view('user.pages.prosedur-sengketa-informasi-ppid-sumenep');
    }

    public function pengembang_ppid()
    {
        return view('user.pages.pengembang-ppid');
    }

    public function informasi_publik_detail($id)    
    {
        $informasi_publik = InformasiPublik::find($id);
        $informasi_publik_detail = InformasiPublikDetail::where('informasi_publik_id', $id)
                                    ->where('is_active', 1)
                                    ->get();
        $file_informasi_publik = FileInformasiPublik::where('is_active', 1)->get();
        // dd($informasi_publik_detail);
        return view('user.pages.informasi-publik', compact('informasi_publik', 'informasi_publik_detail', 'file_informasi_publik'));
    }

    public function informasi_publik()
    {   
        $klasifikasi_informasi = KlasifikasiInformasi::all();
        $jenis_informasi = JenisInformasi::all();
        $detail_jenis_informasi = DetailJenisInformasi::all();
        $informasi_publik = InformasiPublik::all();
        // dd($jenis_informasi);
        return view('servant.informasi_public', compact('klasifikasi_informasi', 'jenis_informasi', 'detail_jenis_informasi', 'informasi_publik'));
    }

    public function galery(){
        $galeris = Galeri::orderByDesc('updated_at')->paginate(5);
        return view('servant.galeri', compact('galeris'));
    }

    public function detail_informasi_publik()
    {
        $informasi_publik = InformasiPublik::all();
        $informasi_publik_detail = InformasiPublikDetail::all();
        return view('servant.informasi_public_detail', compact('informasi_publik', 'informasi_publik_detail'));
    }

    public function file_informasi_publik()
    {
        $informasi_publik_detail = InformasiPublikDetail::all();
        $informasi_publik = InformasiPublik::with('informasiPublikDetails')->get();
        $file_informasi_publik = FileInformasiPublik::paginate(5);
        return view('servant.file-informasi-publik', compact('file_informasi_publik', 'informasi_publik_detail', 'informasi_publik'));
    }
    
    public function infografis()
    {
        $klasifikasi_informasi = KlasifikasiInformasi::all();
        $jenis_informasi = JenisInformasi::all();
        $detail_jenis_informasi = DetailJenisInformasi::all();
        $infografis = Infografis::orderByDesc('updated_at')->paginate(8);
        return view('servant.infografis', compact('klasifikasi_informasi', 'jenis_informasi', 'detail_jenis_informasi', 'infografis'));
    }

    public function aplikasi_layanan_publik()
    {   
        $aplikasi_layanan_publik = AplikasiLayanan::paginate(5);
        return view('servant.aplikasi-layanan-publik', compact('aplikasi_layanan_publik'));
    }

    public function infografis_user()
    {
        $infografis = Infografis::where('is_active', 1)->orderByDesc('updated_at')->paginate(8);
        return view('user.pages.infografi', compact('infografis'));
    }

    public function galeri(){
        $galeris = Galeri::where('is_active', 1)->orderByDesc('updated_at')->paginate(8);
        return view('user.pages.galeri', compact('galeris'));
    }

    
}

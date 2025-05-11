<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class AuthController extends Controller
{
    public function loginSubmit(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'password' => 'required'
        ],
        [
            'name.required' => 'Username tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong'
        ]);

        $user = User::where('name', $request->name)->first();

        if($user->is_active == false){
            Auth::logout();
            session()->flush();

            Alert::error('Error', 'Akun anda tidak aktif, hubungi admin untuk mengaktifkan akun');
            return redirect()->route('home');
        }

        if($user->role == 'admin'){
            $credentials = $request->only('name', 'password');
            if (Auth::attempt($credentials)) {

                $request->session()->regenerate();
                Alert::success('Success', 'Login Berhasil');
                return redirect('/admin');
            }
        }

        $credentials = $request->only('name', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            Alert::success('Success', 'Login Berhasil');
            return redirect()->route('home');
        }

        Alert::error('Error', 'User dan Password tidak cocok');
        return back();
    }

    public function registerSubmit(Request $request)
    {
        $data = request()->validate([
            'name' => 'required|unique:users',
            'perangkat_daerah' => 'required',
            'operator_ppid' => 'required',
            'no_whatsapp' => 'required',
            'email' => 'required|email|unique:users',
            'file_pdf' => 'required|file|mimes:pdf',
        ],
        [
            'name.required' => 'Username tidak boleh kosong',
            'name.unique' => 'Username sudah terdaftar',
            'perangkat_daerah.required' => 'Perangkat Desa tidak boleh kosong',
            'operator_ppid.required' => 'Operator PPID tidak boleh kosong',
            'nomor.required' => 'Nomor tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'email.unique' => 'Email sudah terdaftar',
            'email.email' => 'Email tidak valid',
            'file_pdf.required' => 'File PDF tidak boleh kosong',
            'file_pdf.file' => 'File harus berupa PDF',
            'file_pdf.mimes' => 'File harus berupa PDF',
        ]);

        DB::beginTransaction();
        try
        {
            $data['password'] = bcrypt('password');
            $data['role'] = 'pembantu';
            $data['is_active'] = false;
            $request->file('file_pdf')->store('surat_tugas', 'private');
            $data['path_surat_tugas'] = $request->file('file_pdf')->hashName();
            User::create($data);
            DB::commit();

            Alert::success('Success', 'Register Berhasil, Hubungi admin untuk aktivasi akun');
            return redirect()->back();
        }
        catch(\Exception $e){
            DB::rollback();
            Alert::error('Error', 'Register Gagal, Silahkan coba lagi');
            return redirect()->back();
        }
    }



    public function logout()
    {
        Auth::logout();
        session()->flush();
        Alert::success('Success', 'Logout Berhasil');
        return redirect()->route('home');
    }
}

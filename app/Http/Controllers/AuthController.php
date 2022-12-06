<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Siswa;
use App\Models\Jurusan;
use Validator;
use Auth;
use DB;
use Str;

class AuthController extends Controller
{
    public function login()
    {
        return view('Auth.login');
    }

    public function postlogin(Request $request)
    {
        $request -> validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Email Wajib Di Isi',
            'password.required' => 'Password Wajib Di Isi',
        ]);

        $infologin =[
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)){
            return redirect('/dashboard');
        }
        return redirect('/login');
    }

    public function register()
    {
        $jurusan = Jurusan::all();

        return view('auth.register', compact('jurusan'));
    }

    public function simpanRegister(Request $request)
    {

        $user = User::create([
            'role_id' => 2,
            'name' => $request->nama,
            'password' => bcrypt($request->password),
            'email' => $request->email,
            'remember_token' => Str::random(20),
            'status' => 'inactive',
        ]);

        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'jurusan_id' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'email' => 'required',
            'telepon' => 'required|numeric',
            'nisn' => 'required|numeric',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date_format:Y-m-d',
            'alamat' => 'required',
            'asal_sekolah' => 'required',
        ]);

        //membuat table siswa
        $request->request->add(['user_id' => $user->id]);
        $siswa = Siswa::create([
            'nama' => $request->nama,
            'jurusan_id' => $request->jurusan_id,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'nisn' => $request->nisn,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'asal_sekolah' => $request->asal_sekolah,
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        return redirect('/login');
    }

    public function logout()
    {
        Auth::logout(); 
        return redirect('/login');
    }
}
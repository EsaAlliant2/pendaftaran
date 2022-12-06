<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Jurusan;
use App\Models\Siswa;

class DashboardController extends Controller
{
    public function index()
    {
        $jurusan = Jurusan::all();
        $siswa = Siswa::all();
        $user = User::all();
        return view('dashboard.index', compact('user', 'jurusan', 'siswa'));
    }
}
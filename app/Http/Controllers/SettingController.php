<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        return view('setting.index');
    }

    public function data() // Menambahkan DataTable
    {
        $setting = Setting::orderBy('id', 'asc')->get();

        return datatables()
        ->of($setting)
        ->addIndexColumn()
        ->addColumn('aksi', function($setting){
            return '
            
            <div class="btn-group">
                <button onclick="editData(`' .route('setting.update', $setting->id). '`)" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></button>
            </div>
        ';
    })
    ->rawColumns(['aksi'])
    ->make(true);
    }
    public function store(Request $request)
    {
        $validator = Validator::make ($request->all(), [
            'nama' => 'required'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422); 
        }

        $setting = Setting::create([
            'nama' => $request->nama 
        ]);

        return response()->json([
            'success'=>true,
            'message' => 'Data Berhasil Tesimpan',
            'data' => $setting
        ]);
    }

    public function edit($id)
    {
        $setting = Setting::find($id);
        return view('setting.index', compact('setting'));
    }

    public function update(Request $request, $id)
    {
        $setting = Setting::find($id);
        $setting->nama = $request->nama;
        $setting->update();

        return response()->json('Data Berhasil Disimpan');
    }
}
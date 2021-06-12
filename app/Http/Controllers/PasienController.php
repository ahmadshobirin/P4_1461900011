<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Imports\PasienImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PasienController extends Controller
{
    public function index()
    {
        $data = Pasien::get();
        return view("master.pasien.index_0011", compact('data'));
    }

    public function import(Request $request)
    {
        Excel::import(new PasienImport, $request->file);
        return redirect()->route('pasien.index');
    }
}

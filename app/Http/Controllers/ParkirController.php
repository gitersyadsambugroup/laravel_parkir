<?php

namespace App\Http\Controllers;

use App\Models\Parkir;
use App\Models\TblSeeder;
use Illuminate\Http\Request;

class ParkirController extends Controller
{
    public function index()
    {
        $data_parkir = Parkir::all();
        return view('list_parkir', compact('data_parkir'));
    }

    public function add()
    {
        return view('add_parkir');
    }

    public function insertdata(Request $req)
    {
        // dd($req->all());
        Parkir::create($req->all());
        return redirect()->route('vtambah_parkir')->with('success', 'Add data oke!');
    }
}

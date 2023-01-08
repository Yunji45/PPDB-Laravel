<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulir;
class FormulirController extends Controller
{
    public function insert(Request $request)
    {
        $data = Formulir::all();
        $request->validate([
            'file' => 'mimes:jpg,png,jpeg|max:3000'
        ]);
        $data = new Formulir();
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = $file->getClientOriginalName();
            $request->file('file')->move('file/', $filename);
            $data->file = $filename;
        }
        $data->nama_lengkap = $request->nama_lengkap;
        $data->nama_panggilan = $request->nama_panggilan;
        $data->prestasi = $request->prestasi;
        $data->info_wk = $request->info_wk;
        $data->save();
        return redirect('/formpengisian');
    }

    public function show (Request $request, $id){
        $data = Formulir::find($id)->get()->paginate()->lates(10);

        return view ('home')->compact($data , 'data');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Atas;
class AtasController extends Controller
{
    public function index()
    {
        return view('admin.atas');
    }

    public function edit($id)
    {
        $atas = Atas::find($id);
        echo json_encode($atas);
    }

    public function update(Request $request, $id)
    {
        $atas = Atas::find($id);
        if ($request->hasfile('up-image')) {
            $path = $request->file('up-image')->store('landing');
            $atas->gambar = $path;
        }
        $atas->text1    = $request['up-text'];
        $atas->update();
        return redirect('adm')->with('sukses', 'Update Suksess');
    }
}

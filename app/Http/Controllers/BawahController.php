<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bawah;

class BawahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.bawah');
    }

    public function edit($id)
    {
        $bawah = Bawah::find($id);
        echo json_encode($bawah);
    }

    public function update(Request $request, $id)
    {
        $bawah = Bawah::find($id);
        $bawah->update($request->all());
        return redirect('/adm-bawah');
    }
}

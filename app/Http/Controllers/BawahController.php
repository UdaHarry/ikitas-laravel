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
        // $validator = Validator::make($request->all(), [
        //     'maps'      => 'required',
        //     'email'     => 'required|email',
        //     'telepon'   => 'required|min:5|max:13',
        //     'handphone' => 'required|min:8|max:13',
        //     'whatsapp'  => 'required|min:8|max:13',
        // ]);

        // if($validator->fails()){
        //     alert("Tidak dapat menyimpan data!");
        // }else{
        dd($request->all());
        // $bawah = Bawah::find($id);
        // $bawah->update($request->all());
        // return response()->json();
        // return response()->json()->with(['success' => 'Update Berhasil..!']);
        // return redirect('/adm-bawah')->with(['success' => 'Update Berhasil..!']);
    }
}

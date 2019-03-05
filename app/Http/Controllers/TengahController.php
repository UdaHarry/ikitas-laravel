<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class TengahController extends Controller
{
    public function index()
    {
        return view('admin.tengah');
    }

    public function edit($id)
    {

    }

    public function editAbout($id)
    {
        $about = About::find($id);
        echo json_encode($about);
    }
    public function update(Request $request, $id)
    {
        
    }

    public function updateAbout(Request $request, $id)
    {
        $about = About::find($id);
        if ($request->hasfile('about-img')) {
            $path = $request->file('about-img')->store('about');
            $about->gambar = $path;
        }
        $about->headline    = $request['about-head'];
        $about->deskripsi   = $request['about-text'];
        $about->update();
        return redirect('adm-tengah.index')->with('sukses', 'Update Suksess');
    }
}

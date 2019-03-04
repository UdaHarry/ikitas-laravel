<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Atas;
use App\About;
use App\Bawah;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data['landing']  = Atas::where('id','=','1')->get();
        $data['about'] = About::get();
        $data['bawah'] = Bawah::get();
        return view('front.home',$data);
    }
}

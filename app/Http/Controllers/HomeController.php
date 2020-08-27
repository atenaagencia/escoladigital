<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', ['user' => Auth::user()]);
    }

    public function pdf(){
        
        $data = Auth::user();
        view()->share('user', $data);
        $pdf = PDF::loadView('certificate.certificado', $data)->setPaper('a4', 'landscape');;

        // download PDF file with download method
        return $pdf->stream('pdf_file.pdf');
    }
}

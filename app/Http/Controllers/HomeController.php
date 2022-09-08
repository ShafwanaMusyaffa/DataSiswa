<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
	{
        $siswas = Siswa::all();
        
		return view('pages.dasis', compact('siswas'));
	}

}

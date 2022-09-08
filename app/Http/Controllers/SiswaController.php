<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas = Siswa::orderBy('id','desc')->paginate(5);
        return view('pages.auth.siswa.index', compact('siswas'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('pages.auth.siswa.create');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jurusan' => 'required',
            'kelas' => 'required',
        ]);
        
        Siswa::create($request->post());

        return redirect()->route('siswa.index')->with('success','Data Siswa berhasil ditambahkan.');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\company  $company
    * @return \Illuminate\Http\Response
    */
    public function show(Siswa $siswa)
    {
        return view('pages.auth.siswa.show',compact('siswa'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Company  $company
    * @return \Illuminate\Http\Response
    */
    public function edit(Siswa $siswa)
    {
        return view('pages.auth.siswa.edit',compact('siswa'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\company  $company
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'nama' => 'required',
            'jurusan' => 'required',
            'kelas' => 'required',
        ]);
        
        $siswa->fill($request->post())->save();

        return redirect()->route('siswa.index')->with('success','Data Siswa berhasil di ubah');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Company  $company
    * @return \Illuminate\Http\Response
    */
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
        return redirect()->route('siswa.index')->with('success','Data Siswa berhasil di hapus');
    }
}

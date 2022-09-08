@extends('layouts.admin')
@section('title')
    Tambah Data Siswa
@endsection

@section('content')
  <!-- Main Content -->
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1 class="px-5">Data Siswa</h1>
        <div class="pull-right">
          <a class="btn btn-primary" href="{{ route('siswa.index') }}"> Kembali</a>
        </div>

      </div>
      <div class="section-body">
        <div class="card">
          @if(session('status'))
          <div class="alert alert-success mb-1 mt-1">
              {{ session('status') }}
          </div>
          @endif

          <form action="{{ route('siswa.update',$siswa->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label>Nama Siswa</label>
                <input type="text" name="nama" value="{{ $siswa->nama }}" class="form-control" required="">
                @error('nama')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror

              </div>
              <div class="form-group">
                <label>Jurusan</label>
                <input type="text" name="jurusan" value="{{ $siswa->jurusan }}" class="form-control" required="">
                @error('jurusan')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror

              </div>
              <div class="form-group">
                <label>Kelas</label>
                <input type="text" name="kelas" value="{{ $siswa->kelas }}" class="form-control">
                @error('kelas')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="card-footer text-right">
              <button class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </section>
  </div>
@endsection
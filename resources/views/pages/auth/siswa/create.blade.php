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

          <form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label>Nama Siswa</label>
                <input type="text" name="nama" class="form-control" required="">
                @error('nama')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror

              </div>
              <div class="form-group">
                <label>Jurusan</label>
                <input type="text" name="jurusan" class="form-control" required="">
                @error('jurusan')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror

              </div>
              <div class="form-group">
                <label>Kelas</label>
                <input type="text" name="kelas" class="form-control">
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

{{-- <body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Add Company</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('siswa.index') }}"> Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama Siswa:</strong>
                        <input type="text" name="nama" class="form-control" placeholder="Nama Siswa">
                        @error('nama')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Jurusan:</strong>
                        <input type="text" name="jurusan" class="form-control" placeholder="Jurusan">
                        @error('jurusan')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Kelas:</strong>
                        <input type="text" name="kelas" class="form-control" placeholder="Kelas">
                        @error('kelas')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
</body> --}}
@extends('layouts.app')
@section('title')
    Kumpulan Data Siswa
@endsection

@section('content')
  <section class="py-5">
      <div class="container py-5">
          <div class="row mb-4 mb-lg-5">
              <div class="col-md-8 col-xl-6 text-center mx-auto">
                  <p class="fw-bold text-success mb-2">Data Siswa</p>
                  <h3 class="fw-bold mb-lg-5">SMKN 1 KARAWANG</h3>
              </div>
              <table class="table table-bordered table-striped">
                <thead class="table-primary">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Kelas</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($siswas as $siswa)
                    <tr>
                        <td>{{ $siswa->id }}</td>
                        <td>{{ $siswa->nama }}</td>
                        <td>{{ $siswa->jurusan }}</td>
                        <td>{{ $siswa->kelas }}</td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        </div>
      </div>
  </section>
@endsection
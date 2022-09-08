@extends('layouts.admin')
@section('title')
    Data Siswa | Dashboard
@endsection

@section('content')
  <!-- Main Content -->
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Data Siswa</h1>
      </div>
      <div class="section-body">
        @if ($message = Session::get('success'))
          <div class="alert alert-success">
              <p>{{ $message }}</p>
          </div>
        @endif

        <a href="{{ route('siswa.create') }}" class="btn bg-info text-white">Tambah Data Siswa</a>
        <table class="table table-bordered table-striped mt-3">
          <thead class="table-primary">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Lengkap</th>
              <th scope="col">Jurusan</th>
              <th scope="col">Kelas</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
                @foreach ($siswas as $siswa)
                    <tr>
                        <td>{{ $siswa->id }}</td>
                        <td>{{ $siswa->nama }}</td>
                        <td>{{ $siswa->jurusan }}</td>
                        <td>{{ $siswa->kelas }}</td>
                        <td>
                            <form action="{{ route('siswa.destroy',$siswa->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('siswa.edit',$siswa->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $siswas->links() !!}
      </div>
    </section>
  </div>
@endsection
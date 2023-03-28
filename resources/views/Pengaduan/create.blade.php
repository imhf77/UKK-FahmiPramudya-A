@extends('dashboard.main')

@section('container')
<form action="/dashboard/laporan" method="post" enctype="multipart/form-data">
  @csrf
  <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Masukkan Tanggal</label>
      <input type="date" class="form-control" id="tgl_pengaduan" name="tgl_pengaduan" placeholder="name@example.com">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Masukkan Laporan</label>
      <textarea class="form-control" id="isi_laporan" rows="3" name="isi_laporan"></textarea>
    </div>
    <div class="input-group mb-3">
      <input type="file" class="form-control" id="foto" name="foto">
    </div>

    <button class="btn btn-outline-secondary" type="submit">Kirim</button>
</form>
@endsection
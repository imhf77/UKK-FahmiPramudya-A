@extends('dashboard.main')

@section('container')
    <button><a href="/dashboard/laporan/create">buat baru</a></button>
    <p>hi {{ Auth::masyarakat()->nama }}</p>
@endsection

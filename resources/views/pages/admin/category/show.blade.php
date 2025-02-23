@extends('layouts.admin')

@section('title', 'Detail Kategori Laporan')

@section('content')
    <a href="{{ route('admin.report-category.index') }}" class="btn btn-danger mb-3">Kembali</a>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Kategori Laporan</h6>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <td>Nama Kategori</td>
                    <td>{{ $category->name }}</td>
                </tr>
                <tr>
                    <td>Gambar / Icon</td>
                    <td>
                        <img src="{{ asset('storage/' . $category->image) }}" width="200" alt="avatar">
                    </td>
                </tr>
            </table>
        </div>
    </div>
@endsection

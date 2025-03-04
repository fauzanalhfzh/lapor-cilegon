@extends('layouts.admin')

@section('title', 'Detail Masyarakat')

@section('content')
    <a href="{{ route('admin.resident.index') }}" class="btn btn-danger mb-3">Kembali</a>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail</h6>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <td>Nama Lengkap</td>
                    <td>{{ $resident->user->name }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{ $resident->user->email }}</td>
                </tr>
                <tr>
                    <td>Foto Profil</td>
                    <td>
                        <img src="{{ asset('storage/' . $resident->avatar) }}" width="200" alt="avatar">
                    </td>
                </tr>
            </table>
        </div>
    </div>
@endsection

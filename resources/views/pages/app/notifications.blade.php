@extends('layouts.app')

@section('title', 'Notifikasi')

@section('content')
    <div class="max-w-screen-sm mx-auto bg-white min-vh-100 p-3">
        <div class="d-flex flex-column justify-content-center align-items-center" style="height: 75vh" id="no-reports">
            <div id="lottie"></div>
            <h5 class="mt-3">Belum ada laporan</h5>
            <a href="" class="btn btn-primary py-2 px-4 mt-3">
                Buat Laporan
            </a>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.12.2/lottie.min.js"></script>
    <script>
        var animation = bodymovin.loadAnimation({
            container: document.getElementById('lottie'),
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: '{{ asset('assets/app/lottie/not-found.json') }}'
        })
    </script>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p class="mb-4">{{ __('Halo,') }} <strong>{{ Auth::user()->name }}</strong>! {{ __('Selamat datang di L10-Attend !') }}</p>
                    
                    <div class="alert alert-info" role="alert">
                        {{ __(' Aplikasi Absensi SMP NEGERI 18 MEDAN!-JLN. Kemuning Perumnah, Helvetia, Kec. Medan Helvetia, Kota Medan, Sumatera Utara 20124') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

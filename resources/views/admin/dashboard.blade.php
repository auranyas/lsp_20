@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-6 col-md-3">
            <div class="card shadow">
                <div class="card-body  px-4 py-4">
                    <div class="row">
                        <div class="col-md-2 col-lg-12 col-xl-12 col-xxl-3 d-flex justify-content-start ">
                            <div class="stats-icon yellow mb-2" style="background-color: #B4E4FF">
                                <i class="ibi bi-book-half"></i>
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                            <h6 class="text-muted font-semibold">Jumlah Buku</h6>
                            <h6 class="font-extrabold mb-0">{{ $buku }} Buku</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="card shadow">
                <div class="card-body  px-4 py-4">
                    <div class="row">
                        <div class="col-md-2 col-lg-12 col-xl-12 col-xxl-3 d-flex justify-content-start ">
                            <div class="stats-icon red mb-2"style="background-color: #BAD7E9">
                                <i class="ibi bi-card-checklist"></i>
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                            <h6 class="text-muted font-semibold">Jumlah Kategori</h6>
                            <h6 class="font-extrabold mb-0"> {{ $kategori }} Kategori</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="card shadow">
                <div class="card-body  px-4 py-4">
                    <div class="row">
                        <div class="col-md-2 col-lg-12 col-xl-12 col-xxl-3 d-flex justify-content-start ">
                            <div class="stats-icon green mb-2" style="background-color: #F7C8E0">
                                <i class="iconly-boldProfile"></i>
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                            <h6 class="text-muted font-semibold">Jumlah Member</h6>
                            <h6 class="font-extrabold mb-0"> {{ $user }} Member</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="card shadow">
                <div class="card-body  px-4 py-4">
                    <div class="row">
                        <div class="col-md-2 col-lg-12 col-xl-12 col-xxl-3 d-flex justify-content-start ">
                            <div class="stats-icon purple mb-2" style="background-color: #95BDFF">
                                <i class="ibi bi-clipboard-data-fill"></i>
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                            <h6 class="text-muted font-semibold">Jumlah Penerbit</h6>
                            <h6 class="font-extrabold mb-0"> {{ $penerbit }} Penerbit</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

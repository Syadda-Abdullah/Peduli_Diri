@extends('layout.cssMaster')

<head>
    <title>Peduli Diri | Home</title>
</head>

@section('halaman')
    <h1>Home</h1>
@endsection

@section('judul_card')
    Dasdboard
@endsection

@section('content')
    <div id="app">
        <div class="main-wrapper">

            {{-- Navbar --}}
            @include('layout.navbar')

            {{-- Sidebar --}}
            @include('layout.sidebar')

            {{-- Content --}}
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        @yield('halaman')
                    </div>
                    <div class="section-body">
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>@yield('judul_card') | Peduli Diri</h4>
                                </div>
                                @yield('body')
                                <div class="col-12 mb-4">
                                    <div class="hero text-white hero-bg-image hero-bg-parallax"
                                        style="background-image: url('assets/img/peduli_diri_login.jpg');">
                                        <div class="hero-inner">
                                            <h1>Peduli Diri</h1>
                                            <h4 class="lead">Selamat datang di Peduli Diri</h4>
                                            <div class="mt-4">
                                                <a href="/input"
                                                    class="btn btn-outline-white btn-lg btn-icon icon-left">Input
                                                    Data</a>
                                                <a href="/table"
                                                    class="btn btn-outline-white btn-lg btn-icon icon-left">Data
                                                    User</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2022 <div class="bullet"></div> Design By Syadda
                    Abdullah
                </div>
                <div class="footer-right">
                    4.2.0
                </div>
            </footer>
        </div>
    </div>

    </html>
@endsection

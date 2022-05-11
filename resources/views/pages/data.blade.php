@extends('pages.master')

<head>
    <title>Peduli Diri | Table</title>
</head>

@section('halaman')
    <h1>Data</h1>
@endsection

@section('judul_card')
    Data User
@endsection

@section('body')
    @php
    $no = 1;
    @endphp

    <div class="card">
        <div class="card-body">
            <form class="form-inline mr-auto" method="GET" action="/cari_data" id="cari_data">
                @csrf

                <div class="row">

                    <div class="col-auto">
                        <select onchange="searchType(this);" class="form-control" name="tipe_data" form="cari_data">
                            <option value="tanggal" selected>Tanggal</option>
                            <option value="jam">Jam</option>
                            <option value="lokasi">Lokasi</option>
                            <option value="suhu">Suhu</option>
                        </select>
                    </div>

                    <div class="col">
                        {{-- Pencarian Tanggal --}}
                        <div class="form-group">
                            <div class="input-group">
                                <input class="form-control" type="date" name="tanggal" id="cari_tanggal"
                                    placeholder="Masukkan Tanggal">
                                <button id="btn_cari_tanggal" type="submit" class="btn-success"
                                    style="margin-left: 20px;"><i class="fas fa-search"></i> Cari</button>
                            </div>
                        </div>
                        {{-- End of Pencarian Tanggal --}}

                        {{-- Pencarian Jam --}}
                        <div class="form-group">
                            <div class="input-group">
                                <input class="form-control" type="time" name="jam" id="cari_jam"
                                    placeholder="Masukkan Jam" style="display: none;">
                                <button id="btn_cari_jam" type="submit" class="btn-success"
                                    style="margin-left: 20px; display: none;"><i class="fas fa-search"></i> Cari</button>
                            </div>
                        </div>
                        {{-- End of Pencarian Jam --}}

                        {{-- Pencarian Lokasi --}}
                        <div class="form-group">
                            <div class="input-group">
                                <input class="form-control" type="text" name="lokasi" id="cari_lokasi"
                                    placeholder="Masukkan Lokasi" style="display: none;">
                                <button id="btn_cari_lokasi" type="submit" class="btn-success"
                                    style="margin-left: 20px; display: none;"><i class="fas fa-search"></i> Cari</button>
                            </div>
                        </div>
                        {{-- End of Pencarian Lokasi --}}

                        {{-- Pencarian Suhu --}}
                        <div class="form-group">
                            <div class="input-group">
                                <input class="form-control" type="number" name="suhu" id="cari_suhu"
                                    placeholder="Masukkan Suhu" style="display: none;">
                                <button id="btn_cari_suhu" type="submit" class="btn-success"
                                    style="margin-left: 20px; display: none;"><i class="fas fa-search"></i> Cari</button>
                            </div>
                        </div>
                        {{-- End of Pencarian Suhu --}}
                    </div>

                </div>

            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="tabel-data">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>

                                    {{-- Urut Tanggal --}}
                                    <th scope="col">Tanggal<div class="btn-group" role="group">
                                            <button type="button" class="btn dropdown-toggle float-right text-sm"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            </button>
                                            <form action="/urut" method="GET">
                                                @csrf
                                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                    <button class="dropdown-item" name="tanggalDesc" value="Desc"
                                                        href="/urut">Terbaru</button>
                                                    <button class="dropdown-item" name="tanggalAsc" value="Asc"
                                                        href="/urut">Terlama</button>
                                                </div>
                                            </form>
                                        </div>
                                    </th>
                                    {{-- End of Urut Tanggal --}}

                                    {{-- Urut Jam --}}
                                    <th scope="col">Jam<div class="btn-group" role="group">
                                            <button type="button" class="btn dropdown-toggle float-right text-sm"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            </button>
                                            <form action="/urut" method="GET">
                                                @csrf
                                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                    <button class="dropdown-item" name="jamDesc" value="Desc"
                                                        href="/urut">Terbaru</button>
                                                    <button class="dropdown-item" name="jamAsc" value="Asc"
                                                        href="/urut">Terlama</button>
                                                </div>
                                            </form>
                                        </div>
                                    </th>
                                    {{-- End of Urut Jam --}}

                                    {{-- Urut Lokasi --}}
                                    <th scope="col">Lokasi<div class="btn-group" role="group">
                                            <button type="button" class="btn dropdown-toggle float-right text-sm"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            </button>
                                            <form action="/urut" method="GET">
                                                @csrf
                                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                    <button class="dropdown-item" name="lokasiDesc" value="Desc"
                                                        href="/urut">Z - A</button>
                                                    <button class="dropdown-item" name="lokasiAsc" value="Asc"
                                                        href="/urut">A - Z</button>
                                                </div>
                                            </form>
                                        </div>
                                    </th>
                                    {{-- End of Urut Lokasi --}}

                                    {{-- Urut Suhu --}}
                                    <th scope="col">Suhu<div class="btn-group" role="group">
                                            <button type="button" class="btn dropdown-toggle float-right text-sm"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            </button>
                                            <form action="/urut" method="GET">
                                                @csrf
                                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                    <button class="dropdown-item" name="suhuDesc" value="Desc"
                                                        href="/urut">Tertinggi</button>
                                                    <button class="dropdown-item" name="suhuAsc" value="Asc"
                                                        href="/urut">Terrendah</button>
                                                </div>
                                            </form>
                                        </div>
                                    </th>
                                    {{-- End of Urut Suhu --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $diri)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{ $diri->tanggal }}</td>
                                        <td>{{ $diri->jam }}</td>
                                        <td>{{ $diri->lokasi }}</td>
                                        <td>{{ $diri->suhu }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function searchType(type) {
            if (type.value == "tanggal") {
                document.getElementById("cari_tanggal").style.display = "block";
                document.getElementById("btn_cari_tanggal").style.display = "block";
                document.getElementById("cari_jam").style.display = "none";
                document.getElementById("btn_cari_jam").style.display = "none";

                document.getElementById("cari_lokasi").style.display = "none";
                document.getElementById("btn_cari_lokasi").style.display = "none";
                document.getElementById("cari_suhu").style.display = "none";
                document.getElementById("btn_cari_suhu").style.display = "none";
            } else if (type.value == "jam") {
                document.getElementById("cari_tanggal").style.display = "none";
                document.getElementById("btn_cari_tanggal").style.display = "none";
                document.getElementById("cari_jam").style.display = "block";
                document.getElementById("btn_cari_jam").style.display = "block";

                document.getElementById("cari_lokasi").style.display = "none";
                document.getElementById("btn_cari_lokasi").style.display = "none";
                document.getElementById("cari_suhu").style.display = "none";
                document.getElementById("btn_cari_suhu").style.display = "none";
            } else if (type.value == "lokasi") {
                document.getElementById("cari_tanggal").style.display = "none";
                document.getElementById("btn_cari_tanggal").style.display = "none";
                document.getElementById("cari_jam").style.display = "none";
                document.getElementById("btn_cari_jam").style.display = "none";

                document.getElementById("cari_lokasi").style.display = "block";
                document.getElementById("btn_cari_lokasi").style.display = "block";
                document.getElementById("cari_suhu").style.display = "none";
                document.getElementById("btn_cari_suhu").style.display = "none";
            } else if (type.value == "suhu") {
                document.getElementById("cari_tanggal").style.display = "none";
                document.getElementById("btn_cari_tanggal").style.display = "none";
                document.getElementById("cari_jam").style.display = "none";
                document.getElementById("btn_cari_jam").style.display = "none";

                document.getElementById("cari_lokasi").style.display = "none";
                document.getElementById("btn_cari_lokasi").style.display = "none";
                document.getElementById("cari_suhu").style.display = "block";
                document.getElementById("btn_cari_suhu").style.display = "block";
            }
        }
    </script>
@endsection

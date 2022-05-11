@extends('pages.master')

<head>
    <title>Peduli Diri | Table</title>
</head>

@section('halaman')
    <h1>Input</h1>
@endsection

@section('judul_card')
    Data Perjalanan
@endsection

@section('body')
    <div class="card-body">
        <form method="POST" action="simpanInput">
            {{ csrf_field() }}
            <div class="row">
                <div class="form-group col-12">
                    <label for="last_name">Tanggal</label>
                    <input id="tanggal" type="date" class="form-control bg-secondary" name="tanggal">
                </div>
                <div class="form-group col-12">
                    <label for="last_name">Jam</label>
                    <input id="jam" type="time" class="form-control bg-secondary" name="jam">
                </div>
                <div class="form-group col-12">
                    <label for="last_name">Lokasi</label>
                    <input id="lokasi" type="text" class="form-control bg-secondary" name="lokasi">
                </div>
                <div class="form-group col-12">
                    <label for="last_name">Suhu</label>
                    <input id="suhu" type="text" class="form-control bg-secondary" name="suhu">
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-danger btn-lg btn-block col-4">
                    Submit
                </button>
            </div>
        </form>
    </div>
    </div>
@endsection

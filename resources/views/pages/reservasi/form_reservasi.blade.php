@extends('layouts.dashboard.master')

@section('content')
<body>
    <!-- Right Panel -->
    <div class="content">
        <div class="animated fadeIn">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">Reservasi Meja Billiard</div>
                    <div class="card-body card-block">
                        <form method="POST" action="/insertreservasi">
                            @csrf
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-label">ID</label></div>
                                <div class="col-12 col-md-9">
                                <input type="text" name="id_reservasi" class="form-control">
                                    value="{{ $newIdFormatted }}" readonly placehorder="ID RESERVASI"> 
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-label">Nama</label></div>
                                <div class="col-12 col-md-9">
                                    <select class="form-control select" name="id_user" id="id_user">
                                        <option disabled value> Nama Peminjam </option>
                                        @foreach (&pelanggan as &p)
                                        <option value="{{ $p->id}}"> {{ $p->nama_lengkap}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="meja" class=" form-control-label">Pilih Meja</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="meja" id="meja" class="form-control">
                                        <option>Pilih Meja</option>
                                        <option value="1">Meja 1</option>
                                        <option value="2">Meja 2</option>
                                        <option value="3">Meja 3</option>
                                        <option value="4">Meja 4</option>
                                        <option value="5">Meja 5</option>
                                        <option value="6">Meja 6</option>
                                        <option value="7">Meja 7</option>
                                        <option value="8">Meja 8</option>
                                        <option value="9">Meja 9</option>
                                        <option value="10">Meja 10</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="tanggal" class=" form-control-label">Pilih Tanggal</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="date" id="tanggal" name="tanggal" class="form-control">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="no_meja" class=" form-control-label">No Meja</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="string" id="no_meja" name="no_meja" class="form-control">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="waktu" class=" form-control-label">Pilih Waktu</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="waktu" id="waktu" class="form-control">
                                            <option>Pilih Waktu</option>
                                            <option value="1">14.00 WIB</option>
                                            <option value="2">15.00 WIB</option>
                                            <option value="3">16.00 WIB</option>
                                            <option value="4">17.00 WIB</option>
                                            <option value="5">18.00 WIB</option>
                                            <option value="6">19.00 WIB</option>
                                            <option value="7">20.00 WIB</option>
                                            <option value="8">21.00 WIB</option>
                                            <option value="9">22.00 WIB</option>
                                            <option value="10">23.00 WIB</option>
                                            <option value="11">24.00 WIB</option>
                                            <option value="12">01.00 WIB</option>
                                            <option value="13">22.00 WIB</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="paket" class=" form-control-label">Pilih Kategori</label></div>
                                <div class="col-12 col-md-9">
                                <select name="kategori" id="kategori" class="form-control">
                                            <option>Pilih Kategori</option>
                                            <option value="1">Umum</option>
                                            <option value="2">Pelajar</option>
                                            <option value="3">Paket 1</option>
                                            <option value="4">Paket 2</option>
                                            <option value="5">Paket 3</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="lama_main" class=" form-control-label">Lama Main</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="number" id="lama_main" name="lama_main" class="form-control">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="harga_total" class=" form-control-label">Total Harga</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="number" id="harga_total" name="harga_total" class="form-control">
                                </div>
                            </div>

                            <div class="form-actions form-group">
                                <button type="button" onclick="window.history.back();" class="btn btn-secondary btn-sm">Kembali</button>
                                <button type="submit" value="Submit" class="btn btn-primary btn-sm" style="margin-left: auto;">Buat Pesanan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <style>
        .form-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }
        .meja-section, .date-section, .time-section, .paket-section {
            margin-bottom: 20px;
        }
        .meja-grid, .date-grid, .time-grid {
            display: flex;
            flex-wrap: wrap;
        }
        .meja-item, .date-item, .time-item {
            margin: 5px;
            padding: 10px;
            border: 1px solid #ccc;
            cursor: pointer;
        }
        .meja-item.booked {
            background-color: #f8d7da;
            color: #721c24;
            cursor: not-allowed;
        }
        .meja-item.available {
            background-color: #d4edda;
            color: #155724;
        }
    </style>
</body>
@endsection
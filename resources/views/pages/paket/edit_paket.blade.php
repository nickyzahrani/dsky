@extends('layouts.dashboard.master')

@section('content')
<body>
        <div class="content">
            <div class="animated fadeIn">
            <div class="col-lg-12">
                        <div class="card">
                        
                    </div>

                    <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">Edit Data Paket</div>
                        <div class="card-body card-block">
                        <form method="POST" action="{{ route('updatepaket', $data->id) }}">
                        @csrf
                                    <div class="form-group">
                                        <label>Waktu</label>
                                        <input type="text" class="form-control" name="waktu" value="{{ $data->waktu }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Kategori</label>
                                        <input type="text" class="form-control" name="kategori" value="{{ $data->kategori }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Durasi</label>
                                        <input type="number" class="form-control" name="durasi" value="{{ $data->durasi }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Harga</label>
                                        <input type="number" class="form-control" name="harga" value="{{ $data->harga }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Detail Paket</label>
                                        <input type="text" class="form-control" name="detail_paket" value="{{ $data->detail_paket }}">
                                    </div>
                                    <div class="form-actions form-group">
                                    <button type="button" onclick="window.history.back();" class="btn btn-secondary btn-sm">Kembali</button>
                                    <button type="submit" value="Submit" class="btn btn-primary btn-sm" style="margin-left: auto;">Submit</button>
                                    </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>


        </div><!-- .animated -->
    </div><!-- .content -->

    <div class="clearfix"></div>



<style>
        .form-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }
    </style>
</body>
@endsection

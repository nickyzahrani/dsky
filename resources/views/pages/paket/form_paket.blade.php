@extends('layouts.dashboard.master')

@section('content')
<body>
    <!-- Left Panel -->    <!-- /#left-panel -->

    <!-- Right Panel -->
    <!-- /header -->
        <!-- Header-->


        <div class="content">
            <div class="animated fadeIn">
            <div class="col-lg-12">
                        <div class="card">
                        
                    </div>

                    <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">Tambah Data Paket</div>
                        <div class="card-body card-block">
                        <form method="POST" action="{{route('insertpaket')}}">
                        @csrf
                            <div class="row form-group">
                                        <div class="col col-md-3"><label for="waktu" class=" form-control-label">Waktu</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="waktu" id="waktu" class="form-control">
                                                <option value="">Please Select</option>
                                                <option value="Sebelum 17:30">Sebelum 17:30</option>
                                                <option value="Setelah 17:30">Setelah 17:30</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="kategori" class=" form-control-label">Kategori</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="kategori" id="kategori" class="form-control">
                                                <option value="">Please Select</option>
                                                <option value="Umum">Umum</option>
                                                <option value="Pelajar">Pelajar</option>
                                                <option value="Paket 1">Paket 1</option>
                                                <option value="Paket 2">Paket 2</option>
                                                <option value="Paket 3">Paket 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Durasi</label>
                                        <input type="number" class="form-control" name="durasi">
                                    </div>
                                    <div class="form-group">
                                        <label>Harga</label>
                                        <input type="number" class="form-control" name="harga">
                                    </div>
                                    <div class="form-group">
                                        <label>Detail Paket</label>
                                        <input type="text" class="form-control" name="detail_paket">
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


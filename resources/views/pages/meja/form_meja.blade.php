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
                        <div class="card-header">Tambah Data Meja</div>
                        <div class="card-body card-block">
                        <form method="POST" action="{{route('insertdata')}}">
                        {{csrf_field()}}
                            <div class="row form-group">
                                        <div class="col col-md-3"><label for="no_meja" class=" form-control-label">No Meja</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="no_meja" id="no_meja" class="form-control">
                                                <option value="">Please Select</option>
                                                <option value="Meja 1">Meja 1</option>
                                                <option value="Meja 2">Meja 2</option>
                                                <option value="Meja 3">Meja 3</option>
                                                <option value="Meja 4">Meja 4</option>
                                                <option value="Meja 5">Meja 5</option>
                                                <option value="Meja 6">Meja 6</option>
                                                <option value="Meja 7">Meja 7</option>
                                                <option value="Meja 8">Meja 8</option>
                                                <option value="Meja 9">Meja 9</option>
                                                <option value="Meja 10">Meja 10</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="status" class=" form-control-label">Status</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="status" id="status" class="form-control">
                                                <option value="">Please Select</option>
                                                <option value="Available">Available</option>
                                                <option value="Booked">Booked</option>
                                            </select>
                                        </div>
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

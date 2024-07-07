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
                        <div class="card-header">Edit Data Meja</div>
                        <div class="card-body card-block">
                        <form method="POST" action="{{ route('updatemeja', $data->id) }}">
                        @csrf
                                    <div class="form-group">
                                        <label>No Meja</label>
                                        <input type="text" class="form-control" name="no_meja" value="{{ $data->no_meja }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <input type="text" class="form-control" name="status" value="{{ $data->status }}">
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

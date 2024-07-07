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
                        <div class="card-header">Edit Data Manager</div>
                        <div class="card-body card-block">
                        <form method="POST" action="{{ route('updatemanager', $data->id) }}">
                        @csrf
                                <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input type="text" class="form-control" name="nama_lengkap" value="{{ $data->nama_lengkap}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Nomor HP</label>
                                        <input type="text" class="form-control" name="no_hp" value="{{ $data->no_hp}}">
                                    </div> 
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="email" value="{{ $data->email}}">
                                    </div>
                                    <!-- <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control" name="username" value="{{ $data->username}}">
                                    </div> -->
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" name="password" value="{{ $data->password}}">
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

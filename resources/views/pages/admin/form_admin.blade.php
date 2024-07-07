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
                        <div class="card-header">Tambah Data Admin</div>
                        <div class="card-body card-block">
                        <form method="POST" action="{{route('insertadmin')}}">
                        @csrf
                        <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap">
                                    </div>
                                    <div class="form-group">
                                        <label>Nomor HP</label>
                                        <input type="text" name="no_hp" class="form-control" placeholder="Nomor HP">
                                    </div> 
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email" class="form-control" placeholder="Email">
                                    </div>
                                    <!-- <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" name="username" class="form-control" placeholder="Username">
                                    </div> -->
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Password">
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


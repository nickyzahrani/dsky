@extends('layouts.dashboard.master')

@section('content')
 
<body>
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="/dashboard">Dashboard</a></li>
                            <li><a href="#">Data Master</a></li>
                            <li class="active">Tabel Pelanggan</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Pelanggan</strong>
                <!-- <br><a href="/formpelanggan">
                <div style="display: flex;">
                <button type="button" class="btn btn-info" style="margin-left: auto;"><i class="fa fa-plus"></i></button>
                </div>
                </a> -->

                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <div class="table-responsive">
                                        @if(session('succes'))
                                        <div class="alert alert-success" role="alert">{{session('succes')}}
                                    </div>
                                    @endif
                                    <thead>
                                        <tr>
                                            <th>Id Pelanggan</th>
                                            <th>Nama Lengkap</th>
                                            <th>Nomor Handphone</th>
                                            <th>Email</th>
                                            <!-- <th>Username</th> -->
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                    $i = 1;
                                    @endphp
                                    @foreach($pelanggan as $hasil)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$hasil->nama_lengkap}}</td> 
                                            <td>{{$hasil->no_hp}}</td> 
                                            <td>{{$hasil->email}}</td>
                                            <!-- <td>{{$hasil->username}}</td> -->
                                            <td>
                                            <div class="btn-group">
                                            <a href="{{ route('editpelanggan', $hasil->id) }}">
                                                <button class="btn btn-success" type="submit" style="margin-right: 5px;">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                            </a>
                                            <form action="{{ route('hapuspelanggan', $hasil->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger" type="submit" value="Delete" onclick="return confirm('Yakin hapus data pelanggan ini?')">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                            </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


        <div class="clearfix"></div>


</body>

@endsection



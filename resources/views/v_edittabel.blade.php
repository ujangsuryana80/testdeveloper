@extends('layout.template')

@section('title', 'Tables Edit')

@section('content') 

    <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                
                                <div class="col-sm-6">
                                    <h4 class="page-title">Edit Table</h4>

                                </div>
                                <div class="col-sm-6">
                                
                                    <div class="float-right d-md-block">
                                        <a href="/" class="btn btn-secondary waves-effect"><i class="mdi mdi-reply"></i> Back</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">        
                                        <form action="/tabel/update/{{ $tabel->id_tabel }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input type="text" class="form-control" name="nama" value="{{ $tabel->nama }}"/>
                                                <input type="hidden" class="form-control" name="id_tabel" value="{{ $tabel->id_tabel }}"/>
                                                <div class="text-danger">
                                                    @error('nama_tabel')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" class="form-control" name="email" value="{{ $tabel->email }}" readonly />
                                                <div class="text-danger">
                                                    @error('email')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Foto</label>
                                                <img src="{{asset('bootsrap')}}/images/gallery/{{ $tabel->foto }}" width="300" height="300">
                                            </div>
                                            <div class="form-group">
                                                <label>Ganti Foto</label>
                                                <input type="file" class="form-control" name="foto" value="{{ $tabel->foto }}">
                                                <div class="text-danger">
                                                    @error('foto')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group mb-0">
                                                <div>
                                                    <button class="btn btn-primary btn-sm">Edit</button>
                                                </div>
                                            </div>                                            
                                        </form>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
    
                    </div>
                    <!-- container-fluid -->

                </div>
                <!-- content -->

                <footer class="footer">
                    © 2019 Veltrix <span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</span>.
                </footer>

            </div>

@endsection
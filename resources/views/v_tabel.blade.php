@extends('layout.template')

@section('title', 'Dashboard')

@section('content') 

       <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="page-title-box">
                        <div class="row align-items-center">
                            
                            <div class="col-sm-6">
                                <h4 class="page-title">Datatables Tabel</h4>

                            </div>
                            <div class="col-sm-6">
                            
                                <div class="float-right d-md-block">
                                    <a href="/tabel/add" class="btn btn-primary waves-effect waves-light"><i class="fa fa-plus"></i> Add</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                     @if (session('pesan'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4><i class="icon fa fa-check"></i> Succes !!</h4>
                            {{ session('pesan') }}.
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr style="text-align: center;">
                                            <th>No</th>
                                            <th>Foto</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @php $no = 1; @endphp
                                        @foreach ($tabel as $data)
                  
                                        <tr>
                                            <td align="center">{{ $no++ }}</td>
                                            <td align="center"><img src="{{asset('bootsrap')}}/images/gallery/{{ $data->foto }}" width="150" height="150"></td>
                                            <td>{{ $data->nama }}</td>
                                            <td>{{ $data->email }}</td>
                                            <td>
                                                <a href="/tabel/edit/{{ $data->id_tabel }}" class="btn btn-warning">Edit</a> 
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target=".bs-example-modal-lg{{ $data->id_tabel }}">Delete</button>
                                            </td>
                                        </tr>

                                        @endforeach
                                        
                                        </tbody>
                                    </table>

                                    @php $no = 1; @endphp
                                    @foreach ($tabel as $data)
                                    <!--  Modal content for the above example -->
                                    <div class="modal fade bs-example-modal-lg{{ $data->id_tabel }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Nama : {{ $data->nama }}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah anda yakin ingin menghapus data ini......???
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancel</button>
                                                    <a href="/tabel/delete/{{ $data->id_tabel }}" type="button" class="btn btn-primary waves-effect waves-light">Ya, Hapus</a>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->

                                    @endforeach
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
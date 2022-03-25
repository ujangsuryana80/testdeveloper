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
                                            <tr>
                                                <td align="center">1</td>
                                                <td align="center"><img src="{{asset('bootsrap')}}/images/gallery/work-1.jpg" width="150" height="150"></td>
                                                <td>Ujang Suryana</td>
                                                <td>ujangsuryana80@gmail.com</td>
                                                <td>
                                                    <a href="/tabel/edit" class="btn btn-warning">Edit</a> 
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target=".bs-example-modal-lg">Delete</button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <!--  Modal content for the above example -->
                                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title mt-0" id="myLargeModalLabel">Nama : Ujang Suryana</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah anda yakin ingin menghapus data ini......???
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancel</button>
                                                        <button type="button" class="btn btn-primary waves-effect waves-light">Ya, Hapus</button>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

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
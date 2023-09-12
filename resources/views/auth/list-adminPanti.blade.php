@extends('layout/template')

@section('title', 'Daftar Admin Panti')


<!-- start: page -->
@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Daftar Admin Panti</h2>
    
        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Forms</span></li>
                <li><span>Basic</span></li>
            </ol>
    
            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>

    <!-- start: page -->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="fa fa-caret-down"></a>
                            <!-- <a href="#" class="fa fa-times"></a> -->
                        </div>
        
                        <h2 class="panel-title">Daftar Admin Panti</h2>
                    </header>
                    <div class="panel-body">
                        <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mb-md">
                                            <a href="/registerAdminPanti">
                                            <button id="addToTable" class="btn btn-dark">Tambah <i class="fa fa-plus"></i></button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-bordered table-striped mb-none" id="datatable-tabletools">
                                    <thead>
                                        <tr>
                                            <th>NIK</th>
                                            <th>Nama Pengguna</th>
                                            <th>Jenis Kelamin</th>
                                            <th>No Telephone</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <!-- **hanya menampilkan admin  -->
                                        @foreach ($data['data_admin'] as $item)
                                        <tr class="gradeX">
                                            <td>{{$item['nik']}}</td>
                                            <td>{{$item['nama']}}</td>
                                            <td>{{$item['jenis_kelamin']}}</td>
                                            <td>{{$item['no_hp']}}</td>
                                            <td>{{$item['email']}}</td>
                                            <td class="actions">
                                                <a href="/user/admin-panti/{{ $item['email']}}" class="on-default edit-row">
                                                    <button class="btn-xs btn-warning"><i class="fa fa-pencil"></i> Edit</button></a>
                                                <a href="/user/admin-panti/{{ $item['email']}}"  class="on-default detail-row">
                                                    <button class="btn-xs btn-dark"><i class="fa fa-eye"></i> Detail</button></a>
                                            </td>
                                        </tr>
                                        @endforeach 
                                        
                                    </tbody> 
                                </table>
                                
                    </div>
                </section>
        
               
        
            </div>
        </div>
    <!-- end: page -->
</section>
				
@endsection
<!-- end: page -->

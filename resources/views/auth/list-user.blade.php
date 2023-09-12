@extends('layout/template')

@section('title', 'Daftar Pengguna')


<!-- start: page -->
@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Daftar Pengguna</h2>
    
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
        
                        <h2 class="panel-title">Daftar Pengguna</h2>
                    </header>
                    <div class="panel-body">
                                <table class="table table-bordered table-striped mb-none" id="datatable-tabletools">
                                    <thead>
                                        <tr>
                                            <!-- <th>NIK</th> -->
                                            <th>Nama Pengguna</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <!-- **hanya menampilkan user masyarakat -->
                                        @foreach ($data['data_user'] as $item)
                                        <tr class="gradeX">
                                            <td>{{$item['nama']}}</td>
                                            <td>{{$item['jenis_kelamin']}}</td>
                                            <td>{{$item['email']}}</td>
                                            <td>{{$item['status']}}</td>
                                            <td class="actions">
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

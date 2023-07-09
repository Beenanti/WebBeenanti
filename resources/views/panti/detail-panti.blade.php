@extends('layout/template')

@section('title', 'Detail Panti Asuhan')


<!-- start: page -->
@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Detail Panti Asuhan</h2>
    
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
        
                        <h2 class="panel-title">Detail Panti Asuhan</h2>
                    </header>
                    <div class="panel-body">
                    <div class="row g-3 panel-body">
                        <h5 style="font-size: 13pt;">Data Panti Asuhan</h5><hr style="margin-top:-8px" >
                        <div class="col-md-5">
                            <label for="nama_pengelola" >Nama Pengelola </label>
                            <input class="form-control" placeholder="Nama Pengelola" name="nama_pengelola" value="{{$panti['nama_pimpinan']}}" readonly>
                        </div>
                        <div class="col-md-5">
                            <label for="nama_panti" class="form-label">Nama panti</label>
                            <input type="email" class="form-control" name="nama_panti" value="{{$panti['nama_panti']}}" readonly>
                        </div>
                        <div class="col-md-5">
                            <br>
                            <label for="email" class="form-label">Nama Pimpinan Panti</label>
                            <input type="email" class="form-control" name="nama_pimpinan" value="{{$panti['nama_pimpinan']}}" readonly>
                        </div>
                    </div>
                    <div class="row g-3 panel-body">
                        <div class="col-md-4">
                            <label for="email" class="form-label">No. Telephone</label>
                            <input type="email" class="form-control" name="no_hp" value="{{$panti['nohp']}}" readonly>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email Panti</label>
                            <input type="email" class="form-control" name="email" value="{{$panti['email']}}" readonly>
                        </div>
                        <div class="col-md-6">
                            <br>
                            <label for="email" class="form-label">Sosial Media Panti</label>
                            <input type="email" class="form-control" name="sosmed" value="{{$panti['sosmed']}}" readonly>
                        </div>
                    </div>
                    <div class="row g-3 panel-body">
                        <div class="col-md-4">
                            <label for="email" class="form-label">Jumlah Anak Asuh</label>
                            <input type="text" class="form-control" name="jmlh_anak" value="{{$panti['jumlah_anak']}}" readonly>
                        </div>
                        <div class="col-md-4">
                            <label for="email" class="form-label">Jumlah Pengurus Panti</label>
                            <input type="text" class="form-control" name="jmlh_pengurus" value="{{$panti['nama_pimpinan']}}" readonly>
                        </div>
                        <div class="col-md-4">
                            <label for="email" class="form-label">Jenis Panti</label>
                            <input  class="form-control" name="jenis_panti" value="{{$panti['jenis']}}"  readonly>
                        </div>
                    </div>
                    <div class="row g-3 panel-body">
                        <h5 style="font-size: 13pt;">Action</h5><hr style="margin-top:-8px" >
                            <button type="button" class="mb-xs mt-xs mr-xs btn btn-warning">Edit</button>
                    </div>
                    </div>

                </section>
        
               
        
            </div>
        </div>
    <!-- end: page -->
</section>
				
@endsection
<!-- end: page -->

@extends('layout/template')

@section('title', 'Edit Panti Asuhan')


<!-- start: page -->
@section('content')
<script>
    // variabel global marker
    var marker;

    function taruhMarker(peta, posisiTitik) {

        if (marker) {
            // pindahkan marker
            marker.setPosition(posisiTitik);
        } else {
            // buat marker baru
            marker = new google.maps.Marker({
                position: posisiTitik,
                map: peta
            });
        }

        // isi nilai koordinat ke form
        document.getElementById("lat").value = posisiTitik.lat();
        document.getElementById("lng").value = posisiTitik.lng();

    }

    function initialize() {
        var propertiPeta = {
            center: new google.maps.LatLng(-0.867959, 100.455848),
            zoom: 11,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);

        // even listner ketika peta diklik
        google.maps.event.addListener(peta, 'click', function(event) {
            taruhMarker(this, event.latLng);
        });

    }


    // event jendela di-load  
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Panti Asuhan</h2>

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

                    <h2 class="panel-title">Edit Panti Asuhan</h2>
                </header>
                <form class="form-horizontal form-bordered" action="/panti/edit/{{$panti['id_panti']}}" method="POST">
                    @method('PATCH')
                    @csrf ()
                    <div class="panel-body">
                        <!-- Input Biasa -->
                        <div class="form-group">
                            <label class="col-md-3 control-label">Nama Panti</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="panti" name="nama_panti" value="{{$panti['nama_panti']}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Nama Pimpinan Panti</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="panti" name="nama_pimpinan_panti" value="{{$panti['nama_pimpinan']}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">No Telephone</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="panti" name="no_hp" value="{{$panti['nohp']}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Alamat</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="alamat" name="alamat" value="{{$panti['alamat']}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Email Panti</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="panti" name="email" value="{{$panti['email']}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Sosial Media Panti</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="panti" name="sosmed" value="{{$panti['sosmed']}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Jumlah Anak Asuh</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="panti" name="jmlh_anak" value="{{$panti['jumlah_anak']}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Jumlah Pengurus Panti</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="panti" name="jmlh_pengurus" value="{{$panti['jumlah_pengurus']}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Map</label>
                            <div id="googleMap" style="width:70%;height:380px;"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Koordinat</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="lat" name="lat" value="{{$panti['koordinat'][0]}}" required><br>
                                <input type="text" class="form-control" id="lng" name="long" value="{{$panti['koordinat'][1]}}" required>
                            </div>
                        </div>
                        <!-- <div class="form-group">
                            <label class="col-md-3 control-label">Latittude</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="lat" name="lat" value="{{$panti['koordinat'][0]}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Longitude</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="long" name="long" value="{{$panti['koordinat'][1]}}" required>
                            </div>
                        </div> -->
                        <div class="form-group">
                            <label class="col-md-3 control-label">Jenis Panti</label>
                            <div class="col-md-6">
                                <select class="form-control populate" name="jenis_panti" required>
                                    <option label="Jenis Panti" disabled selected></option>
                                    <option value="1">Panti Anak</option>
                                    <option value="2">Panti Jompo</option>
                                    <option value="3">Panti Swasta</option>
                                    <option value="{{$panti['jenis']}}">{{$panti['jenis']}}</option>
                                </select>
                            </div>
                        </div>
                        {{-- Hanya untuk admin master, pada admin panti tidak ada memasukkan status panti --}}
                        <div class="form-group">
                            <label class="col-md-3 control-label">Status Panti</label>
                            <div class="col-md-6">
                                <select class="form-control populate" name="status_panti" required>
                                    <option label="Status Panti" disabled selected></option>
                                    <option value="1">Aktif</option>
                                    <option value="2">Tidak Aktif</option>
                                    <option value="{{$panti['status']}}">{{$panti['status']}}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <footer class="panel-footer">
                        <button class="btn btn-primary" type="submit">Submit </button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    </footer>
                </form>
            </section>
        </div>
    </div>
    <!-- end: page -->
</section>

@endsection
<!-- end: page -->
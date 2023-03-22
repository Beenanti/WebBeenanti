@extends('layout/template')

@section('title', 'Edit Profil')

<!-- start: page -->
@section('content')
				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Edit Profil</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Edit Profil</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
					<div class="row">
							<div class="col-lg-12">
								<section class="panel">
									<header class="panel-heading">
										<h2 class="panel-title"> Edit Profil</h2>
									</header>
									<div class="panel-body">
										<form class="form-horizontal form-bordered" action="" method="post">
											@csrf
                                            <div class="form-group">
												<label class="col-md-3 control-label" for="foto">Foto</label>
												<div class="col-md-6">
													<section class="form-group-vertical">
														<input required class="form-control" type="file" name="foto" id="foto" class="form-control @error('foto') is-invalid @enderror" placeholder="Email">
													</section>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label" for="nik">NIK</label>
												<div class="col-md-6">
													<input  type="text" id="nik" name="nik" class="form-control @error('nik') is-invalid @enderror" placeholder="NIK (Nomor Induk Kependudukan)" required>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label" for="nama">Nama Pengelola Panti</label>
												<div class="col-md-6">
													<input  type="text" id="nama" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Nama Pengelola Panti" required>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label" for="tempat_lahir">Tempat Lahir</label>
												<div class="col-md-6">
													<input  type="text" id="tempat_lahir" name="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror" placeholder="Tempat Lahir" required>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label" for="tgl_lahir">Tanggal Lahir</label>
												<div class="col-md-6">
													<input  type="date" id="tgl_lahir" name="tgl_lahir" class="form-control @error('tgl_lahir') is-invalid @enderror" placeholder="Tanggal Lahir" required>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label" for="jenis_kelamin">Jenis Kelamin</label>
												<div class="col-md-6">
													<select required name="jenis_kelamin" id="jenis_kelamin" class="form-control mb-md">
														<option hidden disabled selected><i>Jenis Kelamin</i></option>
														<option value="lk">Laki-laki</option>
														<option value="p">Perempuan</option>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label" for="alamat">Alamat Lengkap</label>
												<div class="col-md-6">
													<input  type="text" id="alamat" name="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="Alamat Lengkap" required>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label" for="nohp">Phone</label>
													<div class="col-md-6 control-label">
														<div class="input-group">
															<span class="input-group-addon">
																<i class="fa fa-phone"></i>
															</span>
															<input required type="number" id="nohp" name="nohp" placeholder="08xxxxxxxxxx" class="form-control">
														</div>
													</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label" for="email">E-Mail</label>
												<div class="col-md-6">
													<section class="form-group-vertical">
														<input required class="form-control" type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email">
													</section>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label" for="password">Password</label>
												<div class="col-md-6">
													<section class="form-group-vertical">
														<input required class="form-control last" type="password" name="password" id="password" placeholder="Password">
													</section>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-9 col-sm-offset-7">
													<button type="submit" class="btn btn-primary">Submit</button>
													<button type="reset" class="btn btn-default">Reset</button>
												</div>
											</div>
										</form>
									</div>
								</section>

				</section>
@endsection
<!-- end: page -->

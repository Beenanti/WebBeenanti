@extends('layout/template')

@section('title', 'Register Admin Master')

<!-- start: page -->
@section('content')
				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Registrasi</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Registrasi</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
					<div class="row">
							<div class="col-lg-12">
								<section class="panel">
									<header class="panel-heading">
										<h2 class="panel-title">Registrasi</h2>
									</header>
									<div class="panel-body">
										<form class="form-horizontal form-bordered" action="" method="post">
											@csrf
											<div class="form-group">
												<label class="col-md-3 control-label" for="nama">Nama</label>
												<div class="col-md-6">
													<input  type="text" id="nama" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Nama Pengelola Panti" required>
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

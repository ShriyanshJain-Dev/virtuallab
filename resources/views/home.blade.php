<html>
<head>
	<title> Admin Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.1/css/mdb.css">
<link rel="stylesheet" type="text/css" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <link rel="shortcut icon" href="public/tust/images/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="public/tust/images/favicon/apple-touch-icon.png">
    
	<style type="text/css">
		h1{font-family:Arial, Helvetica, sans-serif;color:#999999;}
		body {
			background-color: #2A3F54 !important;
		}

		.card-block {
			color: #000 !important;
			color: #fff;
			margin-bottom: 0;
			padding: 0.9rem;
		}
		h4{
			margin-top: 10px;
			font-weight: 300;
			font-size: 18px;	
		}
	</style>
</head>
<body>
	
	<div class="container">
			
			<!-- page content -->
			<div class="col-md-10 col-md-offset-1" style="padding: 4%;">            
				<div class="card classic-admin-card card-primary" style="background-color: #fff;height: 550px;">
					<div class="card-block">
						<div class="row">
							<section style="padding:1em;">
								<div class="row">
									<div class="col-md-8 col-md-offset-2">
										<img src="http://appraisal.poornima.org/public/img/poornima1.png" class="img-responsive">
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 text-center">
										<h1>Admin Panel</h1>
										<hr>
									</div>
								@if(Session::has('status'))
									<h2 align="center">{{Session::get('status')}}</h2>
								@endif
								</div>
								<div class="row">
									<div class="col-md-12">
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<!--Card Primary-->
										<center>
										<div class="card classic-admin-card card-primary">
											<div class="card-block">
												<div class="pull-xs-right">
													<i class="fa fa-user fa-5x"></i>
												</div>
												<h4>Employee Log In</h4>
											</div>
											<div class="form-group">
											<div align="center">
												<a href="{{asset('authLevel/3')}}"><img src="{{asset('public/img/gplus.png')}}" style="width: 40%"></a>
											</div>	
											</div>
										</div>
										</center>
										<!--/.Card Primary-->
									</div>
								</div>
							</section>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
						</div>
					</div>
				</div>
			</div>
		</div>

</body>
</html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
    .container{
	box-shadow: 0 2px 5px 0 rgba(0,0,0,0.10), 0 2px 10px 0 rgba(0,0,0,0.12);
	margin-top: 20px;
	margin-bottom: 20px;
	padding: 1em 16px;
	border-radius: 3%;
	width: 60%;
	margin-left: 16%; 
  }	
  hr{
	border-top: 2px dashed #eee !important;
  }
    </style>
</head>
<body>
    <div class="jumbotron" align="center">
        <h1>Login Page</h1>
    </div>
    <div class="col-md-12">
        <div class="container">
        
          
          <div class="col-md-6">
            <div class="form-group" align="center">
             		{{Form::label('student','Student')}}
                    <div align="center">
                       <a href="{{asset('authLevel/1')}}"><img src="{{asset('public/img/gplus.png')}}" style="width: 70%"></a>
                    </div>
            </div>
          </div>
        
          <div class="col-md-6">
            <div class="form-group" align="center">
             		{{Form::label('faculty','Faculty')}}
             	    <div align="center">
                      <a href="{{asset('authLevel/2')}}"><img src="{{asset('public/img/gplus.png')}}" style="width: 70%"></a>
                  </div>
            </div>
          </div>
        </div>
        
    </div>

</body>
</html>

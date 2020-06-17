@extends('layouts.master')
@section('title')
Create Experiment
@endsection
@section('content')
    <section class="content-header">
      <h1>Create Experiment</h1>
    </section>
   
   <section class="content"> 
      <!-- Default box -->
      <div class="box">
       @include('error')  
          <div class="box">
		
        <div class="box-body"> 
			<div class="row">
        {!!Form::open(['url'=>route('SucessFullexperiment'),'method'=>'post','enctype'=>'multipart/form-data'])!!}
          <!-- <form action="insert.php" method="post" enctype="multipart/form-data"> -->
			 <div class="col-md-6">
            <div class="form-group">
              {{Form::label('lab','Lab Name') }} 
            {{Form::select('lab',$lab,null,['class'=>'form-control','id'=>'lab','required'])}}
            </div>
            </div>
			 <div class="col-md-3">
             <div class="form-group">
               {{Form::label('experiment','Experiment Name ')}} 
              {{Form::textarea('experiment','',['id'=>'experiment','class'=>'form-control','style'=>'height:50px','required'])}}
            </div>
            </div>
			<div class="col-md-3">
              <div class="form-group">
               {{Form::label('algorithm','Algorithm')}}
				   <!--  {{Form::file('file',['id'=>'uploadexperiment','class'=>'form-control','required'])}} -->
				   {{Form::textarea('algorithm','',['id'=>'algorithm','class'=>'form-control','style'=>'height:300px','required'])}}
            </div>
		
            </div>
			 <div class="col-md-9">
            <div width="100%" align="center">
              {{Form::submit('Create',['class'=>'btn btn-info','style'=>'width: 30%'])}}
            </div>
            </div>
          {!!Form::close()!!}
		  </div>
		 <hr>
		  {!!Form::open(['url'=>route('SucessFullexperiment'),'method'=>'post'])!!}
			<div class="form-group">
            <body> 
              <table id="expdetails"  class="table table-responsive">
                  <thead>
                      <tr>
                        <th>SNo</th>
                        <th>Lab Name</th>
                        <th>Experiment</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
               </table> 
              </body>   
            </div>
         {!!Form::close()!!}
        </div>
		
        <!-- /.box-body -->
      </div>
      </div>
	  </section>
      <!-- /.box -->
    
   

@endsection

@section('scripts')
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script>
 $(document).ready(function() {
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
    $('#expdetails').DataTable( {
        "ajax": '{{route('ExperimentAjaxTable')}}'
    } );
} );
  
</script>  

<script>  
	function DeleteExperiment(Lab_id){
		//console.log(Lab_id);
	  $.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	  });
	  $.ajax({
		url:"{{route('AjaxDeleteExperiment')}}",
		type:"post",
		data:{'Lab_id':Lab_id},
		success:function(data){
		 location.reload();
		}
	  });
	  
	  return data;
	}
</script>	
	@endsection
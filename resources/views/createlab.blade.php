@extends('layouts.master')
@section('title')
Create Lab
@endsection
@section('content')
    <section class="content-header">
      <h1>Create</h1>
    </section>
   
 <section class="content">  
      <!-- Default box -->
      <div class="box">
       @include('error')
          <div class="box">
		  
        <div class="box-body">
			 
        {!!Form::open(['url'=>route('SucessFull'),'method'=>'post','enctype'=>'multipart/form-data'])!!}
          <!-- <form action="insert.php" method="post" enctype="multipart/form-data"> -->
           
			 <div class="col-md-3">
            <div class="form-group">
              {{Form::label('sem','Semester') }} 
            {{Form::select('sem',[''=>'Select Semester',1=>1,2=>2,3=>3,4=>4,5=>5,6=>6,7=>7,8=>8],null,['class'=>'form-control','id'=>'sem','required'])}}
            </div>
            </div>
			 <div class="col-md-3">
             <div class="form-group">
               {{Form::label('lab','Lab Name ')}}
              {{Form::text('lab','',['id'=>'lab','class'=>'form-control','required'])}}
            </div>
            </div>
			 <div class="col-md-3">
			 <div class="form-group">
              {{Form::label('compiler','Compiler') }} 
            {{Form::select('compiler',$Compiler,null,['class'=>'form-control','id'=>'compiler','required'])}}
            </div>
			</div>
			 <div class="col-md-3">
              <div class="form-group">
               {{Form::label('about','About Lab')}}
               {{Form::textarea('about','',['id'=>'about','class'=>'form-control','style'=>'height:50px','required'])}}
            </div>
            </div>
			 <div class="col-md-9">
            <div width="100%" align="center">
              {{Form::submit('Create',['class'=>'btn btn-info','style'=>'width: 30%'])}}
            </div>
            </div>
          {!!Form::close()!!}
		  
		 <hr>
		 
		  <div class="col-md-12">
		  <div class="row">
		  {!!Form::open(['url'=>route('SucessFull'),'method'=>'post'])!!}
			<div class="form-group">
            <body>
              <table id="labdetails"  class="table table-responsive">
                  <thead>
                      <tr>
                        <th>SNo</th>
                        <th>Semester</th>
                        <th>Lab Name</th>
						<th>Compiler</th>
						<th>About</th>
                        <th>Edit</th>
                        <th>Delete</th> 
                      </tr>
                    </thead>
               </table> 
              </body>   
            </div>
         {!!Form::close()!!}
        </div>
		 </div>
		 
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
    $('#labdetails').DataTable( {
        "ajax": '{{route('AjaxTable')}}'
    } );
} );
  
</script>
 
<script>
	function DeleteLab(Lab_id){
		//console.log(Lab_id);
	  $.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	  });
	  $.ajax({
		url:"{{route('AjaxDeleteLab')}}",
		type:"post",
		data:{'Lab_id':Lab_id},
		success:function(data){
		 location.reload();
		}
	  });
	  
	  return data;
	}
	
</script>

<script>
	function EditButton(Lab_id){
		$("#Department"+Lab_id).prop('disabled',false);
		$("#Semester"+Lab_id).prop('disabled',false);
		$("#Lab_name"+Lab_id).prop('disabled',false);
		$("#About"+Lab_id).prop('disabled',false);
		$("#button"+Lab_id).replaceWith("<input type='button'  class='btn btn-info' onclick='AjaxUpdateButton("+Lab_id+")' value='Update'>");     
	}
	</script>
	<script>
	function AjaxUpdateButton(Lab_id){
		var dept=$("#Department"+Lab_id).val();
		var sem=$("#Semester"+Lab_id).val();
		var labname=$("#Lab_name"+Lab_id).val();
		var about=$("#About"+Lab_id).val();
		$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	  });
	  $.ajax({
		url:"{{route('AjaxEditLab')}}",
		type:"post",
		data:{'Lab_id':Lab_id,'Department':dept,'Semester':sem,'Lab_name':labname,'About':about},
		success:function(data){
		 location.reload();
		}
	  });	  
	 
	  }
	  
</script>
	@endsection
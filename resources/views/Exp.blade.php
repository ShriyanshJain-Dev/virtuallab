@extends('layouts.master')
@section('title')
Experiment Page
@endsection
@section('content')
    <section class="content-header">
      <h1>Experiment Details</h1>
    </section>
    <section class="content">
    
      <!-- Default box -->
		
	 <div class="box">
	  <div class="box-body">
		<div class="form-group"> 
			{{Form::label('aboutexp','Experiment')}}
			<pre>{{$data[0]->Exp_Name}}</pre>
		</div>
       </div>
	   </div>
        <div class="box">
        <div class="box-body">
		<div class="row">
          <div class="col-md-12"> 
            <div class="form-group" align="center">
             		{{Form::label('algorithm','Algorithm')}}
						<pre>{{$data[0]->Algorithm}}</pre>
            </div>
          </div>
		  <!--
          <div class="col-md-6">
            <div class="form-group" align="center">
				<div class="col-md-6">
             		{{Form::label('input','Input')}}
					{{Form::text('input','',['id'=>'input','class'=>'form-control','style'=>'height:80px'])}}
				</div>
             	 <div class="col-md-6">
             		{{Form::label('output','Output')}}
					{{Form::textarea('output','',['id'=>'output','class'=>'form-control','disabled','style'=>'height:80px'])}}
				</div>
            </div>
        </div>
		-->
		</div>
		
        <!-- /.box-body -->
	
		<div class="row">
		 <!-- {!!Form::open(['method'=>'post','enctype'=>'multipart/form-data'])!!}  -->
		 <div class="col-md-6" class="form-group" align="center"> 
             		{{Form::label('code','Code')}}
					{{Form::textarea('code',isset($data['source'])?$source:'',['id'=>'code','class'=>'form-control','style'=>'height:300px','method'=>'post'])}}
		</div>
			<!--
			<div class="col-md-12">
            <div width="100%" align="center">
              {{Form::submit('Run',['class'=>'btn btn-info','style'=>'width: 30%'])}}
            </div>
            </div>
			-->
		
		  
		<div class="col-md-6"class="form-group" align="center">
            <div class="form-group" align="center">
				<div class="row">
             		{{Form::label('input','Input')}}
					{{Form::textarea('input','',['id'=>'input','class'=>'form-control','style'=>'height:80px;width:350px'])}}
				</div>
				<div class="row" style="padding-top:30px;padding-bottom:30px">
					 {{Form::button('Submit',['class'=>'btn btn-info','style'=>'width: 30%','onclick'=>'SubmitCode()'])}}
				</div>
				<div class="row">
             		{{Form::label('output','Output')}}
					{{Form::textarea('output','',['id'=>'output','class'=>'form-control','disabled','style'=>'height:80px;width:350px'])}}
				</div>
            </div>
        </div>
		{!!Form::close()!!}
	  </div>
	  
      </div>
	  </div>
	</section>

@endsection
@section('scripts')
<script>
	function SubmitCode(){
		/* var code = $("#code").val();
		console.log(code);
		var input = $("#input").val();
		console.log(input);
		var compiler_id ={{$compiler_id}};
		console.log(compiler_id); */
		$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	  });
		
	   $.ajax({
		url:"{{route('AjaxSubmitCode')}}",
		type:"post",
		data:{'compiler_id':{{$compiler_id}},'input':$("#input").val(),'code':$("#code").val()},
		success:function(data){
			console.log(data);
			$('#output').val(data['output']);
		}
	  });
	}
</script>

	@endsection














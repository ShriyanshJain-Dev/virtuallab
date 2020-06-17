@extends('layouts.master')
@section('title')
Experiment Information
@endsection
@section('content')
  <section class="content-header">
    <h1>List Of Experiments</h1>
  </section>
    <!-- Main content -->
  <section class="content">
	<div class="box">
      <div class="box-body">
		<div class="form-group"> 
			{{Form::label('about','About Lab')}}
			<input type='textarea' name="about" class="form-control" disabled value="{{$about[0]->About}}">
		</div>
       </div>
	 
    <div class="box">
       <div class="box-body">
          <form action="" method="post">
            <div class="form-group">
              <body>
                <table id="exp_details" class="table table-responsive"> 
                  <thead>
                    <tr>
					<th>S.No</th>
                      <th>Experiments</th>
                      <th>Click</th>
                    </tr>
                  </thead>
				  <tbody>
					@foreach($data as $key => $value)
						<tr>
							<td>{{$value->Exp_id}}</td>
							<td>{{$value->Exp_Name}}</td>
							<td><a href="{{url('Exp_Details',array($value->Exp_id,$about[0]->compiler_name))}}" class="link">View Details</a></td>
						</tr>
					@endforeach
				  </tbody>
				  </table>
				
              </body>
            </div>
          </form>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection
@section('scripts')


<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
     var id='{{$id}}';
	
	 $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $('#about_details').DataTable( {
     });
});
  </script>

<script>
$(document).ready(function() {
     var id='{{$id}}';
	 $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $('#exp_details').DataTable( {
     });
});
  
</script>

@endsection
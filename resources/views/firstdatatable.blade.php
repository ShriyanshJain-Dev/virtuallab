@extends('layouts.master')
@section('title')
Registration Page
@endsection
@section('content')
    <section class="content-header">
      <h1>Present Labs</h1>
    </section>
    <div>
    <section class="content">    
      <!-- Default box -->
      <div class="box">
       <div class="box-body">
          {!!Form::open(['url'=>route('SucessFull'),'method'=>'post'])!!}
            <div class="form-group">
            <body>
              <table id="labdetails"  class="table table-striped">
                  <thead>
                      <tr>
                        <th>SNo</th>
                        <th>Department</th>
                        <th>Semester</th>
                        <th>Lab Name</th>
                        <th>View</th>
                      </tr>
                    </thead>
               </table> 
              </body>   
            </div>
         {!!Form::close()!!}
        </div>
        <!-- /.box-body -->
      </div>
    </section>
    </div>

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
@endsection
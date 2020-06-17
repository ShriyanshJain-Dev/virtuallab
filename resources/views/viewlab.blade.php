@extends('layouts.master')
@section('title')
Lab Information
@endsection
@section('content')
  <section class="content-header">
    <h1>Lab Information</h1>
  </section>
    <!-- Main content -->
  <section class="content">
	

    <div class="box"> 
       <div class="box-body">
          <form action="" method="post">
            <div class="form-group">
              <body>
                <table id="labinfo" class="table table-responsive">
                  <thead>
                    <tr>
                      <th>S.No</th>
                      <th>Lab Name</th>
                      <th>Semester</th>
                      <th>Click</th>
                    </tr>
                  </thead>
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
     $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $('#labinfo').DataTable( {
        "ajax": '{{route("Ajax_st_Table")}}'
     });
});
  
</script>
@endsection
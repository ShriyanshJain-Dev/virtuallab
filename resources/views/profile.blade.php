@extends('layouts.master')
@section('title')
Registration Page
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Student Profile
        
      </h1>
    </section>
    
    <!-- Main content -->
    <div class="box"> 
     @include('error')
      <div class="box-body">
        {!!Form::open(['url'=>route('Update'),'method'=>'post'])!!}
           <section class="content">
           <input type="hidden" name="sid" value="{{$student[0]->student_id}}">
                 <div class="col-md-3">
                   <div class="box box-primary">
                      <div class="box-body box-profile">
                            <img class="profile-user-img img-responsive img-circle" src="{{asset($student[0]->url)}}" alt="User Profile Picture">
                            <h3 class="profile-username text-center">{{$student[0]->studentname}}</h3>
                            <p class="text-muted text-centert">Student
                                

                            <ul class="list-group list-group-unbordered">
                              <li class="list-group-item">
                                <b>College :</b><a class="pull-right">{{$student[0]->college_name}}</a>
                              </li>
                              <li class="list-group-item">
                                <b>Department :</b><a class="pull-right">{{$student[0]->department_name}}</a>
                              </li>
                            </ul>
                      </div>
                    </div>
                    <div class="box box-primary">                 
                    </div>
                 </div>
                 <div class="col-md-9">
                    <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#activity" data-toggle="tab">Student Profile</a></li>
                    </ul>
                      <div class=form-group>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="name">E-mail Id:</label>
                            <input type='email' name="email_update" class="form-control" id="email_update" value="{{$student[0]->studentemail}}">
                          </div>
                          <div class="form-group">
                              <label for="year">Year:</label>
                              {{Form::select('year',[1=>1,2=>2,3=>3,4=>4],$student[0]->year,['class'=>'form-control','id'=>'year_update'])}} 
                              </select>
                         </div>
                          <div class="form-group">
                              <label for="college">College:</label>
                              {{Form::select('college',$college,$student[0]->cid,['class'=>'form-control','id'=>'college_update','onchange'=>'filldept(this.value)'])}}
                              
                              </select>
                          </div>
                          <div class="form-group">
                              <label for="Department">Department:</label>
                              {{Form::select('department',[$student[0]->did => $student[0]->department_name],null,['class'=>'form-control','id'=>'department_update'])}}
                          </div>
                        </div>
                      <div class=col-md-6>
                            <div class="form-group"> 
                              <label for="address">Address:</label>
                              <input type='text' name="address_update" class="form-control" id="address_update" value="{{$student[0]->address}}">
                          </div>
                                        
                        <div class="form-group">
                             <label for="state">State:</label>
                             {{Form::select('state',$state,$student[0]->sid,['class'=>'form-control','id'=>'state_update','onchange'=>'fillcity(this.value)'])}}
                               
                            </select>
                      </div>
                     <div class='form-group'>
                       <label for="city">City:</label>
                        {{Form::select('city',[$student[0]->cid => $student[0]->city_name],null,['class'=>'form-control','id'=>'city_update'])}}
                    </div>
                    <div width="100%" align="center">
                        <button type="submit" class="btn btn-info" name="save" style="width:60%">Save</button>
                    </div>

                </div>
                      </div>
                    </div>                 
                 </div>

           </section>
         {!!Form::close()!!}
      </div>
    </div>

@endsection
@section('scripts')
<script>
 function filldept(college_id){
  
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $.ajax({
    url:"{{route('AjaxGetDept')}}",
    type:"post",
    data:{college_id:college_id},
    success:function(data){
      var html='';
      $.each(data,function(key,value){
        html+='<option value="'+value.id+'">'+value.department_name+'</option>';
      });
      $("#department_update").empty().append(html);
    }
  });
 }

 function fillcity(state_id){
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
$.ajax({
    url:"{{route('AjaxGetCity')}}",
    type:"post",
    data:{state_id:state_id},
    success:function(data){
      var html='';
      $.each(data,function(key,value){
        html+='<option value="'+value.id+'">'+value.city_name+'</option>';
      });
      $("#city_update").empty().append(html);
    }
  });
 }
</script>
@endsection
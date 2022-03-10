@extends('layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit </h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href=""> Back</a>
        </div>
    </div>
</div>

@foreach ($employee as $emp)
@endforeach
<form action="{{ route('employee.update',$emp->emp_id) }}" method="POST">
@csrf
@method("PUT")   

    <div class="row">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif   
    </div>   

    
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <strong>รหัสพนักงาน</strong>
                <input type="text" name="emp_id" value="{{ $emp->emp_id }}" class="form-control" placeholder="รหัสพนักงาน">
            </div>
            <div class="form-group">
                <strong>ชื่อ</strong>
                <input type="text" name="emp_name" value="{{ $emp->emp_name }}" class="form-control" placeholder="ชื่อ">
            </div>
            <div class="form-group">
                <strong>นามสกุล</strong>
                <input type="text" name="emp_lname" value="{{ $emp->emp_lname }}" class="form-control" placeholder="นามสกุล">
            </div>
            <div class="form-group">
                <strong>ตำแหน่งงาน</strong>
                <input type="text" name="job" value="{{ $emp->job }}" class="form-control" placeholder="ตำแหน่งงาน">
            </div>
            <div class="form-group">
                <strong>จำนวนชั่วโมง</strong>
                <input type="text" name="chg_hour" value="{{ $emp->chg_hour }}" class="form-control" placeholder="จำนวนชั่วโมง">
            </div> 
            <div class="card-footer ml-auto mr-auto" align=center>
                <button type="reset" class="btn btn-danger">ยกเลิก</button>
                <button type="submit" class="btn btn-primary">แก้ไข</button> 
            </div>                                                                    
        </div>
     </div>
</form>
@endsection

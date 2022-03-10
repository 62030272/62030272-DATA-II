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

@foreach ($working as $work)
@endforeach
<form action="{{ route('working.update',$work->emp_id) }}" method="POST">
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
                <strong>วันส่งงานโครงการ</strong>
                <input type="date" name="date_work" value="{{ $work->date_work }}"  placeholder="วันส่งงานโครงการ" required pattern="\d{4}-\d{2}-\d{2}">
            </div>
            <div class="form-group">
                <strong>รหัสโครงการ</strong>
                <input type="text" readonly name="proj_id" value="{{ $work->proj_id }}" class="form-control" placeholder="รหัสโครงการ">
            </div>
            <div class="form-group">
                <strong>รหัสพนักงาน</strong>
                <input type="text" readonly name="emp_id" value="{{ $work->emp_id }}" class="form-control" placeholder="รหัสพนักงาน">
            </div>
            <div class="form-group">
                <strong>ชั่วโมงการทำงาน</strong>
                <input type="text" name="work_hours" value="{{ $work->work_hours }}" class="form-control" placeholder="ชั่วโมงการทำงาน">
            </div>
            <div class="card-footer ml-auto mr-auto" align=center>
                <button type="reset" class="btn btn-danger">ยกเลิก</button>
                <button type="submit" class="btn btn-primary">แก้ไข</button> 
            </div>                                                                    
        </div>
     </div>
</form>
@endsection

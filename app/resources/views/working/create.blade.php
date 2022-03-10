@extends('layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add Working</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href=""> Back</a>
        </div>
    </div>
</div>
   
<form action="{{ route('working.store') }}" method="POST">
    @csrf
  
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
         
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <strong>วันส่งงานโครงการ</strong>
                <input type="date" name="date_work"  placeholder="วันส่งงานโครงการ" required pattern="\d{4}-\d{2}-\d{2}">
            </div>
            <div class="form-group">
                <strong>รหัสโครงการ</strong>
                <select class="form-control" id="proj_id" name="proj_id" required>
                    @foreach ($project as $pj)
                    <option value="{{ $pj->proj_id }}">{{ $pj->proj_id }} &nbsp {{ $pj->proj_name }}</option>
                    @endforeach
                </select>
                <!--input type="text" name="proj_id" class="form-control" placeholder="รหัสโครงการ" -->
            </div>
            <div class="form-group">
                <strong>รหัสพนักงาน</strong>
                <select class="form-control" id="emp_id" name="emp_id" required>
                    @foreach ($employee as $emp)
                    <option value="{{ $emp->emp_id }}">{{ $emp->emp_id }} &nbsp {{ $emp->emp_name }} &nbsp {{ $emp->emp_lname }} </option>
                    @endforeach
                </select>
                <!--input type="text" name="emp_id" class="form-control" placeholder="รหัสพนักงาน"-->
            </div>
            <div class="form-group">
                <strong>ชั่วโมงการทำงาน</strong>
                <input type="text" name="work_hours" class="form-control" placeholder="ชั่วโมงการทำงาน">
            </div>
            <div class="card-footer ml-auto mr-auto" align=center>
                <button type="reset" class="btn btn-danger">ยกเลิก</button>
                <button type="submit" class="btn btn-primary">บันทึก</button> 
            </div>                                                                    
        </div>
     </div>
</form>
@endsection

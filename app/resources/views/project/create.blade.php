@extends('layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add Project</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href=""> Back</a>
        </div>
    </div>
</div>
   
<form action="{{ route('project.store') }}" method="POST">
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
                <strong>รหัสโครงการ</strong>
                <input type="text" name="proj_id" class="form-control" placeholder="รหัสโครงการ">
            </div>
            <div class="form-group">
                <strong>ชื่อโครงการ</strong>
                <input type="text" name="proj_name" class="form-control" placeholder="ชื่อโครงการ">
            </div>
            <div class="form-group">
                <strong>ประเภทโครงการ</strong>
                <input type="text" name="proj_type" class="form-control" placeholder="ประเภทโครงการ">
            </div>
            <div class="form-group">
                <strong>สถานที่ตั้ง</strong>
                <input type="text" name="location" class="form-control" placeholder="สถานที่ตั้ง">
            </div>
            <div class="form-group">
                <strong>งบประมาณ</strong>
                <input type="text" name="budget" class="form-control" placeholder="งบประมาณ">
            </div>
            <div class="form-group">
                <strong>สถานะโครงการ</strong>
                <input type="text" name="proj_status" class="form-control" placeholder="สถานะโครงการ">
            </div>
            <div class="card-footer ml-auto mr-auto" align=center>
                <button type="reset" class="btn btn-danger">ยกเลิก</button>
                <button type="submit" class="btn btn-primary">บันทึก</button> 
            </div>                                                                    
        </div>
     </div>
</form>
@endsection

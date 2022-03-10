@extends('layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add Project_status_setup</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href=""> Back</a>
        </div>
    </div>
</div>
   
<form action="{{ route('project_status_setup.store') }}" method="POST">
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
                <strong>สถานะโครงการ</strong>
                <input type="text" name="proj_status" class="form-control" placeholder="สถานะโครงการ">
            </div>
            <div class="form-group">
                <strong>การดำเนินโครงการ</strong>
                <input type="text" name="proj_status_desc" class="form-control" placeholder="การดำเนินโครงการ">
            </div>
            <div class="card-footer ml-auto mr-auto" align=center>
                <button type="reset" class="btn btn-danger">ยกเลิก</button>
                <button type="submit" class="btn btn-primary">บันทึก</button> 
            </div>                                                                    
        </div>
     </div>
</form>
@endsection

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

@foreach ($project_type_setup as $proj_s)
@endforeach
<form action="{{ route('project_type_setup.update',$proj_s->proj_type) }}" method="POST">
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
                <strong>ประเภทโครงการ</strong>
                <input type="text" name="proj_type" value="{{ $proj_s->proj_type }}" class="form-control" placeholder="ประเภทโครงการ">
            </div>
            <div class="form-group">
                <strong>ระบบประเภทโครงการ</strong>
                <input type="text" name="proj_type_desc" value="{{ $proj_s->proj_type_desc }}" class="form-control" placeholder="ระบบประเภทโครงการ">
            </div> 
            <div class="card-footer ml-auto mr-auto" align=center>
                <button type="reset" class="btn btn-danger">ยกเลิก</button>
                <button type="submit" class="btn btn-primary">แก้ไข</button> 
            </div>                                                                    
        </div>
     </div>
</form>
@endsection

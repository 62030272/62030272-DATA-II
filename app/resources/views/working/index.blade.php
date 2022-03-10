@extends('layout')
@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Show Working</h2>
            <div class="card-header">
                <a class="btn btn-primary" href="{{ route('working.create') }}">Insert</a>
    		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 margin-tb">
        <table class="table table-bordered">
			<tr>
				<td>date_work</td>
				<td>proj_id</td>
				<td>emp_id</td>
				<td>work_hours</td>
				<td>work_rate</td>
				<td colspan=2>Operation</d>
			</tr>
			@foreach($working as $work)

			<tr>
				<td>{{ $work->date_work }}</td>
				<td>{{ $work->proj_name }}</td>
				<td>{{ $work->emp_name }} &nbsp; {{ $work->emp_lname }}</td>
				<td>{{ $work->work_hours }}</td>
				<td>{{ $work->work_rate }}</td>
				<td>
					<form action="{{ route('working.destroy',['proj_id'=>$work->proj_id,'emp_id'=>$work->emp_id]) }}" method="POST">
						<a class="btn btn-primary" href="{{ route('working.edit',['proj_id'=>$work->proj_id,'emp_id'=>$work->emp_id]) }}">Edit</a>
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-danger">Delete</button>
					</form>
			</tr>
			@endforeach

        </table>
	</div>
</div>
@endsection

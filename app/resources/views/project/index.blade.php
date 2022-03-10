@extends('layout')
@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Show Projects</h2>
            <div class="card-header">
                <a class="btn btn-primary" href="{{ route('project.create') }}">Insert</a>
    		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 margin-tb">
        <table class="table table-bordered">
			<tr>
				<td>proj_id</td>
				<td>proj_name</td>
				<td>proj_type</td>
				<td>location</td>
				<td>budget</td>
				<td>proj_status</td>
				<td colspan=2>Operation</d>
			</tr>
			@foreach($project as $proj)

			<tr>
				<td>{{ $proj->proj_id }}</td>
				<td>{{ $proj->proj_name }}</td>
				<td>{{ $proj->proj_type }}</td>
				<td>{{ $proj->location }}</td>
				<td>{{ $proj->budget }}</td>
				<td>{{ $proj->proj_status }}</td>
				<td>
					<form action="{{ route('project.destroy',$proj->proj_id) }}" method="POST">
						<a class="btn btn-primary" href="{{ route('project.edit',$proj->proj_id) }}">Edit</a>
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-danger">Delete</button>
					</form>
				</td>
			</tr>
			@endforeach

        </table>
	</div>
</div>
@endsection

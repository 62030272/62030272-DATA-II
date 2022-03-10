@extends('layout')
@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Show Project_status_setup</h2>
            <div class="card-header">
                <a class="btn btn-primary" href="{{ route('project_status_setup.create') }}">Insert</a>
    		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 margin-tb">
        <table class="table table-bordered">
			<tr>
				<td>proj_status</td>
				<td>proj_status_desc</td>
				<td colspan=2>Operation</d>
			</tr>
			@foreach($project_status_setup as $proj_s)

			<tr>
				<td>{{ $proj_s->proj_status }}</td>
				<td>{{ $proj_s->proj_status_desc }}</td>
				<td>
					<form action="{{ route('project_status_setup.destroy',$proj_s->proj_status) }}" method="POST">
						<a class="btn btn-primary" href="{{ route('project_status_setup.edit',$proj_s->proj_status) }}">Edit</a>
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

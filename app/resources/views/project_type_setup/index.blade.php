@extends('layout')
@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Show Project_type_setup</h2>
            <div class="card-header">
                <a class="btn btn-primary" href="{{ route('project_type_setup.create') }}">Insert</a>
    		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 margin-tb">
        <table class="table table-bordered">
			<tr>
				<td>proj_type</td>
				<td>proj_type_desc</td>
				<td colspan=2>Operation</d>
			</tr>
			@foreach($project_type_setup as $proj_t)

			<tr>
				<td>{{ $proj_t->proj_type }}</td>
				<td>{{ $proj_t->proj_type_desc }}</td>
				<td>
					<form action="{{ route('project_type_setup.destroy',$proj_t->proj_type) }}" method="POST">
						<a class="btn btn-primary" href="{{ route('project_type_setup.edit',$proj_t->proj_type) }}">Edit</a>
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

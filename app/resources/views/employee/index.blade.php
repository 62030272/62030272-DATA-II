@extends('layout')
@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Show Employees</h2>
            <div class="card-header">
                <a class="btn btn-primary" href="{{ route('employee.create') }}">Insert</a>
    		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 margin-tb">
        <table class="table table-bordered">
			<tr>
				<td>Emp_ID</td>
				<td>Emp_Name</td>
				<td>Emp_LName</td>
				<td>Job</td>
				<td>Chg_Hour</td>
				<td colspan=2>Operation</d>
			</tr>
			@foreach($employee as $emp)

			<tr>
				<td>{{ $emp->emp_id }}</td>
				<td>{{ $emp->emp_name }}</td>
				<td>{{ $emp->emp_lname }}</td>
				<td>{{ $emp->job }}</td>
				<td>{{ $emp->chg_hour }}</td>
				<td>
					<form action="{{ route('employee.destroy',$emp->emp_id) }}" method="POST">
						<a class="btn btn-primary" href="{{ route('employee.edit',$emp->emp_id) }}">Edit</a>
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

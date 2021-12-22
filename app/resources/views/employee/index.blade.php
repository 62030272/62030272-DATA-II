@extends('layout')
@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Show Employees</h2>
            <div class="card-header">
                
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
			</tr>
			<tr>
				<td>E001</td>
				<td>Hemmarat</td>
				<td>Wachirahatthapong</td>
				<td>Lecturer</td>
				<td>35</td>
			</tr>

        </table>
	</div>
</div>
@endsection

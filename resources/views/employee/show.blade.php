@extends('layouts.app');

@section('content')
	<div class="box-container">
		<div class="box-head-btns bg-secondary pl-2 pr-2">
			<div class="pull-left">
				<a href="{{url()->previous()}}">
					<button class="btn btn-primary btn-icon btn-round">
					  <i class="material-icons">arrow_back</i>
					</button>
				</a>
			</div>
			<div class="pull-right">
				<a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
					<button class="btn btn-primary btn-icon btn-round">
						<i class="now-ui-icons media-1_button-power"></i>
					</button>
	            </a>
	            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf
	            </form>
			</div>
		</div>
		<div class="box-header p-3">
			<div class="profile-container">
				<div class="profile-img">
					<img src="">
				</div>
			</div>
		</div>
		<div class="box-content pt-2">
			<table class="table table-bordered table-hover">
			  	<tbody>
				    <tr>
				    	<th>Name:</th>
				    	<td>{{ $employee->emp_name }}</td>
				    </tr>
				    <tr>
				    	<th>Email:</th>
				    	<td>{{ $employee->emp_email }}</td>
				    </tr>
				    <tr>
				    	<th>Mobile:</th>
				    	<td>{{ $employee->emp_mobile }}</td>
				    </tr>
				    <tr>
				    	<th>Designation:</th>
				    	<td>{{ $employee->emp_designation }}</td>
				    </tr>
				    <tr>
				    	<th>Joined On:</th>
				    	<td>{{ $employee->emp_joined_on }}</td>
				    </tr>
				</tbody>
			</table>
			<div class="d-flex justify-content-center align-items-center">
				<a href="#">
					<button class="btn btn-primary btn-round" type="button">
						<i class="material-icons">edit</i>
					</button>
				</a>
				<a href="#">
					<button class="btn btn-danger btn-round" type="button">
						<i class="material-icons">delete</i>
					</button>
				</a>
			</div>
		</div>
	</div>
@endsection
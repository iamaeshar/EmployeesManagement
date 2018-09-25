@extends('layouts.app')

@section('content')
    <div class="box-container">
        <div class="box-header p-3">
            <h4>Welcome to Employee Management System</h4>
        </div>
        <div class="box-content border-top border-info p-3 d-flex align-items-center text-center justify-content-center">
            <a href="login" class="d-block"><button class="btn btn-primary btn-round">Employee</button></a>
            <a href="admin/login" class="d-block"><button class="btn btn-info btn-round">Admin</button></a>
        </div>
    </div>
@endsection
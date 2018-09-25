@extends('admin.layout.auth')

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
                <a href="{{ url('/admin/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <button class="btn btn-primary btn-icon btn-round">
                        <i class="now-ui-icons media-1_button-power"></i>
                    </button>
                </a>
                <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" style="display: none;">@csrf
                </form>
            </div>
        </div>
        <div class="box-header p-3">
            <h4>Hello!! <span class="text-success">{{ auth()->user()->name }}</span>, Welcome to Employee Management System</h4>
        </div>
        <div class="box-content border-top border-info pt-2">
            <div class="input-group pr-3 pl-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><span class="fa fa-search"></span></span>
              </div>
              <input type="text" class="form-control" placeholder="Employee Name" aria-label="employeename" aria-describedby="basic-addon1" id="search">
            </div>
            <div class="pull-right pr-3">
                <a href="#"><button class="btn btn-info btn-round btn-sm"><i class="material-icons">add</i> Add New</button></a>
            </div>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>SN</th>
                    <th>NAME</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($employees as $empIndex => $employee)
                        <tr>
                            <td>{{$empIndex + 1}}</td>
                            <td><a href="/employees/{{$employee->id}}">{{$employee->emp_name}}</a></td>
                            <td>
                                <a href="#"><span class="fa fa-times mr-1"></span></a>
                                <a href="#"><span class="fa fa-edit"></span></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
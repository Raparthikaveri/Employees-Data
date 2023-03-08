@extends('master')
@section('mainContent')
<style>
  .flex-1{
    margin-bottom: 17px;
    float: right;
    display: none;
  }
  .relative{
    color:black;
  }
  .relative svg{
    width: 32px;;
  }
  .progress_bar{
    border-radius: 15px !important;
    height: 20px !important;
  }
  .col-lg-3{
    max-width: 20% !important;
  }
  .heading{
    font-family: "Gotham Medium", Sans-serif;
    font-size: 17px;
  }
  .buttoncolor{
    background: #00bcd4 !important
  }
</style>
<section class="content">
   <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12 mobile_view_heading">
                <h2 class="text-black heading">EMPLOYEES
                </h2>
            </div>
        </div>
    </div>
    @php $message = session('message'); @endphp
    @if ($message)
     <div class="alert alert-success">
         {{ $message }}
     </div>
    @endif
    <div class="container-fluid">
        <form action="{{ route('employees') }}" method="get">
            <div class="row pl-3">
              <div class="col-lg-3 col-md-3 col-sm-3 mobile_view_heading">
                <select name="sort" class="form-control mt-2" style="height: 38px;" id="sort">
                    <option value="email" {{ $sort == 'email'?'selected':''}}>Email</option>
                    <option value="username" {{ $sort == 'username'?'selected':''}}>Username</option>
                </select>
              </div>
              <div class="col-lg-2 col-md-3 col-sm-3 mobile_view_heading">
                  <button type="submit" class="btn btn-round btn-info waves-effect buttoncolor">Filter</button>
              </div>
              <div class="col-lg-4"></div>
              <div class="col-lg-3 col-md-4 col-sm-12 mobile_view_heading  text-right">
                <a href="{{ route('add_employee') }}"><button type="button" name="button" class="btn btn-round btn-info waves-effect buttoncolor">Add Employee</button></a>
              </div>
            </div>
        </form>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card bg-white text-black">
                    <div class="body bg-white">
                        <div class="table-responsive text-black">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable font_family">
                               <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Uers Name </th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Gender</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i=1; @endphp
                                    @foreach($employees as $employee)
                                    @php $id=$employee->id; @endphp
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $employee->username }}</td>
                                        <td>{{ $employee->email }}</td>
                                        <td>{{ $employee->phone_no }}</td>
                                        <td>{{ $employee->gender }}</td>
                                        <td><a  href="{{ route('edit_employee',['id'=>$id]) }}" class="btn btn-default btn-sm waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                            <a  href="{{ route('delete_employee',['id'=>$id]) }}" class="btn btn-default btn-sm waves-effect waves-float waves-green"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    @php $i++; @endphp
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $employees->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
</section>
@endsection

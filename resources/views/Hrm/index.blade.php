@extends('layouts.default')

 

@section('content')
    <div class='well'>
        <div class='row'>
            <div class='col-md-12'>
                <div class='col-md-1 col-md-offset-11'>
                    <a href="{{route('staff.create')}}"><button class='btn btn-primary'> Add Staff</button></a>
                </div>
            </div>
        </div><br>
        <div class='row'>
            <div class='col-md-12'>
                <div class='table-responsive'>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Staff name</th>
                                <th>Staff email</th>
                                <th>Staff phone</th>
                                <th>View</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        @if($staff->count())
                        @foreach($staff as $staffs)
                        <tr>

                        
                            <td>{{$staffs->id}}</td>
                            <td>{{$staffs->staff_name}}</td>
                            <td>{{$staffs->staff_email}}</td>
                            <td>{{$staffs->staff_phone}}</td>
                            <td><a class="btn btn-primary btn-xs" href="{{action('StaffController@show',$staffs->id)}}" ><span class="glyphicon glyphicon-eye-open"></span></a></td>
        
                            <td><a class="btn btn-primary btn-xs" href="{{action('StaffController@edit',$staffs->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                            <td><form action="{{action('StaffController@destroy',$staffs->id)}}" method="post">
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="DELETE">
    
                                <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button></td>
                            </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="7">No Records found !!</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

@endsection
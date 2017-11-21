@extends('layouts.default')

 

@section('content')


	<div class="row">

		

			<div class="col-md-8 col-md-offset-2">
                @if (count($errors) > 0)

                <div class="alert alert-danger">

                    <strong>Whoops!</strong> There were some problems with your input.<br><br>

                    <ul>

                        @foreach ($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

            @endif
            @if(Session::has('success'))
                <div class="alert alert-info">
                    {{Session::get('success')}}
                </div>
            @endif

            <div class="panel panel-default">
                <div class="panel-heading">
                        <h3 class="panel-title">Update Staff Details : {{$staff->staff_name}}</h3>
                </div>

                <div class="panel-body">
                    <form method="POST" action="{{ route('staff.update', $staff->id) }}"  role="form">
                        {{ csrf_field() }}
                        <input name="_method" type="hidden" value="PATCH">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                        <input type="text" name="staff_name" value="{{$staff->staff_name}}" id="staff_name" class="form-control input-sm" placeholder="Staff name">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="email" name="staff_email" value="{{$staff->staff_email}}" id="staff_email" class="form-control input-sm" placeholder="Staff email">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <input name="staff_phone" class="form-control input-sm" placeholder="Staff phone" value="{{$staff->staff_phone}}">
                        </div>

                    
                        
                        <div class="row">
                        
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <input type="submit"  value="Update" class="btn btn-success btn-block">
                            <a href="{{ route('staff.index') }}" class="btn btn-info btn-block" >Back</a>
                        </div>	
                        
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
        
    


@endsection
@extends('layouts.default')

 

@section('content')
    <div class='well'>
        <div class='row'>
            <div class="col-md-12">
                @if (count($errors) > 0)

                    <div class="alert alert-danger">

                        <strong>Whoops!</strong> There were some problems with your input.<br><br>

                        <ul>

                            @foreach ($errors->all() as $error)

                                <li>{{ $error }}</li>

                            @endforeach

                        </ul>
                    <div>
                @endif
                @if(Session::has('success'))
                    <div class="alert alert-info">
                        {{Session::get('success')}}
                    </div>
                @endif

            </div>
        </div>
        <div class='row'>
            <div class='col-md-12'>
                <div class=''>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Add a Staff</h3>
                        </div>

                        <div class="panel-body">
                            <form method="POST" action="{{route('staff.store')}}"  role="form">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                <input type="text" required name="staff_name" id="staff_name" class="form-control input-sm" placeholder="Staff Name">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input required type="email" name="staff_email" id="staff_email" class="form-control input-sm" placeholder="Staff Email">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input required type="text" name="staff_phone" class="form-control input-sm" placeholder="Staff Phone">
                                </div>

                            
                                
                            <div class="row">
                                
                                <div class="col-md-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="submit"  value="Save" class="btn btn-success btn-block">
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{route('staff.index')}}" class="btn btn-info btn-block" >Back</a>
                                        </div>
                                    </div>
                                </div>	
                                
                            </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>



@endsection
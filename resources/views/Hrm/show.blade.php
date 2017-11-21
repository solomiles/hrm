@extends('layouts.default')

 

@section('content')

    <div class='well'>
        <div class='row'>
            <div class="col-md-12">
                <div class='row'>
                    <div class='col-md-3'>
                        <div class='image-responsive'>
                            <image style="background-color:black;" class='img' src='http://heatng.com/wp-content/uploads/2017/09/newlogoht.png' alt='Company Logo'>
                        </div>
                    </div>
                    <div class='col-md-3 col-md-offset-6'>
                        <div class='image-responsive'>
                            <image class='img' src='' alt='Staff Picture'>
                        </div>
                    </div>
                </div>
                <br>
                <div class='row'>
                    <div class='col-md-4 '>
                        <label for='staff_name'>Staff Name: {{$staff->staff_name}}</label>
                    </div>
                    <div class='col-md-4 '>
                        <label for='staff_email'>Staff Email: {{$staff->staff_email}}</label>
                    </div>
                    <div class='col-md-4 '>
                        <label for='staff_phone'>Staff Phone: {{$staff->staff_phone}}</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-md-6">
                                <button onclick="myFunction()" class="btn btn-success btn-block">Print</button>
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('staff.index')}}" class="btn btn-info btn-block" >Back</a>
                            </div>
                        </div>
                    </div>	     
                    
                    
                </div>
            </div>
        </div>
        
    </div>
    

@endsection
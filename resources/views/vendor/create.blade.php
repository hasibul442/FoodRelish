@extends('layouts.master')
@section('content')
    {{--    {!! Form::open(['class' =>'form-sample','route' => 'employee.store','method' => 'POST', 'enctype' => 'multipart/form-data']) !!}--}}
    <h3 class="page-title">Create Vendor</h3>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                </div>
                <div class="panel-body">
                    <form class="insert-form" id="insert-form" method="post" action="{{route('vendor.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Vendor Name" required >
                        </div>
                        <div class="form-group">
                            <label for="vid">Vendor ID</label>
                            <input type="text" class="form-control" id="vid" name="vid" placeholder="Enter Vendor ID" required >
                        </div>
{{--                        <div class="form-group">--}}
{{--                            <label for="age">Age</label>--}}
{{--                            <input type="number" class="form-control" id="age" name="age" placeholder="24" required>--}}
{{--                        </div>--}}
                        <div class="form-group">
                            <label for="select_role" >Upload Photo</label>
                            <input type='file' class="form-control" id="imageUpload" name="image" accept=".png, .jpg, .jpeg" required/>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Address" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="email@mail.com" required>
                        </div>
                        <div class="form-group">
                            <label for="spname">Spoke Person</label>
                            <input type="text" class="form-control" id="spname" name="spname" placeholder="Spoke Person Name" required >
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="+88018*****" required>
                        </div>
{{--                        <div class="form-group">--}}
{{--                            <label for="select_role" >CV/Resume</label>--}}
{{--                            <input type='file' id="cv" class="form-control" name="cv" accept=".pdf" required/>--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="salary">Salary</label>--}}
{{--                            <input type="number" class="form-control" id="salary" name="salary" placeholder="salary" required>--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="jd">Joining Date</label>--}}
{{--                            <input type="date" class="form-control" id="joining_date" name="joining_date" value="{{date('yy-m-d')}}" required>--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="cy">Contract Years</label>--}}
{{--                            <input type="number" class="form-control" id="contract" name="contract" placeholder="1 Years" required>--}}
{{--                        </div>--}}
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary btn-block" name="submit" id="submit">Create Vendor</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{--    {!! Form::close() !!}--}}

@endsection

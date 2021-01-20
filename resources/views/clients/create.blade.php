@extends('layouts.master')
@section('content')
{{-- {!! Form::open(['class' =>'form-sample','route' => 'client.store','method' => 'POST', 'enctype' => 'multipart/form-data']) !!} --}}
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Add Client</h3>
            </div>
            <div class="panel-body">
                <form class="insert-form" id="insert-form" method="post"
                    action="{{ route('client.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row">

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <select class="form-control" name="title" id="title" required>
                                    <option>Mr.</option>
                                    <option>Mrs.</option>
                                    <option>Miss.</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name"
                                    placeholder="Enter First Name" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name"
                                    placeholder="Enter Last Name" required>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Enter Email Address" required>
                            </div>
                        </div>
                        <div class="col-sm-6">

                            <div class="form-group">
                                <label for="alternative_email">Alternative Email</label>
                                <input type="email" class="form-control" id="alternative_email" name="alternative_email"
                                    placeholder="Enter Email Address">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="phone_number">Phone Number</label>
                                <input type="text" class="form-control" id="phone_number" name="phone_number"
                                    placeholder="+880123********" required>
                            </div>
                        </div>

                        <div class="col-sm-6">

                            <div class="form-group">
                                <label for="alternative_phone_number">Alternative Phone Number</label>
                                <input type="text" class="form-control" id="alternative_phone_number"
                                    name="alternative_phone_number" placeholder="+880123********">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select class="form-control" name="gender" id="gender" required>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Other</option>
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="present_address">Present Address</label>
                                <textarea class="form-control" row="3" id="present_address" name="present_address"
                                    required></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="permanent_address">Permanent Address</label>
                                <textarea class="form-control" row="3" id="permanent_address" name="permanent_address"
                                    required></textarea>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="imageUpload">Upload Photo</label>
                        <input type='file' class="form-control" id="imageUpload" name="image" accept=".png, .jpg, .jpeg"
                            required />
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="dob">Birth Of Date</label>
                                <input type="date" class="form-control" id="dob" name="dob" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="age">Age</label>
                                <input type="text" class="form-control" id="age" name="age" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="age">NID</label>
                        <input type="text" class="form-control" id="age" name="nid" required>
                    </div>

                    <div class="form-group">
                        <label for="gender">Nationality</label>
                        <select class="form-control" name="nationality" id="dropDown" required>
                            
                        </select>
                    </div>
                    

                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary btn-block" name="submit" id="submit">Create
                            Client</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- {!! Form::close() !!} --}}

<script type="text/javascript">
    var jsonObj = { location: [
        { "name": "Afghans"},
        { "name": "Albsnians" },
        { "name": "Algerians" },
        { "name": "Americans" },
        { "name": "Andorrans" },
        { "name": "Bangladeshis" }
    ]
    }

    var myDDL = document.getElementById("dropDown");

for (i = 0; i < jsonObj.location.length; i++) {
    var option = document.createElement("option");
    option.text = jsonObj.location[i].name;

    try {
        myDDL.options.add(option);
    }
    catch (e) {
        alert(e);
    }
}
</script>



@endsection

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

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <select class="form-control" name="title" id="title" required>
                                    <option>Mr.</option>
                                    <option>Mrs.</option>
                                    <option>Miss.</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-9">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required>
                            </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email Address" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone_number">Phone Number</label>
                        <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="+880123********" required>
                    </div>

                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select class="form-control" name="gender" id="gender" required>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea class="form-control" rows="3" id="address" name="address" required placeholder="Address"></textarea>
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
        { "name": "Bangladeshis"}
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

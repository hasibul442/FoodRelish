@extends('layouts.master')
@section('content')
    {{--    {!! Form::open(['class' =>'form-sample','route' => 'employee.store','method' => 'POST', 'enctype' => 'multipart/form-data']) !!}--}}
    <h3 class="page-title">Add Product</h3>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                </div>
                <div class="panel-body">
                    <form class="insert-form" id="insert-form" method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select class="form-control" name="category" id="select1" required>
                                <option >Choose an option</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->name}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="subcategory">Sub Category</label>
                            <select class="form-control" name="subcategory" id="select2" required>
                                <option selected disabled value="">Choose an option</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="childcategory">Child Category</label>
                            <select class="form-control" name="childcategory" id="select3" required>
                                <option selected disabled value="">Choose an option</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="bid">Batch ID</label>
                            <td width="15%"><input type="text" class="form-control" id="bid" name="bid" readonly required></td>
                        </div>
                        <div class="form-group">
                            <label for="type">Type</label>
                            <select class="form-control" name="type" id="selecttype" required>
                                <option >Choose an option</option>
                                <option >In House</option>
                                <option >Vendor</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="sourcename">Source Name</label>
                            <select class="form-control" name="sourcename" id="sourcename" >
                                <option selected disabled value="">Choose an option</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="title">Product Name</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter Product Name" required >
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" class="form-control" id="description" name="description" placeholder="Description" required>
                        </div>
                        <div class="form-group">
                            <label for="image" >Upload Photo</label>
                            <input type='file' class="form-control" id="imageUpload" name="image" accept=".png, .jpg, .jpeg" required/>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" id="price" name="price" placeholder="Enter Price of Each Unit" required>
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Enter Quantity of Whole Batch" required >
                        </div>

                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary btn-block" name="submit" id="submit">Add Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{--    {!! Form::close() !!}--}}

    <script type="text/javascript">
        function _(x){
            return document.getElementById(x);
        }
        $(document).on('change','#select1',function(){
            _('bid').value = '';
            let category = $(this).val();
            $.ajax({
                url : '/category/' + category,
                method : 'GET',
                success:function(data){
                    $('#select2').empty();
                    $('#select2').append('<option selected disabled value="">Choose An Option</option>');
                    jQuery.each( data, function( item, value ) {
                        $('#select2').append("<option value='"+ value.name + "'>" + value.name + "</option>");
                    });
                }
            });
        });

        $(document).on('change','#select2',function(){
            let category = _('select1').value;
            let sub_category = $(this).val();
            $.ajax({
                url :  '/sub_category/'+ sub_category +'/'+ category,
                method : 'GET',
                success:function(data){
                    $('#select3').empty();
                    $('#select3').append('<option selected disabled value="">Choose An Option</option>');
                    jQuery.each( data, function( item, value ) {
                        $('#select3').append("<option value='"+ value.name + "'>" + value.name + "</option>");
                    });
                }
            });
        });

        $(document).on('change','#select3',function(){
            let category = _('select1').value;
            let sub_category = _('select2').value;
            let childcategory = $(this).val();
            $.ajax({
                url :  '/childcategory/'+ childcategory +'/'+ sub_category +'/'+ category,
                method : 'GET',
                success:function(data){
                    _('bid').value = data.batch_id;
                }
            });
        });

        $(document).on('change','#selecttype',function(){
            let type = $(this).val();
            $.ajax({
                url : '/type/' + type,
                method : 'GET',
                success:function(data){
                    $('#sourcename').empty();
                    $('#sourcename').append('<option selected disabled value="">Choose An Option</option>');
                    jQuery.each( data, function( item, value ) {
                        $('#sourcename').append("<option value='"+ value.name + "'>" + value.name + "</option>");
                    });
                }
            });
        });

    </script>

@endsection

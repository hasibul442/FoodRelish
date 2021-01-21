@extends('layouts.master')
@section('content')
              <h3 class="page-title">Category</h3>
                <div class="row">
                    <div class="col-md-6">
                        <!-- BASIC TABLE -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Categories</h3>
                            </div>
                            <div class="panel-body" style="overflow-x: hidden; overflow-y: scroll; height: 186px;">
                                <table class="table" id="data_table">
                                    <thead>
                                    <tr>
                                        <th> Id </th>
                                        <th> Category </th>
                                        <th> Action </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($categories->count() == !0)
                                        @foreach($categories as $category)
                                            <tr>
                                                <td>{{$category->id}}</td>
                                                <td>{{$category->name}}</td>
                                                <td>
                                                    <form class="insert-form" id="insert-form" method="post" action="{{route('category.destroy', $category->id)}}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button name="submit" class="btn btn-danger btn-sm" id="submit"><span class="lnr lnr-trash"></span></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr> <td colspan="3" class="text-center">No Data Found</td><tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <!-- BASIC TABLE -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Add New Category</h3>
                            </div>
                               <div class="panel-body">
                                <form class="insert-form" id="insert-form" method="post" action="{{route('category.store')}}">
                                    @csrf
                                    <table class="table" id="table_field">
                                        <thead>
                                        <tr>
                                            <th> Category </th>
                                            <th> Action </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><input type="text" class="form-control" id="title" name="name[]" required></td>
                                            <td><button name="add" class="btn btn-info btn-sm" id="add"><span class="lnr lnr-plus-circle"></span></button></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <br/>
                                    <div class="text-center">
                                        <input type="submit" class="btn btn-success" name="submit" id="submit" value="Submit"/>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

{{--    SubCategory--}}
              <h3 class="page-title">Sub Category</h3>
                <div class="row">
                    <div class="col-md-6">
                        <!-- BASIC TABLE -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Subcategories</h3>
                            </div>
                              <div class="panel-body" style="overflow-x: hidden; overflow-y: scroll; height: 186px;">
                                <table class="table" id="data_table_2">
                                    <thead>
                                    <tr>
                                        <th> Id </th>
                                        <th>Category</th>
                                        <th> Sub Category </th>
{{--                                        <th> Batch ID</th>--}}
                                        <th> Action </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($subcategories->count() == !0)
                                        @foreach($subcategories as $subcategory)
                                            <tr>
                                                <form class="insert-form" id="insert-form" method="GET" action="{{route('category.subdestroy')}}">
                                                    @csrf
                                                    @method('GET')
                                                <td>
                                                    <input type="hidden" name="id" value="{{$subcategory->id}}">
                                                    {{$subcategory->id}}
                                                </td>
                                                <td>{{$subcategory->category}}</td>
                                                <td>{{$subcategory->name}}</td>
{{--                                                <td>{{$subcategory->batch_id}}</td>--}}
                                                <td>
                                                    <button name="submit" class="btn btn-danger btn-sm" id="submit"><span class="lnr lnr-trash"></span></button>
                                                </td>
                                                </form>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr> <td colspan="5" class="text-center">No Data Found</td><tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <!-- BASIC TABLE -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Add New Subcategory</h3>
                            </div>
                            <div class="panel-body">
                                <form class="insert-form" id="insert-form" method="GET" action="{{route('category.substore')}}">
                                    @csrf
                                    <table class="table" id="table_sub_cateogry">
                                        <thead>
                                        <tr>
                                            <th>Category</th>
                                            <th> Sub Category </th>
                                            <th> Action </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <select class="form-control" name="category" required>
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->name}}">{{$category->name}}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td><input type="text" class="form-control" id="title" name="name[]" placeholder="Sub-category" ></td>
{{--                                            <td><input type="text" class="form-control" id="batch_id" name="batch_id[]" placeholder="Batch Id" ></td>--}}
                                            <td><button name="add" class="btn btn-info btn-sm" id="add_sub"><span class="lnr lnr-plus-circle"></span></button></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <br/>
                                    <div class="text-center">
                                        <input type="submit" class="btn btn-success" name="submit" id="submit" value="Submit"/>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


{{--Child Category--}}

              <h3 class="page-title">Child Category</h3>
              <div class="row">
                  <div class="col-md-6" >
                      <!-- BASIC TABLE -->
                      <div class="panel">
                          <div class="panel-heading">
                              <h3 class="panel-title">Child Categories</h3>
                          </div>
                          <div class="panel-body" style="overflow-x: hidden; overflow-y: scroll; height: 186px;">
                              <table class="table" id="data_table_3">
                                  <thead>
                                  <tr>
                                      <th> Id </th>
                                      <th>Category</th>
                                      <th> Sub Category </th>
                                      <th> Child Category </th>
                                      <th> Batch ID</th>
                                      <th> Action </th>
                                  </tr>
                                  </thead>
                                  <tbody >
                                  @if($childcategories->count() == !0)
                                      @foreach($childcategories as $childcategory)
                                          <tr>
                                              <form class="insert-form" id="insert-form" method="GET" action="{{route('category.childdestroy')}}">
                                                  @csrf
                                                  @method('GET')
                                                  <td>
                                                      <input type="hidden" name="id" value="{{$childcategory->id}}">
                                                      {{$childcategory->id}}
                                                  </td>
                                                  <td>{{$childcategory->category}}</td>
                                                  <td>{{$childcategory->subcategory}}</td>
                                                  <td>{{$childcategory->name}}</td>
                                                  <td>{{$childcategory->batch_id}}</td>
                                                  <td>
                                                      <button name="submit" class="btn btn-danger btn-sm" id="submit"><span class="lnr lnr-trash"></span></button>
                                                  </td>
                                              </form>
                                          </tr>
                                      @endforeach
                                  @else
                                      <tr> <td colspan="5" class="text-center">No Data Found</td><tr>
                                  @endif
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>

                  <div class="col-md-6">
                      <!-- BASIC TABLE -->
                      <div class="panel">
                          <div class="panel-heading">
                              <h3 class="panel-title">Add New Childcategory</h3>
                          </div>
                          <div class="panel-body">
                              <form class="insert-form" id="insert-form" method="HEAD" action="{{route('category.childstore')}}">
                                  @csrf
                                  <table class="table" id="table_child_cateogry">
                                      <thead>
                                      <tr>
                                          <th> Category</th>
                                          <th> Sub Category </th>
                                          <th> Child Category </th>
                                          <th> Batch ID </th>
                                          <th> Action </th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <tr>
                                          <td>
                                              <select class="form-control" name="category" id="select1" required>
                                                  <option >Choose an option</option>
                                                  @foreach($categories as $category)
                                                      <option value="{{$category->name}}">{{$category->name}}</option>
                                                  @endforeach
                                              </select>
                                          </td>
                                          <td>
                                              <select class="form-control" name="subcategory" id="select2" required>
{{--                                                      <option >Choose an option</option>--}}
{{--                                                  @foreach($subcategories as $subcategory)--}}
{{--                                                      <option value="{{$subcategory->name}}">{{$subcategory->name}}</option>--}}
{{--                                                  @endforeach--}}
                                                  <option selected disabled value="">choose an option</option>
                                              </select>
                                          </td>
                                          <td><input type="text" class="form-control" id="title" name="name[]" placeholder="Child-category" ></td>
                                          <td><input type="text" class="form-control" id="batch_id" name="batch_id[]" placeholder="Batch Id" ></td>
                                          <td><button name="add" class="btn btn-info btn-sm" id="add_cd"><span class="lnr lnr-plus-circle"></span></button></td>
                                      </tr>
                                      </tbody>
                                  </table>
                                  <br/>
                                  <div class="text-center">
                                      <input type="submit" class="btn btn-success" name="submit" id="submit" value="Submit"/>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>



              <script type="text/javascript">
        $(document).ready(function (){
            var html = '<tr>\n' +
                '         <td><input type="text" class="form-control" id="title" name="name[]" required></td>\n' +
                '         <td><button name="remove" class="btn btn-danger btn-sm" id="remove"><span class="lnr lnr-trash"></span></button> </td>\n' +
                '       </tr>';
            var schtml = '<tr>\n' +
                '         <td class="text-center">-</td>\n'+
                '         <td><input type="text" class="form-control" id="title" name="name[]" placeholder="Sub-Category" required></td>\n' +
                // '         <td><input type="text" class="form-control" id="batch_id" name="batch_id[]" placeholder="Batch Id" ></td>\n'+
                '         <td><button name="remove" class="btn btn-danger btn-sm" id="remove_sub"><span class="lnr lnr-trash"></span></button> </td>\n' +
                '       </tr>';
            var cdhtml = '<tr>\n' +
                '         <td class="text-center">-</td>\n'+
                '         <td class="text-center">-</td>\n'+
                '         <td><input type="text" class="form-control" id="title" name="name[]" placeholder="Child-Category" required></td>\n' +
                '         <td><input type="text" class="form-control" id="batch_id" name="batch_id[]" placeholder="Batch Id" required></td>\n'+
                '         <td><button name="remove" class="btn btn-danger btn-sm" id="remove_cd"><span class="lnr lnr-trash"></span></button> </td>\n' +
                '       </tr>';
            var x =1;
            $("#add").click(function (){
                $("#table_field").append(html);
            });
            $("#table_field").on('click','#remove',function (){
                $(this).closest('tr').remove();
            });
            $("#add_sub").click(function (){
                $("#table_sub_cateogry").append(schtml);
            });
            $("#table_sub_cateogry").on('click','#remove_sub',function (){
                $(this).closest('tr').remove();
            });
            $("#add_cd").click(function (){
                $("#table_child_cateogry").append(cdhtml);
            });
            $("#table_child_cateogry").on('click','#remove_cd',function (){
                $(this).closest('tr').remove();
            });
        });
    </script>

              <script type="text/javascript">
                  function _(x){
                      return document.getElementById(x);
                  }
                  $(document).on('change','#select1',function(){
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

              </script>
              <script>
            $(document).ready(function(){
                
                var table = $('#data_table_2').DataTable({
                    responsive:true,
                    dom:'ltipr', 
                });

                var table = $('#data_table_3').DataTable({
                    responsive:true,
                    dom:'ltipr', 
                  
                });
            });
        </script>      
@stop

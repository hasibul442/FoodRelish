@extends('layouts.master')
@section('content')

    <h3 class="page-title">Vendors</h3>
    <div class="row">
        <div class="col-md-12">
            <!-- BASIC TABLE -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Vendors List</h3>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th> Vendor ID </th>
                            <th> Image </th>
                            <th> Name </th>
                            <th> Email </th>
                            <th> Spoke Person </th>
                            <th> Number </th>
                            <th> Profile </th>
                            <th> Edit </th>
                            <th> Delete </th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($vendors->count() == !0)
                            @foreach($vendors as $vendor)
                                <tr>
                                    <td>{{$vendor->vid}}</td>
                                    <td><img src="{{asset('/assets/images/vendors/'.$vendor->image)}}" width="100" height="100" alt=""></td>
                                    <td>{{$vendor->name}}</td>
                                    <td>{{$vendor->email}}</td>
                                    <td>{{$vendor->spname}}</td>
                                    <td>{{$vendor->phone}}</td>
                                    <td>
                                        <form class="insert-form" id="insert-form" method="post" action="#">
                                            @csrf
                                            @method('DELETE')
                                            <button name="submit" class="btn btn-sm" id="submit"><span class="lnr lnr-database"></span></button>
                                        </form>
                                    </td>
                                    <td>
                                        <form class="insert-form" id="insert-form" method="post" action="#">
                                            @csrf
                                            @method('DELETE')
                                            <button name="submit" class="btn btn-success  btn-sm" id="submit"><span class="lnr lnr-pencil"></span></button>
                                        </form>
                                    </td>
                                    <td>
                                        <form class="insert-form" id="insert-form" method="post" action="#">
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
    </div>
{{--            <h3 class="page-title">Category</h3>--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-6">--}}
{{--                    <!-- BASIC TABLE -->--}}
{{--                    <div class="panel">--}}
{{--                        <div class="panel-heading">--}}
{{--                            <h3 class="panel-title">Categories</h3>--}}
{{--                        </div>--}}
{{--                        <div class="panel-body" style="overflow-x: hidden; overflow-y: scroll; height: 186px;">--}}
{{--                            <table class="table">--}}
{{--                                <thead>--}}
{{--                                <tr>--}}
{{--                                    <th> Id </th>--}}
{{--                                    <th> Category </th>--}}
{{--                                    <th> Action </th>--}}
{{--                                </tr>--}}
{{--                                </thead>--}}
{{--                                <tbody>--}}
{{--                                @if($categories->count() == !0)--}}
{{--                                    @foreach($categories as $category)--}}
{{--                                        <tr>--}}
{{--                                            <td>{{$category->id}}</td>--}}
{{--                                            <td>{{$category->name}}</td>--}}
{{--                                            <td>--}}
{{--                                                <form class="insert-form" id="insert-form" method="post" action="{{route('category.destroy', $category->id)}}">--}}
{{--                                                    @csrf--}}
{{--                                                    @method('DELETE')--}}
{{--                                                    <button name="submit" class="btn btn-danger btn-sm" id="submit"><span class="lnr lnr-trash"></span></button>--}}
{{--                                                </form>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                    @endforeach--}}
{{--                                @else--}}
{{--                                    <tr> <td colspan="3" class="text-center">No Data Found</td><tr>--}}
{{--                                @endif--}}
{{--                                </tbody>--}}
{{--                            </table>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <h3 class="page-title">Category</h3>--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-6">--}}
{{--                        <!-- BASIC TABLE -->--}}
{{--                        <div class="panel">--}}
{{--                            <div class="panel-heading">--}}
{{--                                <h3 class="panel-title">Categories</h3>--}}
{{--                            </div>--}}
{{--                            <div class="panel-body" style="overflow-x: hidden; overflow-y: scroll; height: 186px;">--}}
{{--                                <table class="table">--}}
{{--                                    <thead>--}}
{{--                                    <tr>--}}
{{--                                        <th> Id </th>--}}
{{--                                        <th> Category </th>--}}
{{--                                        <th> Action </th>--}}
{{--                                    </tr>--}}
{{--                                    </thead>--}}
{{--                                    <tbody>--}}
{{--                                    @if($categories->count() == !0)--}}
{{--                                        @foreach($categories as $category)--}}
{{--                                            <tr>--}}
{{--                                                <td>{{$category->id}}</td>--}}
{{--                                                <td>{{$category->name}}</td>--}}
{{--                                                <td>--}}
{{--                                                    <form class="insert-form" id="insert-form" method="post" action="{{route('category.destroy', $category->id)}}">--}}
{{--                                                        @csrf--}}
{{--                                                        @method('DELETE')--}}
{{--                                                        <button name="submit" class="btn btn-danger btn-sm" id="submit"><span class="lnr lnr-trash"></span></button>--}}
{{--                                                    </form>--}}
{{--                                                </td>--}}
{{--                                            </tr>--}}
{{--                                        @endforeach--}}
{{--                                    @else--}}
{{--                                        <tr> <td colspan="3" class="text-center">No Data Found</td><tr>--}}
{{--                                    @endif--}}
{{--                                    </tbody>--}}
{{--                                </table>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

@stop

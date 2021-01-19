@extends('layouts.master')
@section('content')

    <h3 class="page-title">Products Database</h3>
    <div class="row">
        <div class="col-md-12">
            <!-- BASIC TABLE -->
            <div class="panel">
{{--                <div class="panel-heading">--}}
{{--                    <h3 class="panel-title">Vendors List</h3>--}}
{{--                </div>--}}
                <div class="panel-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th> Batch ID </th>
                            <th> Category </th>
                            <th> Sub Category </th>
                            <th> Child Category </th>
                            <th> Source </th>
                            <th> Product ID </th>
                            <th> Product Name </th>
                            <th> Image </th>
                            <th> Price </th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($products->count() == !0)
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$product->bid}}</td>
                                    <td>{{$product->category}}</td>
                                    <td>{{$product->subcategory}}</td>
                                    <td>{{$product->childcategory}}</td>
                                    <td>{{$product->sourcename}}</td>
                                    <td>{{$product->pid}}</td>
                                    <td>{{$product->title}}</td>
                                    <td><img src="{{asset('/assets/images/products/'.$product->image)}}" width="100" height="100" alt=""></td>
                                    <td>{{$product->price}}</td>
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
@stop

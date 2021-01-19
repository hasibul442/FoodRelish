@extends('layouts.master')
@section('content')

    <h3 class="page-title">Stocks Database</h3>
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
                            <th> Product Name </th>
                            <th> Quantity</th>
                            <th> Show</th>
                            <th> Edit</th>
                            <th> Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($stocks->count() == !0)
                            @foreach($stocks as $stock)
                                <tr>
                                    <td>{{$stock->bid}}</td>
                                    <td>{{$stock->category}}</td>
                                    <td>{{$stock->subcategory}}</td>
                                    <td>{{$stock->childcategory}}</td>
                                    <td>{{$stock->sourcename}}</td>
                                    <td>{{$stock->title}}</td>
                                    <td>{{$stock->quantity}}</td>
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
@stop

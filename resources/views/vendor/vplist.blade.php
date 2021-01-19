@extends('layouts.master')
@section('content')

    <h3 class="page-title">Vendors Wise Products</h3>
    <div class="row">
        <div class="col-md-12">
            <!-- BASIC TABLE -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Products List</h3>
                </div>
                <div class="panel-body" style="overflow-x: hidden; overflow-y: scroll; height: 186px;">
                    <table class="table">
                        <thead>
                        <tr>
                            <th> Vendor's Name </th>
                            <th> Batch ID </th>
                            <th> Product </th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($vproducts->count() == !0)
                            @foreach($vproducts as $vproduct)
                                @if($vproduct->type == "Vendor")
                                <tr>
                                    <td>{{$vproduct->sourcename}}</td>
                                    <td>{{$vproduct->bid}}</td>
                                    <td>{{$vproduct->title}}</td>
{{--                                    <td>{{$vendor->phone}}</td>--}}
                                    {{--                                    <td>--}}
                                    {{--                                        <form class="insert-form" id="insert-form" method="post" action="{{route('category.destroy', $category->id)}}">--}}
                                    {{--                                            @csrf--}}
                                    {{--                                            @method('DELETE')--}}
                                    {{--                                            <button name="submit" class="btn btn-danger btn-sm" id="submit"><span class="lnr lnr-trash"></span></button>--}}
                                    {{--                                        </form>--}}
                                    {{--                                    </td>--}}
                                </tr>
                                @endif
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

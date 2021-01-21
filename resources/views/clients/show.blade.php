@extends('layouts.master')
@section('content')

    <h3 class="page-title">Employees Database</h3>
    <div class="row">
        <div class="col-md-12">
            <!-- BASIC TABLE -->
            <div class="panel">
                {{--                <div class="panel-heading">--}}
                {{--                    <h3 class="panel-title">Vendors List</h3>--}}
                {{--                </div>--}}
                
                <div class="panel-body">
                <div id="buttons" style="float:right;"></div>
                    <table class="table"id="data_table">
                        <thead>
                        <tr>
                            <th> ID </th>
                            <th> Name </th>
                            <th> Email </th>
                            <th> Phone </th>
                            <th> NID</th>
                            <th> Nationality</th>
                            <th> View</th>
                            <th> Edit</th>
                            <th> Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($clients->count() == !0)
                            @foreach($clients as $client)
                                <tr>
                                    <td>{{$client->id}}</td>
                                    <td>{{$client->title}} {{$client->name}}</td>           
                                    <td>{{$client->email}}</td>
                                    <td>{{$client->phone_number}}</td>
                                    <td>{{$client->nid}}</td>
                                    <td>{{$client->nationality}}</td>
                                    <td>
                                        <form class="insert-form" id="insert-form" method="GET" action="{{route('client.profile', $client->id)}}">
                                            @csrf
                                            @method('GET')
                                            <button name="submit" class="btn btn-sm" id="submit"><span class="lnr lnr-database"></span></button>
                                        </form>
                                    </td>
                                    <td>
                                        <form class="insert-form" id="insert-form" method="post" action="#">
                                            @csrf
                                            @method('')
                                            <button name="submit" class="btn btn-success  btn-sm" id="submit"><span class="lnr lnr-pencil"></span></button>
                                        </form>
                                    </td>
                                    <td>
                                        <form class="insert-form" id="insert-form" method="post" action="#">
                                            @csrf
                                            @method('')
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

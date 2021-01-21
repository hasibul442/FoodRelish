@extends('layouts.master')
@section('content')
    <h3 class="page-title">Client Card</h3>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-body">
                            <!-- PROFILE HEADER -->
                            <div class="profile-header">
                                <div class="overlay"></div>
                                <div class="profile-main">
                                    <img src="{{asset('/assets/images/clients/'.$client->image)}}" width="100" height="100" alt="">
                                    <h3 class="name">{{$client->title}} {{$client->name}}</h3>
                                    <span class="online-status status-available">Available</span>
                                </div>
                                <div class="profile-stat">
                                    <div class="row">
                                        <div class="col-md-4 stat-item">
                                            45 <span>Projects</span>
                                        </div>
                                        <div class="col-md-4 stat-item">
                                            15 <span>Awards</span>
                                        </div>
                                        <div class="col-md-4 stat-item">
                                            2174 <span>Points</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PROFILE HEADER -->
                            <!-- PROFILE DETAIL -->
                            <div class="profile-detail">
                                <div class="profile-info">
                                    <h4 class="heading">Basic Info</h4>
                                    <ul class="list-unstyled list-justify">
                                        <li>Name <span>{{$client->title}} {{$client->name}}</span></li>
                                        <li>Phone Number<span>{{$client->phone_number}}</span></li>
                                        <li>Email <span>{{$client->email}} </span></li>
                                        <li>Address <span>{{$client->address}}</span></li>
                                        <li>Gender <span>{{$client->gender}}</span></li>
                                        <li>Birth of Date <span>{{$client->dob}}</span></li>
                                        <li>Age <span>{{$client->age}}</span></li>
                                        <li>NID <span>{{$client->nid}}</span></li>
                                        <li>Nationality <span>{{$client->nationality}}</span></li>
                                    </ul>
                                </div>
                                <div class="profile-info">
                                    <h4 class="heading">Social</h4>
                                    <ul class="list-inline social-icons">
                                        <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="google-plus-bg"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#" class="github-bg"><i class="fa fa-github"></i></a></li>
                                    </ul>
                                </div>
                                <div class="profile-info">
                                    <h4 class="heading">About</h4>
                                    <p>Interactively fashion excellent information after distinctive outsourcing.</p>
                                </div>
                                <div class="text-center"><a href="#" class="btn btn-primary">Edit Profile</a></div>
                            </div>
                            <!-- END PROFILE DETAIL -->
                        </div>
                    </div>
                </div>
            </div>


@endsection

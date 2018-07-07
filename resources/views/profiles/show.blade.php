@extends('layouts.layouts')

@section('content')
<!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">                    
                    <h1 class="page-title"> User Profile
                        <small></small>
                    </h1>
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN PROFILE SIDEBAR -->
                            <div class="profile-sidebar">
                                <!-- PORTLET MAIN -->
                                <div class="portlet light profile-sidebar-portlet ">
                                    <!-- SIDEBAR USERPIC -->
                                    <div class="profile-userpic">
                                        <img src="../img/profile_user.jpg" class="img-responsive" alt=""> </div>
                                    <!-- END SIDEBAR USERPIC -->
                                    <!-- SIDEBAR USER TITLE -->
                                    <div class="profile-usertitle">
                                        <div class="profile-usertitle-name"> {{ $profiles[0]->name }} </div>
                                        <div class="profile-usertitle-job"> {{ $profiles[0]->position}} </div>
                                    </div>
                                    <!-- END SIDEBAR USER TITLE -->
                                    <div class="margin-top-20 profile-desc-link" style="margin-left: 20px">
			                            <i class="fa fa-phone"></i>
			                            <a href="http://www.keenthemes.com">{{ $profiles[0]->phone}}</a>
			                        </div>
			                        <div class="margin-top-20 profile-desc-link" style="margin-left: 20px">
			                        <i class="fa fa-home"></i>
			                        <a href="http://www.twitter.com/keenthemes/">{{ $profiles[0]->origin_address}}</a>
			                        </div>
			                        <div class="margin-top-20 profile-desc-link" style="margin-left: 20px">
			                        <i class="fa fa-envelope-o"></i>
			                        <a href="http://www.facebook.com/keenthemes/">{{ $profiles[0]->email}}</a>
			                        </div>
                                    <!-- SIDEBAR MENU -->
                                    <div class="profile-usermenu">
                                        <ul class="nav">
                                            <li class="active">
                                                <a href="page_user_profile_1.html">
                                                    <i class="icon-home"></i> Overview </a>
                                            </li>
                                            <li>
                                                <a href="profiles/{{ Sentinel::getUser()->id }}/edit">
                                                    <i class="icon-settings"></i> Account Settings </a>
                                            </li>
                                            <li>
                                                <a href="page_user_profile_1_help.html">
                                                    <i class="icon-info"></i> Help </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- END MENU -->
                                </div>
                                <!-- END PORTLET MAIN -->
                            </div>
                            <!-- END BEGIN PROFILE SIDEBAR -->
                            <!-- BEGIN PROFILE CONTENT -->
                            <div class="profile-content">
                                <div class="row">
                                    <div class="col-md-12">
                                    @forelse($profiles as $profile)
                                        <!-- BEGIN PORTLET -->
                                        <div class="portlet light ">
                                            <div class="portlet-title">
                                                <div class="caption caption-md">
                                                    <i class="icon-bar-chart theme-font hide"></i>
                                                    <span class="caption-subject font-blue-madison bold uppercase">General Profile</span>
                                                    <span class="caption-helper hide">weekly stats...</span>
                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="row">
                                                	<div class="col-md-6">
                                                		<div>
					                                        <h4 class="profile-desc-title">Name</h4>
					                                        <span class="profile-desc-text"> {{ $profile->name }} </span>
					                                        <h4 class="profile-desc-title">Place of Birth</h4>
					                                        <span class="profile-desc-text"> {{ $profile->place_birth }} </span>
					                                        <h4 class="profile-desc-title">Date of Birth</h4>
					                                        <span class="profile-desc-text"> {{ \Carbon\Carbon::parse($profile->date_birth)->format('d-m-Y')}} </span>
					                                        <h4 class="profile-desc-title">Gender</h4>
					                                        <span class="profile-desc-text"> {{ $profile->gender }} </span>
					                                        <h4 class="profile-desc-title">Religion</h4>
					                                        <span class="profile-desc-text"> {{ $profile->religion }} </span>

					                                    </div>
                                                	</div>
                                                	<div class="col-md-6">
                                                		<div>
					                                        <h4 class="profile-desc-title">Staff ID</h4>
					                                        <span class="profile-desc-text"> {{ $profile->staff_id}} </span>
					                                        <h4 class="profile-desc-title">Position</h4>
					                                        <span class="profile-desc-text"> {{ $profile->position}} </span>
					                                        <h4 class="profile-desc-title">Unit</h4>
					                                        <span class="profile-desc-text"> {{ $profile->unit}} </span>
					                                        <h4 class="profile-desc-title">BPJS Number</h4>
					                                        <span class="profile-desc-text"> {{ $profile->bpjs_number}} </span>
					                                        <h4 class="profile-desc-title">Rekening Bank</h4>
					                                        <span class="profile-desc-text"> {{ $profile->bank_number }} </span>
					                                    </div>
                                                	</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portlet light ">
                                            <div class="portlet-title">
                                                <div class="caption caption-md">
                                                    <i class="icon-bar-chart theme-font hide"></i>
                                                    <span class="caption-subject font-blue-madison bold uppercase">Contact Info</span>
                                                    <span class="caption-helper hide">weekly stats...</span>
                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                                <div>
			                                        <h4 class="profile-desc-title">Phone Number</h4>
			                                        <span class="profile-desc-text"> {{ $profile->phone }}  </span>
			                                        <h4 class="profile-desc-title">Current Address</h4>
			                                        <span class="profile-desc-text"> {{ $profile->current_address }} </span>
			                                        <h4 class="profile-desc-title">Origin Address</h4>
			                                        <span class="profile-desc-text"> {{$profile->origin_address}} </span>
			                                        <h4 class="profile-desc-title">Office Email</h4>
			                                        <span class="profile-desc-text"> {{$profile->email}} </span>
			                                    </div>
                                            </div>
                                        </div>
                                        <!-- END PORTLET -->
                                        @empty
                                        {{ filerusak }}
                                    @endforelse
                                    </div>
                                    
                                </div>
                                
                                
                            </div>
                            <!-- END PROFILE CONTENT -->
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
@endsection
@extends('layouts.layouts')

@section('content')
<!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    
                    <h1 class="page-title"> New User Profile | Account
                        <small>user account page</small>
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
                                        <div class="profile-usertitle-name"> Marcus Doe </div>
                                        <div class="profile-usertitle-job"> Developer </div>
                                    </div>
                                    <!-- END SIDEBAR USER TITLE -->
                                    <div class="margin-top-20 profile-desc-link" style="margin-left: 20px">
                                        <i class="fa fa-phone"></i>
                                        <a href="http://www.keenthemes.com">+62 8953623484</a>
                                    </div>
                                    <div class="margin-top-20 profile-desc-link" style="margin-left: 20px">
                                    <i class="fa fa-home"></i>
                                    <a href="http://www.twitter.com/keenthemes/">Tangerang, Jawa Barat</a>
                                    </div>
                                    <div class="margin-top-20 profile-desc-link" style="margin-left: 20px">
                                    <i class="fa fa-envelope-o"></i>
                                    <a href="http://www.facebook.com/keenthemes/">hamidattohari99@gmail.com</a>
                                    </div>
                                    <!-- SIDEBAR MENU -->
                                    <div class="profile-usermenu">
                                        <ul class="nav">
                                            <li class="active">
                                                <a href="page_user_profile_1.html">
                                                    <i class="icon-home"></i> Overview </a>
                                            </li>
                                            <li>
                                                <a href="page_user_profile_1_account.html">
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
                                        <div class="portlet light ">
                                            <div class="portlet-title tabbable-line">
                                                <div class="caption caption-md">
                                                    <i class="icon-globe theme-font hide"></i>
                                                    <span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
                                                </div>
                                                <ul class="nav nav-tabs">
                                                    <li class="active">
                                                        <a href="#tab_1_1" data-toggle="tab">Personal Info</a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab_1_2" data-toggle="tab">Change Avatar</a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab_1_3" data-toggle="tab">Change Password</a>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="tab-content">
                                                    <!-- PERSONAL INFO TAB -->
                                                    <div class="tab-pane active" id="tab_1_1">
                                                        <form role="form" action="/profiles" method="POST">
                                                            {{ csrf_field() }}
                                                            <div class="form-group">
                                                                <input type="hidden" name="users_id" value="{{ Sentinel::getUser()->id }}" />
                                                                <label class="control-label">Nama Lengkap</label>
                                                                <input type="text" placeholder="John Smith" class="form-control" name="name" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Tempat Lahir</label>
                                                                <input type="text" placeholder="Jakarta" class="form-control" name="place_birth" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Tanggal Lahir</label>
                                                                <input type="date" placeholder="" class="form-control" name="date_birth" /> </div>
                                                            <div class="form-group form-md-radios">
                                                                <label>Jenis Kelamin</label>
                                                                <div class="md-radio-inline">
                                                                    <div class="md-radio">
                                                                        <input type="radio" id="radio6" name="gender" class="md-radiobtn" value="Laki-laki" checked>
                                                                        <label for="radio6">
                                                                            <span></span>
                                                                            <span class="check"></span>
                                                                            <span class="box"></span> Laki-laki </label>
                                                                    </div>
                                                                    <div class="md-radio">
                                                                        <input type="radio" id="radio7" name="gender" class="md-radiobtn" value="Perempuan">
                                                                        <label for="radio7">
                                                                            <span></span>
                                                                            <span class="check"></span>
                                                                            <span class="box"></span> Perempuan </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group form-md-radios">
                                                                <label>Agama</label>
                                                                <div class="md-radio-inline">
                                                                    <div class="md-radio">
                                                                        <input type="radio" id="radio8" name="religion" class="md-radiobtn" value="Islam" checked >
                                                                        <label for="radio8">
                                                                            <span></span>
                                                                            <span class="check"></span>
                                                                            <span class="box"></span> Islam </label>
                                                                    </div>
                                                                    <div class="md-radio">
                                                                        <input type="radio" id="radio9" name="religion" class="md-radiobtn" value="Kristen">
                                                                        <label for="radio9">
                                                                            <span></span>
                                                                            <span class="check"></span>
                                                                            <span class="box"></span> Kristen </label>
                                                                    </div>
                                                                    <div class="md-radio">
                                                                        <input type="radio" id="radio10" name="religion" class="md-radiobtn" value="Katholik">
                                                                        <label for="radio10">
                                                                            <span></span>
                                                                            <span class="check"></span>
                                                                            <span class="box"></span> Katholik </label>
                                                                    </div>
                                                                    <div class="md-radio">
                                                                        <input type="radio" id="radio11" name="religion" class="md-radiobtn" value="Hindu">
                                                                        <label for="radio11">
                                                                            <span></span>
                                                                            <span class="check"></span>
                                                                            <span class="box"></span> Hindu </label>
                                                                    </div>
                                                                    <div class="md-radio">
                                                                        <input type="radio" id="radio12" name="religion" class="md-radiobtn" value="Budha">
                                                                        <label for="radio12">
                                                                            <span></span>
                                                                            <span class="check"></span>
                                                                            <span class="box"></span> Budha </label>
                                                                    </div>
                                                                    <div class="md-radio">
                                                                        <input type="radio" id="radio13" name="religion" class="md-radiobtn" value="Khong Hu Chu">
                                                                        <label for="radio13">
                                                                            <span></span>
                                                                            <span class="check"></span>
                                                                            <span class="box"></span> Khong Hu Chu </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Nomor Telepon</label>
                                                                <input type="text" placeholder="081536288567" class="form-control" name="phone" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Alamat Tinggal</label>
                                                                <input type="text" placeholder="Perumahan Bumi Indah, No 21 Jakarta" class="form-control" name="current_address" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Alamat Asal</label>
                                                                <input type="text" placeholder="Jalan Mangga No. 21 Sukolilo Surabaya" class="form-control" name="origin_address" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Email Kantor</label>
                                                                <input type="text" placeholder="Anonymous@gmail.com" class="form-control" name="email" /> </div>
                                                            
                                                            <div class="form-group">
                                                                <label class="control-label">Nomor Pegawai</label>
                                                                <input type="text" placeholder="12341123" class="form-control" name="staff_id" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Posisi</label>
                                                                <input type="text" placeholder="Web Developer" class="form-control" name="position" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Unit</label>
                                                                <input type="text" placeholder="Teknologi Informasi" class="form-control" name="unit" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Nomor BPJS</label>
                                                                <input type="text" placeholder="31234234112333" class="form-control" name="bpjs_number" /> </div>
                                                                <div class="form-group">
                                                            <label class="control-label">Rekening Bank</label>
                                                                <input type="text" placeholder="14423225543" class="form-control" name="bank_number" /> </div>
                                                            <div class="margiv-top-10">
                                                                <button type="Submit" name="SubmitProfiles" class="btn green"> Save Changes </button>
                                                                <a href="javascript:;" class="btn default"> Cancel </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- END PERSONAL INFO TAB -->
                                                    <!-- CHANGE AVATAR TAB -->
                                                    <div class="tab-pane" id="tab_1_2">
                                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                            eiusmod. </p>
                                                        <form action="#" role="form">
                                                            <div class="form-group">
                                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
                                                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                                    <div>
                                                                        <span class="btn default btn-file">
                                                                            <span class="fileinput-new"> Select image </span>
                                                                            <span class="fileinput-exists"> Change </span>
                                                                            <input type="file" name="..."> </span>
                                                                        <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix margin-top-10">
                                                                    <span class="label label-danger">NOTE! </span>
                                                                    <span>Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only </span>
                                                                </div>
                                                            </div>
                                                            <div class="margin-top-10">
                                                                <a href="javascript:;" class="btn green"> Submit </a>
                                                                <a href="javascript:;" class="btn default"> Cancel </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- END CHANGE AVATAR TAB -->
                                                    <!-- CHANGE PASSWORD TAB -->
                                                    <div class="tab-pane" id="tab_1_3">
                                                        <form action="#">
                                                            <div class="form-group">
                                                                <label class="control-label">Current Password</label>
                                                                <input type="password" class="form-control" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">New Password</label>
                                                                <input type="password" class="form-control" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Re-type New Password</label>
                                                                <input type="password" class="form-control" /> </div>
                                                            <div class="margin-top-10">
                                                                <a href="javascript:;" class="btn green"> Change Password </a>
                                                                <a href="javascript:;" class="btn default"> Cancel </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- END CHANGE PASSWORD TAB -->
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PROFILE CONTENT -->
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
@endsection
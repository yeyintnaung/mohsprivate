@extends('layouts.datable')
@section('content')


    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label"> Hospital</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
    @include('layouts.header')
    <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
    @include('layouts.sidebar')
    <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    {{--<div class="col-md-5 align-self-center">--}}
                    {{--<h4 class="text-themecolor">Basic Form</h4>--}}
                    {{--</div>--}}
                    <div class="col-md-12 align-self-center text-right">
                        <div class="d-flex justify-content-start align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Basic Form</li>
                            </ol>
                            {{--<button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i--}}
                            {{--class="fa fa-plus-circle"></i> Create New--}}
                            {{--</button>--}}
                        </div>
                    </div>
                </div>











                {{--First form--}}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Type Two Patient Detail</h4>
                            </div>
                            <hr>
                            <div class="form-body">
                                <div class="card-body">
                                    <div class="row pt-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;"  for="exampleInputEmail1">Name</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->name}}


                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;"  for="exampleInputPassword1">Age</label>

                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->age}}
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;"  class="control-label">Gender</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->gender}}

                                                <div class="custom-control custom-radio float-right">

                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;"  for="exampleInputPassword1">Duration of D/M/Y</label>

                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->duration_of_dm}}
                                            </div>
                                        </div>

                                        <!--/span-->
                                    </div>



                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;"  for="exampleInputPassword1">Address(Town)</label>

                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->town}}
                                            </div>
                                        </div>                                            <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;"  for="exampleInputPassword1">Year of Dx</label>

                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->year_of_dx}}
                                            </div>
                                        </div>

                                        <!--/span-->
                                    </div>



                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;"  for="exampleInputPassword1">Phone No</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->phone}}

                                            </div>
                                        </div>                                            <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;"  class="control-label">Family H/O</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->family_ho}}


                                                <div class="custom-control custom-radio float-right">

                                                </div>
                                            </div>
                                        </div>

                                        <!--/span-->
                                    </div>






                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                {{--First form--}}





                {{--SEC form--}}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Medical Problem</h4>
                            </div>
                            <hr>
                            <div class="form-body">
                                <div class="card-body">
                                    <div class="row pt-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;"  for="exampleInputEmail1">Hypertension</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->hypertension}}


                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;"  for="exampleInputPassword1">Dyslipidaemia</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->dyslipidaemia}}

                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;"  for="exampleInputPassword1">BMI</label>
                                                <br>
                                                <div class="row no-gutters">
                                                    <div class="col-3 mr-2">
                                                        Weight:  &nbsp;&nbsp;&nbsp;{{$data->bmi_weight}}
                                                    </div>
                                                    <div class="col-3">
                                                        Height:  &nbsp;&nbsp;&nbsp;{{$data->bmi_height}}
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;"  for="exampleInputPassword1">Tuberculosis</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->tuberculosis}}


                                            </div>
                                        </div>

                                        <!--/span-->
                                    </div>



                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;"  for="exampleInputPassword1">Stroke</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->stroke}}

                                            </div>
                                        </div>                                            <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;"  for="exampleInputPassword1">IHD/MI</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->ihd_mi}}

                                            </div>
                                        </div>

                                        <!--/span-->
                                    </div>



                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;"  for="exampleInputPassword1">Nephropathy</label>

                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->nephropathy}}
                                            </div>
                                        </div>                                            <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;"  for="exampleInputPassword1">Neuropathy</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->neuropathy}}

                                            </div>
                                        </div>                                            <!--/span-->

                                        <!--/span-->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;"  for="exampleInputPassword1">DM foot</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->dm_foot}}

                                            </div>
                                        </div>                                            <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;"  for="exampleInputPassword1">Others</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->others}}

                                            </div>
                                        </div>                                            <!--/span-->

                                        <!--/span-->
                                    </div>



                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;"  class="control-label">Surgical History</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->surgical_history}}


                                                <div class="custom-control custom-radio float-right">

                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->

                                        <!--/span-->
                                    </div>







                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
                {{--SEC form--}}






                {{--third form--}}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Infection</h4>
                            </div>
                            <hr>
                            <div class="form-body">
                                <div class="card-body">




                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;"  class="control-label">HBV</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->hbv}}


                                                <div class="custom-control custom-radio float-right">

                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;"  class="control-label">HCV</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->hcv}}
                                                <div class="custom-control custom-radio float-right">

                                                </div>
                                            </div>
                                        </div>



                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;"  class="control-label">RVI</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->rvi}}
                                                <div class="custom-control custom-radio float-right">

                                                </div>
                                            </div>
                                        </div>


                                        <!--/span-->

                                        <!--/span-->
                                    </div>







                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
                {{--third form--}}




                {{--Four form--}}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Habitual History</h4>
                            </div>
                            <hr>
                            <div class="form-body">
                                <div class="card-body">




                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;"  class="control-label">Smoking</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->smoking}}

                                                <div class="custom-control custom-radio float-right">

                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;"  class="control-label">Alcohol</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->alcohol}}

                                                <div class="custom-control custom-radio float-right">

                                                </div>
                                            </div>
                                        </div>



                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;"  class="control-label">Betal Chewing</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->betal_chewing}}

                                                <div class="custom-control custom-radio float-right">

                                                </div>
                                            </div>
                                        </div>


                                        <!--/span-->

                                        <!--/span-->
                                    </div>







                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
                {{--Four form--}}






                {{--Fifth form--}}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Drug History</h4>
                            </div>
                            <hr>
                            <div class="form-body">
                                <div class="card-body">
                                    <div class="row pt-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;"  for="exampleInputEmail1">OAD</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->oad}}

                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;"  for="exampleInputPassword1">Insulin</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->insulin}}

                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->



                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;"  for="exampleInputPassword1">Traditional</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->traditional}}

                                            </div>
                                        </div>                                            <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;"  for="exampleInputPassword1">Native</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->native}}

                                            </div>
                                        </div>

                                        <!--/span-->
                                    </div>



                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;"  for="exampleInputPassword1">Anti H/T</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->anti_ht}}


                                            </div>
                                        </div>                                            <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;"  for="exampleInputPassword1">Anti Lipid</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->anti_lipid}}

                                            </div>
                                        </div>                                            <!--/span-->

                                        <!--/span-->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;"  for="exampleInputPassword1">Other</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->other}}
                                            </div>
                                        </div>                                            <!--/span-->
                                        <!--/span-->

                                        <!--/span-->
                                    </div>











                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--Fifth form--}}






                {{--Six form--}}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">

                            <hr>
                            <div class="form-body">
                                <div class="card-body">



                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;"  class="control-label">Dental Problem</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->dental_problem}}
                                                <div class="custom-control custom-radio float-right">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;"  class="control-label">Diet Control</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->diet_control}}
                                                <div class="custom-control custom-radio float-right">

                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->

                                        <!--/span-->
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;"  class="control-label">Physical Activity</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->physical_activity}}
                                                <div class="custom-control custom-radio float-right">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;"  class="control-label">Steroid Use</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->steroid_use}}
                                                <div class="custom-control custom-radio float-right">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;"  class="control-label">Register By</label>
                                                <br>
                                                    {{\App\Models\User::where('id',$data->admin_id)->first()->name}}
                                                <div class="custom-control custom-radio float-right">

                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->

                                        <!--/span-->
                                    </div>







                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                {{--Fifth form--}}

                {{--Six form--}}
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <div class="row">
                                <div class="offset-sm-4 offset-md-9 col-md-9">
                                    <a type="submit" class="btn btn-lg btn-success" style="color:white;"> <i class="fa fa-edit"></i> Edit</a>
                                    <form id="delete_form" action="{{ url('/typetwopatients/delete') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$data->id}}"/>
                                    </form>
                                    <a type="button" onclick="Delete()" class="btn waves-effect waves-light btn-lg btn-danger" style="color:white;"><i class="fa fa-trash"></i> Delete</a>
                                    <script>
                                        function Delete() {
                                            if (confirm('Are you sure want to delete this video')) {
                                                document.getElementById('delete_form').submit();
                                            }
                                        }
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--Fifth form--}}









                {{--<div class="right-sidebar">--}}
                {{--<div class="slimscrollright">--}}
                {{--<div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span>--}}
                {{--</div>--}}
                {{--<div class="r-panel-body">--}}
                {{--<ul id="themecolors" class="m-t-20">--}}
                {{--<li><b>With Light sidebar</b></li>--}}
                {{--<li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme">1</a>--}}
                {{--</li>--}}
                {{--<li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>--}}
                {{--<li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>--}}
                {{--<li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme">4</a></li>--}}
                {{--<li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>--}}
                {{--<li><a href="javascript:void(0)" data-skin="skin-megna"--}}
                {{--class="megna-theme working">6</a></li>--}}
                {{--<li class="d-block m-t-30"><b>With Dark sidebar</b></li>--}}
                {{--<li><a href="javascript:void(0)" data-skin="skin-default-dark"--}}
                {{--class="default-dark-theme ">7</a></li>--}}
                {{--<li><a href="javascript:void(0)" data-skin="skin-green-dark"--}}
                {{--class="green-dark-theme">8</a></li>--}}
                {{--<li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a>--}}
                {{--</li>--}}
                {{--<li><a href="javascript:void(0)" data-skin="skin-blue-dark"--}}
                {{--class="blue-dark-theme">10</a></li>--}}
                {{--<li><a href="javascript:void(0)" data-skin="skin-purple-dark" class="purple-dark-theme">11</a>--}}
                {{--</li>--}}
                {{--<li><a href="javascript:void(0)" data-skin="skin-megna-dark" class="megna-dark-theme ">12</a>--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--<ul class="m-t-20 chatonline">--}}
                {{--<li><b>Chat option</b></li>--}}
                {{--<li>--}}
                {{--<a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user-img"--}}
                {{--class="img-circle"> <span>Varun Dhavan <small--}}
                {{--class="text-success">online</small></span></a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user-img"--}}
                {{--class="img-circle"> <span>Genelia Deshmukh <small--}}
                {{--class="text-warning">Away</small></span></a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user-img"--}}
                {{--class="img-circle"> <span>Ritesh Deshmukh <small--}}
                {{--class="text-danger">Busy</small></span></a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user-img"--}}
                {{--class="img-circle"> <span>Arijit Sinh <small--}}
                {{--class="text-muted">Offline</small></span></a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user-img"--}}
                {{--class="img-circle"> <span>Govinda Star <small--}}
                {{--class="text-success">online</small></span></a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user-img"--}}
                {{--class="img-circle"> <span>John Abraham<small--}}
                {{--class="text-success">online</small></span></a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user-img"--}}
                {{--class="img-circle"> <span>Hritik Roshan<small--}}
                {{--class="text-success">online</small></span></a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user-img"--}}
                {{--class="img-circle"> <span>Pwandeep rajan <small--}}
                {{--class="text-success">online</small></span></a>--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}




            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            © Copyright ©All rights reserved
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>


@endsection

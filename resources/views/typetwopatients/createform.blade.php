@extends('layouts.datable')
@section('content')

    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Elite Hospital</p>
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
                {!! Form::open(['url' => 'typetwopatients/create', 'method' => 'post']) !!}




                    {{--First form--}}
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Type Two Patient Register form</h4>
                                </div>
                                <hr>
                                <div class="form-body">
                                    <div class="card-body">
                                        <div class="row pt-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Name</label>
                                                    <input type="text" class="form-control" name="name"
                                                           id="exampleInputEmail1"
                                                           aria-describedby="emailHelp" value="{{old('name')}}"
                                                           placeholder="Enter Name">
                                                    @error('name')
                                                    <p class="text-danger">{{$message}} </p>
                                                    @enderror

                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Age</label>
                                                    <input type="number" name="age" value="{{old('age')}}"
                                                           class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="age">
                                                    @error('age')
                                                    <p class="text-danger">{{$message}} </p>
                                                    @enderror

                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Gender</label>
                                                    <div class="custom-control custom-radio">
                                                        <div class="row no-gutters">
                                                            @if(old('gender')=='male')
                                                                <div class="col-xs-4 mr-5">
                                                                    <input type="radio" id="customRadio11"
                                                                           name="gender" value='male'
                                                                           class="custom-control-input"
                                                                           checked>
                                                                    <label class="custom-control-label"
                                                                           for="customRadio11">Male</label>
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    <input type="radio" id="customRadio12"
                                                                           name="gender" value='female'
                                                                           class="custom-control-input">
                                                                    <label class="custom-control-label"
                                                                           for="customRadio12">Female</label>
                                                                </div>
                                                            @elseif(old('gender')=='female')
                                                                <div class="col-xs-4 mr-5">
                                                                    <input type="radio" id="customRadio11"
                                                                           name="gender" value='male'
                                                                           class="custom-control-input"
                                                                    >
                                                                    <label class="custom-control-label"
                                                                           for="customRadio11">Male</label>
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    <input type="radio" id="customRadio12"
                                                                           name="gender" value='female'
                                                                           class="custom-control-input" checked>
                                                                    <label class="custom-control-label"
                                                                           for="customRadio12">Female</label>
                                                                </div>
                                                            @else
                                                                <div class="col-xs-4 mr-5">
                                                                    <input type="radio" id="customRadio11"
                                                                           name="gender" value='male'
                                                                           class="custom-control-input"
                                                                           checked>
                                                                    <label class="custom-control-label"
                                                                           for="customRadio11">Male</label>
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    <input type="radio" id="customRadio12"
                                                                           name="gender" value='female'
                                                                           class="custom-control-input">
                                                                    <label class="custom-control-label"
                                                                           for="customRadio12">Female</label>
                                                                </div>
                                                            @endif


                                                        </div>
                                                    </div>
                                                    <div class="custom-control custom-radio float-right">

                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Duration of D/M/Y</label>
                                                    <input type="text" name="duration_of_dm" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Duration of D/M/Y">
                                                </div>
                                            </div>

                                            <!--/span-->
                                        </div>


                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Address(Town)</label>
                                                    <input type="text" name="town" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Address(Town)">
                                                </div>
                                            </div>                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Year of Dx</label>
                                                    <input type="text" name="year_of_dx" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Year of Dx">
                                                </div>
                                            </div>

                                            <!--/span-->
                                        </div>


                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Phone No</label>
                                                    <input type="number" name="phone" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Phone No">
                                                </div>
                                            </div>                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Family H/O</label>
                                                    <div class="custom-control custom-radio">
                                                        <div class="row no-gutters">
                                                            <div class="col-xs-4 mr-5">
                                                                <input type="radio" id="customRadio13"
                                                                       name="family_ho" value='yes'
                                                                       class="custom-control-input"
                                                                       checked>
                                                                <label class="custom-control-label" for="customRadio13">Yes</label>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <input type="radio" id="customRadio14"
                                                                       name="family_ho" value='no'
                                                                       class="custom-control-input">
                                                                <label class="custom-control-label" for="customRadio14">No</label>
                                                            </div>


                                                        </div>
                                                    </div>
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
                                                    <label for="exampleInputEmail1">Hypertension</label>
                                                    <input type="text" class="form-control" name="hypertension"
                                                           id="exampleInputEmail1"
                                                           aria-describedby="emailHelp" placeholder="Hypertension">

                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Dyslipidaemia</label>
                                                    <input type="text" name="dyslipidaemia" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Dyslipidaemia">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">BMI</label>
                                                    <div class="row no-gutters">
                                                        <div class="col-3 mr-2">
                                                            <input type="text" name="bmi_weight" class="form-control"
                                                                   id="exampleInputPassword1"
                                                                   placeholder="Weight">
                                                        </div>
                                                        <div class="col-3">
                                                            <input type="text" class="form-control"
                                                                   id="exampleInputPassword1"
                                                                   name="bmi_height"
                                                                   placeholder="Height">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Tuberculosis</label>
                                                    <input type="text" name="tuberculosis" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Tuberculosis">
                                                </div>
                                            </div>

                                            <!--/span-->
                                        </div>


                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Stroke</label>
                                                    <input type="text" name="stroke" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Stroke">
                                                </div>
                                            </div>                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">IHD/MI</label>
                                                    <input type="text" name="ihd_mi" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="IHD/MI">
                                                </div>
                                            </div>

                                            <!--/span-->
                                        </div>


                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Nephropathy</label>
                                                    <input type="text" name="nephropathy" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Nephropathy">
                                                </div>
                                            </div>                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Neuropathy</label>
                                                    <input type="text" name="neuropathy" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Neuropathy">
                                                </div>
                                            </div>                                            <!--/span-->

                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">DM foot</label>
                                                    <input type="text" name='dm_foot' class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="DM foot">
                                                </div>
                                            </div>                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Others</label>
                                                    <input type="text" name="others" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Others">
                                                </div>
                                            </div>                                            <!--/span-->

                                            <!--/span-->
                                        </div>


                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Surgical History</label>
                                                    <div class="custom-control custom-radio">
                                                        <div class="row no-gutters">
                                                            <div class="col-xs-4 mr-5">
                                                                <input type="radio" id="customRadio16"
                                                                       name="surgical_history" value="yes"
                                                                       class="custom-control-input"
                                                                       checked>
                                                                <label class="custom-control-label" for="customRadio16">Yes</label>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <input type="radio" id="customRadio17"
                                                                       name="surgical_history" value="no"
                                                                       class="custom-control-input">
                                                                <label class="custom-control-label" for="customRadio17">No</label>
                                                            </div>


                                                        </div>
                                                    </div>
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
                                                    <label class="control-label">HBV</label>
                                                    <div class="custom-control custom-radio">
                                                        <div class="row no-gutters">
                                                            <div class="col-xs-4 mr-5">
                                                                <input type="radio" id="customRadio19"
                                                                       name="hbv" value='yes'
                                                                       class="custom-control-input"
                                                                       checked>
                                                                <label class="custom-control-label" for="customRadio19">Yes</label>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <input type="radio" id="customRadio20"
                                                                       name="hbv" value='no'
                                                                       class="custom-control-input">
                                                                <label class="custom-control-label" for="customRadio20">No</label>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="custom-control custom-radio float-right">

                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">HCV</label>
                                                    <div class="custom-control custom-radio">
                                                        <div class="row no-gutters">
                                                            <div class="col-xs-4 mr-5">
                                                                <input type="radio" id="customRadio211"
                                                                       name="hcv" value="yes"
                                                                       class="custom-control-input"
                                                                       checked>
                                                                <label class="custom-control-label"
                                                                       for="customRadio211">Yes</label>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <input type="radio" id="customRadio222"
                                                                       name="hcv" value="no"
                                                                       class="custom-control-input">
                                                                <label class="custom-control-label"
                                                                       for="customRadio222">No</label>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="custom-control custom-radio float-right">

                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">RVI</label>
                                                    <div class="custom-control custom-radio">
                                                        <div class="row no-gutters">
                                                            <div class="col-xs-4 mr-5">
                                                                <input type="radio" id="customRadio23"
                                                                       name="rvi" value="yes"
                                                                       class="custom-control-input"
                                                                       checked>
                                                                <label class="custom-control-label" for="customRadio23">Yes</label>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <input type="radio" id="customRadio24"
                                                                       name="rvi" value="no"
                                                                       class="custom-control-input">
                                                                <label class="custom-control-label" for="customRadio24">No</label>
                                                            </div>


                                                        </div>
                                                    </div>
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
                                                    <label class="control-label">Smoking</label>
                                                    <div class="custom-control custom-radio">
                                                        <div class="row no-gutters">
                                                            <div class="col-xs-4 mr-5">
                                                                <input type="radio" id="customRadio191"
                                                                       name="smoking" value="yes"
                                                                       class="custom-control-input"
                                                                       checked>
                                                                <label class="custom-control-label"
                                                                       for="customRadio191">Yes</label>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <input type="radio" id="customRadio201"
                                                                       name="smoking" value="no"
                                                                       class="custom-control-input">
                                                                <label class="custom-control-label"
                                                                       for="customRadio201">No</label>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="custom-control custom-radio float-right">

                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Alcohol</label>
                                                    <div class="custom-control custom-radio">
                                                        <div class="row no-gutters">
                                                            <div class="col-xs-4 mr-5">
                                                                <input type="radio" id="customRadio2111"
                                                                       name="alcohol" value='yes'
                                                                       class="custom-control-input"
                                                                       checked>
                                                                <label class="custom-control-label"
                                                                       for="customRadio2111">Yes</label>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <input type="radio" id="customRadio2222"
                                                                       name="alcohol" value='no'
                                                                       class="custom-control-input">
                                                                <label class="custom-control-label"
                                                                       for="customRadio2222">No</label>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="custom-control custom-radio float-right">

                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Betal Chewing</label>
                                                    <div class="custom-control custom-radio">
                                                        <div class="row no-gutters">
                                                            <div class="col-xs-4 mr-5">
                                                                <input type="radio" id="customRadio231"
                                                                       name="betal_chewing" value="yes"
                                                                       class="custom-control-input"
                                                                       checked>
                                                                <label class="custom-control-label"
                                                                       for="customRadio231">Yes</label>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <input type="radio" id="customRadio241"
                                                                       name="betal_chewing" value="no"
                                                                       class="custom-control-input">
                                                                <label class="custom-control-label"
                                                                       for="customRadio241">No</label>
                                                            </div>


                                                        </div>
                                                    </div>
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
                                                    <label for="exampleInputEmail1">OAD</label>
                                                    <input type="text" class="form-control" name="oad"
                                                           id="exampleInputEmail1"
                                                           aria-describedby="emailHelp" placeholder="OAD">

                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Insulin</label>
                                                    <input type="text" name="insulin" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Insulin">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->


                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Traditional</label>
                                                    <input type="text" class="form-control"
                                                           id="exampleInputPassword1" name="traditional"
                                                           placeholder="Traditional">
                                                </div>
                                            </div>                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Native</label>
                                                    <input type="text" name="native" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Native">
                                                </div>
                                            </div>

                                            <!--/span-->
                                        </div>


                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Anti H/T</label>
                                                    <input type="text" name="anti_ht" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Anti H/T">
                                                </div>
                                            </div>                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Anti Lipid</label>
                                                    <input type="text" class="form-control" name="anti_lipid"
                                                           id="exampleInputPassword1"
                                                           placeholder="Anti Lipid">
                                                </div>
                                            </div>                                            <!--/span-->

                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Other</label>
                                                    <input type="text" class="form-control"
                                                           id="exampleInputPassword1" name="others_drug_his"
                                                           placeholder="Other">
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
                                                    <label class="control-label">Dental Problem</label>
                                                    <div class="custom-control custom-radio">
                                                        <div class="row no-gutters">
                                                            <div class="col-xs-4 mr-5">
                                                                <input type="radio" id="customRadio1216"
                                                                       name="dental_problem" value="yes"
                                                                       class="custom-control-input"
                                                                       checked>
                                                                <label class="custom-control-label"
                                                                       for="customRadio1216">Yes</label>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <input type="radio" id="customRadio1217"
                                                                       name="dental_problem" value="no"
                                                                       class="custom-control-input">
                                                                <label class="custom-control-label"
                                                                       for="customRadio1217">No</label>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="custom-control custom-radio float-right">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Diet Control</label>
                                                    <div class="custom-control custom-radio">
                                                        <div class="row no-gutters">
                                                            <div class="col-xs-4 mr-5">
                                                                <input type="radio" id="customRadio16231"
                                                                       name="diet_control" value="yes"
                                                                       class="custom-control-input"
                                                                       checked>
                                                                <label class="custom-control-label"
                                                                       for="customRadio16231">Yes</label>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <input type="radio" id="customRadio17231"
                                                                       name="diet_control" value="no"
                                                                       class="custom-control-input">
                                                                <label class="custom-control-label"
                                                                       for="customRadio17231">No</label>
                                                            </div>


                                                        </div>
                                                    </div>
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
                                                    <label class="control-label">Physical Activity</label>
                                                    <div class="custom-control custom-radio">
                                                        <div class="row no-gutters">
                                                            <div class="col-xs-4 mr-5">
                                                                <input type="radio" id="customRadio1623"
                                                                       name="physical_activity" value="yes"
                                                                       class="custom-control-input"
                                                                       checked>
                                                                <label class="custom-control-label"
                                                                       for="customRadio1623">Yes</label>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <input type="radio" id="customRadio1723"
                                                                       name="physical_activity" value="no"
                                                                       class="custom-control-input">
                                                                <label class="custom-control-label"
                                                                       for="customRadio1723">No</label>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="custom-control custom-radio float-right">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Steroid Use</label>
                                                    <div class="custom-control custom-radio">
                                                        <div class="row no-gutters">
                                                            <div class="col-xs-4 mr-5">
                                                                <input type="radio" id="customRadio1611"
                                                                       name="steroid_use" value="yes"
                                                                       class="custom-control-input"
                                                                       checked>
                                                                <label class="custom-control-label"
                                                                       for="customRadio1611">Yes</label>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <input type="radio" id="customRadio1711"
                                                                       name="steroid_use" value="no"
                                                                       class="custom-control-input">
                                                                <label class="custom-control-label"
                                                                       for="customRadio1711">No</label>
                                                            </div>


                                                        </div>
                                                    </div>
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
                                        {!! csrf_field() !!}
                                        <button type="submit" class="btn btn-lg btn-success"><i class="fa fa-check"></i>
                                            Submit
                                        </button>
                                        <button type="button" class="btn waves-effect waves-light btn-lg btn-secondary">
                                            Cancel
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--Fifth form--}}


                {!! Form::close() !!}


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

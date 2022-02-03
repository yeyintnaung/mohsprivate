@extends('layouts.withoutauth')
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
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="{{asset('images/logo-icon.png')}}" alt="homepage" class="dark-logo"/>
                            <!-- Light Logo icon -->
                            <img src="{{asset('images/logo-light-icon.png')}}" alt="homepage" class="light-logo"/>
                        </b>
                        <!--End Logo icon -->
                        <span class="hidden-xs"><span class="font-bold">MOHS</span>Demo</span>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav me-auto">
                        <!-- This is  -->
                        <li class="nav-item"><a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark"
                                                href="javascript:void(0)"><i class="ti-menu"></i></a></li>
                        <li class="nav-item"><a
                                class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark"
                                href="javascript:void(0)"><i class="icon-menu"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item">
                            <form class="app-search d-none d-md-block d-lg-block">
                                <input type="text" class="form-control" placeholder="Search & enter">
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Comment -->

                        <li class="nav-item right-side-toggle"><a class="nav-link  waves-effect waves-light"
                                                                  href="javascript:void(0)"><i class="ti-settings"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
    <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
    <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="">
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
                                <h4 class="card-title">Patient Info for ID {{$data->patient_id}}</h4>
                            </div>
                            <hr>
                            <div class="form-body">
                                <div class="card-body">
                                    <div class="row pt-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;" for="exampleInputEmail1">Name</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$patient_info->name}}


                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;" for="exampleInputPassword1">Father
                                                    Name</label>

                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$patient_info->father_name}}
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;"
                                                       class="control-label">Age</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$patient_info->age}}

                                                <div class="custom-control custom-radio float-right">

                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;" for="exampleInputPassword1">Gender</label>

                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$patient_info->gender}}
                                            </div>
                                        </div>

                                        <!--/span-->
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;" for="exampleInputPassword1">Year
                                                    Of Dx</label>

                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$patient_info->year_of_dx}}
                                            </div>
                                        </div>                                            <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;" for="exampleInputPassword1">Address</label>

                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$patient_info->town}}
                                            </div>
                                        </div>

                                        <!--/span-->
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;" for="exampleInputPassword1">Phone
                                                    No</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$patient_info->phone_no}}

                                            </div>
                                        </div>                                            <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;" class="control-label">Education</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$patient_info->education}}


                                                <div class="custom-control custom-radio float-right">

                                                </div>
                                            </div>
                                        </div>

                                        <!--/span-->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;" for="exampleInputPassword1">NRC
                                                    No</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$patient_info->nrc_no}}

                                            </div>
                                        </div>                                            <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;" class="control-label">Referred
                                                    From</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$patient_info->referred_from}}


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
                                <h4 class="card-title">Current</h4>
                            </div>
                            <hr>
                            <div class="form-body">
                                <div class="card-body">
                                    <div class="row pt-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;"
                                                       for="exampleInputEmail1">RBS</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->rbs}}


                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;" for="exampleInputPassword1">Height</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->height}}

                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;" for="exampleInputPassword1">Weight</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->weight}}

                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;" for="exampleInputPassword1">BMI</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->bmi}}


                                            </div>
                                        </div>

                                        <!--/span-->
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;" for="exampleInputPassword1">Blood
                                                    Pressure</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->blood_pressure}}

                                            </div>
                                        </div>                                            <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;" for="exampleInputPassword1">HBA1C(Last
                                                    Date)</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->hba1c}}

                                            </div>
                                        </div>

                                        <!--/span-->
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;" for="exampleInputPassword1">OAD</label>

                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->oad}}
                                            </div>
                                        </div>                                            <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;" for="exampleInputPassword1">Insulin</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->insulin}}

                                            </div>
                                        </div>                                            <!--/span-->

                                        <!--/span-->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;" for="exampleInputPassword1">DM
                                                    foot</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->dm_foot}}

                                            </div>
                                        </div>                                            <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;" for="exampleInputPassword1">Traditional
                                                    Medicine</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->traditional_medicine}}

                                            </div>
                                        </div>                                            <!--/span-->

                                        <!--/span-->
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;"
                                                       class="control-label">Naive</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->naive}}


                                                <div class="custom-control custom-radio float-right">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;" class="control-label">Antihypertensives</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->antihypertensives}}


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
                                                <label style="font-weight: 450 !important;" class="control-label">Antiplatelet</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->antiplatelet}}


                                                <div class="custom-control custom-radio float-right">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;" class="control-label">Anti
                                                    Lipids</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->anti_lipids}}


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
                                                <label style="font-weight: 450 !important;" class="control-label">Other
                                                    Drugs</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->other_drugs}}


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
                                <h4 class="card-title">Family H/O </h4>
                            </div>
                            <hr>
                            <div class="form-body">
                                <div class="card-body">


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;" class="control-label">Hypertension</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->hypertension}}


                                                <div class="custom-control custom-radio float-right">

                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;" class="control-label">Dyslipidaemia</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->dyslipidaemia}}
                                                <div class="custom-control custom-radio float-right">

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;"
                                                       class="control-label">Stroke</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->stroke}}
                                                <div class="custom-control custom-radio float-right">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;"
                                                       class="control-label">IHD/MI</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->ihd_mi}}
                                                <div class="custom-control custom-radio float-right">

                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;" class="control-label">Nephropathy</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->nephropathy}}
                                                <div class="custom-control custom-radio float-right">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;" class="control-label">Retinopathy</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->retinopathy}}
                                                <div class="custom-control custom-radio float-right">

                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;" class="control-label">Neuropathy</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->neuropathy}}
                                                <div class="custom-control custom-radio float-right">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;" class="control-label">DM
                                                    Foot</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->dm_foot}}
                                                <div class="custom-control custom-radio float-right">

                                                </div>
                                            </div>
                                        </div>


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
                                <h4 class="card-title">Personal History</h4>
                            </div>
                            <hr>
                            <div class="form-body">
                                <div class="card-body">


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;" class="control-label">Hypertension</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->ph_hypertension}}

                                                <div class="custom-control custom-radio float-right">

                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;" class="control-label">Dyslipidaemia

                                                </label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->ph_dyslipidaemia}}

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
                                                <label style="font-weight: 450 !important;" class="control-label">Tuberculosis</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->ph_tuberculosis}}

                                                <div class="custom-control custom-radio float-right">

                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;" class="control-label">Stroke


                                                </label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->ph_stroke}}

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
                                                <label style="font-weight: 450 !important;" class="control-label">IHD/MI</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->ph_ihd_mi}}

                                                <div class="custom-control custom-radio float-right">

                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;" class="control-label">Nephropathy

                                                </label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->ph_nephropathy}}

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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Personal History</h4>
                            </div>
                            <hr>
                            <div class="form-body">
                                <div class="card-body">


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;" class="control-label">Other
                                                    Drugs History</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->other_drugs_his}}

                                                <div class="custom-control custom-radio float-right">

                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;" class="control-label">Dental
                                                    History

                                                </label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->dental_history}}

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
                                                <label style="font-weight: 450 !important;" class="control-label">Diet
                                                    Control</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->diet_control}}

                                                <div class="custom-control custom-radio float-right">

                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;" class="control-label">Physical
                                                    Activity

                                                </label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->physical_activity}}

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
                                                <label style="font-weight: 450 !important;" class="control-label">Steroid
                                                    Use</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->steroid_use}}

                                                <div class="custom-control custom-radio float-right">

                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;" class="control-label">Smoking

                                                </label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->smoking}}

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
                                                <label style="font-weight: 450 !important;" class="control-label">Alcohol</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->alcohol}}

                                                <div class="custom-control custom-radio float-right">

                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;" class="control-label">Betal
                                                    Chewing

                                                </label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->betal_chewing}}

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
                                                <label style="font-weight: 450 !important;"
                                                       class="control-label">HBV</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->hbv}}

                                                <div class="custom-control custom-radio float-right">

                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;" class="control-label">HCV

                                                </label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->hcv}}

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
                                                <label style="font-weight: 450 !important;"
                                                       class="control-label">RVI</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->rvi}}

                                                <div class="custom-control custom-radio float-right">

                                                </div>
                                            </div>
                                        </div>


                                        <!--/span-->

                                        <!--/span-->
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-12 mb-4">
                                                <div class="row">
                                                    <div class="offset-sm-4 offset-md-9 col-md-9">
                                                        <a type="submit" href="{{ url()->previous()}}" class="btn btn-md btn-success" style="color:white;"> <i
                                                                class="fa fa-edit"></i>

                                                            Back
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>

                {{--Fifth form--}}


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
        <footer class="footer" style="margin:0px !important;">
            © Copyright ©All rights reserved
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>


@endsection

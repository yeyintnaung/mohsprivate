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
                                <h4 class="card-title">General Profile</h4>
                            </div>
                            <hr>
                            <div class="form-body">
                                <div class="card-body">
                                    <div class="row pt-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;" for="exampleInputEmail1">Name</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->name}}


                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;" for="exampleInputPassword1">Father
                                                    Name</label>

                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->father_name}}
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

                                                &nbsp;&nbsp;&nbsp;{{$data->age}}

                                                <div class="custom-control custom-radio float-right">

                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;" for="exampleInputPassword1">Gender</label>

                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->gender}}
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

                                                &nbsp;&nbsp;&nbsp;{{$data->year_of_dx}}
                                            </div>
                                        </div>                                            <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;" for="exampleInputPassword1">Address</label>

                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->town}}
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

                                                &nbsp;&nbsp;&nbsp;{{$data->phone_no}}

                                            </div>
                                        </div>                                            <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;" class="control-label">Education</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->education}}


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

                                                &nbsp;&nbsp;&nbsp;{{$data->nrc_no}}

                                            </div>
                                        </div>                                            <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;" class="control-label">Referred
                                                    From</label>
                                                <br>

                                                &nbsp;&nbsp;&nbsp;{{$data->referred_from}}


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
                                                <label style="font-weight: 450 !important;" for="exampleInputPassword1">Height (cm)</label>
                                                <br>
                                                &nbsp;&nbsp;&nbsp;{{$data->height_cm}}

                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;" for="exampleInputPassword1">Weight (Kg)</label>
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
                                                    Pressure(mmHg)</label>
                                                <br>

                                                &nbsp;&nbsp;Upper:&nbsp;{{$data->upper_blood_pressure}} &nbsp;Lower:&nbsp;&nbsp;{{$data->lower_blood_pressure}}


                                            </div>
                                        </div>                                            <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="font-weight: 450 !important;" for="exampleInputPassword1">Hba1c (mg/dl)</label>
                                                <br>
                                                @if(!empty($data->hba1c_value))

                                                &nbsp;Result:{{$data->hba1c_value}} &nbsp;&nbsp;  Date:{{$data->hba1c_date}}
                                                @else
                                                    NO
                                                    @endif

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


                                </div>
                                <hr>
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <div class="row">
                                            <div class="offset-sm-4 offset-md-9 col-md-9">
                                                @if(empty($follow_up->id))
                                                    <a type="submit" href="{{url('typetwofollowup/create/'.$data->id)}}" class="btn btn-md btn-info" style="color:white;"> <i
                                                            class="fa fa-edit"></i>

                                                        Follow Up
                                                    </a>
                                                @else
                                                    <a type="submit" href="{{url('typetwofollowup/detail/'.$follow_up->id)}}" class="btn btn-md btn-info" style="color:white;"> <i
                                                            class="fa fa-edit"></i>

                                                        Follow Up
                                                    </a>
                                                @endif
                                                <a type="submit" href="{{url('typetwopatients/edit/'.$data->id)}}" class="btn btn-md btn-success" style="color:white;"> <i
                                                        class="fa fa-edit"></i>

                                                    Edit
                                                </a>
                                                <form id="delete_form" action="{{ url('/typetwopatients/delete') }}" method="POST"
                                                      style="display: none;">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{$data->id}}"/>
                                                </form>
                                                <a type="button" onclick="Delete()"
                                                   class="btn waves-effect waves-light btn-md btn-danger" style="color:white;"><i
                                                        class="fa fa-trash"></i> Delete</a>
                                                <script>
                                                    function Delete() {
                                                        if (confirm('Are you sure want to delete this')) {
                                                            document.getElementById('delete_form').submit();
                                                        }
                                                    }
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
        <footer class="footer" >
            © Copyright ©All rights reserved
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>


@endsection
@push('script')
    <script type="text/javascript" src="{{url('js/jquery.qrcode.js')}}"></script>
    <script type="text/javascript" src="{{url('js/qrcode.js')}}"></script>
    <script>
        //jQuery('#qrcode').qrcode("this plugin is great");
        jQuery('#qrcodeTable').qrcode({
            text: $('#valee').val()
        });

    </script>
@endpush

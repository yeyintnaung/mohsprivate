@extends('layouts.layout')
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

                <form action="{{url('/typetwopatients/edit/'.$data->id)}}" method="post">



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
                                                <label for="">Name</label>
                                                <input type="text" class="form-control" name="name"
                                                       id=""
                                                       value="{{old('name',$data->name)}}"
                                                       placeholder="Enter Name" required/>
                                                @error('name')
                                                <p class="text-danger">{{$message}} </p>
                                                @enderror

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Age</label>
                                                <input type="number" name="age" value="{{old('age',$data->age)}}"
                                                       class="form-control"
                                                       id=""
                                                       placeholder="age" required/>
                                                @error('age')
                                                <p class="text-danger">{{$message}} </p>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>


                                    <!--/row-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Gender</label>
                                                <div class="custom-control custom-radio">
                                                    <div class="row no-gutters">
                                                        @if(!empty(old('gender')))
                                                            @if(old('gender')=='male')
                                                                <div class="col-xs-4 mr-5">
                                                                    <input type="radio" id="customRadio11"
                                                                           name="gender" value='male'
                                                                           class="form-check-input"
                                                                           checked>
                                                                    <label class="custom-control-label"
                                                                           for="customRadio11">Male</label>
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    <input type="radio" id="customRadio12"
                                                                           name="gender" value='female'
                                                                           class="form-check-input">
                                                                    <label class="custom-control-label"
                                                                           for="customRadio12">Female</label>
                                                                </div>
                                                            @elseif(old('gender')=='female')
                                                                <div class="col-xs-4 mr-5">
                                                                    <input type="radio" id="customRadio11"
                                                                           name="gender" value='male'
                                                                           class="form-check-input"
                                                                    >
                                                                    <label class="custom-control-label"
                                                                           for="customRadio11">Male</label>
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    <input type="radio" id="customRadio12"
                                                                           name="gender" value='female'
                                                                           class="form-check-input" checked>
                                                                    <label class="custom-control-label"
                                                                           for="customRadio12">Female</label>
                                                                </div>
                                                            @else
                                                                <div class="col-xs-4 mr-5">
                                                                    <input type="radio" id="customRadio11"
                                                                           name="gender" value='male'
                                                                           class="form-check-input"
                                                                           checked>
                                                                    <label class="custom-control-label"
                                                                           for="customRadio11">Male</label>
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    <input type="radio" id="customRadio12"
                                                                           name="gender" value='female'
                                                                           class="form-check-input">
                                                                    <label class="custom-control-label"
                                                                           for="customRadio12">Female</label>
                                                                </div>
                                                            @endif
                                                        @else
                                                            @if($data->gender == 'male')
                                                                <div class="col-xs-4 mr-5">
                                                                    <input type="radio" id="customRadio11"
                                                                           name="gender" value='male'
                                                                           class="form-check-input"
                                                                           checked>
                                                                    <label class="custom-control-label"
                                                                           for="customRadio11">Male</label>
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    <input type="radio" id="customRadio12"
                                                                           name="gender" value='female'
                                                                           class="form-check-input">
                                                                    <label class="custom-control-label"
                                                                           for="customRadio12">Female</label>
                                                                </div>
                                                            @else
                                                                <div class="col-xs-4 mr-5">
                                                                    <input type="radio" id="customRadio11"
                                                                           name="gender" value='male'
                                                                           class="form-check-input"
                                                                    >
                                                                    <label class="custom-control-label"
                                                                           for="customRadio11">Male</label>
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    <input type="radio" id="customRadio12"
                                                                           name="gender" value='female'
                                                                           class="form-check-input" checked>
                                                                    <label class="custom-control-label"
                                                                           for="customRadio12">Female</label>
                                                                </div>
                                                            @endif
                                                        @endif


                                                    </div>
                                                </div>
                                                <div class="custom-control custom-radio float-right">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Duration of DM</label>
                                                <input type="text" name="duration_of_dm"
                                                       value="{{old('duration_of_dm',$data->duration_of_dm)}}"
                                                       class="form-control"
                                                       id=""
                                                       placeholder="Years" required/>
                                                @error('duration_of_dm')
                                                <p class="text-danger">{{$message}} </p>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Address(Town)</label>
                                                <input type="text" name="town" value="{{old('town',$data->town)}}"
                                                       class="form-control"
                                                       id=""
                                                       placeholder="Address(Town)" required/>
                                                @error('town')
                                                <p class="text-danger">{{$message}} </p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Year of Dx</label>
                                                <input type="text" name="year_of_dx"
                                                       value="{{old('year_of_dx',$data->year_of_dx)}}"
                                                       class="form-control"
                                                       id=""
                                                       placeholder="Year of Dx" required/>
                                                @error('year_of_dx')
                                                <p class="text-danger">{{$message}} </p>
                                                @enderror

                                            </div>
                                        </div>

                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Phone No</label>
                                                <input type="number" name="phone" value="{{old('phone',$data->phone)}}"
                                                       class="form-control"
                                                       id=""
                                                       placeholder="Phone No" required/>
                                                @error('phone')
                                                <p class="text-danger">{{$message}} </p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Family H/O</label>
                                                <div class="custom-control custom-radio">
                                                    <div class="row no-gutters">
                                                        <div class="col-xs-4 mr-5">
                                                        @if(!empty(old('family_ho')))
                                                            @php

                                                                if(old('family_ho')=='yes'){
    $fhochecky='checked';
    $fhocheckn='';

                                                                        }elseif(old('family_ho')=='no'){
    $fhocheckn='checked';
    $fhochecky='';
                                                                        }else{
                                                                            $fhochecky='checked';
                                                                            $fhocheckn='';
                                                                        }

                                                            @endphp
                                                        @else
                                                            @if($data->family_ho == 'yes')
                                                                <?php
                                                                $fhochecky = 'checked';
                                                                $fhocheckn = '';
                                                                ?>
                                                            @else
                                                                <?php
                                                                $fhochecky = 'checked';
                                                                $fhocheckn = '';
                                                                ?>
                                                            @endif
                                                        @endif

                                                        <input type="radio" id="customRadio13"
                                                               name="family_ho" value='yes'
                                                               class="form-check-input"
                                                            {{$fhochecky}}>
                                                        <label class="custom-control-label"
                                                               for="customRadio13">Yes</label>

                                                        </div>
                                                         <div class="col-xs-4">
                                                        <input type="radio" id="customRadio14"
                                                               name="family_ho" value='no'
                                                               class="form-check-input" {{$fhocheckn}}>
                                                        <label class="custom-control-label"
                                                               for="customRadio14">No</label>
                                                    </div>
                                                    </div>


                                            </div>
                                            <div class="custom-control custom-radio float-right">

                                            </div>
                                        </div>
                                    </div>

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
                                            <label for="">Hypertension</label>
                                            <input type="text" class="form-control" name="hypertension"
                                                   value="{{old('hypertension',$data->hypertension)}}"
                                                   id=""
                                                   aria-describedby="emailHelp" placeholder="Hypertension"
                                                   />
                                            @error('hypertension')
                                            <p class="text-danger">{{$message}} </p>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Dyslipidaemia</label>
                                            <input type="text" name="dyslipidaemia" value="{{old('dyslipidaemia',$data->dyslipidaemia)}}"
                                                   class="form-control"
                                                   id=""
                                                   placeholder="Dyslipidaemia" required/>
                                            @error('dyslipidaemia')
                                            <p class="text-danger">{{$message}} </p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">BMI</label>
                                            <div class="row no-gutters">
                                                <div class="col-3 mr-2">
                                                    <input type="text" name="bmi_weight"
                                                           value="{{old('bmi_weight',$data->bmi_weight)}}" class="form-control"
                                                           id=""
                                                           placeholder="Weight" required/>
                                                    @error('bmi_weight')
                                                    <p class="text-danger">{{$message}} </p>
                                                    @enderror

                                                </div>
                                                <div class="col-3">
                                                    <input type="text" value="{{old('bmi_height',$data->bmi_height)}}"
                                                           class="form-control"
                                                           id=""
                                                           name="bmi_height"
                                                           placeholder="Height" required/>
                                                    @error('bmi_height')
                                                    <p class="text-danger">{{$message}} </p>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Tuberculosis</label>
                                            <input type="text" name="tuberculosis" value="{{old('tuberculosis',$data->tuberculosis)}}"
                                                   class="form-control"
                                                   id=""
                                                   placeholder="Tuberculosis" required/>
                                            @error('tuberculosis')
                                            <p class="text-danger">{{$message}} </p>
                                            @enderror
                                        </div>
                                    </div>

                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Stroke</label>
                                            <input type="text" name="stroke" value="{{old('stroke',$data->stroke)}}"
                                                   class="form-control"
                                                   id=""
                                                   placeholder="Stroke" required/>
                                            @error('stroke')
                                            <p class="text-danger">{{$message}} </p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">IHD/MI</label>
                                            <input type="text" name="ihd_mi" value="{{old('ihd_mi',$data->ihd_mi)}}"
                                                   class="form-control"
                                                   id=""
                                                   placeholder="IHD/MI" required/>
                                            @error('ihd_mi')
                                            <p class="text-danger">{{$message}} </p>
                                            @enderror
                                        </div>
                                    </div>

                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Nephropathy</label>
                                            <input type="text" name="nephropathy" value="{{old('nephropathy',$data->nephropathy)}}"
                                                   class="form-control"
                                                   id=""
                                                   placeholder="Nephropathy" required/>
                                            @error('nephropathy')
                                            <p class="text-danger">{{$message}} </p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Neuropathy</label>
                                            <input type="text" name="neuropathy" value="{{old('neuropathy',$data->neuropathy)}}"
                                                   class="form-control"
                                                   id=""
                                                   placeholder="Neuropathy" required/>
                                            @error('neuropathy')
                                            <p class="text-danger">{{$message}} </p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">DM foot</label>
                                            <input type="text" name='dm_foot' value="{{old('dm_foot',$data->dm_foot)}}"
                                                   class="form-control"
                                                   id=""
                                                   placeholder="DM foot" required/>
                                            @error('dm_foot')
                                            <p class="text-danger">{{$message}} </p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Others</label>
                                            <input type="text" name="others" value="{{old('others',$data->others)}}"
                                                   class="form-control"
                                                   id=""
                                                   placeholder="Others" required/>
                                            @error('others')
                                            <p class="text-danger">{{$message}} </p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Surgical History</label>
                                            <div class="custom-control custom-radio">
                                                @if(!empty(old('surgical_history')))
                                                    @php

                                                        if(old('surgical_history')=='yes'){
$shchecky='checked';
$shocheckn='';

                                                                }elseif(old('surgical_history')=='no'){
$shchecky='';
$shocheckn='checked';
                                                                }else{
                                                                    $shchecky='';
                                                                    $shocheckn='checked';
                                                                }

                                                    @endphp
                                                @else
                                                    @if($data->surgical_history == 'yes')
                                                        <?php
                                                        $shchecky = 'checked';
                                                        $shocheckn = '';
                                                        ?>
                                                    @else
                                                        <?php
                                                        $shchecky = '';
                                                        $shocheckn = 'checked';
                                                        ?>
                                                    @endif
                                                @endif

                                                <div class="row no-gutters">
                                                    <div class="col-xs-4 mr-5">
                                                        <input type="radio" id="customRadio16"
                                                               name="surgical_history" value="yes"
                                                               class="form-check-input"
                                                               {{$shchecky}}>
                                                        <label class="custom-control-label"
                                                               for="customRadio16">Yes</label>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <input type="radio" id="customRadio17"
                                                               name="surgical_history" value="no"
                                                               class="form-check-input" {{$shocheckn}}>
                                                        <label class="custom-control-label"
                                                               for="customRadio17">No</label>
                                                    </div>


                                                </div>
                                            </div>
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
                                            @if(!empty(old('hbv')))
                                                @php

                                                    if(old('hbv')=='yes'){
$hbvchecky='checked';
$hbvcheckn='';

                                                            }elseif(old('hbv')=='no'){
$hbvchecky='';
$hbvcheckn='checked';
                                                            }else{
                                                                $hbvchecky='checked';
                                                                $hbvcheckn='';
                                                            }

                                                @endphp
                                            @else
                                                @if($data->hbv == 'yes')
                                                    <?php
                                                    $hbvchecky = 'checked';
                                                    $hbvcheckn = '';
                                                    ?>
                                                @else
                                                    <?php
                                                    $hbvchecky = '';
                                                    $hbvcheckn = 'checked';
                                                    ?>
                                                @endif
                                            @endif

                                            <div class="custom-control custom-radio">
                                                <div class="row no-gutters">
                                                    <div class="col-xs-4 mr-5">
                                                        <input type="radio" id=""
                                                               name="hbv" value='yes'
                                                               class="form-check-input"
                                                               {{$hbvchecky}}>
                                                        <label class="custom-control-label"
                                                               for="customRadio19">Yes</label>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <input type="radio" id="customRadio20"
                                                               name="hbv" value='no'
                                                               class="form-check-input" {{$hbvcheckn}}>
                                                        <label class="custom-control-label"
                                                               for="customRadio20">No</label>
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
                                            @if(!empty(old('hcv')))
                                                @php

                                                    if(old('hcv')=='yes'){
$hcvchecky='checked';
$hcvcheckn='';

                                                            }elseif(old('hcv')=='no'){
$hcvchecky='';
$hcvcheckn='checked';
                                                            }else{
                                                                $hcvchecky='checked';
                                                                $hcvcheckn='';
                                                            }

                                                @endphp
                                            @else
                                                @if($data->hcv == 'yes')
                                                    <?php
                                                    $hcvchecky = 'checked';
                                                    $hcvcheckn = '';
                                                    ?>
                                                @else
                                                    <?php
                                                    $hcvchecky = '';
                                                    $hcvcheckn = 'checked';
                                                    ?>
                                                @endif
                                            @endif

                                            <div class="custom-control custom-radio">
                                                <div class="row no-gutters">
                                                    <div class="col-xs-4 mr-5">
                                                        <input type="radio" id="customRadio211"
                                                               name="hcv" value="yes"
                                                               class="form-check-input"
                                                               {{$hcvchecky}}>
                                                        <label class="custom-control-label"
                                                               for="customRadio211">Yes</label>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <input type="radio" id="customRadio222"
                                                               name="hcv" value="no"
                                                               class="form-check-input" {{$hcvcheckn}}>
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
                                            @if(!empty(old('rvi')))
                                                @php

                                                    if(old('rvi')=='yes'){
$rvichecky='checked';
$rvicheckn='';

                                                            }elseif(old('rvi')=='no'){
$rvichecky='';
$rvicheckn='checked';
                                                            }else{
                                                                $rvichecky='checked';
                                                                $rvicheckn='';
                                                            }

                                                @endphp
                                            @else
                                                @if($data->rvi == 'yes')
                                                    <?php
                                                    $rvichecky = 'checked';
                                                    $rvicheckn = '';
                                                    ?>
                                                @else
                                                    <?php
                                                    $rvichecky = '';
                                                    $rvicheckn = 'checked';
                                                    ?>
                                                @endif
                                            @endif
                                            <div class="custom-control custom-radio">
                                                <div class="row no-gutters">
                                                    <div class="col-xs-4 mr-5">
                                                        <input type="radio" id="customRadio23"
                                                               name="rvi" value="yes"
                                                               class="form-check-input"
                                                               {{$rvichecky}}>
                                                        <label class="custom-control-label"
                                                               for="customRadio23">Yes</label>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <input type="radio" id="customRadio24"
                                                               name="rvi" value="no"
                                                               class="form-check-input" {{$rvicheckn}}>
                                                        <label class="custom-control-label"
                                                               for="customRadio24">No</label>
                                                    </div>


                                                </div>
                                            </div>
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
                            <h4 class="card-title">Habitual History</h4>
                        </div>
                        <hr>
                        <div class="form-body">
                            <div class="card-body">


                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Smoking</label>
                                            @if(!empty(old('smoking')))
                                                @php

                                                    if(old('smoking')=='yes'){
$smokingchecky='checked';
$smokingcheckn='';

                                                            }elseif(old('smoking')=='no'){
$smokingchecky='';
$smokingcheckn='checked';
                                                            }else{
                                                                $smokingchecky='checked';
                                                                $smokingcheckn='';
                                                            }

                                                @endphp
                                            @else
                                                @if($data->smoking == 'yes')
                                                    <?php
                                                    $smokingchecky = 'checked';
                                                    $smokingcheckn = '';
                                                    ?>
                                                @else
                                                    <?php
                                                    $smokingchecky = '';
                                                    $smokingcheckn = 'checked';
                                                    ?>
                                                @endif
                                            @endif
                                            <div class="custom-control custom-radio">
                                                <div class="row no-gutters">
                                                    <div class="col-xs-4 mr-5">
                                                        <input type="radio" id="customRadio191"
                                                               name="smoking" value="yes"
                                                               class="form-check-input"
                                                               {{$smokingchecky}}>
                                                        <label class="custom-control-label"
                                                               for="customRadio191">Yes</label>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <input type="radio" id="customRadio201"
                                                               name="smoking" value="no"
                                                               class="form-check-input" {{$smokingcheckn}}>
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
                                            @if(!empty(old('alcohol')))
                                                @php

                                                    if(old('alcohol')=='yes'){
$alcoholchecky='checked';
$alcoholcheckn='';

                                                            }elseif(old('smoking')=='no'){
$alcoholchecky='';
$alcoholcheckn='checked';
                                                            }else{
                                                                $alcoholchecky='checked';
                                                                $alcoholcheckn='';
                                                            }

                                                @endphp
                                            @else
                                                @if($data->alcohol == 'yes')
                                                    <?php
                                                    $alcoholchecky = 'checked';
                                                    $alcoholcheckn = '';
                                                    ?>
                                                @else
                                                    <?php
                                                    $alcoholchecky = '';
                                                    $alcoholcheckn = 'checked';
                                                    ?>
                                                @endif
                                            @endif
                                            <div class="custom-control custom-radio">
                                                <div class="row no-gutters">
                                                    <div class="col-xs-4 mr-5">
                                                        <input type="radio" id="customRadio2111"
                                                               name="alcohol" value='yes'
                                                               class="form-check-input"
                                                               {{$alcoholchecky}}>
                                                        <label class="custom-control-label"
                                                               for="customRadio2111">Yes</label>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <input type="radio" id="customRadio2222"
                                                               name="alcohol" value='no'
                                                               class="form-check-input" {{$alcoholcheckn}}>
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
                                            @if(!empty(old('betal_chewing')))
                                                @php

                                                    if(old('betal_chewing')=='yes'){
$betal_chewingchecky='checked';
$betal_chewingcheckn='';

                                                            }elseif(old('betal_chewing')=='no'){
$betal_chewingchecky='';
$betal_chewingcheckn='checked';
                                                            }else{
                                                                $betal_chewingchecky='checked';
                                                                $betal_chewingcheckn='';
                                                            }

                                                @endphp
                                            @else
                                                @if($data->betal_chewing == 'yes')
                                                    <?php
                                                    $betal_chewingchecky = 'checked';
                                                    $betal_chewingcheckn = '';
                                                    ?>
                                                @else
                                                    <?php
                                                    $betal_chewingchecky = '';
                                                    $betal_chewingcheckn = 'checked';
                                                    ?>
                                                @endif
                                            @endif
                                            <div class="custom-control custom-radio">
                                                <div class="row no-gutters">
                                                    <div class="col-xs-4 mr-5">
                                                        <input type="radio" id="customRadio231"
                                                               name="betal_chewing" value="yes"
                                                               class="form-check-input"
                                                               {{$betal_chewingchecky}}>
                                                        <label class="custom-control-label"
                                                               for="customRadio231">Yes</label>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <input type="radio" id="customRadio241"
                                                               name="betal_chewing" value="no"
                                                               class="form-check-input" {{$betal_chewingcheckn}}>
                                                        <label class="custom-control-label"
                                                               for="customRadio241">No</label>
                                                    </div>


                                                </div>
                                            </div>
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
                                            <label for="">OAD</label>
                                            <input type="text" class="form-control" name="oad"
                                                   value="{{old('oad',$data->oad)}}"
                                                   id=""
                                                   aria-describedby="emailHelp" placeholder="OAD" required/>
                                            @error('oad')
                                            <p class="text-danger">{{$message}} </p>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Insulin</label>
                                            <input type="text" name="insulin" value="{{old('insulin',$data->insulin)}}"
                                                   class="form-control"
                                                   id=""
                                                   placeholder="Insulin" required/>
                                            @error('insulin')
                                            <p class="text-danger">{{$message}} </p>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
                                <!--/row-->


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Traditional</label>
                                            <input type="text" class="form-control"
                                                   id="" name="traditional" value="{{old('traditional',$data->traditional)}}"
                                                   placeholder="Traditional" required/>
                                            @error('traditional')
                                            <p class="text-danger">{{$message}} </p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Native</label>
                                            <input type="text" name="native" value="{{old('native',$data->native)}}"
                                                   class="form-control"
                                                   id=""
                                                   placeholder="Native" required/>
                                            @error('native')
                                            <p class="text-danger">{{$message}} </p>
                                            @enderror
                                        </div>
                                    </div>

                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Anti H/T</label>
                                            <input type="text" name="anti_ht" value="{{old('anti_ht',$data->anti_ht)}}"
                                                   class="form-control"
                                                   id=""
                                                   placeholder="Anti H/T" required/>
                                            @error('anti_ht')
                                            <p class="text-danger">{{$message}} </p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Anti Lipid</label>
                                            <input type="text" class="form-control" name="anti_lipid"
                                                   value="{{old('anti_lipid',$data->anti_lipid)}}"
                                                   id=""
                                                   placeholder="Anti Lipid" required/>
                                            @error('anti_lipid')
                                            <p class="text-danger">{{$message}} </p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Other Drug History</label>
                                            <input type="text" class="form-control"
                                                   id="" name="others_drug_his" value="{{old('others_drug_his',$data->others_drug_his)}}"
                                                   placeholder="Other" required/>
                                            @error('others_drug_his')
                                            <p class="text-danger">{{$message}} </p>
                                            @enderror
                                        </div>
                                    </div>
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
                                            @if(!empty(old('dental_problem')))
                                                @php

                                                    if(old('dental_problem')=='yes'){
$dental_problem_chewingchecky='checked';
$dental_problem_chewingcheckn='';

                                                            }elseif(old('dental_problem')=='no'){
$dental_problem_chewingchecky='';
$dental_problem_chewingcheckn='checked';
                                                            }else{
                                                                $dental_problem_chewingchecky='checked';
                                                                $dental_problem_chewingcheckn='';
                                                            }

                                                @endphp
                                            @else
                                                @if($data->betal_chewing == 'yes')
                                                    <?php
                                                    $dental_problem_chewingchecky = 'checked';
                                                    $dental_problem_chewingcheckn = '';
                                                    ?>
                                                @else
                                                    <?php
                                                    $dental_problem_chewingchecky = '';
                                                    $dental_problem_chewingcheckn = 'checked';
                                                    ?>
                                                @endif
                                            @endif
                                            <div class="custom-control custom-radio">
                                                <div class="row no-gutters">
                                                    <div class="col-xs-4 mr-5">
                                                        <input type="radio" id="customRadio1216"
                                                               name="dental_problem" value="yes"
                                                               class="form-check-input"
                                                               {{$dental_problem_chewingchecky}}>
                                                        <label class="custom-control-label"
                                                               for="customRadio1216">Yes</label>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <input type="radio" id="customRadio1217"
                                                               name="dental_problem" value="no"
                                                               class="form-check-input" {{$dental_problem_chewingcheckn}}>
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
                                            @if(!empty(old('diet_control')))
                                                @php

                                                    if(old('diet_control')=='yes'){
$diet_controlchewingchecky='checked';
$diet_controlchewingcheckn='';

                                                            }elseif(old('diet_control')=='no'){
$diet_controlchewingchecky='';
$diet_controlchewingcheckn='checked';
                                                            }else{
                                                                $diet_controlchewingchecky='checked';
                                                                $diet_controlchewingcheckn='';
                                                            }

                                                @endphp
                                            @else
                                                @if($data->diet_control == 'yes')
                                                    <?php
                                                    $diet_controlchewingchecky = 'checked';
                                                    $diet_controlchewingcheckn = '';
                                                    ?>
                                                @else
                                                    <?php
                                                    $diet_controlchewingchecky = '';
                                                    $diet_controlchewingcheckn = 'checked';
                                                    ?>
                                                @endif
                                            @endif
                                            <div class="custom-control custom-radio">
                                                <div class="row no-gutters">
                                                    <div class="col-xs-4 mr-5">
                                                        <input type="radio" id="customRadio16231"
                                                               name="diet_control" value="yes"
                                                               class="form-check-input"
                                                               {{$diet_controlchewingchecky}}>
                                                        <label class="custom-control-label"
                                                               for="customRadio16231">Yes</label>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <input type="radio" id="customRadio17231"
                                                               name="diet_control" value="no"
                                                               class="form-check-input" {{$diet_controlchewingcheckn}}>
                                                        <label class="custom-control-label"
                                                               for="customRadio17231">No</label>
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="custom-control custom-radio float-right">

                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Physical Activity</label>
                                            @if(!empty(old('physical_activity')))
                                                @php

                                                    if(old('physical_activity')=='yes'){
$physical_activityy='checked';
$physical_activityn='';

                                                            }elseif(old('physical_activity')=='no'){
$physical_activityy='';
$physical_activityn='checked';
                                                            }else{
                                                                $physical_activityy='checked';
                                                                $physical_activityn='';
                                                            }

                                                @endphp
                                            @else
                                                @if($data->physical_activity == 'yes')
                                                    <?php
                                                    $physical_activityy = 'checked';
                                                    $physical_activityn = '';
                                                    ?>
                                                @else
                                                    <?php
                                                    $physical_activityy = '';
                                                    $physical_activityn = 'checked';
                                                    ?>
                                                @endif
                                            @endif
                                            <div class="custom-control custom-radio">
                                                <div class="row no-gutters">
                                                    <div class="col-xs-4 mr-5">
                                                        <input type="radio" id="customRadio1623"
                                                               name="physical_activity" value="yes"
                                                               class="form-check-input"
                                                               {{$physical_activityy}}>
                                                        <label class="custom-control-label"
                                                               for="customRadio1623">Yes</label>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <input type="radio" id="customRadio1723"
                                                               name="physical_activity" value="no"
                                                               class="form-check-input" {{$physical_activityn}}>
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
                                            @if(!empty(old('steroid_use')))
                                                @php

                                                    if(old('steroid_use')=='yes'){
$steroid_usey='checked';
$steroid_usen='';

                                                            }elseif(old('steroid_use')=='no'){
$steroid_usey='';
$steroid_usen='checked';
                                                            }else{
                                                                $steroid_usey='checked';
                                                                $steroid_usen='';
                                                            }

                                                @endphp
                                            @else
                                                @if($data->steroid_use == 'yes')
                                                    <?php
                                                    $steroid_usey = 'checked';
                                                    $steroid_usen = '';
                                                    ?>
                                                @else
                                                    <?php
                                                    $steroid_usey = '';
                                                    $steroid_usen = 'checked';
                                                    ?>
                                                @endif
                                            @endif
                                            <div class="custom-control custom-radio">
                                                <div class="row no-gutters">
                                                    <div class="col-xs-4 mr-5">
                                                        <input type="radio" id="customRadio1611"
                                                               name="steroid_use" value="yes"
                                                               class="form-check-input"
                                                               {{$steroid_usey}}>
                                                        <label class="custom-control-label"
                                                               for="customRadio1611">Yes</label>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <input type="radio" id="customRadio1711"
                                                               name="steroid_use" value="no"
                                                               class="form-check-input" {{$steroid_usen}}>
                                                        <label class="custom-control-label"
                                                               for="customRadio1711">No</label>
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="custom-control custom-radio float-right">

                                            </div>
                                        </div>
                                    </div>

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
                                <input type="hidden" name="id" value="{{$data->id}}"/>
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


</form>

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

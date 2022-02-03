@extends('layouts.layout')
@section('content')


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
        <div>
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
                    <form action="{{url('/typetwopatients/create')}}" method="post">


                        {{--First form--}}
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body" style="border-bottom: 2px solid #00000014;">
                                        <h4 class="card-title">General Profile</h4>
                                    </div>
                                    <div class="form-body">
                                        <div class="card-body">
                                            <div class="row pt-3">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Name</label>
                                                        <input type="text" class="form-control" name="name"
                                                               id=""
                                                               aria-describedby="emailHelp" value="{{old('name')}}"
                                                               placeholder="Enter Name"/>
                                                        @error('name')
                                                        <p class="text-danger">{{$message}} </p>
                                                        @enderror

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Father Name</label>
                                                        <input type="text" class="form-control" name="father_name"
                                                               id=""
                                                               aria-describedby="emailHelp"
                                                               value="{{old('father_name')}}"
                                                               placeholder="Enter Name"/>
                                                        @error('father_name')
                                                        <p class="text-danger">{{$message}} </p>
                                                        @enderror

                                                    </div>
                                                </div>
                                            </div>


                                            <!--/row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Age(DOB)</label>
                                                        <input type="text" name="age" value="{{old('age')}}"
                                                               class="form-control"
                                                               id=""
                                                               placeholder="age"/>
                                                        @error('age')
                                                        <p class="text-danger">{{$message}} </p>
                                                        @enderror

                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Gender</label>
                                                        <div class="custom-control custom-radio">
                                                            <div class="row no-gutters">
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
                                                        <label for="">Year of Dx</label>
                                                        <input type="text" name="year_of_dx"
                                                               value="{{old('year_of_dx')}}"
                                                               class="form-control"
                                                               id=""
                                                               placeholder="Year of Dx"/>
                                                        @error('year_of_dx')
                                                        <p class="text-danger">{{$message}} </p>
                                                        @enderror

                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Address(Town)</label>
                                                        <input type="text" name="town" value="{{old('town')}}"
                                                               class="form-control"
                                                               id=""
                                                               placeholder="Address(Town)"/>
                                                        @error('town')
                                                        <p class="text-danger">{{$message}} </p>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div>


                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Phone No</label>
                                                        <input type="number" name="phone_no" value="{{old('phone_no')}}"
                                                               class="form-control"
                                                               id=""
                                                               placeholder="Phone No" required/>
                                                        @error('phone_no')
                                                        <p class="text-danger">{{$message}} </p>
                                                        @enderror
                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Education</label>
                                                        <select class="form-control form-select"
                                                                data-placeholder="Choose a Category" name="education"
                                                                value="{{old('education')}}" tabindex="1">
                                                            @if(!empty(old('education')))
                                                                <option value="{{old('education')}}"
                                                                        selected>{{old('education')}}</option>

                                                            @endif
                                                            <option value="primary">Unknown</option>

                                                            <option value="primary">Primary</option>
                                                            <option value="Under Graduated">Under Graduated</option>
                                                            <option value="Graduated">Graduated</option>
                                                            <option value="Post Graduated">Post Graduated</option>
                                                        </select>
                                                        @error('education')
                                                        <p class="text-danger">{{$message}} </p>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">NRC No</label>
                                                        <input type="text" name="nrc_no" value="{{old('nrc_no')}}"
                                                               class="form-control"
                                                               id=""
                                                               placeholder="NRC No"/>
                                                        @error('nrc_no')
                                                        <p class="text-danger">{{$message}} </p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Referred From</label>
                                                        <select class="form-control form-select"
                                                                data-placeholder="Choose a Category"
                                                                name="referred_from"
                                                                value="{{old('referred_from')}}" tabindex="1">
                                                            @if(!empty(old('referred_from')))
                                                                <option value="{{old('referred_from')}}"
                                                                        selected>{{old('referred_from')}}</option>

                                                            @endif
                                                            <option value="Unknown">Unknown</option>
                                                            <option value="GP">GP</option>
                                                            <option value="RHC">RHC</option>
                                                            <option value="UHC">UHC</option>
                                                            <option value="public hospital">Public Hospital</option>
                                                            <option value="Private Hospital">Private Hospital</option>
                                                        </select>
                                                        @error('referred_from')
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
                        {{--First form--}}

                        {{--First form--}}

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body" style="border-bottom: 2px solid #00000014;">
                                        <h4 class="card-title">Current</h4>
                                    </div>

                                    <div class="form-body">
                                        <div class="card-body">
                                            <div class="row pt-3">
                                                <div class="col-md-6">
                                                    <div class="form-group">

                                                        <label for="">RBS(Miligram per decimeter)</label>
                                                        <input type="text" class="form-control" name="rbs"
                                                               value="{{old('rbs')}}"
                                                               id=""
                                                               aria-describedby="emailHelp" placeholder="rbs"/>
                                                        @error('rbs')
                                                        <p class="text-danger">{{$message}} </p>
                                                        @enderror

                                                    </div>
                                                </div>
                                                <cmorfeet-component v-on:forparent="getdatafromchild"></cmorfeet-component>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Weight (Pound)</label>
                                                        <input type="number" name="weight" v-model="weight" @change="onweightchangelister" @keyup="onweightchangelister"
                                                               class="form-control"
                                                               id=""
                                                               placeholder="Weight"/>

                                                    </div>
                                                </div>
                                                <bmi-component :resultbmi="resultBmi"></bmi-component>
                                            </div>
                                            <!--/row-->


                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Blood Pressure</label>
                                                        <input type="text" name="blood_pressure"
                                                               value="{{old('blood_pressure')}}"
                                                               class="form-control"
                                                               id=""
                                                               placeholder="Blood Pressure"/>
                                                        @error('blood_pressure')
                                                        <p class="text-danger">{{$message}} </p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    @if($errors->has('hba1c'))
                                                        <dateorno-component oldvalue="{{old('hba1c')}}" title='HbA1C(last date)' fieldname="hba1c"
                                                                           error="{{$errors->first('hba1c')}}"></dateorno-component>

                                                    @else
                                                        <dateorno-component oldvalue="{{old('hba1c')}}" title='HbA1C(last date)' fieldname="hba1c"
                                                                           error=""></dateorno-component>

                                                    @endif

                                                </div>

                                            </div>


                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">OAD (Start Year)</label>
                                                        <input type="number" name="oad" value="{{old('oad')}}"
                                                               class="form-control"
                                                               id=""
                                                               placeholder="OAD"/>
                                                        @error('oad')
                                                        <p class="text-danger">{{$message}} </p>
                                                        @enderror
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Insulin (Start Year)</label>
                                                        <input type="number" name='insulin' value="{{old('insulin')}}"
                                                               class="form-control"
                                                               id=""
                                                               placeholder="Insulin"/>
                                                        @error('insulin')
                                                        <p class="text-danger">{{$message}} </p>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Traditional Medicine</label>
                                                        <select class="form-control form-select"
                                                                data-placeholder="Choose a Category"
                                                                name="traditional_medicine"
                                                                value="{{old('traditional_medicine')}}" tabindex="1">
                                                            @if(!empty(old('traditional_medicine')))
                                                                <option value="{{old('traditional_medicine')}}"
                                                                        selected>{{old('traditional_medicine')}}</option>

                                                            @endif
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>

                                                        </select>
                                                        @error('traditional_medicine')
                                                        <p class="text-danger">{{$message}} </p>
                                                        @enderror
                                                    </div>


                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Treatment naive</label>
                                                        <select class="form-control form-select"
                                                                data-placeholder="Choose a Category"
                                                                name="naive"
                                                                value="{{old('naive')}}" tabindex="1">
                                                            @if(!empty(old('naive')))
                                                                <option value="{{old('naive')}}"
                                                                        selected>{{old('naive')}}</option>

                                                            @endif
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>

                                                        </select>
                                                        @error('naive')
                                                        <p class="text-danger">{{$message}} </p>
                                                        @enderror
                                                    </div>

                                                    {{--sample yes no design--}}
                                                    {{--                                                    <div class="form-group">--}}
                                                    {{--                                                        <label class="control-label">Trement naive</label>--}}
                                                    {{--                                                        <div class="custom-control custom-radio">--}}
                                                    {{--                                                            <div class="row no-gutters">--}}
                                                    {{--                                                                <div class="col-4 mr-5">--}}
                                                    {{--                                                                    @php--}}
                                                    {{--                                                                        if(old('naive')=='yes'){--}}
                                                    {{--            $surgical_historyy='checked';--}}
                                                    {{--            $surgical_historyn='';--}}

                                                    {{--                                                                                }elseif(old('naive')=='no'){--}}
                                                    {{--            $surgical_historyn='checked';--}}
                                                    {{--            $surgical_historyy='';--}}
                                                    {{--                                                                                }else{--}}
                                                    {{--                                                                                    $surgical_historyy='checked';--}}
                                                    {{--                                                                                    $surgical_historyn='';--}}
                                                    {{--                                                                                }--}}
                                                    {{--                                                                    @endphp--}}
                                                    {{--                                                                    <input type="radio" id="customRadio16"--}}
                                                    {{--                                                                           name="naive" value="Yes"--}}
                                                    {{--                                                                           class="form-check-input"--}}
                                                    {{--                                                                        {{$surgical_historyy}}>--}}
                                                    {{--                                                                    <label class="custom-control-label"--}}
                                                    {{--                                                                           for="customRadio16">Yes</label>--}}
                                                    {{--                                                                </div>--}}
                                                    {{--                                                                <div class="col-4">--}}
                                                    {{--                                                                    <input type="radio" id="customRadio17"--}}
                                                    {{--                                                                           name="naive" value="No"--}}
                                                    {{--                                                                           class="form-check-input" {{$surgical_historyn}}>--}}
                                                    {{--                                                                    <label class="custom-control-label"--}}
                                                    {{--                                                                           for="customRadio17">No</label>--}}
                                                    {{--                                                                </div>--}}


                                                    {{--                                                            </div>--}}
                                                    {{--                                                        </div>--}}
                                                    {{--                                                        <div class="custom-control custom-radio float-right">--}}

                                                    {{--                                                        </div>--}}
                                                    {{--                                                    </div>--}}
                                                    {{--sample yes no design--}}


                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Antihypertensives</label>
                                                        <input type="text" name="antihypertensives"
                                                               value="{{old('antihypertensives')}}"
                                                               class="form-control"
                                                               id=""
                                                               placeholder="Antihypertensives"/>
                                                        @error('antihypertensives')
                                                        <p class="text-danger">{{$message}} </p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">

                                                        <label for="">Anti Lipids</label>
                                                        <input type="text" name="anti_lipids"
                                                               value="{{old('anti_lipids')}}"
                                                               class="form-control"
                                                               id=""

                                                               placeholder="Anti Lipids"/>
                                                        @error('anti_lipids')

                                                        <p class="text-danger">{{$message}} </p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">

                                                        <label for="">Antiplatelet</label>
                                                        <input type="text" name="antiplatelet"
                                                               value="{{old('antiplatelet')}}"
                                                               class="form-control"
                                                               id=""
                                                               placeholder="antiplatelet"/>
                                                        @error('antiplatelet')
                                                        <p class="text-danger">{{$message}} </p>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Other Drugs</label>
                                                        <input type="text" name="other_drugs"
                                                               value="{{old('other_drugs')}}"
                                                               class="form-control"
                                                               id=""
                                                               placeholder="Other Drugs"/>
                                                        @error('other_drugs')
                                                        <p class="text-danger">{{$message}} </p>
                                                        @enderror
                                                    </div>
                                                </div>


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
                                    <div class="card-body" style="border-bottom: 2px solid #00000014;">
                                        <h4 class="card-title">Family H/O</h4>
                                    </div>

                                    <div class="form-body">
                                        <div class="card-body">
                                            <div class="row pt-3">
                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <label class="form-label">Hypertension</label>
                                                        <select class="form-control form-select"
                                                                data-placeholder="Choose a Category"
                                                                name="hypertension"
                                                                value="{{old('hypertension')}}" tabindex="1">
                                                            @if(!empty(old('hypertension')))
                                                                <option value="{{old('hypertension')}}"
                                                                        selected>{{old('hypertension')}}</option>

                                                            @endif
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>

                                                        </select>
                                                        @error('hypertension')
                                                        <p class="text-danger">{{$message}} </p>
                                                        @enderror
                                                    </div>


                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Dyslipidaemia</label>
                                                        <select class="form-control form-select"
                                                                data-placeholder="Choose a Category"
                                                                name="dyslipidaemia"
                                                                value="{{old('dyslipidaemia')}}" tabindex="1">
                                                            @if(!empty(old('dyslipidaemia')))
                                                                <option value="{{old('dyslipidaemia')}}"
                                                                        selected>{{old('dyslipidaemia')}}</option>

                                                            @endif
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>

                                                        </select>
                                                        @error('hypertension')
                                                        <p class="text-danger">{{$message}} </p>
                                                        @enderror
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="row pt-3">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Tuberculosis</label>
                                                        <select class="form-control form-select"
                                                                data-placeholder="Choose a Category"
                                                                name="tuberculosis"
                                                                value="{{old('tuberculosis')}}" tabindex="1">
                                                            @if(!empty(old('tuberculosis')))
                                                                <option value="{{old('tuberculosis')}}"
                                                                        selected>{{old('tuberculosis')}}</option>

                                                            @endif
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>

                                                        </select>
                                                        @error('tuberculosis')
                                                        <p class="text-danger">{{$message}} </p>
                                                        @enderror
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Stroke</label>
                                                        <select class="form-control form-select"
                                                                data-placeholder="Choose a Category"
                                                                name="stroke"
                                                                value="{{old('stroke')}}" tabindex="1">
                                                            @if(!empty(old('stroke')))
                                                                <option value="{{old('stroke')}}"
                                                                        selected>{{old('stroke')}}</option>

                                                            @endif
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>

                                                        </select>
                                                        @error('stroke')
                                                        <p class="text-danger">{{$message}} </p>
                                                        @enderror
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row pt-3">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">IHD/MI</label>
                                                        <select class="form-control form-select"
                                                                data-placeholder="Choose a Category"
                                                                name="ihd_mi"
                                                                value="{{old('ihd_mi')}}" tabindex="1">
                                                            @if(!empty(old('ihd_mi')))
                                                                <option value="{{old('ihd_mi')}}"
                                                                        selected>{{old('ihd_mi')}}</option>

                                                            @endif
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>

                                                        </select>
                                                        @error('ihd_mi')
                                                        <p class="text-danger">{{$message}} </p>
                                                        @enderror
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Nephropathy</label>
                                                        <select class="form-control form-select"
                                                                data-placeholder="Choose a Category"
                                                                name="nephropathy"
                                                                value="{{old('nephropathy')}}" tabindex="1">
                                                            @if(!empty(old('nephropathy')))
                                                                <option value="{{old('nephropathy')}}"
                                                                        selected>{{old('nephropathy')}}</option>

                                                            @endif
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>

                                                        </select>
                                                        @error('nephropathy')
                                                        <p class="text-danger">{{$message}} </p>
                                                        @enderror
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row pt-3">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Retinopathy</label>
                                                        <select class="form-control form-select"
                                                                data-placeholder="Choose a Category"
                                                                name="retinopathy"
                                                                value="{{old('retinopathy')}}" tabindex="1">
                                                            @if(!empty(old('retinopathy')))
                                                                <option value="{{old('retinopathy')}}"
                                                                        selected>{{old('retinopathy')}}</option>

                                                            @endif
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>

                                                        </select>
                                                        @error('retinopathy')
                                                        <p class="text-danger">{{$message}} </p>
                                                        @enderror
                                                    </div>


                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Neuropathy</label>
                                                        <select class="form-control form-select"
                                                                data-placeholder="Choose a Category"
                                                                name="neuropathy"
                                                                value="{{old('neuropathy')}}" tabindex="1">
                                                            @if(!empty(old('retinopathy')))
                                                                <option value="{{old('neuropathy')}}"
                                                                        selected>{{old('neuropathy')}}</option>

                                                            @endif
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>

                                                        </select>
                                                        @error('neuropathy')
                                                        <p class="text-danger">{{$message}} </p>
                                                        @enderror
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row pt-3">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">DM Foot</label>
                                                        <select class="form-control form-select"
                                                                data-placeholder="Choose a Category"
                                                                name="dm_foot"
                                                                value="{{old('dm_foot')}}" tabindex="1">
                                                            @if(!empty(old('dm_foot')))
                                                                <option value="{{old('dm_foot')}}"
                                                                        selected>{{old('dm_foot')}}</option>

                                                            @endif
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>

                                                        </select>
                                                        @error('dm_foot')
                                                        <p class="text-danger">{{$message}} </p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/row-->


                                        </div>
                                        <hr>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body" style="border-bottom: 2px solid #00000014;">
                                        <h4 class="card-title">Personal History</h4>
                                    </div>

                                    <div class="form-body">
                                        <div class="card-body">
                                            <div class="row pt-3">
                                                <div class="col-md-6">
                                                    @if($errors->has('ph_hypertension'))
                                                        <dateorno-component oldvalue="{{old('ph_hypertension')}}" title='Hypertension' fieldname="ph_hypertension"
                                                                           error="{{$errors->first('ph_hypertension')}}"></dateorno-component>

                                                    @else
                                                        <dateorno-component oldvalue="{{old('ph_hypertension')}}" title='Hypertension' fieldname="ph_hypertension"
                                                                           error=""></dateorno-component>

                                                    @endif


                                                </div>
                                                <div class="col-md-6">
                                                    @if($errors->has('ph_dyslipidaemia'))
                                                        <dateorno-component oldvalue="{{old('ph_dyslipidaemia')}}" title='Dyslipidaemia' fieldname="ph_dyslipidaemia"
                                                                           error="{{$errors->first('ph_dyslipidaemia')}}"></dateorno-component>

                                                    @else
                                                        <dateorno-component oldvalue="{{old('ph_dyslipidaemia')}}" title='Dyslipidaemia' fieldname="ph_dyslipidaemia"
                                                                           error=""></dateorno-component>

                                                    @endif


                                                </div>
                                            </div>
                                            <div class="row pt-3">
                                                <div class="col-md-6">
                                                    @if($errors->has('ph_tuberculosis'))
                                                        <dateorno-component oldvalue="{{old('ph_tuberculosis')}}" title='Tuberculosis' fieldname="ph_tuberculosis"
                                                                           error="{{$errors->first('ph_tuberculosis')}}"></dateorno-component>

                                                    @else
                                                        <dateorno-component oldvalue="{{old('ph_tuberculosis')}}" title='Tuberculosis' fieldname="ph_tuberculosis"
                                                                           error=""></dateorno-component>

                                                    @endif

                                                </div>
                                                <div class="col-md-6">
                                                    @if($errors->has('ph_stroke'))
                                                        <dateorno-component oldvalue="{{old('ph_stroke')}}" title='Stroke' fieldname="ph_stroke"
                                                                           error="{{$errors->first('ph_stroke')}}"></dateorno-component>

                                                    @else
                                                        <dateorno-component oldvalue="{{old('ph_stroke')}}" title='Stroke' fieldname="ph_stroke"
                                                                           error=""></dateorno-component>

                                                    @endif

                                                </div>
                                            </div>
                                            <div class="row pt-3">
                                                <div class="col-md-6">
                                                    @if($errors->has('ihd_mi'))
                                                        <dateorno-component oldvalue="{{old('ph_ihd_mi')}}" title='IHD/MI' fieldname="ph_ihd_mi"
                                                                           error="{{$errors->first('ph_ihd_mi')}}"></dateorno-component>

                                                    @else
                                                        <dateorno-component oldvalue="{{old('ph_ihd_mi')}}" title='IHD/MI' fieldname="ph_ihd_mi"
                                                                           error=""></dateorno-component>

                                                    @endif


                                                </div>
                                                <div class="col-md-6">
                                                    @if($errors->has('ph_nephropathy'))
                                                        <dateorno-component oldvalue="{{old('ph_nephropathy')}}" title='Nephropathy' fieldname="ph_nephropathy"
                                                                           error="{{$errors->first('ph_nephropathy')}}"></dateorno-component>

                                                    @else
                                                        <dateorno-component oldvalue="{{old('ph_nephropathy')}}" title='Nephropathy' fieldname="ph_nephropathy"
                                                                           error=""></dateorno-component>

                                                    @endif


                                                </div>
                                            </div>
                                            <div class="row pt-3">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Other Drugs History</label>
                                                        <input type="text" class="form-control" name="other_drugs_his"
                                                               value="{{old('other_drugs_his')}}"
                                                               id=""
                                                               aria-describedby="emailHelp"
                                                               placeholder="Other Drugs History"/>
                                                        @error('other_drugs_his')
                                                        <p class="text-danger">{{$message}} </p>
                                                        @enderror

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Dental History</label>
                                                        <input type="text" class="form-control" name="dental_history"
                                                               value="{{old('dental_history')}}"
                                                               id=""
                                                               aria-describedby="emailHelp" placeholder="Dental History"
                                                        />
                                                        @error('dental_history')
                                                        <p class="text-danger">{{$message}} </p>
                                                        @enderror


                                                    </div>


                                                </div>

                                            </div>
                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Diet Control</label>
                                                        <input type="text" name="diet_control"
                                                               value="{{old('diet_control')}}"
                                                               class="form-control"

                                                               aria-describedby="emailHelp"
                                                               placeholder="Diet Control"/>

                                                        @error('diet_control')
                                                        <p class="text-danger">{{$message}} </p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Physical Activity</label>
                                                        <input type="text" name="physical_activity"
                                                               value="{{old('physical_activity')}}"
                                                               class="form-control"
                                                               id=""

                                                               aria-describedby="emailHelp"
                                                               placeholder="physical_activity"/>

                                                        @error('physical_activity')
                                                        <p class="text-danger">{{$message}} </p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Steroid Use</label>
                                                        <input type="text" name="steroid_use"
                                                               value="{{old('steroid_use')}}"
                                                               class="form-control"
                                                               id=""

                                                               aria-describedby="emailHelp"
                                                               placeholder="steroid_use"/>

                                                        @error('steroid_use')
                                                        <p class="text-danger">{{$message}} </p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Smoking</label>
                                                        <select class="form-control form-select"
                                                                data-placeholder="Choose a Category" name="smoking"
                                                                value="{{old('smoking')}}" tabindex="1">
                                                            @if(!empty(old('smoking')))
                                                                <option value="{{old('smoking')}}"
                                                                        selected>{{old('smoking')}}</option>

                                                            @endif
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                            <option value="Ex">Ex smoke</option>
                                                        </select>
                                                        @error('smoking')
                                                        <p class="text-danger">{{$message}} </p>
                                                        @enderror
                                                    </div>


                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Alcohol</label>
                                                        <select class="form-control form-select"
                                                                data-placeholder="Choose a Category" name="alcohol"
                                                                value="{{old('alcohol')}}" tabindex="1">
                                                            @if(!empty(old('alcohol')))
                                                                <option value="{{old('alcohol')}}"
                                                                        selected>{{old('alcohol')}}</option>

                                                            @endif
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                            <option value="Ex">Ex smoke</option>

                                                        </select>
                                                        @error('alcohol')
                                                        <p class="text-danger">{{$message}} </p>
                                                        @enderror
                                                    </div>

                                                </div>
                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <label class="form-label">Betal Chewing</label>
                                                        <select class="form-control form-select"
                                                                data-placeholder="Choose a Category"
                                                                name="betal_chewing"
                                                                value="{{old('betal_chewing')}}" tabindex="1">
                                                            @if(!empty(old('betal_chewing')))
                                                                <option value="{{old('betal_chewing')}}"
                                                                        selected>{{old('betal_chewing')}}</option>

                                                            @endif
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                            <option value="Ex">Ex smoke</option>

                                                        </select>
                                                        @error('betal_chewing')
                                                        <p class="text-danger">{{$message}} </p>
                                                        @enderror
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">HBV</label>
                                                        <input type="text" name="hbv" value="{{old('hbv')}}"
                                                               class="form-control"
                                                               id=""

                                                               aria-describedby="emailHelp" placeholder="hbv"
                                                        />

                                                        @error('hbv')
                                                        <p class="text-danger">{{$message}} </p>
                                                        @enderror
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">HCV</label>
                                                        <input type="text" name="hcv" value="{{old('hcv')}}"
                                                               class="form-control"
                                                               id=""

                                                               aria-describedby="emailHelp" placeholder="hcv"
                                                        />

                                                        @error('hcv')
                                                        <p class="text-danger">{{$message}} </p>
                                                        @enderror
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">RVI</label>
                                                        <input type="text" name="rvi" value="{{old('rvi')}}"
                                                               class="form-control"
                                                               id=""

                                                               aria-describedby="emailHelp" placeholder="rvi"
                                                        />
                                                        @error('rvi')
                                                        <p class="text-danger">{{$message}} </p>
                                                        @enderror
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-12 mb-4">
                                                        <div class="row">
                                                            <div class="offset-sm-4 offset-md-9 col-md-9">
                                                                {!! csrf_field() !!}
                                                                <button type="submit"
                                                                        class="btn btn-lg btn-success"><i
                                                                        class="fa fa-check"></i>
                                                                    Submit
                                                                </button>
                                                                <button type="button"
                                                                        class="btn waves-effect waves-light btn-lg btn-secondary">
                                                                    Cancel
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


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
    </div>

@endsection

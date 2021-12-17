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


                <form method="POST" action="{{url('typetwofollowup/create')}}">


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
                                                @if($link_patient_id =='')
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Patient id</label>
                                                    <select name='patient_id' class="form-control custom-select">
                                                        @if(old('patient_id'))

                                                        <option value='{{old('patient_id')}}'>{{old('patient_id')}}</option>
                                                        @else
                                                            <option value=''>Patient ID</option>

                                                        @endif
                                                        @foreach($id as $i)
                                                            <option value="{{$i->id}}">{{$i->id}}</option>
                                                        @endforeach


                                                    </select>
                                                    @error('patient_id')
                                                    <p class="text-danger">{{$message}} </p>
                                                    @enderror

                                                </div>
                                                @else
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Patient id</label>
                                                        <select name='patient_id' class="form-control custom-select">
                                                            <option value='{{$link_patient_id}}' selected>{{$link_patient_id}}</option>



                                                        </select>
                                                        @error('patient_id')
                                                        <p class="text-danger">{{$message}} </p>
                                                        @enderror

                                                    </div>                                                @endif
                                            </div>

                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">HB</label>
                                                    <input type="text" name="hb" value="{{old('hb')}}" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="HB">
                                                    @error('hb')
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
                                                    <label for="exampleInputPassword1">CR</label>
                                                    <input type="text" name="cr"  value="{{old('cr')}}" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="CR">
                                                    @error('cr')
                                                    <p class="text-danger">{{$message}} </p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">UACR</label>
                                                    <input type="text" name="uacr" value="{{old('uacr')}}" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="UACR">
                                                    @error('uacr')
                                                    <p class="text-danger">{{$message}} </p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <!--/span-->
                                        </div>


                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">CHOL</label>
                                                    <input type="text" name="chol" value="{{old('chol')}}" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="CHOL">
                                                    @error('chol')
                                                    <p class="text-danger">{{$message}} </p>
                                                    @enderror
                                                </div>
                                            </div>                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">LDL</label>
                                                    <input type="text" name="ldl" value="{{old('ldl')}}" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="LDL">
                                                    @error('ldl')
                                                    <p class="text-danger">{{$message}} </p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <!--/span-->
                                        </div>


                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">HDL</label>
                                                    <input type="text" name="hdl" value="{{old('hdl')}}" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="HDL">
                                                    @error('hdl')
                                                    <p class="text-danger">{{$message}} </p>
                                                    @enderror
                                                </div>
                                            </div>                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">TG</label>
                                                    <input type="text" name="tg"  value="{{old('tg')}}" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="TG">
                                                    @error('tg')
                                                    <p class="text-danger">{{$message}} </p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <!--/span-->
                                        </div>
                                        <div class="row pt-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">ASCVD</label>
                                                    <input type="text" class="form-control" value="{{old('ascvd')}}" name="ascvd"
                                                           id="exampleInputEmail1"
                                                           aria-describedby="emailHelp" placeholder="ASCVD">
                                                    @error('ascvd')
                                                    <p class="text-danger">{{$message}} </p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">TSH</label>
                                                    <input type="text" name="tsh" value="{{old('tsh')}}" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="TSH">
                                                    @error('tsh')
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
                                                    <label for="exampleInputPassword1">UA</label>
                                                    <input type="text" name="u_a" value="{{old('u_a')}}"  class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="TSH">
                                                    @error('u_a')
                                                    <p class="text-danger">{{$message}} </p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Retinopathy</label>
                                                    <input type="text" value="{{old('retinopathy')}}" name="retinopathy" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Retinopathy">
                                                    @error('retinopathy')
                                                    <p class="text-danger">{{$message}} </p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <!--/span-->
                                        </div>


                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Neuropathy</label>
                                                    <input type="text" name="neuropathy" value="{{old('neuropathy')}}" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Neuropathy">
                                                    @error('neuropathy')
                                                    <p class="text-danger">{{$message}} </p>
                                                    @enderror
                                                </div>
                                            </div>                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">PAD</label>
                                                    <input type="text" name="pad"  value="{{old('pad')}}" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="PAD">
                                                    @error('pad')
                                                    <p class="text-danger">{{$message}} </p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <!--/span-->
                                        </div>


                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">HBa1c</label>
                                                    <input type="text" class="form-control" value="{{old('hba1c')}}" name="hba1c"
                                                           id="exampleInputEmail1"
                                                           aria-describedby="emailHelp" placeholder="Enter HBa1c">
                                                    @error('hba1c')
                                                    <p class="text-danger">{{$message}} </p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">HE</label>
                                                    <input type="text" name="he" value="{{old('he')}}" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="HE">
                                                    @error('he')
                                                    <p class="text-danger">{{$message}} </p>
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Date</label>
                                                    <input type="date" name='date' class="form-control" placeholder="dd/mm/yyyy">
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
                                <div class="card-body">
                                    <h4 class="card-title">Clinical Profile</h4>
                                </div>
                                <hr>
                                <div class="form-body">
                                    <div class="card-body">
                                        <div class="row pt-3">
                                            <div class="col-md-6">
                                                @if($link_patient_id =='')
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Patient id</label>
                                                        <select name='patient_id' class="form-control custom-select">
                                                            @if(old('patient_id'))

                                                                <option value='{{old('patient_id')}}'>{{old('patient_id')}}</option>
                                                            @else
                                                                <option value=''>Patient ID</option>

                                                            @endif
                                                            @foreach($id as $i)
                                                                <option value="{{$i->id}}">{{$i->id}}</option>
                                                            @endforeach


                                                        </select>
                                                        @error('patient_id')
                                                        <p class="text-danger">{{$message}} </p>
                                                        @enderror

                                                    </div>
                                                @else
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Patient id</label>
                                                        <select name='patient_id' class="form-control custom-select">
                                                            <option value='{{$link_patient_id}}' selected>{{$link_patient_id}}</option>



                                                        </select>
                                                        @error('patient_id')
                                                        <p class="text-danger">{{$message}} </p>
                                                        @enderror

                                                    </div>                                                @endif
                                            </div>

                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">HB</label>
                                                    <input type="text" name="hb" value="{{old('hb')}}" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="HB">
                                                    @error('hb')
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
                                                    <label for="exampleInputPassword1">CR</label>
                                                    <input type="text" name="cr"  value="{{old('cr')}}" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="CR">
                                                    @error('cr')
                                                    <p class="text-danger">{{$message}} </p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">UACR</label>
                                                    <input type="text" name="uacr" value="{{old('uacr')}}" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="UACR">
                                                    @error('uacr')
                                                    <p class="text-danger">{{$message}} </p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <!--/span-->
                                        </div>


                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">CHOL</label>
                                                    <input type="text" name="chol" value="{{old('chol')}}" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="CHOL">
                                                    @error('chol')
                                                    <p class="text-danger">{{$message}} </p>
                                                    @enderror
                                                </div>
                                            </div>                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">LDL</label>
                                                    <input type="text" name="ldl" value="{{old('ldl')}}" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="LDL">
                                                    @error('ldl')
                                                    <p class="text-danger">{{$message}} </p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <!--/span-->
                                        </div>


                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">HDL</label>
                                                    <input type="text" name="hdl" value="{{old('hdl')}}" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="HDL">
                                                    @error('hdl')
                                                    <p class="text-danger">{{$message}} </p>
                                                    @enderror
                                                </div>
                                            </div>                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">TG</label>
                                                    <input type="text" name="tg"  value="{{old('tg')}}" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="TG">
                                                    @error('tg')
                                                    <p class="text-danger">{{$message}} </p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <!--/span-->
                                        </div>
                                        <div class="row pt-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">ASCVD</label>
                                                    <input type="text" class="form-control" value="{{old('ascvd')}}" name="ascvd"
                                                           id="exampleInputEmail1"
                                                           aria-describedby="emailHelp" placeholder="ASCVD">
                                                    @error('ascvd')
                                                    <p class="text-danger">{{$message}} </p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">TSH</label>
                                                    <input type="text" name="tsh" value="{{old('tsh')}}" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="TSH">
                                                    @error('tsh')
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
                                                    <label for="exampleInputPassword1">UA</label>
                                                    <input type="text" name="u_a" value="{{old('u_a')}}"  class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="TSH">
                                                    @error('u_a')
                                                    <p class="text-danger">{{$message}} </p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Retinopathy</label>
                                                    <input type="text" value="{{old('retinopathy')}}" name="retinopathy" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Retinopathy">
                                                    @error('retinopathy')
                                                    <p class="text-danger">{{$message}} </p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <!--/span-->
                                        </div>


                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Neuropathy</label>
                                                    <input type="text" name="neuropathy" value="{{old('neuropathy')}}" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="Neuropathy">
                                                    @error('neuropathy')
                                                    <p class="text-danger">{{$message}} </p>
                                                    @enderror
                                                </div>
                                            </div>                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">PAD</label>
                                                    <input type="text" name="pad"  value="{{old('pad')}}" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="PAD">
                                                    @error('pad')
                                                    <p class="text-danger">{{$message}} </p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <!--/span-->
                                        </div>


                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">HBa1c</label>
                                                    <input type="text" class="form-control" value="{{old('hba1c')}}" name="hba1c"
                                                           id="exampleInputEmail1"
                                                           aria-describedby="emailHelp" placeholder="Enter HBa1c">
                                                    @error('hba1c')
                                                    <p class="text-danger">{{$message}} </p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">HE</label>
                                                    <input type="text" name="he" value="{{old('he')}}" class="form-control"
                                                           id="exampleInputPassword1"
                                                           placeholder="HE">
                                                    @error('he')
                                                    <p class="text-danger">{{$message}} </p>
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Date</label>
                                                    <input type="date" name='date' class="form-control" placeholder="dd/mm/yyyy">
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    {{--First form--}}



                    {{--Six form--}}
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-12 mb-4">
                                <div class="row">
                                    <div class="offset-sm-4 offset-md-9 col-md-9">
                                        {!! csrf_field() !!}
                                        <button type="submit" class="btn btn-lg btn-success"> <i class="fa fa-check"></i> Submit</button>
                                        <button type="button" class="btn waves-effect waves-light btn-lg btn-secondary">Cancel</button>
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

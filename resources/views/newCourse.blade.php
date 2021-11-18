<!DOCTYPE html>
<html lang="en">

@include('header');


            <!--== BODY INNER CONTAINER ==-->
            <div class="sb2-2">
                <!--== breadcrumbs ==-->
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="index"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="newCourse"> Add new course</a>
                        </li>
                        <li class="page-back"><a href="index"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                        </li>
                    </ul>
                </div>

                <!--== Course Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp admin-form">
				<div class="sb2-2-add-blog sb2-2-1">
                    <h2>School Administration</h2>
                    <p>You could create and add new courses, Departments and Specialities Here</p>

                    <ul class="nav nav-tabs tab-list">
                        <li class="active"><a data-toggle="tab" href="#home" aria-expanded="true"><i class="fa fa-info" aria-hidden="true"></i> <span>Course Detail</span></a>
                        </li>
                        <li class=""><a data-toggle="tab" href="#menu1" aria-expanded="false"><i class="fa fa-bed" aria-hidden="true"></i> <span>Department Details</span></a>
                        </li>
                        <li class=""><a data-toggle="tab" href="#menu2" aria-expanded="false"><i class="fa fa-bed" aria-hidden="true"></i> <span>Speciality Details</span></a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div id="home" class="tab-pane fade active in">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Course Information</h4>
                                </div>
                                <div class="bor">
                                    <form action="{{route('addcourse')}}" method="Post">
                                        @if(Session::has('success'))
                                            <div class="alert alert-success">{{session::get('success')}}</div>
                                        @endif
                                            @if(Session::has('fail'))
                                                <div class="alert `alert-danger">{{session::get('fail')}}</div>
                                            @endif
                                        @csrf
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="list-title" name="course_code" value="{{old('course_code')}}" type="text" class="validate">
                                                <span class="text-danger">@error('course_code') {{$message}} @enderror</span>
                                                <label for="list-title" class="">Course Code</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="list-name" name="course_name" value="{{old('course_name')}}" type="text" class="validate">
                                                <span class="text-danger">@error('course_name') {{$message}} @enderror</span>
                                                <label for="list-name">Course Name</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                                <div class="input-field col s12">
                                                    <select name="semester"  >
                                                        <option value="{{old('semester')}}" disabled selected>Select semester</option>
                                                        <option value="first">First</option>
                                                        <option value="second">Second</option>
                                                    </select>
                                                    <span class="text-danger">@error('semester') {{$message}} @enderror</span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <select name="level">
                                                        <option value="{{old('level')}}" disabled selected>Select Level</option>
                                                        <option value="one">One</option>
                                                        <option value="two">Two</option>
                                                        <option value="three">Three</option>
                                                    </select>
                                                    <span class="text-danger">@error('level') {{$message}} @enderror</span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <select  name="lecturer">
                                                        <option value="{{old('lecturer')}}" disabled selected>Select Lecturer</option>
                                                        <option value="Mr Charles">Mr Charles</option>
                                                        <option value="Mr Jaff">Mr Jaff</option>
                                                        <option value="Mr Palma">Mr Palma</option>
                                                    </select>
                                                    <span class="text-danger">@error('lecturer') {{$message}} @enderror</span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <select name="speciality" >
                                                        {{$special = DB::table('specialities')->select('name')->get()}}
                                                        <option value="" disabled selected>Select Speciality</option>
                                                        @foreach($special as $key)
                                                            <option value="{{$key->name}}">{{$key->name}}</option>
                                                        @endforeach
                                                    </select>
                                                    <span class="text-danger">@error('speciality') {{$message}} @enderror</span>
                                                </div>
                                            </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" class="waves-button-input" value="Submit"></i>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="menu1" class="tab-pane fade">
                            <div class="inn-title">
                                <h4>Department Details</h4>
                            </div>
                            <div class="bor ad-cou-deta-h4">

                                <form method="post" action="{{route('depart')}}">
                                    @if(Session::has('success'))
                                        <div class="alert alert-success">{{session::get('success')}}</div>
                                    @endif
                                    @if(Session::has('fail'))
                                        <div class="alert `alert-danger">{{session::get('fail')}}</div>
                                    @endif
                                    @csrf
										<h4>Department:</h4>
                                            <div class="input-field col s12">
                                                <input id="list-name" name="name" type="text" class="validate">
                                                <label for="list-name">Department Name</label>
                                                <span class="text-danger">@error('name') {{$message}} @enderror</span>
                                            </div>
										<h4>Program:</h4>
                                        <div class="row">
                                                <div class="input-field col s12">
                                                    <select name="program">
                                                        <option value="" disabled selected>Select Program</option>
                                                        <option value="HND">HND</option>
                                                        <option value="BTS">BTS</option>
                                                        <option value="Bachelor Degree">Bachelor Degree</option>
                                                        <option value="Licence Pro">Licence Pro</option>
                                                        <option value="Masters Degree">Masters Degree</option>
                                                        <option value="Master Pro">Master Pro</option>
                                                    </select>
                                                    <span class="text-danger">@error('program') {{$message}} @enderror</span>
                                                </div>
                                            </div>
                                            <h4>Head of Department:</h4>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <select name="HOD">
                                                        <option value="" disabled selected>Select HOD</option>
                                                        <option value="Mr charles">Mr Charles</option>
                                                        <option value="Dr. pada">Dr Pada</option>
                                                        <option value="Eng Therese">Eng Therese</option>
                                                        <option value="Mr Palma">Mr Palma</option>
                                                        <option value="Mr Kumji">Mr Kumji</option>
                                                    </select>
                                                    <span class="text-danger">@error('HOD') {{$message}} @enderror</span>
                                                </div>
                                            </div>

                                        <div class="row">
                                            <div class="input-field col s12">
                                                <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" class="waves-button-input" value="Submit"></i>
                                            </div>
                                        </div>
                                </form>
                            </div>
                        </div>


<div id="menu2" class="tab-pane fade">
    <div class="inn-title">
        <h4>Speciality Details</h4>
    </div>
    <div class="bor ad-cou-deta-h4">

        <form method="post" action="{{route('addSpecial')}}" enctype="multipart/form-data">
            @if(Session::has('success'))
                <div class="alert alert-success">{{session::get('success')}}</div>
            @endif
            @if(Session::has('fail'))
                <div class="alert `alert-danger">{{session::get('fail')}}</div>
            @endif
            @csrf
            <h4>Speciality:</h4>
            <div class="input-field col s12">
                <input id="list-name" name="name" value="{{old('name')}}" type="text" class="validate">
                <label for="list-name">Speciality Name</label>
                <span class="text-danger">@error('name') {{$message}} @enderror</span>
            </div>
                <h4>Program:</h4>
                <div class="row">
                    <div class="input-field col s12">
                        <select name="program">
                            <option value="" disabled selected>Select Program</option>
                            <option value="HND1">HND1</option>
                            <option value="BTS1">BTS1</option>
                            <option value="HND2">HND2</option>
                            <option value="BTS2">BTS2</option>
                            <option value="Bachelor Degree">Bachelor Degree</option>
                            <option value="Licence Pro">Licence Pro</option>
                            <option value="Masters Degree">Masters Degree</option>
                            <option value="Master Pro">Master Pro</option>
                        </select>
                        <span class="text-danger">@error('program') {{$message}} @enderror</span>
                    </div>
                </div>
                <h4>Tuition:</h4>
                <div class="input-field col s12">
                    <input id="list-name" name="tuition" value="{{old('tuition')}}" type="text" class="validate">
                    <label for="list-name">Enter Tuition Fee</label>
                    <span class="text-danger">@error('name') {{$message}} @enderror</span>
                </div>
            <h4>Department:</h4>
            <div class="row">
                <div class="input-field col s12">
                    <select name="dep_id">
                        {{$depart = DB::table('departments')->select('dep_id','dep_name')->get()}}
                        <option value="" disabled selected>Select Department</option>
                    @foreach($depart as $key)
                            <option value="{{$key->dep_id}}">{{$key->dep_name}}</option>
                        @endforeach
                    </select>
                    <span class="text-danger">@error('dep_id') {{$message}} @enderror</span>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" class="waves-button-input" value="Submit"></i>
                </div>
            </div>
        </form>
    </div>
</div>


        <!--Import jQuery before materialize.js-->
        <script src="{{asset('/js/main.min.js')}}"></script>
        <script src="{{asset('/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('/js/materialize.min.js')}}"></script>
        <script src="{{asset('/js/custom.js')}}"></script>
</body>


</html>

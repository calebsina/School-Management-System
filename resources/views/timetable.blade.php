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
                        <li class="active-bre"><a href="timetable"> Time Table</a>
                        </li>
                        <li class="page-back"><a href="index"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                        </li>
                    </ul>
                </div>

                <!--== User Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp admin-form">
				<div class="sb2-2-add-blog sb2-2-1">
                    <h2>New Time Table</h2>
                    <p>Here you could create new Time table for students all levels</p>

                    <ul class="nav nav-tabs tab-list">
                        <li class="active"><a data-toggle="tab" href="#home" aria-expanded="true"><i class="fa fa-sticky-note-o" aria-hidden="true"></i> <span>Create Timetable </span></a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div id="home" class="tab-pane fade active in">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4> Details</h4>
                                    <p>All details about Time Table</p>
                                </div>
                                <div class="bor">
									<form method="post" action="{{route('addTimetable')}}" enctype="multipart/form-data">
                                        @if(Session::has('success'))
                                            <div class="alert alert-success">{{session::get('success')}}</div>
                                        @endif
                                        @if(Session::has('fail'))
                                            <div class="alert alert-danger">{{session::get('fail')}}</div>
                                        @endif
                                        @csrf
                                        <div class="row">
                                                        <div class="input-field col s12">
                                                            <select name="program">
                                                                <option value="" disabled selected>Select Program</option>
                                                                <option value="HND1">HND 1</option>
                                                                <option value="BTS1">BTS 1</option>
                                                                <option value="HND2">HND 2</option>
                                                                <option value="BTS2">BTS 2</option>
                                                                <option value="Degree">Degree</option>
                                                                <option value="License">License</option>
                                                            </select>
                                                            <span class="text-danger">@error('program') {{$message}} @enderror</span>
                                                        </div>
                                                </div>

                                        <div class="row">
                                                    <div class="input-field col s12">
                                                        <select name="special">
                                                            {{$special = DB::table('specialities')->select('name')->get()}}
                                                            <option value="" disabled selected>Select Speciality</option>
                                                            @foreach($special as $key)
                                                                <option value="{{$key->name}}">{{$key->name}}</option>
                                                            @endforeach
                                                        <span class="text-danger">@error('special') {{$message}} @enderror</span>
                                                        </select>
                                                    </div>
                                        </div>

                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <select name="course">
                                                            {{$course = DB::table('courses')->select('course_name')->get()}}
                                                            <option value="" disabled selected>Select Course</option>
                                                            @foreach($course as $data)
                                                            <option value="{{$data->course_name}}">{{$data->course_name}}</option>
                                                            @endforeach
                                                        </select>
                                                        <span class="text-danger">@error('course') {{$message}} @enderror</span>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <select name="day">
                                                            <option value="" disabled selected>Select Day</option>
                                                            <option value="monday">Monday</option>
                                                            <option value="Tuesday">Tuesday</option>
                                                            <option value="Wednesday">Wednesday</option>
                                                            <option value="Thursday">Thursday</option>
                                                            <option value="Friday">Friday</option>
                                                            <option value="Saturday">Saturday</option>
                                                        </select>
                                                        <span class="alert-danger">@error('day') {{$message}} @enderror</span>
                                                    </div>
                                                </div>
                                            <div class="row">
                                                    <div class="input-field col s12">
                                                        <select name="hall">
                                                            <option value="" disabled selected>Select Hall</option>
                                                            <option value="Hall 1">Hall 1</option>
                                                            <option value="Hall 2">Hall 2</option>
                                                            <option value="Hall 3">Hall 3</option>
                                                            <option value="Hall 4">Hall 4</option>
                                                        </select>
                                                        <span class="alert-danger">@error('hall') {{$message}} @enderror</span>
                                                    </div>
                                                </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <select name="time">
                                                        <option value="" disabled selected>Select Time</option>
                                                        <option value="08am - 10am">08am - 10am</option>
                                                        <option value="10am - 12pm">10am - 12pm</option>
                                                        <option value="01pm - 03pm">01pm - 03pm</option>
                                                        <option value="03pm - 05pm">03pm - 05pm</option>
                                                        <option value="05pm - 07pm">05pm - 07pm</option>
                                                        <option value="07pm - 09pm">07pm - 09pm</option>
                                                    </select>
                                                    <span class="text-danger">@error('time') {{$message}} @enderror</span>
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

   <!--Import jQuery before materialize.js-->
    <script src="{{asset('/js/main.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/materialize.min.js')}}"></script>
    <script src="{{asset('/js/custom.js')}}"></script>
</body>


</html>

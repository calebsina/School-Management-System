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
                        <li class="active"><a data-toggle="tab" href="#home" aria-expanded="true"><i class="fa fa-sticky-note-o" aria-hidden="true"></i> <span>Timetable 1</span></a>
                        </li>
                        <li class=""><a data-toggle="tab" href="#menu1" aria-expanded="false"><i class="fa fa-sticky-note-o" aria-hidden="true"></i> <span>Timetable 2</span></a>
                        </li>
                        <li class=""><a data-toggle="tab" href="#menu2" aria-expanded="false"><i class="fa fa-sticky-note-o" aria-hidden="true"></i> <span>Timetable 3</span></a>
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
									<form method="post" action="{{route('')}}" enctype="multipart/form-data">
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
                                                            <span class="text-danger">@error('department') {{$message}} @enderror</span>
                                                        </div>
                                                </div>
                                        <div class="row">
                                                    <div class="input-field col s12">
                                                        <select name="department">
                                                            <option value="" disabled selected>Select Department</option>
                                                            <option value="Software">Software</option>
                                                            <option value="2">Banking & Finance</option>
                                                            <option value="4">Transport & Logistics</option>
                                                            <option value="5">Human Resource</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <select>
                                                            <option value="" disabled selected>Select Course</option>
                                                            <option value="1">Case Study</option>
                                                            <option value="2">French</option>
                                                            <option value="4">English</option>
                                                            <option value="5">Law and Citizenship</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <select>
                                                            <option value="" disabled selected>Select Day</option>
                                                            <option value="1">Monday</option>
                                                            <option value="2">Tuesday</option>
                                                            <option value="4">Wednesday</option>
                                                            <option value="4">Thursday</option>
                                                            <option value="5">Friday</option>
                                                            <option value="5">Saturday</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            <div class="row">
                                                    <div class="input-field col s12">
                                                        <select>
                                                            <option value="" disabled selected>Select Hall</option>
                                                            <option value="1">Hall 1</option>
                                                            <option value="2">Hall 2</option>
                                                            <option value="4">Hall 3</option>
                                                            <option value="5">Hall 4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <select>
                                                        <option value="" disabled selected>Select Time</option>
                                                        <option value="1">08am - 10am</option>
                                                        <option value="2">10am - 12pm</option>
                                                        <option value="3">01pm - 03pm</option>
                                                        <option value="4">03pm - 05pm</option>
                                                        <option value="5">05pm - 07pm</option>
                                                        <option value="6">07pm - 09pm</option>
                                                    </select>
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
                            <h4>Details</h4>
                                    <p>All details about timetable</p>
                                </div>
                                <div class="bor">
									<form>
                                        <div class="row">
                                                        <div class="input-field col s12">
                                                            <select>
                                                                <option value="" disabled selected>Select Program</option>
                                                                <option value="1">HND 1</option>
                                                                <option value="2">BTS 1</option>
                                                                <option value="4">HND 2</option>
                                                                <option value="5">BTS 2</option>
                                                                <option value="5">Degree</option>
                                                                <option value="5">Liscense</option>
                                                            </select>
                                                        </div>
                                                </div>
                                        <div class="row">
                                                    <div class="input-field col s12">
                                                        <select>
                                                            <option value="" disabled selected>Select Department</option>
                                                            <option value="1">Software</option>
                                                            <option value="2">Banking & Finance</option>
                                                            <option value="4">Transport & Logistics</option>
                                                            <option value="5">Human Resource</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <select>
                                                            <option value="" disabled selected>Select Course</option>
                                                            <option value="1">Case Study</option>
                                                            <option value="2">French</option>
                                                            <option value="4">English</option>
                                                            <option value="5">Law and Citizenship</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <select>
                                                            <option value="" disabled selected>Select Day</option>
                                                            <option value="1">Monday</option>
                                                            <option value="2">Tuesday</option>
                                                            <option value="4">Wednesday</option>
                                                            <option value="4">Thursday</option>
                                                            <option value="5">Friday</option>
                                                            <option value="5">Saturday</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            <div class="row">
                                                    <div class="input-field col s12">
                                                        <select>
                                                            <option value="" disabled selected>Select Hall</option>
                                                            <option value="1">Hall 1</option>
                                                            <option value="2">Hall 2</option>
                                                            <option value="4">Hall 3</option>
                                                            <option value="5">Hall 4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <select>
                                                        <option value="" disabled selected>Select Time</option>
                                                        <option value="1">08am - 10am</option>
                                                        <option value="2">10am - 12pm</option>
                                                        <option value="3">01pm - 03pm</option>
                                                        <option value="4">03pm - 05pm</option>
                                                        <option value="5">05pm - 07pm</option>
                                                        <option value="6">07pm - 09pm</option>
                                                    </select>
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
                        <div id="menu3" class="tab-pane fade">
                            <div class="inn-title">
                            <h4>Details</h4>
                                    <p>All details about exams</p>
                                </div>
                                <div class="bor">
									<form>
                                        <div class="row">
                                                        <div class="input-field col s12">
                                                            <select>
                                                                <option value="" disabled selected>Select Program</option>
                                                                <option value="1">HND 1</option>
                                                                <option value="2">BTS 1</option>
                                                                <option value="4">HND 2</option>
                                                                <option value="5">BTS 2</option>
                                                                <option value="5">Degree</option>
                                                                <option value="5">Liscense</option>
                                                            </select>
                                                        </div>
                                                </div>
                                        <div class="row">
                                                    <div class="input-field col s12">
                                                        <select>
                                                            <option value="" disabled selected>Select Department</option>
                                                            <option value="1">Software</option>
                                                            <option value="2">Banking & Finance</option>
                                                            <option value="4">Transport & Logistics</option>
                                                            <option value="5">Human Resource</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <select>
                                                            <option value="" disabled selected>Select Course</option>
                                                            <option value="1">Case Study</option>
                                                            <option value="2">French</option>
                                                            <option value="4">English</option>
                                                            <option value="5">Law and Citizenship</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <select>
                                                            <option value="" disabled selected>Select Day</option>
                                                            <option value="1">Monday</option>
                                                            <option value="2">Tuesday</option>
                                                            <option value="4">Wednesday</option>
                                                            <option value="4">Thursday</option>
                                                            <option value="5">Friday</option>
                                                            <option value="5">Saturday</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            <div class="row">
                                                    <div class="input-field col s12">
                                                        <select>
                                                            <option value="" disabled selected>Select Hall</option>
                                                            <option value="1">Hall 1</option>
                                                            <option value="2">Hall 2</option>
                                                            <option value="4">Hall 3</option>
                                                            <option value="5">Hall 4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <select>
                                                        <option value="" disabled selected>Select Time</option>
                                                        <option value="1">08am - 10am</option>
                                                        <option value="2">10am - 12pm</option>
                                                        <option value="3">01pm - 03pm</option>
                                                        <option value="4">03pm - 05pm</option>
                                                        <option value="5">05pm - 07pm</option>
                                                        <option value="6">07pm - 09pm</option>
                                                    </select>
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

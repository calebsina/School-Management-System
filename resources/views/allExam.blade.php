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
                        <li class="active-bre"><a href="#"> All Exams</a>
                        </li>
                        <li class="page-back"><a href="index"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                        </li>
                    </ul>
                </div>

                <!--== User Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Exams Time Table</h4>
                                    <p>All about students like name, student id, phone, email, country, city and more</p>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Exam Name</th>
						20							<th>Start Date</th>
                                                    <th>Start Time</th>
													<th>Duration</th>
													<th>Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
													<td>Semester 1</td>
													<td>28 May 2021</td>
													<td>10:00AM</td>
													<td>03:00</td>
													<td><a href="examAdd" class="ad-st-view">Edit</a></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
													<td>Exam 1</td>
													<td>14 June 2021</td>
													<td>01:00PM</td>
													<td>03:00</td>
													<td><a href="examAdd" class="ad-st-view">Edit</a></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
													<td>Semester 1</td>
													<td>28 May 2018</td>
													<td>10:00AM</td>
													<td>03:00</td>
													<td><a href="examAdd" class="ad-st-view">Edit</a></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
													<td>Exam 1</td>
													<td>14 June 2018</td>
													<td>01:00PM</td>
													<td>03:00</td>
													<td><a href="examAdd" class="ad-st-view">Edit</a></td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
													<td>Semester 1</td>
													<td>28 May 2018</td>
													<td>10:00AM</td>
													<td>03:00</td>
													<td><a href="examAdd" class="ad-st-view">Edit</a></td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
													<td>Exam 1</td>
													<td>14 June 2018</td>
													<td>01:00PM</td>
													<td>03:00</td>
													<td><a href="examAdd" class="ad-st-view">Edit</a></td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
													<td>Semester 1</td>
													<td>28 May 2018</td>
													<td>10:00AM</td>
													<td>03:00</td>
													<td><a href="examAdd" class="ad-st-view">Edit</a></td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
													<td>Exam 1</td>
													<td>14 June 2018</td>
													<td>01:00PM</td>
													<td>03:00</td>
													<td><a href="examAdd" class="ad-st-view">Edit</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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

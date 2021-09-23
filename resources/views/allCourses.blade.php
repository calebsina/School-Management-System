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
                        <li class="active-bre"><a href="index"> Dashboard</a>
                        </li>
                        <li class="page-back"><a href="index"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                        </li>
                    </ul>
                </div>

                <!--== Course Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Course Details</h4>
                                    <p>All about courses, program structure, fees, best course lists (ranking), syllabus, teaching techniques and other details.</p>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Course Name</th>
													<th>Department</th>
                                                    <th>Semester</th>
                                                    <th>Total Seats</th>
													<th>Program</th>
													<th>View</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/course/sm-1.jpg" alt=""></span>
                                                    </td>
                                                    <td><a href="newCourse"><span class="list-enq-name">Software Engineering</span><span class="list-enq-city">KEBHIPS</span></a>
                                                    </td>
                                                    <td>Engineering</td>
                                                    <td>First</td>
													<td>74</td>
                                                    <td>
                                                        <span class="label label-success">HND</span>
                                                    </td>
													<td><a href="newCourse" class="ad-st-view">Edit</a></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/course/sm-5.jpg" alt=""></span>
                                                    </td>
                                                    <td><a href="admin-student-details.html"><span class="list-enq-name">Transport and Logistics</span><span class="list-enq-city">level, Masters</span></a>
                                                    </td>
                                                    <td>Management</td>
                                                    <td>Second</td>
													<td>30</td>
                                                    <td>
                                                        <span class="label label-success">BTS</span>
                                                    </td>
													<td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/course/sm-1.jpg" alt=""></span>
                                                    </td>
                                                    <td><a href="newCourse"><span class="list-enq-name">Software Engineering</span><span class="list-enq-city">Level, Two</span></a>
                                                    </td>
                                                    <td>Engineering</td>
                                                    <td>First</td>
													<td>74</td>
                                                    <td>
                                                        <span class="label label-success">HND</span>
                                                    </td>
													<td><a href="newCourse" class="ad-st-view">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/course/sm-5.jpg" alt=""></span>
                                                    </td>
                                                    <td><a href="admin-student-details.html"><span class="list-enq-name">Transport and Logistics</span><span class="list-enq-city">level, Masters</span></a>
                                                    </td>
                                                    <td>Management</td>
                                                    <td>Second</td>
													<td>30</td>
                                                    <td>
                                                        <span class="label label-success">BTS</span>
                                                    </td>
													<td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                                </tr>

                                            </tbody>
                                        </table>
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

<!DOCTYPE html>
<html lang="en">

@include('..header');


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
                                                    <th>Speciality</th>
													<th>Departments</th>
													<th>Program</th>
                                                </tr>
                                            </thead>
                                            <tbody>
{{--                                                    {{$special = DB::table('specialities')->select('id','name','program','dep_id')->get()}}--}}

                                                    @foreach($specialitie as $data)
                                                        <tr>
                                                            <td> <span class="list-enq-name">{{$data->id}}</span>
                                                            </td>
                                                            <td><a href={{"edit/".$data->id}}><span class="list-enq-name">{{$data->name}}</span><span class="list-enq-city">KEBHIPS</span></a>
                                                            </td>
                                                            <td>{{$data->dep_name}}</td>
                                                            <td>
                                                                <span class="label label-success">{{$data->program}}</span>
                                                            </td>
                                                        </tr>
                                                    @endforeach


                                                    {{--													<td><a href="newCourse" class="ad-st-view">View</a></td>--}}
{{--                                                </tr>--}}
{{--                                                <tr>--}}
{{--                                                    <td><span class="list-img"><img src="images/course/sm-5.jpg" alt=""></span>--}}
{{--                                                    </td>--}}
{{--                                                    <td><a href="admin-student-details.html"><span class="list-enq-name">Transport and Logistics</span><span class="list-enq-city">level, Masters</span></a>--}}
{{--                                                    </td>--}}
{{--                                                    <td>Management</td>--}}
{{--                                                    <td>Second</td>--}}
{{--													<td>30</td>--}}
{{--                                                    <td>--}}
{{--                                                        <span class="label label-success">BTS</span>--}}
{{--                                                    </td>--}}
{{--													<td><a href="admin-student-details.html" class="ad-st-view">View</a></td>--}}
{{--                                                </tr>--}}

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        <!--Import jQuery before materialize.js-->
        <script src="{{asset('../js/main.min.js')}}"></script>
        <script src="{{asset('../js/bootstrap.min.js')}}"></script>
        <script src="{{asset('../js/materialize.min.js')}}"></script>
        <script src="{{asset('../js/custom.js')}}"></script>
</body>


</html>

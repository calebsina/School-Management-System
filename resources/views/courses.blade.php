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
                                    <th>Course_code</th>
                                    <th>Course_name</th>
                                    <th>Semester</th>
                                    <th>Level</th>
                                    <th>Speciality</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($data as $new)
                                    <tr>
                                        <td> <span class="list-enq-name">{{$new->course_code}}</span>
                                        </td>
                                        <td><a href=""><span class="list-enq-name">{{$new->course_name}}</span><span class="list-enq-city"></span></a>
                                        </td>
                                        <td>{{$new->semester}}</td>
                                        <td>
                                            <span class="label label-success">{{$new->level}}</span>
                                        </td>
                                        <td>
                                            <span class="label label-success">{{$new->speciality}}</span>
                                        </td>
                                    </tr>
                                @endforeach



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

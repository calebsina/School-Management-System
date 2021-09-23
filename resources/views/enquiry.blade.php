<!DOCTYPE html>
<html lang="en">
@include('header');

<div class="sb2-2">
                <!--== breadcrumbs ==-->
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="index"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="enquiry"> All Enquiry</a>
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
                                    <h4>Enquiry</h4>
                                    <p>All about students like name, student id, phone, email, country, city and more</p>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Request from</th>
													<th>Name</th>
                                                    <th>Email id</th>
													<th>Phone</th>
													<th>View</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Booking form</td>
                                                    <td>John smith</td>
                                                    <td>johm_smith@gmail.com</td>
													<td>+10 8415 6352</td>
													<td><a href="viewInquiry" class="ad-st-view">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Course enquiry</td>
                                                    <td>John smith</td>
                                                    <td>johm_smith@gmail.com</td>
													<td>+10 8415 6352</td>
													<td><a href="viewInquiry" class="ad-st-view">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Admission enquiry</td>
                                                    <td>John smith</td>
                                                    <td>johm_smith@gmail.com</td>
													<td>+10 8415 6352</td>
													<td><a href="viewInquiry" class="ad-st-view">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Seminar enquiry</td>
                                                    <td>John smith</td>
                                                    <td>johm_smith@gmail.com</td>
													<td>+10 8415 6352</td>
													<td><a href="viewInquiry" class="ad-st-view">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Event enquiry</td>
                                                    <td>John smith</td>
                                                    <td>johm_smith@gmail.com</td>
													<td>+10 8415 6352</td>
													<td><a href="viewInquiry" class="ad-st-view">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Common enquiry</td>
                                                    <td>John smith</td>
                                                    <td>johm_smith@gmail.com</td>
													<td>+10 8415 6352</td>
													<td><a href="viewInquiry" class="ad-st-view">View</a></td>
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

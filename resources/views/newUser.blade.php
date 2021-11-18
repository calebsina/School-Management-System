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
                        <li class="active-bre"><a href="newUser"> Add new student</a>
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
                                <div class="inn-title">
                                    <h4>Add New Admin Information</h4>
                                    <p>Here you can edit your website basic details URL, Phone, Email, Address, User and password and more</p>
                                </div>
                                <div class="tab-inn">
                                    <form action="{{route('signUp')}}" method="post" enctype="multipart/form-data">
                                        @if(Session::has('success'))
                                            <div class="alert alert-success">{{Session::get('success')}}</div>
                                        @endif

                                        @if(Session::has('fail'))
                                            <div class="alert alert-danger">{{Session::get('fail')}}</div>
                                            @endif
                                        @csrf
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input type="text" name="f_name" value="{{old('f_name')}}" class="validate" required>
                                                <label class="">First name</label>
                                                <span class="text-danger">@error('f_name') {{$message}} @enderror</span>
                                            </div>
                                            <div class="input-field col s6">
                                                <input type="text" name="l_name" value="{{old('l_name')}}" class="validate" required>
                                                <label class="">Last name</label>
                                                <span class="text-danger">@error('l_name') {{$message}} @enderror</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input type="number" name="number" value="{{old('number')}}" class="validate" required>
                                                <label class="">Phone number</label>
                                                <span class="text-danger">@error('number') {{$message}} @enderror</span>
                                            </div>
                                            <div class="input-field col s6">
                                                <input type="email" name="email" class="validate" value="{{old('email')}}" required>
                                                <label class="">Email is</label>
                                                <span class="text-danger">@error('email') {{$message}} @enderror</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input type="password" name="password" value="" class="validate">
                                                <label class="">Password</label>
                                                <span class="text-danger">@error('password') {{$message}} @enderror</span>
                                            </div>
                                            <div class="input-field col s6">
                                                <input type="password" name="pass" value="" class="validate">
                                                <label class="">Confirm Password</label>
                                                <span class="text-danger">@error('pass') {{$message}} @enderror</span>
                                            </div>
                                        </div>
                                        <div class="row">
											<div class="file-field input-field col s12">
												<div class="btn admin-upload-btn">
													<span>File</span>
													<input type="file" accept=".jpg, .png" name="file1">
												</div>
												<div class="file-path-wrapper">
													<input class="file-path validate" VALUE="{{old('file')}}" name="file" type="text" placeholder="Profile image">
												</div>
											</div>
                                        </div>
                                            <div class="row">
                                            <div class="input-field col s12">
                                                <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" class="waves-button-input"></i>
                                            </div>
                                        </div>
                                    </form>
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

@extends('master')
@section('containt')
<section class="login-page">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-12">
                <div class="login-wrap p-0">
                    <h3 class="mb-4 text-center">Have an account?</h3>
                    <form action="login" class="signin-form" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="Username" required="">
                        </div>
                        <div class="form-group">
                            <input id="password-field" type="password" name="password" class="form-control" placeholder="Password" required="">
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
                        </div>
                        <div class="form-group d-md-flex">
                            <div class="w-50">
                                <label class="checkbox-wrap checkbox-primary">Remember Me
                                    <input type="checkbox" checked="">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="w-50 text-md-right">
                                <a href="#" style="color: #e4e4e4">Forgot Password</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>  
    </div>
</section>
@endsection
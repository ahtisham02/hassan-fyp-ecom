<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="{{ config('app.name')}}">
    <meta name="description" content="{{ config('app.name')}} ">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>{{ config('app.name', 'Mybazar')}} {{__('Register')}}</title>

    <!-- All Device Favicon -->
    <link rel="icon" href="@if(config('app.favicon')){{asset(config('app.favicon'))}}@endif">

    @include('backend.includes.layout_css')
</head>

<body>

<div class="mybazar-login-section">
    <div class="mybazar-login-wrapper">
        <div class="login-wrapper">
            <div class="login-header">
                <img src="@if(config('app.logo')){{asset(config('app.logo'))}}@endif" alt="logo">
            </div>
            <div class="login-body">
                <h2> @if(config('app.name')){{config('app.name')}} @endif {{__('Seller Register Panel')}}</h2>
                <form name="LoginForm" id="LoginForm" action="" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="input-group">
                                <input id="user-email" type="text" placeholder="First Name"
                                       class="form-control @error('first_name') ? ' is-invalid' : '' @enderror"
                                       name="first_name" value="{{ old('first_name') }}"  autofocus>
                                @error('first_name')
                                <label class="error" id="email-error" for="email">{{$message}}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <input id="user-email" type="text" placeholder="Last Name"
                                       class="form-control @error('last_name') ? ' is-invalid' : '' @enderror"
                                       name="last_name" value="{{ old('last_name') }}"  autofocus>
                                @error('last_name')
                                <label class="error" id="email-error" for="email">{{$message}}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <input id="user-email" type="email" placeholder="Email"
                                       class="form-control @error('email') ? ' is-invalid' : '' @enderror"
                                       name="email" value="{{ old('email') }}"  autofocus>
                                @error('email')
                                <label class="error" id="email-error" for="email">{{$message}}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <input id="user-email" type="text" placeholder="Mobile Number"
                                       class="form-control @error('mobile') ? ' is-invalid' : '' @enderror"
                                       name="mobile" value="{{ old('mobile') }}"  autofocus>
                                @error('mobile')
                                <label class="error" id="email-error" for="email">{{$message}}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <select name="gender" class="form-control @error('mobile') ? ' is-invalid' : '' @enderror"  autofocus>
                                    <option value="">Select Gender</option>
                                    <option value="1" {{ old('gender') == '1' ? 'selected' : '' }}>Male</option>
                                    <option value="2" {{ old('gender') == '2' ? 'selected' : '' }}>Femail</option>
                                    <option value="0" {{ old('gender') == '0' ? 'selected' : '' }}>Other</option>
                                </select>
                                @error('gender')
                                <label class="error" id="email-error" for="email">{{$message}}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <input id="user-email" type="text" placeholder="City"
                                       class="form-control @error('city') ? ' is-invalid' : '' @enderror"
                                       name="city" value="{{ old('city') }}"  autofocus>
                                @error('city')
                                <label class="error" id="email-error" for="email">{{$message}}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-group">
                                <textarea name="address" class="form-control @error('address') ? ' is-invalid' : '' @enderror" style="height: 105px" placeholder="Enter Address"  autofocus>{{ old('business_address') }}</textarea>
                                @error('address')
                                <label class="error" id="email-error" for="email" style="margin-top: 106px;">{{$message}}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="hide-pass" >
                                    <img src="{{URL::to('/backend')}}/img/icons/Hide.svg" alt="">
                                    <img src="{{URL::to('/backend')}}/img/icons/show.svg" alt="">
                                </span>
                                <input id="password" type="password" placeholder="Password"
                                       class="form-control @error('password') ? ' is-invalid' : '' @enderror"
                                       name="password" >
                                @error('password')
                                <label class="error" id="password-error"
                                       for="password">{{$message}}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="hide-pass" >
                                    <img src="{{URL::to('/backend')}}/img/icons/Hide.svg" alt="">
                                    <img src="{{URL::to('/backend')}}/img/icons/show.svg" alt="">
                                </span>
                                <input id="password_confirmation" type="password" placeholder="Confirm Password"
                                       class="form-control @error('password_confirmation') ? ' is-invalid' : '' @enderror"
                                       name="password_confirmation" >
                                @error('password_confirmation')
                                <label class="error" id="password-error"
                                       for="password_confirmation">{{$message}}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h2> @if(config('app.name')){{config('app.name')}} @endif {{__('Seller Business Information')}}</h2>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <input id="user-email" type="text" placeholder="Company Name"
                                       class="form-control @error('company_name') ? ' is-invalid' : '' @enderror"
                                       name="company_name" value="{{ old('company_name') }}"  autofocus>
                                @error('company_name')
                                <label class="error" id="email-error" for="email">{{$message}}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <input id="user-email" type="text" placeholder="Business Number"
                                       class="form-control @error('business_number') ? ' is-invalid' : '' @enderror"
                                       name="business_number" value="{{ old('business_number') }}"  autofocus>
                                @error('business_number')
                                <label class="error" id="email-error" for="email">{{$message}}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <input id="user-email" type="email" placeholder="Business Email"
                                       class="form-control @error('business_email') ? ' is-invalid' : '' @enderror"
                                       name="business_email" value="{{ old('business_email') }}"  autofocus>
                                @error('business_email')
                                <label class="error" id="email-error" for="email">{{$message}}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-group">
                                <textarea name="business_address" class="form-control @error('business_address') ? ' is-invalid' : '' @enderror" style="height: 105px" placeholder="Enter Business Address"  autofocus>{{ old('business_address') }}</textarea>
                                @error('business_address')
                                <label class="error" id="email-error" for="email" style="margin-top: 106px;">{{$message}}</label>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn login-btn">{{__('Register')}}</button>
                </form>
            </div>
        </div>
    </div>
</div>
<style>
    .mybazar-login-wrapper{
        max-width: 1050px !important;
        margin: auto;
    }
</style>
@include('backend.includes.layout_js')
<script>
    (function ($) {
        "use strict";
        $(document).ready(function () {

            // validate form on keyup and submit
            // $("#LoginForm").validate();
            let showPass = document.querySelector('.hide-pass');
            showPass.addEventListener('click', function() {
                showPass.classList.toggle("show-pass");
                var x = document.getElementById("password");
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
            })
        });
    })(jQuery);
    function fillup(email, password)
    {
        document.getElementById("user-email").value = email;
        document.getElementById("password").value = password;
    }
</script>
</body>

</html>



@extends('frontend.frontend-master')
@section('site-title')
    {{ __('User Register') }}
@endsection
@section('content')

@php 
$reg_type = request()->get('type') ?? 'buyer';
@endphp
    <!-- Banner Inner area Starts -->
    <div class="banner-inner-area section-bg-2 padding-top-70 padding-bottom-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-inner-contents text-center">
                        <h2 class="banner-inner-title"> {{ get_static_option('register_page_title') ?? __('Register') }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Inner area end -->
    <!-- Register Step Form area starts -->
    <section class="registration-step-area padding-top-100 padding-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="registration-seller-btn">
                        <ul class="registration-tabs tabs">
                            <li data-tab="tab_one" class="is_user_seller @if($reg_type === 'seller') active @endif">
                                <div class="single-tabs-registration">
                                    <div class="icon">
                                        <i class="las la-briefcase"></i>
                                    </div>
                                    <div class="contents">
                                        <h4 class="title" id="seller"> {{ get_static_option('register_seller_title') ?? __('Seller') }}</h4>
                                    </div>
                                </div>
                            </li>
                            <li data-tab="tab_two" class="@if($reg_type === 'buyer') active @endif is_user_buyer">
                                <div class="single-tabs-registration">
                                    <div class="icon">
                                        <i class="las la-user-alt"></i>
                                    </div>
                                    <div class="contents">
                                        <h4 class="title" id="buyer"> {{ get_static_option('register_buyer_title') ?? __('Buyer') }}</h4>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="tab-content active" id="tab_one">
                        <div class="registration-step-form margin-top-55">
                            <form id="msform-one" class="msform user-register-form" method="post"
                                action="{{ route('user.register') }}">
                                @csrf
                                <ul class="registration-list step-list-two">
                                    <li class="list active">
                                        <a class="list-click" href="javascript:void(0)"> 1 </a>
                                    </li>
                                    <li class="list">
                                        <a class="list-click" href="javascript:void(0)"> 2 </a>
                                    </li>
                                    <li class="list">
                                        <a class="list-click" href="javascript:void(0)"> 3 </a>
                                    </li>
                                </ul>
                                <div class="text-center mt-5" id="error-message"></div>
                                <!-- Information -->
                                <fieldset class="fieldset-info user-information">
                                    {{-- validation error show  --}}
                                    <div class="mt-5"> <x-msg.error/> </div>

                                    <div class="information-all margin-top-55">
                                        <div class="info-forms">
                                            <div class="single-forms">
                                                <div class="single-content margin-top-30">
                                                    <label class="forms-label"> {{ __('Full Name*') }} </label>
                                                    <input class="form--control" type="text" name="name" id="name"
                                                        placeholder="{{__('Full Name')}}">
                                                </div>
                                                <div class="single-content margin-top-30">
                                                    <label class="forms-label">{{ __('User Name*') }} </label>
                                                    <input class="form--control" type="text" name="username"
                                                        id="username" placeholder="{{__('User Name')}}">
                                                </div>
                                            </div>
                                            <div class="single-forms">
                                                <div class="single-content margin-top-30">
                                                    <label class="forms-label"> {{ __('Email Address*') }} </label>
                                                    <input class="form--control" type="text" name="email" id="email"
                                                        placeholder="{{__('Type Email')}}">
                                                </div>
                                                <div class="single-content margin-top-30">
                                                    <label class="forms-label"> {{ __('Phone Number*') }} </label>
                                                    <input class="form--control" type="tel" name="phone" id="phone"
                                                        placeholder="{{__('Type Number')}}">
                                                </div>
                                            </div>
                                            <div class="single-forms">
                                                <div class="single-content margin-top-30">
                                                    <label class="forms-label"> {{ __('Password*') }} </label>
                                                    <input class="form--control" type="password" name="password"
                                                        id="password" placeholder="{{__('Type Password')}}">
                                                </div>
                                                <div class="single-content margin-top-30">
                                                    <label class="forms-label"> {{ __('Confirm Password*') }} </label>
                                                    <input class="form--control" type="password"
                                                        name="password_confirmation" id="password_confirmation"
                                                        placeholder="{{__('Retype Password')}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="button" name="next" class="next action-button" value="{{__('Next')}}" />
                                </fieldset>
                                <!-- Service -->
                                <fieldset class="fieldset-service service-area">
                                    <div class="information-all margin-top-55">
                                        <h3 class="register-title"> {{ __('Service Area') }} </h3>
                                        <div class="info-service">
                                            <div class="single-info-service margin-top-30">
                                                <div class="single-content">
                                                    <label class="forms-label"> {{ __('Service Country*') }} </label>
                                                    <select name="country" id="country">
                                                        <option value="">{{ __('Select Country') }}</option>
                                                        @foreach ($countries as $country)
                                                            <option value="{{ $country->id }}">{{ $country->country }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="single-info-service margin-top-30">
                                                <div class="single-content">
                                                    <label class="forms-label"> {{ __('Service City*') }} </label>
                                                    <select name="service_city" id="service_city" class="get_service_city">
                                                        <option value="">{{ __('Select City') }}</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="single-info-service margin-top-30">
                                                <div class="single-content">
                                                    <label class="forms-label"> {{ __('Service Area*') }} </label>
                                                    <select name="service_area" id="service_area" class="get_service_area">
                                                        <option value="">{{ __('Select Area') }}</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="button" name="next" class="next action-button" value="{{__('Next')}}" />
                                    <input type="button" name="previous" class="previous action-button-previous"
                                        value="{{__('Previous')}}" />
                                </fieldset>
                                <!-- Terms & Condition -->
                                <fieldset class="fieldset-condition terms-conditions">
                                    <div class="information-all margin-top-55">
                                        <h3 class="register-title"> {{ __('Terms and Conditions') }} </h3>
                                        <div class="condition-info">
                                            <div class="single-condition margin-top-30">
                                                <div class="condition-content">
                                                    <div class="checkbox-inlines">
                                                        <input class="check-input" type="checkbox"
                                                            name="terms_conditions" id="terms_conditions">
                                                        <label class="checkbox-label" for="terms_conditions">
                                                            {{ __('I agree with the terms and conditions.') }} </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="get_user_type" id="get_user_type" value="{{$reg_type === 'buyer' ? 1 : 0}}">
                                    <input type="submit" name="submit" class="next action-button" value="{{__('Submit')}}" />
                                    <input type="button" name="previous" class="previous action-button-previous"
                                        value="{{__('Previous')}}" />
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Register Step Form area end -->

@endsection
@section('scripts')
    <script type="text/javascript">
        (function() {
            "use strict";
            $(document).ready(function() {

               var user_type = "{{$reg_type === 'buyer' ? 1 : 0}}";
                $('#get_user_type').val(user_type);

                $(document).on('click', '.is_user_buyer', function() {
                    $('#get_user_type').val(user_type);
                })
                $(document).on('click', '.is_user_seller', function() {
                    var user_type = 0;
                    $('#get_user_type').val(user_type);
                })

                $('.user-information .next').on('click', function() {
                    var name = $('#name').val();
                    var user_name = $('#user_name').val();
                    var email = $('#email').val();
                    var phone = $('#phone').val();
                    var password = $('#password').val();
                    var password_confirmation = $('#password_confirmation').val();

                    // validate user information
                    if (name == '' || user_name == '' || email == '' || phone == '' || password == '' ||
                        password_confirmation == '') {
                        //error msg 
                        Command: toastr["warning"]("Please fill all fields!", "Warning")
                        toastr.options = {
                            "closeButton": true,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        }
                        return false;
                    }
                    else if (password != password_confirmation) {
                        //error msg 
                        Command: toastr["warning"]("Password and confirm password not match.!",
                            "Warning")
                        toastr.options = {
                            "closeButton": true,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        }
                        return false;
                    }
                    else {
                        var current_fs, next_fs, previous_fs;
                        var opacity;
                        var current = 1;
                        var steps = $("fieldset").length;
                        current_fs = $(this).parent();
                        next_fs = $(this).parent().next();

                        //Add Class Active
                        $(".step-list li, .step-list-two li").eq($("fieldset").index(next_fs)).addClass(
                            "active");
                        next_fs.show();
                        current_fs.animate({
                            opacity: 0
                        }, {
                            step: function(now) {
                                opacity = 1 - now;
                                current_fs.css({
                                    'display': 'none',
                                    'position': 'relative'
                                });
                                next_fs.css({
                                    'opacity': opacity
                                });
                            },
                            duration: 500
                        });
                    }
                })

                // change country and get city
                $('#country').on('change', function() {
                    var country_id = $(this).val();
                    $.ajax({
                        method: 'post',
                        url: "{{ route('user.country.city') }}",
                        data: {
                            country_id: country_id
                        },
                        success: function(res) {
                            if (res.status == 'success') {
                                var alloptions = "<option value=''>{{__('Select City')}}</option>";
                                var allCity = res.cities;
                                $.each(allCity, function(index, value) {
                                    alloptions += "<option value='" + value.id +
                                        "'>" + value.service_city + "</option>";
                                });
                                $(".get_service_city").html(alloptions);
                                $('#service_city').niceSelect('update');
                            }
                        }
                    })
                })

                // select city and area
                $('#service_city').on('change', function() {
                    var city_id = $(this).val();
                    $.ajax({
                        method: 'post',
                        url: "{{ route('user.city.area') }}",
                        data: {
                            city_id: city_id
                        },
                        success: function(res) {
                            if (res.status == 'success') {
                                var alloptions = "<option value=''>{{__('Select Area')}}</option>";
                                var allArea = res.areas;
                                $.each(allArea, function(index, value) {
                                    alloptions += "<option value='" + value.id +
                                        "'>" + value.service_area + "</option>";
                                });
                                $(".get_service_area").html(alloptions);
                                $('#service_area').niceSelect('update');
                            }
                        }
                    })
                })

                //confirm service area
                $('.service-area .next').on('click', function() {
                    var service_city = $('#service_city').val();
                    var service_area = $('#service_area').val();
                    var country = $('#country').val();


                    $('.get-all-iformation #get_service_city').text(service_city);
                    $('.get-all-iformation #get_service_area').text(service_area);
                    $('.get-all-iformation #get_country').text(country);

                    if (service_city == '' || service_area == '' || country == '') {
                        //error msg 
                        Command: toastr["warning"]("Please fill all fields!", "Warning")
                        toastr.options = {
                            "closeButton": true,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        }
                        return false;
                    }
                    else {
                        var current_fs, next_fs, previous_fs;
                        var opacity;
                        var current = 1;
                        var steps = $("fieldset").length;
                        current_fs = $(this).parent();
                        next_fs = $(this).parent().next();

                        $(".step-list li, .step-list-two li").eq($("fieldset").index(next_fs)).addClass(
                            "active");

                        next_fs.show();
                        current_fs.animate({
                            opacity: 0
                        }, {
                            step: function(now) {
                                opacity = 1 - now;
                                current_fs.css({
                                    'display': 'none',
                                    'position': 'relative'
                                });
                                next_fs.css({
                                    'opacity': opacity
                                });
                            },
                            duration: 500
                        });
                    }
                })

                $(document).on('submit', '.user-register-form', function(e) {
                    if (!$('.terms-conditions .check-input').is(":checked")) {
                        //error msg 
                        Command: toastr["warning"]("Please agree with terms and conditions.!",
                            "Warning")
                        toastr.options = {
                            "closeButton": true,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        }
                        return false;
                    }
                });

            });
        })(jQuery);
    </script>
@endsection

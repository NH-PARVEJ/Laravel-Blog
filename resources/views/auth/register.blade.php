<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Laravel Blog Website</title>

    <!-- vendor css -->
    <link href="{{asset('backend/lib/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/lib/select2/css/select2.min.css')}}" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{asset('backend/css/bracket.css')}}">
</head>

<body>

    <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

        <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white rounded shadow-base">
            <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> bracket <span
                    class="tx-info">plus</span> <span class="tx-normal">]</span></div>
            <div class="tx-center mg-b-40">The Admin Template For Perfectionist</div>



            <form method="POST" action="{{ route('register') }}">
                @csrf


                <div class="form-group">
                    <input class="form-control" placeholder="Name" type=" text" name="name" value="{{old('name')}}"
                        required autofocus>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div><!-- form-group -->
                <div class="form-group">
                    <input type="password" class="form-control" type="email" name="email" placeholder="Email"
                        value="{{old('email')}}" required>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div><!-- form-group -->
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="password" required
                        autocomplete="new-password">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div><!-- form-group -->
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Confirmation Password"
                        name="password_confirmation" required>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div><!-- form-group -->
                <div class="form-group tx-12">By clicking the Sign Up button below, you agreed to our privacy policy and
                    terms of use of our website.</div>

                <button type="submit" class="btn btn-info btn-block">{{ __('Register') }}</button>

                <div class="mg-t-40 tx-center">Not yet a member? <a href="{{ route('login') }}" class="tx-info">{{
                        __('Already registered?') }}</a></div>
        </div><!-- login-wrapper -->
    </div><!-- d-flex -->




    <script src="{{asset('backend/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('backend/lib/jquery-ui/ui/widgets/datepicker.js')}}"></script>
    <script src="{{asset('backend/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('backend/lib/select2/js/select2.min.js')}}"></script>
    <script>
        $(function(){
        'use strict';

        $('.select2').select2({
          minimumResultsForSearch: Infinity
        });
      });
    </script>

</body>

</html>
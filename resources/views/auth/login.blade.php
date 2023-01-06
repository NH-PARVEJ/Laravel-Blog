<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Laravel Blog Website</title>

    <!-- vendor css -->
    <link href="{{'backend/lib/@fortawesome/fontawesome-free/css/all.min.css'}}" rel="stylesheet">
    <link href="{{'backend/lib/ionicons/css/ionicons.min.css" rel="stylesheet'}}">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{'backend/css/bracket.css'}}">
</head>

<body>

    <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">
        <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
            <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> bracket <span
                    class="tx-info">plus</span> <span class="tx-normal">]</span></div>
            <div class="tx-center mg-b-60">The Admin Template For Perfectionist</div>

            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" type="email" name="email" value="{{old('email')}}" required
                        autofocus placeholder="Enter your Email">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div><!-- form-group -->

                <div class="form-group">
                    <input type="password" name="password" required autocomplete="current-password" class="form-control"
                        placeholder="Enter your password">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                    @if (Route::has('password.request'))
                    <a class="tx-info tx-12 d-block mg-t-10" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                    @endif
                </div><!-- form-group -->
                <button type="submit" class="btn btn-info btn-block">{{ __('Log in') }}</button>

                <div class="mg-t-60 tx-center">Not yet a member? <a href="" class="tx-info">Sign Up</a></div>
        </div><!-- login-wrapper -->
    </div><!-- d-flex -->
    </form>
    <script src="{{asset('backend/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('backend/lib/jquery-ui/ui/widgets/datepicker.js')}}"></script>
    <script src="{{asset('backend/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>
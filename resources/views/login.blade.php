<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Documento</title>
</head>
<body>
<form action="{{url('/post-login')}}" method="POST" id="logForm">


    {{ csrf_field() }}


    <div class="form-label-group">

        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address">

        <label for="inputEmail">Email address</label>


        @if ($errors->has('email'))

            <span class="error">{{ $errors->first('email') }}</span>

        @endif

    </div>


    <div class="form-label-group">

        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">

        <label for="inputPassword">Password</label>


        @if ($errors->has('password'))

            <span class="error">{{ $errors->first('password') }}</span>

        @endif

    </div>


    <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Sign
        In
    </button>

    <div class="text-center">If you have an account?

        <a class="small" href="{{url('registration')}}">Sign Up</a></div>

</form>

</body>
</html>

</body>
</html>

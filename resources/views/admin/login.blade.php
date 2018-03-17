<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Template</title>

   

   {!! Html::style('skift/css/bootstrap.min.css') !!}

    {!! Html::style('skift/css/style.css') !!}

    {!! Html::style('skift/css/admin.css') !!}

    {!! Html::style('skift/css/font-awesome.min.css') !!}

    {!! Html::script('skift/js/jquery.js'); !!}

    {!! Html::script('skift/js/bootstrap.min.js'); !!}

    {!! Html::script('skift/js/main.js'); !!}

  
  </head>

  <body>

<div class="container">
  <h2>Welcome Admin Login</h2>


{!! Form::open(['url' => 'login2']) !!}

{!! Form::label('email', 'E-Mail Address') !!}

{!! Form::text('email') !!}

{!! Form::label('password', 'password') !!}

{!! Form::text('password') !!}

{!! Form::submit('Login') !!}


{!! Form::close() !!}


 
</body>
    


</html>
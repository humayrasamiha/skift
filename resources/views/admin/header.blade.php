<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Bootstrap 101 Template</title>



    {!! Html::style('skift/css/bootstrap.min.css') !!}

    {!! Html::style('skift/css/style.css') !!}

    {!! Html::style('skift/css/admin.css') !!}

    <!-- {!! Html::style('skift/css/hotel.css') !!} -->

    {!! Html::style('skift/css/font-awesome.min.css') !!}

    {!! Html::script('skift/js/jquery.js'); !!}

    {!! Html::script('skift/js/bootstrap.min.js'); !!}

    {!! Html::script('skift/js/main.js'); !!}


    
  </head>

  <body>

    <div class="container-fluid">

      <div class="row">

          <div class="col-md-12">
             <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Admin Panel</a>
    </div>

    <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                         <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        
                   
                    @endif
                </ul>
    
    
  </div>
</nav>
          </div>

      </div>
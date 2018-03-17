<!DOCTYPE html>

<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Skift Hotel Template</title>

   

    {!! Html::style('skift/css/bootstrap.min.css') !!}

    <!-- {!! Html::style('skift/css/style.css') !!} -->

    {!! Html::style('skift/css/latestnews.css') !!}

     {!! Html::style('skift/css/hotel.css') !!} 

    {!! Html::style('skift/css/font-awesome.min.css') !!}

    {!! Html::script('skift/js/jquery.js'); !!}

    {!! Html::script('skift/js/bootstrap.min.js'); !!}

    {!! Html::script('skift/js/main.js'); !!}

  
  </head>

  <body>

    <header>

      <nav class="navbar navbar-default nav1">

  <div class="container-fluid">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">

      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand" href="#">Skift</a>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav">

        <!-- <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>

        <li><a href="#">Link</a></li> --> 

        <li class="dropdown">

          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">News<span class="caret"></span></a>

          <ul class="dropdown-menu">

            <li>{{ HTML::link('/latestnews', 'Latest News', true)}}</li>
            <li>{{ HTML::link('/hotel', 'Hotels', true)}}</li>
            <li><a href="#">Destinations</a></li>
            <li><a href="#">Digital</a></li>
            <li><a href="#">Startups</a></li>
            <li><a href="#">Airlines</a></li>
            <li><a href="#">Meetings</a></li>
            <li><a href="#">Travel Agents</a></li>

          </ul>

        </li>

        <li class="dropdown">

          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Research</a>

        </li>

        <li class="dropdown">

          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Conferences</a>

        </li>

        <li class="dropdown">

          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Newsletters<span class="caret"></span></a>

          <ul class="dropdown-menu">

            <li><a href="#">Daily</a></li>
            <li><a href="#">Weekly</a></li>
            <li><a href="#">Business Travel</a></li>
            <li><a href="#">Meetings</a></li>
            

          </ul>

        </li>

        <li class="dropdown">

          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Education</a>

        </li>

      </ul>

      
      <ul class="nav navbar-nav navbar-right">

        <li><a href="#"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus fa-lg" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-youtube-play fa-lg" aria-hidden="true"></i></a></li>

      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

</header>

<section>



  <div class="row fix">

    <h1 class="hotel">Latest News</h1>

    <?php 

  foreach($user as $user){

    $id    = $user->id;
    $image    = $user->image;
    $title  = $user->title;
    $description = $user->description;
    

  ?>

    <div class="col-md-6 image_float">
      
       <img src="../public/uploads/logo/<?php echo $image;?>" alt="caption">
       <h3><a href="#"><?php echo $title;?></a></h3>

        <p><?php echo $description;?></p>
     

      
    </div>

    <?php } ?>

      

      

  </div>


</section>


  

  <footer class="footer">

    <div class="row fix">

      <div class="col-md-4 footer_corporate">

        <h4>Skift Corporate</h4>

        <ul>

          <li><a href="#">About Skift</a></li>
          <li><a href="#">Advertising</a></li>
          <li><a href="#">Terms of Use</a></li>
          <li><a href="#">Privacy Policy</a></li>
          
        </ul>

      </div>

      <div class="col-md-4 footer_icon">
           
           <h4>Follow Us</h4>

           <ul class="nav navbar-nav ">

              <li><a href="#"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube-play fa-2x" aria-hidden="true"></i></a></li>

          </ul>

      </div>

      <div class="col-md-4 footer_link">

        <h4>Listen to us</h4>

        <ul>

          <li><a href="#">What’s Next for Choice and Loyalty in Air Travel </a><i class="fa fa-angle-right fa-lg icon" aria-hidden="true"></i></li>
          <li><a href="#">The Evolution of Tours and Activities</a><i class="fa fa-angle-right fa-lg icon" aria-hidden="true"></i></li>
          <li><a href="#">What Airbnb and Hotels Should Learn from Each Other</a><i class="fa fa-angle-right fa-lg icon" aria-hidden="true"></i></li>
         
          
        </ul>

      </div>

    </div>
    
  </footer>

  </body>


</html>
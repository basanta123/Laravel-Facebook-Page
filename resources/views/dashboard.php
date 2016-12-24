<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pagevamp</title>

        <!-- Some css stylesheeets -->
        <link href=" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Some javascripts -->
       <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
       <script type="text/javascript" src="<?php echo  asset('js/bootstrap.min.js'); ?>"></script>
       <script type="text/javascript" src="<?php echo  asset('js/angular.min.js'); ?>"></script>
       <script src="<?php echo  asset('js/angular-ui-router.min.js'); ?>"></script>
      
       <script type="text/javascript" src="<?php echo  asset('js/app.js'); ?>"></script>
    
        
    </head>

    <!-- apply angular app -->
    <body ng-app="pageVampApp">
        
        <!-- Navigation bar -->
        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
           
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo url('/pagevamp'); ?>">Pagevamp</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              
              <ul class="nav navbar-nav navbar-right">
                <li><a ui-sref="page">Page</a></li>
                <li><a ui-sref="posts">Posts</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $info[0]; ?> <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo url('logout'); ?>">Logout</a></li>
                    
                  </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
       
       <!-- page main section -->
       <div class="container text-center">
          <div ui-view></div>
        
       </div>




    </body>
</html>

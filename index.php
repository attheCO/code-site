<?php
  // vars
  $today = '';
  $thisMonth = ' This Month';
  // if you must, manually put in a date
  $third_Tuesday = '';
  if($third_Tuesday === ''){
    $currMonth = date("n");
    $currYear = date("Y");
    $currThirdTuesday =  date("d", strtotime("third tuesday", mktime(0,0,0,$currMonth,1,$currYear)));

    if ($currThirdTuesday < date("d")){
      // if day has past
      $third_Tuesday = date("l, F d, Y", strtotime("third tuesday", mktime(0,0,0,$currMonth+1,1,$currYear)));
      $thisMonth = ' Next Month';
    }
    else if($currThirdTuesday == date("d")){
      // if today
      $third_Tuesday = date("l, F d, Y", strtotime("third tuesday", mktime(0,0,0,$currMonth,1,$currYear)));
      $today = 'today, ';
      $thisMonth = ' Tonight';
    }
    else {
      // is a day yet to come this month
      $third_Tuesday = date("l, F d, Y", strtotime("third tuesday", mktime(0,0,0,$currMonth,1,$currYear)));
    }
  }

  // page variables
  $title = "Coding Meetup for Jackson, TN | CO:de";
  $description = "Become a coder. Join us" . $today . $third_Tuesday . "@theCO";
  $shareImage = "./assets/images/code-page.png";
  $pageURL = "http://code.attheco.com";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>

  <title><?php echo $title; ?></title>
  <meta name="description" content="<?php echo $description; ?>">
  <!-- for Google -->
  <meta name="description" content="<?php echo $description; ?>" />
  <meta name="author" content="theCO" />

  <!-- for Facebook -->          
  <meta property="og:title" content="<?php echo $title; ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="<?php echo $shareImage; ?>" />
  <meta property="og:url" content="<?php echo $pageURL; ?>" />
  <meta property="og:description" content="<?php echo $description; ?>" />

  <!-- for Twitter -->          
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:title" content="<?php echo $title; ?>" />
  <meta name="twitter:description" content="<?php echo $description; ?>" />
  <meta name="twitter:image" content="<?php echo $shareImage; ?>" />
  
  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,700" rel="stylesheet">

  <!-- styles -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/main.css">

  <!-- scripts -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <!-- Heap analytics -->
  <script type="text/javascript">
    window.heap=window.heap||[],heap.load=function(e,t){window.heap.appid=e,window.heap.config=t=t||{};var r=t.forceSSL||"https:"===document.location.protocol,a=document.createElement("script");a.type="text/javascript",a.async=!0,a.src=(r?"https:":"http:")+"//cdn.heapanalytics.com/js/heap-"+e+".js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(a,n);for(var o=function(e){return function(){heap.push([e].concat(Array.prototype.slice.call(arguments,0)))}},p=["addEventProperties","addUserProperties","clearEventProperties","identify","removeEventProperty","setEventProperties","track","unsetEventProperty"],c=0;c<p.length;c++)heap[p[c]]=o(p[c])};
        heap.load("129897973");
  </script>

</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="navbar-brand logo">
          <a href="http://code.attheco.com" class="brand">CO:de</a>
          <a href="http://attheco.com" class="umbrella-brand">@theCO</a>
        </div>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li>
            <a href="https://www.attheco.com/allevents/code">Meetups</a>
          </li>
          <li>
            <a href="https://www.youtube.com/playlist?list=PLnmaTbl4XQyQfwDVYnq9q5Tf4pNdl1Dh1">Videos</a>
          </li>
          <li>
            <a href="http://devcatalyst.com">Dev.Catalyst</a>
          </li>
          <li>
            <a href="http://bit.ly/codemeetupsurvey">Survey</a>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>
  <div class="header-wrap">
    <div class="container header section-space">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">

          <h1>Build Your Coding Skills Together</h1>
          <p>Our next meetup is <?php echo $today; ?><?php echo $third_Tuesday; ?> @theCO.</p>
          <a href="https://www.attheco.com/allevents/code" class="btn btn-default">Join Us<?php echo $thisMonth; ?></a>

        </div>
      </div>
    </div> <!-- /container -->
  </div>

  <div class="container section-space">
    <div class="row">
      <div class="col-md-6">

        <h2>Watch videos from the last meetup.</h2>
        <p>Every month we have new instructional videos from the last meetup's coding talks.</p>
        <p>
          <a href="https://www.youtube.com/playlist?list=PLnmaTbl4XQyQfwDVYnq9q5Tf4pNdl1Dh1"><img src="./assets/images/code-videos.gif" alt="code-videos" class="img-responsive"></a>
        </p>
        <p><a href="https://www.youtube.com/playlist?list=PLnmaTbl4XQyQfwDVYnq9q5Tf4pNdl1Dh1" class="btn btn-default">Start Learning Now</a></p>

      </div>
      <div class="col-md-6">

        <h2>Web Developer Tool Built</h2>
        <p>Here are some tools we love and encourage beginners to learn about.</p>
        <p>
          <a href="https://www.sublimetext.com/3" class="btn btn-default btn-outline btn-pill"><i class="fa fa-link"></i> sublime text</a>
          <a href="https://try.github.io/levels/1/challenges/1" class="btn btn-default btn-outline btn-pill"><i class="fa fa-link"></i> git</a>
          <a href="http://fontawesome.io/icons/" class="btn btn-default btn-outline btn-pill"><i class="fa fa-link"></i> font awesome</a>
        </p>

        <h2>Want to be a CO:de Speaker?</h2>
        <p>Show what you know, gain experience, and give back to the community.</p>
        <p><a href="https://william10.typeform.com/to/vp9Cfo" class="btn btn-default btn-outline">Speaker Registration</a></p>

      </div>
    </div>
  </div> <!-- /container -->

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <p class="text-center">&copy; <?php echo date('Y'); ?> theCO | 541 Wiley Parker Rd, Jackson, Tennessee 38305 |&nbsp;731.554.5555 | <a target="_blank" href="mailto:info@attheco.com">email us</a></p>
        </div>
      </div>
    </div>
  </footer> <!-- /container -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-23645646-6', 'auto');
    ga('send', 'pageview');
  </script>
</body>
</html>

<?php
  // if you must, manually put in a date
  $third_Tuesday = '';
  if($third_Tuesday === ''){
    $third_Tuesday = new DateTime('third tuesday of this month');

    // if date has passed, get next month's third monday
    if ($third_monday <= new DateTime()) {
        $third_monday= new DateTime('third tuesday of next month');
    }

    $third_Tuesday = $third_monday->format('l, F d, Y');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Coding Meetup for Jackson, TN | CO:de</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- styles -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <style> body {padding-top: 40px; } </style>

  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/main.css">

  <!-- scripts -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
        <a class="navbar-brand logo" href="http://code.attheco.com">CO:de <span>@theCO</span></a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li>
            <a href="https://www.attheco.com/allevents/code">Meetups</a>
          </li>
          <li>
            <a href="https://www.youtube.com/channel/UCylbtOa0TuZeW4m_wN40oBA">Videos</a>
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

  <div class="container header">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center">

        <h1>Build Your Coding Skills Together</h1>
        <p>Our next meetup is <?php echo $third_Tuesday; ?>.</p>

      </div>
    </div>
  </div> <!-- /container -->

</body>
</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Samantha Gadsden Doula</title>
    <meta name="description" content="Birth, antenatal and postnatal doula mothering the mother in south Wales.">

    <!-- Bootstrap -->
    <link href="stylesheets/styles.css" rel="stylesheet">
    <link href="stylesheets/font-awesome.css" rel="stylesheet">
    
    <!-- fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700,300' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body role="document">
<?php include_once("analyticstracking.php") ?>

    <!-- Fixed navbar -->
    <div class="container" role="navigation">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
<div class="navbar-header">
          <a class="navbar-brand" href="#"><img src="images/logo.png" /></a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
<?php include 'navbar.php'; ?>
          
</ul>
                 <ul class="nav navbar-nav pull-right btn-toolbar">
            <li><a class="btn btn-default" href="https://www.facebook.com/samanthagadsdendoula/"><span class="fa fa-facebook fa-lg fa-fw"></span></a></li>
          </ul></div>
      </div>
    </nav></div>
    <div class="container" role="main">
<?php include 'title.php'; ?>
        <div class="row">
            <div class="col-xs-12">
                <h2>Contact Sam Gadsden</h2>
                <p>Use this form to contact me about any of my services: to enquire about hiring me as a doula, or borrowing books or maternity clothes. You can also use it if you would like to ask for advice or help with maternity issues.</p>
  <form class="form-horizontal" role="form" action="/process.php" method="post" >
      <div class="well well-sm"><strong><i class="fa fa-check"></i> Required Field</strong></div>
      <div class="form-group">
        <label for="InputName" id="nameLabel" class="control-label col-xs-2">Your name</label>
        <div class="input-group">
          <input type="text" class="form-control col-xs-10" name="InputName" id="InputName" required aria-required="true" aria-labeledby="nameLabel">
          <span class="input-group-addon"><i class="fa fa-check form-control-feedback"></i></span></div>
      </div>
      <div class="form-group">
        <label for="InputEmail" id="emailLabel" class="control-label col-xs-2">Your email</label>
        <div class="input-group">
          <input type="email" class="form-control col-xs-10" id="InputEmail" name="InputEmail" placeholder="example@example.com" required aria-describedby="email-note" aria-labeledby="emailLabel" aria-required="true">
          <span class="input-group-addon"><i class="fa fa-check form-control-feedback"></i></span></div>
        <em id="email-note" class="help-block col-xs-offset-2 col-xs-10">I will only use your email address to respond to your enquiry.</em>
      </div>
      <div class="form-group">
        <label for="phoneNumber" id="phoneLabel" class="control-label col-xs-2">Your phone number</label>
        <div class="input-group">
          <input type="tel" class="form-control col-xs-10" id="phoneNumber" aria-labeledby="phoneLabel">
        </div>
      </div>
      <div class="form-group">
        <label for="InputMessage" id="messageLabel" class="control-label">Message</label>
        <div class="input-group">
          <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" required aria-required="true" aria-labeledby="messageLabel"></textarea>
          <span class="input-group-addon"><i class="fa fa-check form-control-feedback"></i></span></div>
      </div>
      <button type="submit" name="submit" id="submit" value="Submit" class="btn btn-primary col-xs-offset-2 col-xs-2">Submit</button>
  </form>
</div>
        </div>
    </div> <!-- /container -->

<footer class="footer">
  <div class="container">
    <p class="text-muted">Website copyright Draigwen Designs</p>
  </div>
</footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="javascripts/bootstrap.js"></script>
  </body>
</html>

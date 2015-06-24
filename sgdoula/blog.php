<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Samantha Gadsden Doula's blog</title>
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
                <h2>Blog</h2>
<div class="blog-main"><?php
    // First we need the Facebook ID of our page. You can get this from the About -> Page Info screen of any Facebook page.
    $pageID = '841192052579229';
 
    // Hidden behind every Facebook page is a simple RSS feed, but to get to it we have to pretend to be a web browser. We do this by faking a common user agent string. This one is Chrome on a 64bit Linux system.
    ini_set('user_agent', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) ');
 
    // Next, load the RSS feed into SimpleXML.
    $facebook_xml = simplexml_load_file('http://www.facebook.com/feeds/page.php?format=rss20&id='.$pageID);

	$out = ''; 
	$i = 1;
	foreach( $facebook_xml->channel->item as $item ){

		$out .= '<div class="blog-post">';
		$out .= '<h3 class="blog-post-title"><a href="' . $item->link . '">' . $item->title . '</a></h3>';
                $date = explode (" ", $item->pubDate, 5);
		$out .= '<div class="blog-post-meta">' . $date[0] . ' ' . $date[1] . ' ' . $date[2] . ' ' . $date[3] . ' by Samantha Gadsden</div>';
		$out .= '<div class="content">' . $item->description . '</div></div>';
		
		if( $i == $no ) break;
		$i++;
	}
	
	echo $out;

 
?>
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

  <?php require_once("includes/connections.php"); ?>
  <?php require_once("includes/functions.php"); ?>
<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Prayer Flags (<?php flag_counter (); ?>)</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <!-- CSS: implied media=all -->
  <!-- CSS concatenated and minified via ant build script-->
  <link rel="stylesheet" href="css/style.css">
  <!-- end CSS-->
  
<link href='http://fonts.googleapis.com/css?family=Niconne|Mr+Bedford|Meddon|Lancelot|Metrophobic|Unna' rel='stylesheet' type='text/css'>

  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except for Modernizr / Respond.
       Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
       For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
  <script src="js/libs/modernizr-2.0.6.min.js"></script>
  
  <style>
	#container {
		width: <?php echo get_width(); ?>px;
	}  
  </style>
  
</head>

<body>

  <div id="container">
    <header>
    
		<h1>Prayer Flags Project (<?php flag_counter (); ?>)</h1>
		
		<!--<div id="nav">
			<ul>
				<a href="index.php"><li>Home</li></a>
				<a href="about.php"><li>Popular</li></a>
				<a href="contact.php"><li>Contact</li></a>
			</ul>
		</div>-->
		
    </header>
    <div id="main" role="main">
		<div id="rope">
		
		</div>
		
		<?php add_flag(); ?>
		
		<div id="build-flag">
			<h2>Build your Flag</h2>
            
            <p>This is a website where you are free to share good will via virtual prayer flags &amp; view others thoughts. Be yourself.</p>
			
			<form action="index.php" method="post">
				<label>Subject</label></br>
				<input type="text" name="subject" /></br>
				<label>Prayer</label></br>
				<textarea cols="50" rows="30" name="message" id="message" ></textarea></br></br>
				<label>Color</label></br>
				<select name="drop-down">
					<option value="Red">Red</option>
  					<option value="Blue">Blue</option>
  					<option value="Green">Green</option>
  					<option value="Yellow">Yellow</option>
  				</select></br>
				
				<label>Name</label></br>
				<input type="text" name="full-name" value="Anonymous"/></br>
				<label>Age</label></br>
				<input type="text" name="age" /></br>
				<label>Country</label></br>
				<input type="text" name="country" /></br></br>
					<input type="submit" name="submit" value="Post" />
			</form>
            
            <a href="http://www.zachariahmoreno.com"><p>ZachariahMoreno.com</p></a>
		</div>

		<div id="all-flags">
			<?php display_flags()?>
		</div>
		
		
		
    </div>
    <footer>
		
    </footer>
  </div> <!--! end of #container -->


  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>


  <!-- scripts concatenated and minified via ant build script-->
  <script defer src="js/plugins.js"></script>
  <script defer src="js/script.js"></script>
  <!-- end scripts-->

	
  <!-- Change UA-XXXXX-X to be your site's ID -->
  <script>
    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
  </script>


  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
  
</body>
</html>

<?php require_once("includes/footer.php"); ?>

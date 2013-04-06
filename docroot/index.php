<?php
header('Cache-Control: no-cache');
?><!DOCTYPE html>
<html>
<head>
  <title>Is the Internet Still Up?</title>
  <meta name="keywords" content="internet,status,uptime">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
  <style>
  /* Sticky footer styles
  -------------------------------------------------- */

  html,
  body {
	height: 100%;
	/* The html and body elements cannot have any padding or margin. */
  }

  /* Wrapper for page content to push down footer */
  #wrap {
	min-height: 100%;
	height: auto !important;
	height: 100%;
	/* Negative indent footer by it's height */
	margin: 0 auto -60px;
  }

  /* Set the fixed height of the footer here */
  #push,
  footer {
	height: 60px;
  }
  footer {
  text-align: center;
  }

  /* Lastly, apply responsive CSS fixes as necessary */
  @media (max-width: 767px) {
	#footer {
	  margin-left: -20px;
	  margin-right: -20px;
	  padding-left: 20px;
	  padding-right: 20px;
	}
  }
  #big {
  	color: black;
  	font-weight: bold;
  	font-size: 120pt;
  	line-height: 300pt;
	letter-spacing: -4pt;
  }
  </style>
</head>
<body>
	<div id="wrap">
		<div class="container">
			<center id="big">
			<?php
			$lang = substr(strtolower($_SERVER['HTTP_ACCEPT_LANGUAGE']),0,2);
			switch($lang) {
			case 'de':
				$yes = 'Ja';
				break;
			case 'es':
				$yes = 'Si';
				break;
			case 'fr':
				$yes = 'Oui';
				break;
			default:
				$fp = fopen('/tmp/languages.txt','a');
				fprintf($fp, "%s\n", $_SERVER['HTTP_ACCEPT_LANGUAGE']);
				fclose($fp);
				$yes = 'Yes';
			}
			echo "$yes\n";
			?>
			</center>
		</div>
		<div id="push"></div>
	</div>
	<footer>
		<div class="container">
			&copy;<?php echo date('Y');?>
			<a href="http://glen-campbell.com">Glen Campbell</a>
		</div>
	</footer>
</body>
</html>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-38736191-3', 'internet-status.info');
  ga('send', 'pageview');
</script>

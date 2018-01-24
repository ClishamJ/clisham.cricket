<!doctype html>
<html lang="en">
  <head>

    <!-- Based on the Bootstrap "Starter" template. Intention is to throw together something both from scratch and simple rather than just throwing on a prepackaged solution like Wordpress. -->

	<!-- For purposes of integrating jQuery UI and Bootstrap: Swaths of template code based upon/taken from jQuery UI's Bootstrap adapter (https://github.com/arschmitz/jqueryui-bootstrap-adapter)
	
	Much thanks to Alexander Schmitz (https://github.com/arschmitz) from the jQuery Foundation for his work.
	
	-->
	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Practice and study of PHP-handled raw MySQL queries, jQuery UI, and more.">
    <meta name="author" content="James Clisham">

    <title>clisham.cricket</title>

    <!-- Bootstrap core CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="https://rawgit.com/lipis/bootstrap-social/gh-pages/bootstrap-social.css" rel="stylesheet" type="text/css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.0-rc.1/jquery-ui.min.js" integrity="sha256-mFypf4R+nyQVTrc8dBd0DKddGB5AedThU73sLmLWdc0=" crossorigin="anonymous"></script>
	<script src="dist/jqueryui-bootstrap-adapter.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/SyntaxHighlighter/3.0.83/scripts/shBrushXml.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js"></script>
	<meta charset="utf-8">
 
    <style>

    .mainContent { margin-top: 60px; }

    .tabsHeader { margin-top: 15px; }

    .clishamJumbotron { background: linear-gradient(to bottom right, #DB7A29, #FFB97F); color: #FFF; }

    a, a:hover, a:focus { outline: 0; }

    </style>


 </head>

  <body>

    <nav class="navbar navbar-inverse navbar-default navbar-fixed-top" role="navigation">
	<div clas="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			</button>
			<a class="navbar-brand" href="#">James Clisham</a>
		</div>
		<div id="navbar" class="navbar-spy navbar-collapse collapse" >
			<ul class="nav navbar-nav">
				<li><a href="https://github.com/ClishamJ/clisham.cricket" class="social-button" href="https://github.com/ClishamJ/clisham.cricket"><i class="fa fa-github"></i><span class="sr-only">Github</span></a></li>
			</ul>
			<ul class="nav navbar-nav">
				<li class="active"><a href="#component-tabs">Tabs</a></li>
			</ul>
		</div>
	</div>
</nav>

	
	<div class="jumbotron clishamJumbotron">
		<div class="container">
			<br/>
			<h1>clisham.cricket</h1>
			<p>Practice and study of PHP-handled raw MySQL queries, jQuery UI, and more.</p>
		</div>
    </div>
	
    <div class="component-container container">
		<p>The following exercises use a sample database composed of 300,000 employee records and accompanying information.</p>
		<p>Much thanks to Giuseppe Maxia and Patrick Crews for <a href="https://github.com/datacharmer/test_db">making this database available</a> as well as Fusheng Wang and Carlo Zaniolo (both at Siemens Corporate Research) for creating it in the first place.</p>
		<p>Disclaimer: This data is fabricated and does not correspond to real people.</p>




    </div>


    <div class="component-container container">
		<h2>Selection of Employees by ID</h2>
		<div class="sample-container">

			<?php

			include("getData.php");
			$demoEmployee1 = db_select("SELECT * FROM employees WHERE emp_no = '499452'");
			$demoEmployee2 = db_select("SELECT * FROM employees WHERE emp_no = '499453'");
			$demoEmployee3 = db_select("SELECT * FROM employees WHERE emp_no = '499454'");
			$demoEmployee4 = db_select("SELECT * FROM employees WHERE emp_no = '499455'");
			$demoEmployee5 = db_select("SELECT * FROM employees WHERE emp_no = '499456'");


			//print_r($demoEmployee1);
			//print_r($demoEmployee1[0][first_name]);

			?>


			<div id="tabs">
				<ul>
					<li><a href="#tabs-1">Employee #<?php print_r($demoEmployee1[0][emp_no]) ?></a></li>
					<li><a href="#tabs-2">Employee #<?php print_r($demoEmployee2[0][emp_no]) ?></a></li>
					<li><a href="#tabs-3">Employee #<?php print_r($demoEmployee3[0][emp_no]) ?></a></li>
					<li><a href="#tabs-4">Employee #<?php print_r($demoEmployee4[0][emp_no]) ?></a></li>
					<li><a href="#tabs-5">Employee #<?php print_r($demoEmployee5[0][emp_no]) ?></a></li>
				</ul>
				<div id="tabs-1">
					<p class="tabsHeader">Name: <?php print_r($demoEmployee1[0][first_name] . ' ' . $demoEmployee1[0][last_name]);?></p>
				</div>
				<div id="tabs-2">
					<p class="tabsHeader">Name: <?php print_r($demoEmployee2[0][first_name] . ' ' . $demoEmployee2[0][last_name]);?></p>
				</div>
				<div id="tabs-3">
					<p class="tabsHeader">Name: <?php print_r($demoEmployee3[0][first_name] . ' ' . $demoEmployee3[0][last_name]);?></p>
				</div>
				<div id="tabs-4">
                                        <p class="tabsHeader">Name: <?php print_r($demoEmployee4[0][first_name] . ' ' . $demoEmployee4[0][last_name]);?></p>
                                </div>
				<div id="tabs-5">
                                        <p class="tabsHeader">Name: <?php print_r($demoEmployee5[0][first_name] . ' ' . $demoEmployee5[0][last_name]);?></p>
                                </div>

			</div>
			<script>
			$(function(){
				// Instantiate UI tabs
				$( "#tabs" ).tabs();
			});
			</script>
		</div>
		
	</div>

  </body>
</html>



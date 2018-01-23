<!doctype html>
<html lang="en">
  <head>

    <!-- Based on the Bootstrap "Starter" template. Intention is to throw together something both from scratch and simple rather than just throwing on a prepackaged solution like Wordpress. -->

	<!-- For purposes of integrating jQuery UI and Bootstrap: Swaths of template code based upon/taken from jQuery UI's Bootstrap adapter (https://github.com/arschmitz/jqueryui-bootstrap-adapter)
	
	Much thanks to Alexander Schmitz (https://github.com/arschmitz) from the jQuery Foundation for his work.
	
	-->
	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Practice and study of MySQL queries, jQuery UI, and more.">
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

	
	<div class="jumbotron">
		<div class="container">
			<br/>
			<h1>clisham.cricket</h1>
			<p>Practice and study of MySQL queries, jQuery UI, and more.</p>
		</div>
    </div>
	
    <div class="component-container container">
		<h2>Default Tabs</h2>
		<div class="sample-container">
			<div id="tabs">
				<ul>
					<li><a href="#tabs-1">Nunc tincidunt</a></li>
					<li><a href="#tabs-2">Proin dolor</a></li>
					<li><a href="#tabs-3">Aenean lacinia</a></li>
				</ul>
				<div id="tabs-1">
					<p>
					Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
					ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
					amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
					odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
					</p>
				</div>
				<div id="tabs-2">
					<p>
					Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
					purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
					velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
					suscipit faucibus urna.
					</p>
				</div>
				<div id="tabs-3">
					Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
					Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
					ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
					lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
					</p>
					<ul>
						<li>List item one</li>
						<li>List item two</li>
						<li>List item three</li>
					</ul>
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


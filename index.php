<!doctype html> <html lang="en">
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
	
	.clishamGithubButton{ font-size: 2.8em; padding: 5px !important; }
	
	.clishamFooter{ padding: 4rem 0; margin-top: 4rem; font-size: 85%; text-align: center; background-color: #333; color: #9d9d9d; }
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
				<li><a href="https://github.com/ClishamJ/clisham.cricket" class="social-button clishamGithubButton" href="https://github.com/ClishamJ/clisham.cricket"><i class="fa fa-github"></i><span 
class="sr-only">Github</span></a></li>
			</ul>
			<ul class="nav navbar-nav" style="margin-left: 30px;">
				<li><a href="#basicLink">Basic</a></li>
			</ul>
			<ul class="nav navbar-nav">
				<li><a href="#predefinedLink">Predefined</a></li>
			</ul>
                        <ul class="nav navbar-nav">
                                <li><a href="#joinLink">Joins</a></li>
                        </ul>
		</div>
	</div> </nav>
	
	<div class="jumbotron clishamJumbotron">
		<div class="container">
			<br/>
			<h1>clisham.cricket</h1>
			<p>Practice and study of PHP-handled raw MySQL queries, jQuery UI, and more.</p>
		</div>
    </div>
	
    <div class="component-container container">
		<p>The following exercises use a sample database composed of 300,000 employee records and accompanying information.</p>
		<p>Much thanks to Giuseppe Maxia and Patrick Crews for <a href="https://github.com/datacharmer/test_db">making this database available</a> as well as Fusheng Wang and Carlo Zaniolo (both at Siemens Corporate 
Research) for creating it in the first place.</p>
		<p>Disclaimer: This data is fabricated and does not correspond to real people.</p>
    </div>
	<div id="basicLink" class="scroll-link"></div>
    <div class="component-container container">
		<h2>Basic Select Query by ID</h2>
		<h4>Example: SELECT * FROM employees WHERE emp_no = '499452'</h4>
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
			<div id="tabsIDNum">
				<ul>
					<li><a href="#tabsIDNum-1">Employee #<?php print_r($demoEmployee1[0][emp_no]) ?></a></li>
					<li><a href="#tabsIDNum-2">Employee #<?php print_r($demoEmployee2[0][emp_no]) ?></a></li>
					<li><a href="#tabsIDNum-3">Employee #<?php print_r($demoEmployee3[0][emp_no]) ?></a></li>
					<li><a href="#tabsIDNum-4">Employee #<?php print_r($demoEmployee4[0][emp_no]) ?></a></li>
					<li><a href="#tabsIDNum-5">Employee #<?php print_r($demoEmployee5[0][emp_no]) ?></a></li>
				</ul>
				<div id="tabsIDNum-1">
					<p class="tabsHeader">Employee Number: #<?php print_r($demoEmployee1[0][emp_no]);?></p>
                                        <p>Name: <?php print_r($demoEmployee1[0][first_name] . ' ' . $demoEmployee1[0][last_name]);?></p>
                                        <p>Gender: <?php print_r($demoEmployee1[0][gender]);?></p>
                                        <p>Birth Date: <?php print_r($demoEmployee1[0][birth_date]);?></p>
                                        <p>Hire Date: <?php print_r($demoEmployee1[0][hire_date]);?></p>
				</div>
				<div id="tabsIDNum-2">
                                        <p class="tabsHeader">Employee Number: #<?php print_r($demoEmployee2[0][emp_no]);?></p>
                                        <p>Name: <?php print_r($demoEmployee2[0][first_name] . ' ' . $demoEmployee2[0][last_name]);?></p>
                                        <p>Gender: <?php print_r($demoEmployee2[0][gender]);?></p>
                                        <p>Birth Date: <?php print_r($demoEmployee2[0][birth_date]);?></p>
                                        <p>Hire Date: <?php print_r($demoEmployee2[0][hire_date]);?></p>
				</div>
				<div id="tabsIDNum-3">
                                        <p class="tabsHeader">Employee Number: #<?php print_r($demoEmployee3[0][emp_no]);?></p>
                                        <p>Name: <?php print_r($demoEmployee3[0][first_name] . ' ' . $demoEmployee3[0][last_name]);?></p>
                                        <p>Gender: <?php print_r($demoEmployee3[0][gender]);?></p>
                                        <p>Birth Date: <?php print_r($demoEmployee3[0][birth_date]);?></p>
                                        <p>Hire Date: <?php print_r($demoEmployee3[0][hire_date]);?></p>
				</div>
				<div id="tabsIDNum-4">
                                        <p class="tabsHeader">Employee Number: #<?php print_r($demoEmployee4[0][emp_no]);?></p>
                                        <p>Name: <?php print_r($demoEmployee4[0][first_name] . ' ' . $demoEmployee4[0][last_name]);?></p>
                                        <p>Gender: <?php print_r($demoEmployee4[0][gender]);?></p>
                                        <p>Birth Date: <?php print_r($demoEmployee4[0][birth_date]);?></p>
                                        <p>Hire Date: <?php print_r($demoEmployee4[0][hire_date]);?></p>
                                </div>
				<div id="tabsIDNum-5">
                                        <p class="tabsHeader">Employee Number: #<?php print_r($demoEmployee5[0][emp_no]);?></p>
                                        <p>Name: <?php print_r($demoEmployee5[0][first_name] . ' ' . $demoEmployee5[0][last_name]);?></p>
                                        <p>Gender: <?php print_r($demoEmployee5[0][gender]);?></p>
                                        <p>Birth Date: <?php print_r($demoEmployee5[0][birth_date]);?></p>
                                        <p>Hire Date: <?php print_r($demoEmployee5[0][hire_date]);?></p>
                                </div>
			</div>
			<script>
			$(function(){
				// Instantiate UI tabs
				$( "#tabsIDNum" ).tabs();
			});
			</script>
		</div>
		
	</div>
	
	<div id="predefinedLink" class="scroll-link"></div>
	<div class="component-container container">
		<h2>Predefined MySQL Function Queries</h2>
		<h4>Example: SELECT MIN(salary) FROM salaries;</h4>
		<div class="sample-container">
			<?php
			$minSalary = db_select("SELECT MIN(salary) AS min FROM salaries");
			$maxSalary = db_select("SELECT MAX(salary) AS max FROM salaries");
			$avgSalary = db_select("SELECT AVG(salary) AS avg FROM salaries");
			
			
			$employee1FullName = db_select("SELECT CONCAT(first_name, ' ', last_name) AS Name FROM employees WHERE emp_no = '499452'");
			$employee2FullName = db_select("SELECT CONCAT(first_name, ' ', last_name) AS Name FROM employees WHERE emp_no = '499453'");
			$employee3FullName = db_select("SELECT CONCAT(first_name, ' ', last_name) AS Name FROM employees WHERE emp_no = '499454'");
			$employee4FullName = db_select("SELECT CONCAT(first_name, ' ', last_name) AS Name FROM employees WHERE emp_no = '499455'");
			$employee5FullName = db_select("SELECT CONCAT(first_name, ' ', last_name) AS Name FROM employees WHERE emp_no = '499456'");
			//print_r($demoEmployee1);
			//print_r($demoEmployee1[0][first_name]);
			?>
			<div id="tabsSalary">
				<ul>
					<li><a href="#tabsSalary-1">Min Salary</a></li>
					<li><a href="#tabsSalary-2">Max Salary</a></li>
					<li><a href="#tabsSalary-3">Avg Salary</a></li>
				</ul>
				<div id="tabsSalary-1">
					<p class="tabsHeader">Minimum Salary: $<?php print_r($minSalary[0][min]);?></p>
				</div>
				<div id="tabsSalary-2">
                    <p class="tabsHeader">Maximum Salary: $<?php print_r($maxSalary[0][max]);?></p>
				</div>
				<div id="tabsSalary-3">
                    <p class="tabsHeader">Average Salary: $<?php print_r($avgSalary[0][avg]);?></p>
				</div>
			</div>
			<script>
			$(function(){
				// Instantiate UI tabs
				$( "#tabsSalary" ).tabs();
			});
			</script>
		</div>
		
		<h4>Example: SELECT CONCAT(first_name, " ", last_name) AS Name FROM employees WHERE emp_no = '499454';</h4>
		<p>For Employee #499452:<?php print_r($employee1FullName[0][Name]);?></p>
		<p>For Employee #499453:<?php print_r($employee2FullName[0][Name]);?></p>
		<p>For Employee #499454:<?php print_r($employee3FullName[0][Name]);?></p>
		<p>For Employee #499455:<?php print_r($employee4FullName[0][Name]);?></p>
		<p>For Employee #499456:<?php print_r($employee5FullName[0][Name]);?></p>
		
		
		<h4>Example: SELECT DATE_FORMAT(birth_date, "%W %M %e %Y") AS birthdayFormatted FROM employees WHERE emp_no = 499052;</h4>
		<div class="sample-container">
			<?php
			$birthdayOfEmployee1 = db_select("SELECT DATE_FORMAT(birth_date, '%W %M %e %Y') AS birthdayFormatted FROM employees WHERE emp_no = '499052'");
			
			
			?>
			
			<p>Birthday of Employee #499052: <?php print_r($birthdayOfEmployee1[0][birthdayFormatted]); ?></p>
			
		
		</div>
		
	</div>
	
	<div id="joinLink" class="scroll-link"></div>
	<div class="component-container container">
		<h2>Join MySQL Queries</h2>
		<h4 style="font-weight:700">Example 1:</h4><h4>SELECT *</h4><h4>FROM employees</h4><h4>LEFT JOIN current_dept_emp</h4><h4>ON employees.emp_no = current_dept_emp.emp_no</h4><h4>WHERE employees.emp_no = 
499456;</h4>
		<div class="sample-container">
			<?php
			
			$employee1CombinedData = db_select("SELECT * FROM employees LEFT JOIN current_dept_emp ON employees.emp_no = current_dept_emp.emp_no WHERE employees.emp_no = '499456'");
			$combinedData2 = db_select("SELECT * FROM employees LEFT JOIN salaries ON employees.emp_no = salaries.emp_no WHERE salaries.salary > '100000' AND salaries.salary < '100100' AND gender = 'F' AND 
employees.first_name = 'Padma'");
			?>
			
			
			<p>emp_no: <?php print_r($employee1CombinedData[0][emp_no]); ?></p>
                        <p>birth_date: <?php print_r($employee1CombinedData[0][birth_date]); ?></p>
                        <p>first_name: <?php print_r($employee1CombinedData[0][first_name]); ?></p>
                        <p>last_name: <?php print_r($employee1CombinedData[0][last_name]); ?></p>
                        <p>gender: <?php print_r($employee1CombinedData[0][gender]); ?></p>
                        <p>hire_date: <?php print_r($employee1CombinedData[0][hire_date]); ?></p>
                        <p>from_date: <?php print_r($employee1CombinedData[0][from_date]); ?></p>
                        <p>to_date: <?php print_r($employee1CombinedData[0][to_date]); ?></p>
			
		</div>
		<h4 style="font-weight:700">Example 2:</h4><h4>SELECT *</h4><h4>FROM employees</h4><h4>LEFT JOIN salaries</h4><h4>ON employees.emp_no = salaries.emp_no</h4><h4>WHERE salaries.salary > 100000</h4><h4>AND 
salaries.salary < 100100</h4><h4>AND gender = 'F'</h4><h4>AND employees.first_name = 'Padma';</h4>
		<p><span style="font-weight:700">Raw Array: </span><?php print_r($combinedData2); ?></p>
	</div>
	
	
  </body>
  
  <footer class="clishamFooter">
  
	<div class="container">
	
	<h3>James Clisham - <a href="https://github.com/ClishamJ/">Github</a></h3>
	
	</div>
  
  
  </footer>
  
  
</html>

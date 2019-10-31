<?php
	if(isset($_GET['submit'])){
		$location = $_GET['location'];
		$bhk = $_GET['bhk'];
		$sq_ft = $_GET['sq_ft'];
		
		$years_old = $_GET['years_old'];
		$floor = $_GET['floor'];
		$jsonf = "'{\"data\":[$location,$bhk,$sq_ft,$years_old,$floor]}'";
		$shells = "/usr/bin/python3 -W ignore /var/www/html/house_price_predict.py $jsonf";
		$result = exec($shells);
	}
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>DA Project</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="main.css" />
		<noscript><link rel="stylesheet" href="noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="index.html">House Price Prediction</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="index.html">Bangalore City</a></li>
						
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2>HOUSE PRICE PREDICTION</h2>
							<p>Predict the prices of Houses in Bangalore City with 85%+ Accuracy </p>
						</header>



<!-- Form -->
<section>
								<h3>Fill this form to get predictions!</h3>
								<form action='index.php' method='get'>
                                
									<div class="row gtr-uniform gtr-50">
                                    <div class="col-12">
                                     <label for="location">Location</label>
                                            <select class="category" name="location">
								                    <option value=0>Bommanahalli</option>
								                    <option value=1>White Field</option>
							                        </select>
										</div>
                                        <div class="col-12">
                                        <label for="bhk">BHK</label>
                                        <select class="category" name="bhk">
								            <option value=1>1</option>
								            <option value=2>2</option>
								            <option value=3>3</option>
							            </select>
										</div>
										<div class="col-6 col-12-xsmall">
                                            <input type="number" name="sq_ft" placeholder="Sq.Ft" required  />
                                            <div class="invalid-feedback">
							                    Please input Square feet.
						                    </div>
										</div>
										<div class="col-6 col-12-xsmall">
										
                                            <select class="category" name="furn">
								                    <option value=0>Not Furnished</option>
								                    <option value=1>Funished</option>
							                        </select>
							
										</div>
										<div class="col-12">
										<label for="years_old">Years old</label>
										<select class="form-control" name="years_old">
								<option value=1>1</option>
								<option value=2>2</option>
								<option value=3>3</option>
								<option value=4>4</option>
								<option value=5>5</option>
								<option value=6>6</option>
								<option value=7>7</option>
								<option value=8>8</option>
								<option value=9>9</option>
								<option value=10>10</option>
                            </select>
                            
											</div>
											
										<div class="col-12">
                                        <label for="floor">Floor</label>
							<select class="form-control" name="floor">
								<option value=1>1</option>
								<option value=2>2</option>
								<option value=3>3</option>
								<option value=4>4</option>
								<option value=5>5</option>
								<option value=6>6</option>
								<option value=7>7</option>
								<option value=8>8</option>
								<option value=9>9</option>
								<option value=10>10</option>
								<option value=11>11</option>
								<option value=12>12</option>
								<option value=13>13</option>
								<option value=14>14</option>
								<option value=15>15</option>
							</select>
										</div>
										
										<div class="col-12">
											<ul class="actions">
												<li><input type="submit" value="Submit" name='submit' class="primary" /></li>
												<li ><a href="/"><input type="button"  value="Reset" ></li></a> 
											</ul>
										</div>
									</div>
								</form>
								<style>

    a, a:active, a:focus{

		outline: none; 
		border: 0; 

    }

</style>
								
								
                                <h3>Prediction Results Displayed Below </h3>
								<h2><code> Rs.<mark id='pred'><?php echo $result ?></mark></code></h2>

	

							</section>


</html>     
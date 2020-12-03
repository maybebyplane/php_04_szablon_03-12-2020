<!DOCTYPE HTML>
<!--
	Spatial by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="pl">
	<head>
		<title>Kalkulator kredytowy</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="assets/css/main.css" />	

                <style>   
                    <?php
                        if ((isset($messages)) || (isset($result) && empty($messages))){
                            echo 'section.hidden {
                                    display: none;
                                 }';
                        } 
                    ?>  
                </style> 

        
        </head>
	
	<body class="landing">
	
		<!-- Header -->
			<header id="header" class="alt">
				<h1><strong><a href="<?php print(_APP_URL);?>">Kalkulator</a></strong> kredytowy</h1>
				<nav id="nav">
					<ul>
						<li><a href="<?php print(_APP_URL);?>">Strona główna</a></li>
						<li><a href="#banner">W górę</a></li>
						<li><a href="#one">Kalkulator</a></li>
					</ul>
				</nav>
			</header>

		<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>	

		<!-- Banner -->
			<section id="banner" class="hidden">
				<h2>Dzień dobry!</h2>
				<p>Zapraszamy do skorzystania z naszego <br /> profesjonalnego kalkulatora kredytowego.</p>
				<ul class="actions">
					<li><a href="#one" class="button special icon fa-arrow-down">Zaczynamy</a></li>
				</ul>
			</section>

			<!-- One -->
			
				<section id="one" class="wrapper style3 special">
					<h2>Kalkulator kredytowy</h2>
						<div class="container">
							<form action="<?php print(_APP_URL);?>/calc_kred.php" method="post" class="row uniform 100%" >
							
								<div class="12u">
									<input id="id_kwota" type="number" placeholder="Kwota kredytu [PLN]" name="kwota" value="<?php if (isset($kwota)) print($kwota);?>">
								</div>
								<div class="12u">
									<input id="id_lat" type="number" placeholder="Kredyt na [lat]" name="lat" value="<?php if (isset($lat)) print($lat);?>">
								</div>
								<div class="12u">
									<input id="id_op" type="number" placeholder="Oprocentowanie [%]" name="op" value="<?php if (isset($oprocentowanie)) print($oprocentowanie);?>">
								</div>
								<div class="12u">
									<ul class="actions">
                                                                            <li><input type="submit" value="Wylicz" class="special"/></li>
									</ul>
								</div>    
							</form>
                                                </div>
                                                        
                                                <div class="container" style="margin-top: 3em;">         
                                                        <?php
                                                            
                                                                if (isset($messages)) {
                                                                    if (count($messages) > 0) {
									echo '<ol style="margin: auto; border-radius: 15px; padding: 20px; background-color: #F00; color: white; width: 400px;">';
                                                                            foreach ($messages as $msg) {
										echo '<li>'.$msg.'</li>';
                                                                            }
									echo '</ol>';
                                                                    }
                                                                }
						
								if (isset($result) && empty($messages)) {
									echo '<div style="margin: auto; border-radius: 15px; padding: 10px; background-color: #FF6; width: 400px;">';
									echo 'Miesięczna rata kredytu wynosi: '.$result.' zł.';
									echo '</div>';
								}                                                       
                                                        ?>
						</div>
				</section>


		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<ul class="copyright">
						<li>&copy; Untitled</li>
						<li>Design: <a href="http://templated.co">TEMPLATED</a></li>
						<li>Images: <a href="http://www.canva.com">Canva</a></li>
						<li>Made by: Dominika Pałyz</li>
                                                <li><a href="<?php print(_APP_URL);?>/">Strona główna</a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
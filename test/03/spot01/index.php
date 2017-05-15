<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Suzuki Ignis - The Spotlight Kompas Klasika</title>
    <link rel="icon" href="img/tab_logo.png">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta name="description" content="Suzuki Ignis Indonesia">
    <meta name="keywords" content="suzuki,ignis,indonesia,kompas, klasika,spotlight">
    <meta name="author" content="Dimitri">
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="wrap">
    
	<?php 
		/* $path = $_SERVER['DOCUMENT_ROOT'];
		$path .= "/template/common/header.php";
		incude_once($path); */
	?>
        <div id="mainArea" class="clearfix">
        	<section id="section_1">
        		<div>
        			<h2>Suzuki Ignis</h2>
        			<p>Hadir sebagai City-Car yang menyasar generasi milenial yang baru meniti karir, Suzuki Ignis menawarkan model yang dinamis, sporty, dan penuh gaya sebagai ciri khas anak muda masa kini.</p>
        			<button><img src="img/color1.png"></button>
        			<button><img src="img/color2.png"></button>
        			<button><img src="img/color3.png"></button>
        			<button><img src="img/color4.png"></button>
        			<button><img src="img/color5.png"></button>
        		</div>
        		<div>
        			<h3>LED Projector Headlamp + DRL</h3>
        			<p>Cahaya lebih terang, fokus dan tidak menyilaukan.</p>
        			<p class="tI tS">Khusus tipe GX</p>
        		</div>
        	</section>
        	
        	<section id="section_2">
        	</section>
		</div><!-- /#mainArea -->
	<?php
		/* $path = $_SERVER['DOCUMENT_ROOT'];
		$path .= "/template/common/footer.php";
		include_once($path); */
	?>
    </div> <!-- /#wrap -->
    <script src="jQuery.js"></script>
	<script>
		$(function(){
			$('section').css({'height':(($(window).height()))+'px'});
			// Now bind the event to the desired element
			$('section').on('mousewheel', function(e){
				e.preventDefault();
				if(e.originalEvent.wheelDelta < 0) {
					 if (!$(this).is(':last-child'))
						$('body').animate({scrollTop:$(this).next().offset().top}, '700');
				} else {
						if (!$(this).is(':first-child'))
						$('body').animate({scrollTop:$(this).prev().offset().top}, '700');
				}
			});
			$(window).resize(function(){ // On resize
				$('section').css({'height':(($(window).height()))+'px'});
			});
		});
	</script>
</body>
</html>
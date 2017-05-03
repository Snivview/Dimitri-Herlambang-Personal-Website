<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dimitri Herlambang Personal Website</title>
    <link rel="icon" href="/_common/img/tab_logo.png">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
    <meta name="description" content="Dimitri Herlambang Personal Website">
    <meta name="keywords" content="Dimitri,Herlambang,Personal,Website">
    <meta name="author" content="Dimitri">
    <link href="/_common/css/base.css" rel="stylesheet">
</head>

<body>
    <div id="wrap">
		<?php 
			$path = $_SERVER['DOCUMENT_ROOT'];
			$path .= "/_common/header.html";
			include_once($path);
		?>
        <div id="mainArea" class="clearfix">
			<div class="container960">
                <p class="t12"><i>sebelumnya artikel ini sudah di publish di blog saya di <a href="http://snivview.wordpress.com">snivview.wordpress.com</a></i></p>
				
				<h1></h1>
                <div class="mTB30 articles">
                	
				</div>
			</div> <!-- /.container960 -->
		</div><!-- /#mainArea -->
		<?php 
			$path = $_SERVER['DOCUMENT_ROOT'];
			$path .= "/_common/footer.html";
			include_once($path);
		?>
    </div> <!-- /#wrap -->
</body>
</html>
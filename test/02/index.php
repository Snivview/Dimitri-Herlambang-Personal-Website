<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>template</title>
    <link rel="icon" href="img/tab_logo.png">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
    <meta name="description" content="template">
    <meta name="keywords" content="template">
    <meta name="author" content="Dimitri">
    <link href="/template/common/css/base.css" rel="stylesheet">
</head>

<body>
    <div id="wrap">
	<?php 
		$path = $_SERVER['DOCUMENT_ROOT'];
		$path .= "/template/common/header.php";
		include_once($path);
	?>
        <div id="mainArea" class="clearfix" style="padding-top:100px;">
		</div><!-- /#mainArea -->
	<?php 
		$path = $_SERVER['DOCUMENT_ROOT'];
		$path .= "/template/common/footer.php";
		include_once($path);
	?>
    </div> <!-- /#wrap -->
</body>
</html>
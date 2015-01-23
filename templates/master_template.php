<!DOCTYPE html>
<html lang="en">
<head>
	<base href="<?=BASE_URL?>">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="assets/ico/favicon.png">

	<title>The Awesome shop</title>

	<!-- Bootstrap core CSS -->
	<link href="assets/components/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/application.css"/>
	<!-- Custom styles for this template -->
	<style>
		body {
			min-height: 2000px !important;
			padding-top: 70px;
		}
        /*h1 {
            color: white;
        }*/
	</style>

    <link rel="stylesheet" href="assets/css/videobg.css"/>
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
    <script src="assets/components/jquery/1.10.2/jquery-1.10.2.min.js"></script>

</head>

<body>

<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">The Awesome shop</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li <?=$controller == 'welcome' ? 'class="active"' : ''?>><a href="welcome">Eripakkumised</a></li>
                <li <?=$controller == 'products' ? 'class="active"' : ''?>><a href="products">Tooted</a></li>
				<li <?=$controller == 'about' ? 'class="active"' : ''?>><a href="about">Poest</a></li>
			</ul>

            <ul class="nav navbar-nav navbar-right">
                <li ><a href="<?=BASE_URL?><?=$auth->logged_in == true? 'logout':'login'?>"><?=$auth->logged_in == true? 'Logout':'Login'?></a></li>
            </ul>
		</div><!--/.nav-collapse -->
	</div>
</div>

<div class="container">

    <!--
    <video autoplay loop muted class="bgvideo" id="bgvideo">
        <source src="./assets/video/videobg.webm" type="video/webm">
    </video>
    -->
	<!-- Main component for a primary marketing message or call to action -->
	<? if( !file_exists("views/$controller/{$controller}_$action.php")) error_out('The view <i>views/'. $controller . '/' .  $controller . '_' . $action . '.php</i> does not exist. Create that file.');?>
    <?  @require "views/$controller/{$controller}_$action.php"; ?>

</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster
 ????????????????????????????????????????????????????
<script src="assets/components/jquery/1.10.2/jquery-1.10.2.min.js"></script>
-->
<script src="assets/components/bootstrap/3.0.3/js/bootstrap.min.js"></script>


</body>
</html>

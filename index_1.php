<?php
$communities = array(
		  'Lagos' => array(
					 'list' => array(
								'label' => 'Mailing List',
								'label' => 'https://bit.ly/gdglagos'
					 ),
					 'website' =>
					 array(
								'label' => 'Website',
								'url' => 'http://devblog.gdglagos.com',
					 ),
					 'gplus' => array(
								'label' => 'G+',
								'label' => 'https://plus.google.com/+Gdglagos/posts'
					 )
					 ,
					 'twitter' => array(
								'label' => 'Twitter',
								'label' => 'https://twitter.com/gtuglagos'
					 )
		  )
);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<title>Google I/0 2014 Live Stream</title>
		<!-- Optional theme -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
		<link rel="shortcut icon" href="img/favicon.ico">
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" type="text/css" rel="stylesheet">

		<style type="text/css">
			html,body {
				height:100%;
				background:#110022;
			}

			h1 {
				font-family: Arial,sans-serif
					font-size:80px;
				color:#DDCCEE;
			}

			.lead {
				color:#DDCCEE;
			}


			/* Custom container */
			.container-full {
				margin: 0 auto;
				width: 100%;
				min-height:100%;
				background-color:#110022;
				color:#eee;
				overflow:hidden;
			}

			.container-full a {
				color:#efefef;
				text-decoration:none;
			}

			.v-center {
				margin-top:7%;
			}
			.navbar{
				margin-bottom:0;
			}

			.dropdown-submenu {
				position: relative;
			}

			.dropdown-submenu>.dropdown-menu {
				top: 0;
				left: 100%;
				margin-top: -6px;
				margin-left: -1px;
				-webkit-border-radius: 0 6px 6px 6px;
				-moz-border-radius: 0 6px 6px;
				border-radius: 0 6px 6px 6px;
			}

			.dropdown-submenu:hover>.dropdown-menu {
				display: block;
			}

			.dropdown-submenu>a:after {
				display: block;
				content: " ";
				float: right;
				width: 0;
				height: 0;
				border-color: transparent;
				border-style: solid;
				border-width: 5px 0 5px 5px;
				border-left-color: #ccc;
				margin-top: 5px;
				margin-right: -10px;
			}

			.dropdown-submenu:hover>a:after {
				border-left-color: #fff;
			}

			.dropdown-submenu.pull-left {
				float: none;
			}

			.dropdown-submenu.pull-left>.dropdown-menu {
				left: -100%;
				margin-left: 10px;
				-webkit-border-radius: 6px 0 6px 6px;
				-moz-border-radius: 6px 0 6px 6px;
				border-radius: 6px 0 6px 6px;
			}
		</style>
	</head>

	<body>
		<div class="navbar navbar-inverse navbar-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="./">I/O 2014</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="./">Live Stream</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Join A Community <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<?php
								foreach ($communities as $chapter => $properties) {
									?>
									<li  class="dropdown-submenu">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $chapter; ?></a>
										<ul class="dropdown-menu">
											<?php if (isset($properties['website'])) { ?>
												<li>
													<a href="<?php echo $properties['website']['url']; ?>" target="_blank">
														<?php echo $properties['website']['label']; ?>
													</a>
												</li>
											<?php } ?>
										</ul>							
									</li>
								<?php } ?>
							</ul>

					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>

		<div class = "container container-full text-center">

			<iframe id = "liveStreamIframe" allowTransparency = "true" src = "https://www.google.com/events/io/gadget/iframe.html?feed=true&fh=300&video=true&w=640&h=425" style = "width:640px;height:884px" frameborder = "0">

			</iframe>
		</div> <div class = "row">

			<div class = "col-lg-12 text-center v-center" style = "font-size:39pt;">

			</div>

		</div>

		<!--Latest compiled and minified JavaScript -->

		<script type = 'text/javascript' src = "//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script type='text/javascript' src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

	</body>

</html>
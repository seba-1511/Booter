<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?></title>
	<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jqueryui-1.10.3.css" />
	<?php
	echo $css;
	?>
</head>
<body>
	<nav class="navbar">
		<div class="navbar-inner">
			<div class="container offset1">
				<a class="brand" href="#">Brand</a>
				<ul class="nav">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#">Link</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown</a>
						<ul class="dropdown-menu">
							<li><a href="#">Link</a></li>
							<li><a href="#">Link</a></li>
							<li><a href="#">Link</a></li>
							<li><a href="#">Link</a></li>
						</ul>
					</li>
				</ul>

				<form class="navbar-search pull-right">
					<input type="text" class="search-query" placeholder="Search">
				</form>
			</div>
		</div>
	</nav>
	<div class="container offset1 span11">
		<div class="pull-right">
			<?php
			echo $output;
			?>
		</div>
	</div>

	<!-- Script Loading -->
	<script src="<?php echo base_url(); ?>assets/js/jquery-2.0.0.js" type="text/javascript" charset="utf-8" defer></script>
	<script src="<?php echo base_url(); ?>assets/js/jqueryui-1.10.3.js" type="text/javascript" charset="utf-8" defer></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.js" type="text/javascript" charset="utf-8" defer></script>
	<script src="<?php echo base_url(); ?>assets/js/handlebars.js" type="text/javascript" charset="utf-8" defer></script>
	<script src="<?php echo base_url(); ?>assets/js/less.js" type="text/javascript" charset="utf-8" defer></script>
	<?php
	echo $js;
	?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.mobile.theme-1.3.1.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.mobile.structure-1.3.1.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.mobile-1.3.1.css" />
	<?php
	echo $css;
	?>
</head>
<body>
	<?php
	echo $output;
	?>

	<!-- Script Loading -->
	<script src="<?php echo base_url(); ?>assets/js/jquery-2.0.0.js" type="text/javascript" charset="utf-8" defer></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.mobile-1.3.1.js" type="text/javascript" charset="utf-8" defer></script>
	<?php
	echo $js;
	?>
</body>
</html>
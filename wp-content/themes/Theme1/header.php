<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="<?php echo bloginfo('template_directory').'/css/application.min.css';?>">
	<link rel="stylesheet" href="<?php echo bloginfo('template_directory').'/style.css'; ?>">
	<!-- common libraries. required for every page-->
	<script src="<?php echo bloginfo('template_directory').'/vendor/jquery/dist/jquery.min.js'; ?>"></script>
	<script src="<?php echo bloginfo('template_directory').'/vendor/jquery-pjax/jquery.pjax.js'; ?>"></script>
	<script src="<?php echo bloginfo('template_directory').'/vendor/bootstrap-sass/assets/javascripts/bootstrap/transition.js'; ?>"></script>
	<script src="<?php echo bloginfo('template_directory').'/vendor/bootstrap-sass/assets/javascripts/bootstrap/collapse.js'; ?>"></script>
	<script src="<?php echo bloginfo('template_directory').'/vendor/bootstrap-sass/assets/javascripts/bootstrap/dropdown.js'; ?>"></script>
	<script src="<?php echo bloginfo('template_directory').'/vendor/bootstrap-sass/assets/javascripts/bootstrap/button.js'; ?>"></script>
	<script src="<?php echo bloginfo('template_directory').'/vendor/bootstrap-sass/assets/javascripts/bootstrap/tooltip.js'; ?>"></script>
	<script src="<?php echo bloginfo('template_directory').'/vendor/bootstrap-sass/assets/javascripts/bootstrap/alert.js'; ?>"></script>
	<script src="<?php echo bloginfo('template_directory').'/vendor/slimScroll/jquery.slimscroll.min.js'; ?>"></script>
	<script src="<?php echo bloginfo('template_directory').'/vendor/widgster/widgster.js'; ?>"></script>
	<script src="<?php echo bloginfo('template_directory').'/vendor/pace.js/pace.js'; ?>" data-pace-options='{ "target": ".content-wrap", "ghostTime": 1000 }'></script>
	<script src="<?php echo bloginfo('template_directory').'/vendor/jquery-touchswipe/jquery.touchSwipe.js'; ?>"></script>
	<script src="<?php echo bloginfo('template_directory').'/vendor/jquery-touchswipe/jquery.touchSwipe.js'; ?>"></script>

	<!-- common app js -->
	<script src="<?php echo bloginfo('template_directory').'/js/settings.js'; ?>"></script>
	<script src="<?php echo bloginfo('template_directory').'/js/app.js'; ?>"></script>
	<script type="text/javascript" src="<?php echo bloginfo('template_directory').'/js/bootstrap.min.js';?>"></script>
	<script type="text/javascript" src="<?php echo bloginfo('template_directory').'/js/script.js';?>"></script>
	<!-- page specific libs -->
	<script src="<?php echo bloginfo('template_directory').'/vendor/bootstrap_calendar/bootstrap_calendar/js/bootstrap_calendar.min.js'; ?>"></script>
	<script src="<?php echo bloginfo('template_directory').'/vendor/jquery-animateNumber/jquery.animateNumber.min.js'; ?>"></script>
	<?php wp_head(); ?>
</head>
<body>
<!DOCTYPE html>
<html ng-app>
<head>
	<title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
</head>

<body>

	<header>
		<h1>Angular Wp-Theme Demo</h1>
	</header>

	<ng-posts></ng-posts>

	<footer>
		&copy; <?php echo date( 'Y' ); ?>
	</footer>

</body>
</html>

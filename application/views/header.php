<!DOCTYPE html>
<html class="loading" lang="pt-br" data-textdirection="ltr">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<title>FIP - <?php echo $title; ?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
	<?php if (isset($css_files)) {
		foreach ($css_files as $css_file) : ?>
			<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/<?php echo $css_file; ?>">
	<?php endforeach;
	} ?>
</head>

<body>

<?php 
$admin_path =  str_replace($_SERVER["DOCUMENT_ROOT"], '', __DIR__)  ;
//echo $admin_path;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Настройки сайта</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>


	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	
<div class="container">
    <div class="row">
		<?php require 'sidebar.php'; ?>

		<div class="col-sm-9 col-md-9" id="content">
            <div class="well">

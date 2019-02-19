<?php $dir = basename(dirname(__FILE__)); 
require 'config.php';
//print_r($_COOKIE);

if(!isset($_COOKIE['user']) && !isset($_COOKIE['code']) && !isset($_COOKIE['pass'])):
?>
<script>location.href="/<?= $dir; ?>/";</script>
<?php 
else:
    $code = strip_tags($_COOKIE['code']);
    $user = strip_tags($_COOKIE['user']);
    $pass = strip_tags($_COOKIE['pass']);

    $query = $db->query("SELECT * FROM `users` WHERE `code` = '$code' AND `pass`='$pass'");

    $row = $query->fetch_assoc();
    if($row['login'] != $user && $row['email'] != $user):
        setcookie('user', '', time() - (86400 * 30 * 7), '/');
        setcookie('pass', '', time() - (86400 * 30 * 7), '/');
        setcookie('code', '', time() - (86400 * 30 * 7), '/');
        ?>
            <script>location.href="/<?= $dir; ?>/";</script>
            <?php 
    endif;
endif;

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/css/bootstrap-select.min.css">
	<link rel="stylesheet" href="/<?= $dir; ?>/css/main.css">

	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/js/bootstrap-select.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<div class="container">
    <div class="row">
    	<?php require "menu.php"; ?>
    	<div class="col-sm-9 col-md-9">
            <div class="well">
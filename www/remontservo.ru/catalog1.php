<?php
require 'config.php';

if(@$_GET['id']):
	require 'catalog_single.php';
else:
	require 'catalog_archive.php';
endif;
?>
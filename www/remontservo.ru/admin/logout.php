<?php 
$dir = basename(dirname(__FILE__)); 
setcookie('user', '', time() - (86400 * 30 * 7), '/');
setcookie('pass', '', time() - (86400 * 30 * 7), '/');
setcookie('code', '', time() - (86400 * 30 * 7), '/');

?>
<script>location.href="/<?= $dir; ?>/";</script>
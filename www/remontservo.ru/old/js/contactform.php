<?php
$VivodimJivoSiteilinet = '';
$VivodimJivoSite = "<script type='text/javascript'>
(function(){ var widget_id = 'smo9Ly9F6j';
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);})();</script>";
 
$chasov = date("H.m");
$den = date("D");
echo 'На сервере сейчас:'. $chasov;
 
if($chasov > '9.00' && $chasov < '10.55') {

	$VivodimJivoSiteilinet = $VivodimJivoSite;

} elseif($chasov > '12.05' && $chasov < '17.00') {

	$VivodimJivoSiteilinet = $VivodimJivoSite;
}
 

 
 echo $VivodimJivoSiteilinet; ?>
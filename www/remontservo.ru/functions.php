<?php 
function CurrentMonth(){
	$current = date('m');
	$arr = array(
		1  => 'январе',
		2  => 'феврале',
		3  => 'марте',
		4  => 'апреле',
		5  => 'мае',
		6  => 'июне',
		7  => 'июле ',
		8  => 'августе',
		9  => 'сентябре',
		10 => 'октябре',
		11 => 'ноябре',
		12 => 'декабре'
	);
	return $arr[$current];
}
function Get_utm(){
	$utm_replace = $_GET['utm_replace'];
	switch ($utm_replace) {
		case 'moscow':
			$utm = ' текст 1 ';
			break;
		case 'kazan':
			$utm = ' текст 2 ';
			break;
		case 'spb':
			$utm = ' текст 3 ';
			break;
		default:
			$utm = ' промышленной электроники ';
	}
	echo $utm;
}
?>
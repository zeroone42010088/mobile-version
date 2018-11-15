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
		case 'remont_cpu':
			$utm = ' CPU ';
			break;
		case 'remont_ibp':
			$utm = ' ИБП ';
			break;
		case 'laboratory':
			$utm = ' лабораторного оборудования ';
			break;
        case 'medical':
			$utm = ' медицинского оборудования ';
			break;
        case 'metal_detectors':
			$utm = ' металлодетекторов ';
			break;
        case 'equipment_repair':
			$utm = ' оборудования ';
			break;
        case 'board repair':
			$utm = ' плат ';
			break;
        case 'plk_repair':
			$utm = ' ПЛК ';
			break;
        case 'production_equipment':
			$utm = ' производств. оборудования ';
			break;
        case 'industrial_equipment':
			$utm = ' промышленного оборудования ';
			break;
        case 'industrial_electronics':
			$utm = ' промышленной электроники ';
			break;
        case 'industrial_computers':
			$utm = ' промышленных компьютеров ';
			break;
        case 'industrial_controllers':
			$utm = ' промышленных контроллеров ';
			break;
        case 'servo_klapan':
			$utm = ' сервоклапанов ';
			break;
        case 'rashodomer':
			$utm = ' расходомеров ';
			break;
        case 'resolvers':
			$utm = ' резольверов ';
			break;
        case 'operator_panel':
			$utm = ' панели оператора ';
			break;
        case 'servomotor_repair':
			$utm = ' серводвигателей ';
			break;
        case 'servodrive_peremotka':
			$utm = ' и перемотку серводвигателей ';
			break;
        case 'servoprivod_repair':
			$utm = ' сервопривода ';
			break;
        case 'servodriver_repair':
			$utm = ' серводрайвера ';
			break;
        case 'chpu_repair':
			$utm = ' станков с ЧПУ ';
			break;
        case 'technological_equipment':
			$utm = ' технологического оборудования ';
			break; 
        case 'ultrazvuk_generators':
			$utm = ' ультразвуковых генераторов ';
			break;
        case 'plavni_pusk':
			$utm = ' устройств плавного пуска ';
			break;
        case 'chastotnic_preobrazovatel':
			$utm = ' частотного преобразователя ';
			break;
        case 'chiller':
			$utm = ' чиллеров ';
			break;
        case 'chpu':
			$utm = ' ЧПУ ';
			break;
        case 'encoder':
			$utm = ' энкодера ';
			break;
         
		default:
			$utm = ' промышленной электроники ';
	}
	echo $utm;
}
?>
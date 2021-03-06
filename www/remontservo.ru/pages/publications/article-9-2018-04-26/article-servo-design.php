<?php 
$title = 'Серводвигатель (сервомотор) и другое  электрооборудование. Первый этап проектирования';
$keywords = 'серводвигатель, сервомотор, servomotor, servo motor, электромотор, ремонт серводвигателя, проектирование';
$description = 'Начинаем проектирование сервомотора (серводвигателя). Проектирование конструктивных элементов оборудования';
$classes = 'article-servo-design';
require '../../../header.php';
?>

<div class="main-content">
	<div class="container">
		<div class="filling-page">
				<article>
                   <h1 class="h1-public">Первый этап проектирования серводвигателей ( сервомоторов )</h1>
                <p class="p-public">Проектирование конструктивных элементов оборудования с использованием переменного тока, исключение – асинхронные двигатели с фазным ротором начинается со статора с учётом результатов электромагнитного расчёта. Определив вылет лобовых соединений, приступают к продольному разрезу механизма.  Выбранный способ закрепления сердечника статора в станине определяет длину станины.  Размеры вала лучше проверить механическим расчетом исходя из чертежей продольного разреза.</p>
                <p class="p-public">К чертежам оборудования, которое работает на постоянном токе, лучше приступать начиная с якоря. Якорь – вращающаяся часть оборудования. Посмотрев продольный разрез и определив расположение коллектора и вылет лобовых частей. Аналогично уже рассмотренному случаю, осуществляется механический расчёт.  В случае наличия аксиальной системы вентиляции принимается во внимание необходимость разместить центробежный вентилятор.</p>
                <p class="p-public">Следующим этапом занимаются неподвижными частями машины, разрабатывается станина с обмотками возбуждения и полюсами. Асинхронные двигатели с фазным ротором обычно прорабатывают с вращающийся части.</p>
                <h2 class="h2-public" style="margin-bottom:-0.625rem">Вал</h2>
                <p class="p-public">Вал электрического оборудования, например, серводвигателя передает вращающий момент от электродвигателя к приводимому механизму или передаёт вращающий момент от первичного двигателя к соединенного с ним генератору. Масса вращающихся частей оборудования воспринимается валом, также вал воспринимает момент вращения и изгибающий момент передачи. На вал воздействует одностороннее магнитное притяжение, которое возникает при условии наличия неравномерного воздушного зазора.</p>
                <p class="p-public">Вал должен обладать жесткостью в средней части, которая несёт сердечник якоря или ротора, чтобы при эксплуатации прогиб вала не превысил допустимых параметров. Должна быть обеспечена прочность всех поперечных сечений, чтобы не допускать остаточных деформаций при любых нормативных нагрузках, которые предусмотрены при работе. Предполагаемое критическое значение частоты вращение должно быть как минимум на 30% выше рабочего значения.</p>
                <img class="image-public" src="img-article/val.JPG" alt="Вал" style="width: 350px; margin: 15px auto 15px">
                <p class="p-public">Как говорилось выше, строим продольный разрез и выполняем механический расчёт и определяем соответствие проектируемого вала всем требованиям.  При определении размеров вала сначала находят длины выступающего цилиндрического конца и диаметр. Для этого исходят из момента вращения при номинальном режиме работы оборудования.</p>
                <p class="p-public">В оборудовании с использованием постоянного тока и высотой расположения вала более 355мм, которые эксплуатируются в сложных условиях и испытывают перегрузки, принято использовать валы выступающими концами конусной формы, размеры по ГОСТ 12081 “Концы валов конические с конусностью 1:10. Основные размеры, допускаемые крутящие моменты”.</p>
                <p class="p-public">При диаметре вала менее 100мм следует использовать в основном цилиндрические прокатанные прутки, сталь 45, либо другой марки. Следует обеспечить минимальные переходы между ступенями, чтобы уменьшить трудоемкость обработки и сэкономить на отходах. Для вала большого диаметра аналогично используют сталь 45, применяется прессовка и ковка.</p>       
                </article>
            </div>
	</div>

</div><!--end main-content-->

<?php require '../../../footer.php';?>
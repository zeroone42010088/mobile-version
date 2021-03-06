<?php 
$title = 'Серводвигатели(сервомоторы). Размерные характеристики и проектирование серий машин';
$keywords = 'серводвигатель, сервомотор, характеристика, размеры,  servomotor, servo motor, электромотор, ремонт серводвигателя';
$description = 'Рассматриваем размерные характеристики серводвигателей. Вопросы проектирования серий. Модификации оборудования';
$classes = 'article-design-machine-series';
require '../../../header.php';
?>

<div class="main-content">
	<div class="container">
		<div class="filling-page">
				<article>					
                  <h1 class="h1-public">Серводвигатели (сервомоторы). Размерные характеристики и проектирование серий машин.</h1>
                <h2 class="h2-public" style="margin-bottom:-0.625rem;">Какие размеры главные?</h2>
                <p class="p-public">Для электрооборудования на переменном токе основными размерными характеристиками будут внутренний диаметр и длина сердечника статора. А для машин на постоянном токе такими параметрами будут наружный диаметр и длина сердечника якоря. Главными эти параметры называют, так как те влияют на остальные размеры. Основные размеры влекут за собой соответствующую массу, габариты изделия и основные ТЭП(технико-экономические показатели) оборудования.</p>
                <h2 class="h2-public" style="margin-bottom:-0.625rem;">Параметры зависимы. Или как судить по одной машине про остальные.</h2>
                <p class="p-public">Если расположить машины в ряд по возрастанию мощности, то можно заметить, что их параметры изменяются в прослеживаемой закономерности. Но в реальной жизни идеальное подобие и взаимосвязи не всегда строго соблюдаются и являются постоянными, отклонения – обычное дело. В маломощных машинах из-за падения напряжения и относительного тока отклонения выдерживаются в рамках допусков путём увеличения размеров, для машин большой мощности необходимо обеспечить должную интенсивность охлаждения. Всё это оказывает влияние на действие закона подобия. Чем меньше изучаемый диапазон машин, тем точнее получаются соотношения. Впрочем, отклонения хоть и есть, но знать общие зависимости полезно и позволяет произвести оценку каждого параметра для всего диапазона машин, если он известен хотя бы для одной из них.</p>
                <h2 class="h2-public" style="margin-bottom:-0.625rem;">Серии машин</h2>
                <p class="p-public">Под серией подразумевается сходная и отсортированная в порядке возрастания группа оборудования. Для сортировки наиболее удобны такие параметры как мощность и геометрические размеры. Конечно, если оборудование включено в одну серию, то должно обладать сходной конструкцией или может быть выполнено по типу. Cерии разбиваются по принципу типоразмеров, таким образом изделия образуют группы и их удобно искать. Такими типоразмерами могут быть, например, частота вращения или мощность.</p>
                <p class="p-public"> Для небольшой партии машин может быть экономичнее увеличение наружного диаметра корпуса или станины, количества длин корпусов. В производстве используются в основном 2 длины корпуса на один диаметр, но если для этого диаметра слишком длинные сердечники у машин второй длины, то используют 1 длину, для больших мощностей допускается 3 или 4 длины. Для использования более 1 длины корпуса на диаметр получается дополнительное искажение соотношений подобия. Всегда полезно помнить про унификацию деталей и узлов для облегчения производства.</p>
                <p class="p-public">В серию собирают оборудование, например, серводвигатели со всем требуемым перечнем частот вращения и напряжений. Шкала мощностей изделий серии определяется по стандартному ряду. Могут присутствовать модификации оборудования основного исполнения.</p>
                <p class="p-public">Для изделий на переменном токе длина сердечника определяется с учетом перехода от одного числа полюсов к другому. Корпус и остальные элементы унифицируются. Для изделий на постоянном токе каждому типоразмеру соответствует одна длина сердечника. Частота вращения при самостоятельной вентиляции оказывает влияние на степень эффективности снижения температуры. Поэтому, длина сердечника и длина станины имеют значение, которое при большой нагрузке и соответствующей ей частоте вращения обеспечивает недопускание перегрева частей свыше допустимого.</p>
                <img class="image-public" src="img-article/Servo-%20Motor-BR.JPG" alt="Cервомотор B&R после ремонта" style="width: 400px; height: 300px; margin: 15px auto 15px;" >
                <p class="p-public">При длительном перегреве обмоток происходит пробой изоляции. </p>
                <p>Пробой изоляции может быть  межвитковым или межсекционным в пределах одной обмотки по одной фазе серводвигателя. Такую неисправность тяжелее всего найти. При этом может наблюдаться переменный тормозной момент, создаваемый валом при прокручивании вала серводвигателя рукой (вал неисправного двигателя проворачивается рывками, у исправного двигателя вал поворачивается плавно).  При этом серводвигатель может сохранять работоспособность и продолжать работу, но будет нагреваться сильнее, чем исправный. Величина рабочего тока у неисправного двигателя естественно будет выше. </p>
                <p>Другой вид пробоя изоляции  это пробой обмотки статора серводвигателя на корпус электродвигателя. Такая неисправность легко определяется измерением сопротивления между корпусом серводвигателя и одной из фаз статорной обмотки. У исправного серводвигателя сопротивление изоляции должно быть более одного мегаома.</p>
                <p class="p-public">Устранение неисправности обмоток серводвигателя при пробое изоляции возможно только посредством перемотки обмоток.</p>
                </article>
            </div>
	</div>

</div><!--end main-content-->

<?php require '../../../footer.php';?>
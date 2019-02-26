<?php
$title = 'Выполненные работы по ремонту оборудования и электроники';
$keywords = 'серводвигатель сервомотор электродвигатель фото, ремонт электродвигателей';
$description = 'Ремонт серводвигателей ( сервомоторов ) и промышленного оборудования. Фото выполненных работ.';
$classes = 'our-works';
require '../header.php';

$db = new mysqli("localhost", "u0353001_default", "UxpF1E_k", "u0353001_default");
$db->set_charset("utf8");

?>

<div class="container">
<div class="main-content">
	<style>
	@media (max-width:500px) {
    .slick-prev {top:-100px;}
    .slick-next {top:-100px;}
}
#item-6 {background:linear-gradient(to top,#FF7E00,white);}
	</style>


  <?php $query = $db->query("SELECT * FROM `works` WHERE 1"); ?>
	<div class="slider_img1">
    <?php while($row = $query->fetch_assoc()){ ?>
      <div class="item">
        <img src="../img/preload.gif" data-lazy=<?php echo $row['kartinka'] ?> alt="<?php echo $row['nazvanieKartinki'] ?>" title="<?php echo $row['podskazka'] ?>">
        <p class=ourworks_description style=margin-top:5px><?php echo $row['stroka1'] ?></p>
        <p class="ourworks_description ourworks_description_fontNormal"><?php echo $row['stroka2'] ?></p>
        <ul>
          <?php if ($row['stroka3'] && strlen($row['stroka3'])): ?>
            <li class="ourworks_description ourworks_description_fontNormal"><?php echo $row['stroka3'] ?></li>
          <?php endif; ?>
          <?php if ($row['stroka4'] && strlen($row['stroka4'])): ?>
            <li class="ourworks_description ourworks_description_fontNormal"><?php echo $row['stroka4'] ?></li>
          <?php endif; ?>
          <?php if ($row['stroka5'] && strlen($row['stroka5'])): ?>
            <li class="ourworks_description ourworks_description_fontNormal"><?php echo $row['stroka5'] ?></li>
          <?php endif; ?>
          <?php if ($row['stroka6'] && strlen($row['stroka6'])): ?>
            <li class="ourworks_description ourworks_description_fontNormal"><?php echo $row['stroka6'] ?></li>
          <?php endif; ?>
        </ul>
      </div>
    <?php } ?>
  </div>



</div>
</div><!--end container-->
<?php require '../footer.php';?>

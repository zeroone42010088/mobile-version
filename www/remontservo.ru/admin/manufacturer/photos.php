<?php require '../header.php' ?>

<h1>Все фото</h1>
<?php 
$query = $db->query("SELECT * FROM `diller_photos`");
while($row = $query->fetch_assoc()){
	?>
	<div class="row photo-row">
		<div class="col-md-4">
			<img src="/img/manufacturer/<?= $row['photo']; ?>" alt="" class="small-thumb">
		</div>
		<div class="col-md-8">
			<p><b>Производитель:</b> <?= $row['diller'];?></p>
			<p><b>Оборудование:</b> <?= $row['type'];?></p>
		</div>
	</div>

	<?php 
			
}?>


<?php require '../footer.php' ?>
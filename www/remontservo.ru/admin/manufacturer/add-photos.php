<?php require '../header.php' ?>

<h1>Фото</h1>
<?php 

if(isset($_POST['diller']) and isset($_POST['type']) and isset($_FILES["image"]["tmp_name"])):
	$diller = strip_tags($_POST['diller']);
	$type = strip_tags($_POST['type']);

	//echo basename(dirname(__FILE__));
	$target_dir = "../../img/manufacturer/";
	$filename = rand(100,1000). "_".$_FILES["image"]["name"];
	$target_file = $target_dir . $filename ;
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// Check if image file is a actual image or fake image
	
	$check = getimagesize($_FILES["image"]["tmp_name"]);
	if($check !== false) {
	        $uploadOk = 1;

	        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
		        ?>
		        <div class="success">Файл успешно загружен!</div>
		        
				<img src="<?= $target_file;?>" alt="" class="thumb col-md-6">
				<div class="col-md-6">
					<p><b>Производитель:</b> <?= $diller;?></p>
					<p><b>Оборудование:</b> <?= $type;?></p>
				</div>
		        <?php 
		        $query = $db->query("SELECT `id` FROM `diller_photos`  WHERE `diller` = '$diller' AND `type`= '$type'");
		        $row = $query->fetch_assoc();
		       // var_dump($row);
		        if($row == ''): //new photo
		        	$query = $db->query("INSERT INTO `diller_photos`(`diller`, `type`, `photo`) VALUES ('$diller','$type','$filename')");
		        else: //edit photo
		        	$id = $row['id'];
		        	$query = $db->query("UPDATE `diller_photos` SET `photo`='$filename' WHERE `id`='$id'");
		        endif;


		    } else {
		        ?>
		        <div class="error">
		        Извините, произошла ошибка при загрузке файла.
		        </div>
		        <?php 
		    }
	} 
	else {
		?>
		<div class="error">Файл не является изображением.</div>
		<?php 
		$uploadOk = 0;
	}

else:
$query = $db->query("SELECT diller FROM products  GROUP by diller");?>

<form action="" method="POST" enctype="multipart/form-data">
<select class="selectpicker" data-live-search="true" name="diller">
	<?php 
		while($row = $query->fetch_assoc()){
			if($row['diller'] != ''):
			?>
			  <option data-tokens=""><?= $row['diller']; ?></option>

			<?php 
			endif;
		}
 	?>
</select>

<?php 
$query = $db->query("SELECT type FROM products  GROUP by type");?>

<select class="selectpicker" data-live-search="true" name="type">
	<?php 
		while($row = $query->fetch_assoc()){
			?>
		  <option data-tokens=""><?= $row['type']; ?></option>

			<?php 
		}
 	?>
</select>

<input type="file" name="image" class="brouse_file">
<input type="submit" class="btn btn-success" value="Отправить">

</form>

<?php endif; ?>

<?php require '../footer.php' ?>
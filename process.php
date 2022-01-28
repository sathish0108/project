<?php
require_once('config.php');
?>
<?php

if(isset($_POST)){

	$productname 		= $_POST['productname'];
	$productid 		= $_POST['productid'];
	$category 			= $_POST['category'];
	$link	= $_POST['link'];
	$image 		= ($_POST['image']);

		$sql = "INSERT INTO mobile1 (productname, productid, category, link, image ) VALUES(?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$productname, $productid, $category, $link, $image]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}
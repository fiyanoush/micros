<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/loginsystem/";

require_once($path . 'database.php');


if ((isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['role'] == 'admin')) {
	echo "Unauthorized Access";
	return;
}

if(isset($_POST) & !empty($_POST)){
	$title = ($_POST['title']);
	$category = ($_POST['category']);
	$price = ($_POST['price']);
	$brand = ($_POST['brand']);
	// store n upload image
    $image = $_FILES['image']['name']; 
    $dir="../img/products/";
    $temp_name=$_FILES['image']['tmp_name'];
    if($image!="")
    {
        if(file_exists($dir.$image))
        {
            $image= time().'_'.$image;
        }
        $fdir= $dir.$image;
        move_uploaded_file($temp_name, $fdir);
    }

    // Execute query
	$query = "INSERT INTO `products` (title, category, price, brand, image) VALUES ('$title', '$category', '$price', '$brand', '$image')";
	$res = mysqli_query($db, $query);
	if($res){
		header('location: view.php');
	}else{
		$fmsg = "Failed to Insert data.";
		print_r($res->error_list);
	}
}
?>
<?php require($path . 'templates/bootsrapheader.php') ?>
<div class="container my-5">
            <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
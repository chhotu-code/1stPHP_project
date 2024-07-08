<?php
include("connection.php");


print_r($_POST);

if(isset($_POST['registerform']) and !empty($_POST['registerform']))
{

	 $sql = "INSERT INTO user "."(name,password) "."VALUES "."('".$_POST['username']."','".md5($_POST['pass'])."')";
     $result = mysqli_query($con,$sql);  
	 //print_r($result);
     header("Location:index.php?register=success");	 

}

if(isset($_POST['products_operat']) and ($_POST['products_operat']=="new_submitted") )
{
	echo '<pre>';
	print_r($_FILES);
	echo '</pre>';
	
	$image_name = $_FILES['product_image']['name'] ;
	$target_file = "images/$image_name";
	
	//move_uploaded_file($_POST['product_image']['tmp_name'], $target_file);
	
	
	// Check if the file was uploaded via HTTP POST and the array key exists
	if (isset($_FILES['product_image']) && is_uploaded_file($_FILES['product_image']['tmp_name'])) {
		$image_name = $_FILES['product_image']['name'];
		$target_file = "images/$image_name";

	// Move the uploaded file to the target directory
	if (move_uploaded_file($_FILES['product_image']['tmp_name'], $target_file)) {
		echo "The file has been uploaded successfully.";
	} else {
		echo "Sorry, there was an error uploading your file.";
	}
	} else {
	echo "No file was uploaded or there was an error with the upload.";
	}

	
	
	
	
	
	
	echo $sql = "INSERT INTO products "."(product_name,quantity,price,image) "."VALUES 
	       "."('".$_POST['products_name']."',
		    '".$_POST['products_quantity']."',
			'".$_POST['products_price']."',
			'".$_POST['product_image']."')";
	$result = mysqli_query($con,$sql);
	
	//header("Location:products.php");	
}
	// exit;

if(isset($_POST['signinform']) and !empty($_POST['signinform']))
{	
	// exit;
	// print_r($_POST);
	
    $username = $_POST['username'];
	$password = $_POST['pass'] ;
	
	
	$sql= "SELECT * FROM user WHERE name = '$username' AND password = '$password' ";
	$result = mysqli_query($con,$sql);
	$check = mysqli_fetch_array($result);

    	
	$_SESSION['username'] =  $check['name'];
	$_SESSION['username_id'] =  $check['id'];
	$_SESSION['is_admin'] =  $check['is_admin'];
	
	if( $_SESSION['is_admin'] == 1 )
	{
		header("Location:admin/index.php");
		echo(" login");
	}
	else
	{
		header("Location:index.php");
		echo("not login");
	}

}



if(isset($_POST['category_operat']) and ($_POST['category_operat'])=="new_submitted" ) 
{
	
	$sql = "INSERT INTO category "."(category_name,parent_category) "."VALUES "."('".$_POST['category_name']."','".$_POST['parent_cat']."')";
	$result = mysqli_query($con,$sql);  
	
     header("Location:admin/category.php");
}

if(isset($_POST['category_operat']) and ($_POST['category_operat']=="edit_submitted") ) 
{

    $name = $_POST['category_name'];	
	$id = $_POST['edit_id'];
	$sql = "update category set category_name =  '$name' where id= $id ";
	$result = mysqli_query($con,$sql);  
	header("Location:admin/category.php");

}



if(isset($_GET['del']) and ( $_GET['del'] == "category"))
{
	  $sql = "delete from category where id='".$_GET['id']."'";
	  $result = mysqli_query($con,$sql);
      header("Location:admin/category.php");	  
}

	


?>
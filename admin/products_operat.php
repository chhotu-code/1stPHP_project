<?php 
include("../function.php");

?>

<html>
<head>
<link src= "style.css"> </link>
<style>
</style>
<body>
<?php

//command=edit?id= echo $check_assoc['id']; 

//$_get
//$_POST
//$_REQUEST

if(isset($_REQUEST['command']) and ($_REQUEST['command']=="edit"))
{
	$id = $_REQUEST['id']  ;
    $sql= "SELECT * FROM category WHERE id = $id ";
	$result = mysqli_query($con,$sql);
	$check_edit = mysqli_fetch_assoc($result);
	print_r($check_edit);
	
}	



?>


<br>
<?php if(isset($_SESSION['username'])and !empty($_SESSION['username']) ) 
{ ?>
<a href="signout.php" >logout </a>
<?php
}else{ ?>
<a href="signin.php" >login </a> / 
<a href="register.php" >Register </a>

<?php } ?>
<br><br><br>
<div style="text-align:center; font-size:30px; "> Admin Page</div >
<div style="border:1px solid #888888">
<table style="width:100%; cellspacing:0; cellpadding:0; text-align:center; background-color:aqua;"> <tr> <td><a href="index.php"> Home </a>  </td>
<td> <a href="index.php">About Us  </a></td>
<td> <a href="category.php">Category  </a></td>
<td> <a href="products.php">Products  </a></td>
<td> <a href="profile.php">Profile  </a></td>
<td> <a href="orders.php">Orders  </a></td></tr>


<tr> <div style="border:1px solid #888888">
<td style="height:300px;border:1px solid #888888; background-color:#efefef;">  </div></td> 
<td colspan="5" style="border:1px solid #888888; background-color:#efefef;"> 
<br><br><br>
Products 

<?php 

$sql= "SELECT * FROM products  ";
$result = mysqli_query($con,$sql);
$check = mysqli_fetch_array($result);


?> 
<br><br><br><br>
<form action="../function.php" name="category" id="category" method="POST" 
   enctype="multipart/form-data">
Prodcuts Name 
<Input type="text" name="products_name" id="products_name" value="<?php echo @$check_edit['products_name'] ?> ">
<br> <br><br>
Product Price 
<Input type="text" name="products_price" id="products_price" value="<?php echo @$check_edit['products_price'] ?> ">
<br> <br><br>
Product Quantity
<Input type="text" name="products_quantity" id="products_quantity" value="<?php echo @$check_edit['products_quantity'] ?> ">
<br><br><br>
Product image
<input type="file" name="product_image" id="product_image">
<br><br><br><br>
<!-- <SELECT name="parent_cat" id="parent_cat">
<br><br><br><br>
<option value ="0"> New </option>

<?php // foreach($check as $row )
//{
//$row['parent_category'];
?>
	<?php //}
?>

 </select> -->
<br>

<?php

if(isset($_REQUEST['command']) and ($_REQUEST['command']=="edit"))
{ ?>
<input type="hidden" name="products_operat" id="category_operat" value="edit_submitted">
<input type="hidden" name="edit_id" id="edit_id" value=<?php echo $check_edit['id']; ?>>
<?php }else{ ?>
	<input type="hidden" name="products_operat" id="category_operat" value="new_submitted">
<?php }

?>




<br>
<input type="submit">

</form>







 </td> 

</tr>
<tr> <td colspan="6"> <div style="border:1px solid #888888">Footer </div></td> <td></td> </tr>



</table>
</div>


</body>




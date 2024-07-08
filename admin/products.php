

<?php

include("../function.php");

print_r($_SESSION);

?>

<html>
<head>
<link src= "style.css"> </link>
<style>
</style>
<body>



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
<td style="height:300px;border:1px solid #888888; background-color:#efefef;"> Category </div></td> 
<td colspan="5" style="border:1px solid #888888; background-color:#efefef;"> 

<a href="products_operat.php">Add Products  </a>

<?php 

//echo '<pre>';
$sql= "SELECT * FROM products  ";

$result = mysqli_query($con,$sql);



?>
<table style=" width:100%" > 
<tr><th> Id</th> <th> products Image</th> <th> products Name</th> <th> products Qnt</th> <th> products Price</th><th> Action </th>
<?php $i = 0; while($check_assoc  =  mysqli_fetch_assoc($result))
{ ?> 

<tr><td><?php echo $i++; ?> </td>
 <td> <img src="images/<?php echo $check_assoc['image']; ?>" style="height:40px;width:40px;" ><?php echo $check_assoc['id']; ?> </td> 
 <td> <?php echo $check_assoc['product_name']; ?> </td> 
 <td> <?php echo $check_assoc['quantity']; ?> </td> 
 <td> <?php echo $check_assoc['price']; ?> </td> 
 <td><a href="category_operat.php?command=edit&id=<?php echo $check_assoc['id']; ?>">edit </a> &nbsp;  <a href="../function.php?del=category&id=<?php echo $check_assoc['id']; ?>">delete </a></td> </tr>
   

	<?php }
?>


</table>



 </td> 

</tr>
<tr> <td colspan="6"> <div style="border:1px solid #888888">Footer </div></td> <td></td> </tr>



</table>
</div>


</body>




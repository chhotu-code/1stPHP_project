<?php

/*
$name_9 = "Hariom" ; 
$number = 10 ; 
$percent = 10.15 ;


echo  $name_9;  echo '</br>';
echo $number; echo '</br>';
echo $percent;

//$$hindi = $number ; 

//echo $$hindi ; 
//////////////-Index Array ////////
/* -------------  Array Index array Example   -----------*/

$index_marks = array(80,90,99,71,80,90,100) ;

$chunk = array_chunk($index_marks,2);
/*
echo '<pre>';
print_r($chunk);
echo '</pre>';
*/

//print_r(array_search(99,$index_marks));
 

$second_array = array (71,99,23,45,45);

$arrt = array_intersect( $index_marks,$second_array);


/* echo '<pre>' ; 
print_r($index_marks); 
echo '</pre>' ; 

echo $index_marks[4];

/* -------------Associative array ------------------*/

/*$Associative_marks = array("Ram"=>"90","Harish"=>"99");

echo '<pre>' ; 
print_r($Associative_marks); 
echo '</pre>' ; 

echo $Associative_marks["Ram"];

/////*--------- Multidimensional Array --------------
//		1 2 3
//		4 5 6
//		7 8 9
//*/


/*$multi_array  = array(
						array("hc"=>"car","he"=>"bike","h"=>"cycle"),
						array("halicopter","rocket","aeroplane"),
						array("bajaj","Hero","yamaha"),
						);
						
	
echo '<pre>' ; 
print_r($multi_array); 
echo '</pre>' ; 

echo $multi_array[0][2] ;	

echo '</br>';
echo $multi_array[1][1];
echo '</br>';
echo $multi_array[2]["lastname"];


echo '</br>';

echo $marks["Ram"];


echo '</br>';

$condition = Null ;


//print
//print_r



*/




/*class bike {
	
  public  $color ; 
	public $name	; 
	
	function setcolor($color2)
	{
		$this->color = $color2 ; 		
	}
	
	function getname($name)
	{
		$this->name = $name
	}
		
}
*/








define("Name","Hariom");
const C_name = "Hariom Company"; 



/* // 1) If condition */
 //  Block Scope   {   } 
 
   $index_marks[4] = 55;
   
   If($index_marks[4] >60 )
   {
	   echo "First Division"    ; 
   }else
   {
	    echo "Grade B " ;
   }	

   echo '<br>';
   
   
  foreach($index_marks as $key=>$value)
  {
	 // echo $key." value is ".$value ;
	 // echo '<br>';
  }
  
  function addition( $c, int $d)
  {
	  
	return  $c = $c+$d ; 
  }
  
  echo $c = "100" ;
  
   /* 2) Switch case 
	  3) For Loop 
	  4) while Loop 
	  5) Do while 
	  6) foreach Loop
	  

*/


include("function.php");

//print_r($_SESSION);

?>

<html>
<head>
<link src= "style.css"> </link>
<style>
</style>
<body>


Register Form
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

<div style="border:1px solid #888888">
<table style="width:100%; cellspacing:0; cellpadding:0; text-align:center; background-color:aqua;"> <tr> <td><a href="index.php"> Home </a>  </td>
<td> <a href="index.php">About Us  </a></td>
<td> <a href="category.php">Category  </a></td>
<td> <a href="products.php">Products  </a></td>
<td> <a href="profile.php">Profile  </a></td>
<td> <a href="orders.php">Orders  </a></td></tr>


<tr> <div style="border:1px solid #888888">
<td style="height:300px;border:1px solid #888888; background-color:#efefef;"> Category </div></td> 
<td colspan="5" style="border:1px solid #888888; background-color:#efefef;"> Products </td> 

</tr>
<tr> <td colspan="6"> <div style="border:1px solid #888888">Footer </div></td> <td></td> </tr>



</table>
</div>


</body>




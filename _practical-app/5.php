<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


echo rand(1,1000) . "<br>";
echo "<br>";

$string = "heheheee";

$valueLength = strlen($string);


echo $valueLength . "<br>";


$values = ['sadfast',3658,'blabla',1111,];

$found = in_array($string,$values);


	if($found) {

		echo "Whaaat you found me";

	} else {

		echo "a a a not today";
		
	}


/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>
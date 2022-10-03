<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

if(2 < 3){

	echo "I love PHP";
	
	} elseif( 2 > 5) {
	
	echo "PHP";
	
	}
	
	else {
	
	echo "it is not";
	
	}


	for ($i = 0; $i <= 10; $i++) {

	}


	$number = 10;

switch($number){

    case 10:
    echo "it is 10";
    break;
    case 7:
    echo "is it 1";
    break;
    case 5:
    echo "is it 1";
     break;
    case 4:
    echo "is it 1";
      break;
	case 2:
	 echo "is it 1";
	  break;


}
/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>
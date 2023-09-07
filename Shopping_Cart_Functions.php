<?php 
	

function AddShoppingCart($ProductID,$BuyQuantity)
{
	include('connect.php'); 

	$query="SELECT * FROM Product WHERE ProductID='$ProductID'";
	$result=mysqli_query($connect,$query);
	$count=mysqli_num_rows($result);

	if($count < 1) 
	{
		echo "<p>Product ID not found.</p>";
		exit();
	}
	$row=mysqli_fetch_array($result);
	$ProductName=$row['ProductName'];
	$ProductPrice=$row['ProductPrice'];
	$Image=$row['Image1'];

	if($BuyQuantity < 1) 
	{
		echo "<script>window.alert('Purchase Quantity Cannot be Zero (0)')</script>";
		echo "<script>window.location='shoppingcart.php'</script>";
		exit();
	}

	if(isset($_SESSION['ShoppingCartFunctions'])) 
	{
		$Index=IndexOf($ProductID);
		
		if($Index == -1) 
		{
			$size=count($_SESSION['ShoppingCartFunctions']);

			$_SESSION['ShoppingCartFunctions'][$size]['ProductID']=$ProductID;
			$_SESSION['ShoppingCartFunctions'][$size]['ProductName']=$ProductName;
			$_SESSION['ShoppingCartFunctions'][$size]['ProductPrice']=$ProductPrice;
			$_SESSION['ShoppingCartFunctions'][$size]['BuyQuantity']=$BuyQuantity;
			$_SESSION['ShoppingCartFunctions'][$size]['Image1']=$Image;
		}
		else
		{
			$_SESSION['ShoppingCartFunctions'][$Index]['BuyQuantity']+=$BuyQuantity;
		}
	}
	else
	{
		$_SESSION['ShoppingCartFunctions']=array(); //Create Session Array
		$_SESSION['ShoppingCartFunctions'][0]['ProductID']=$ProductID;
		$_SESSION['ShoppingCartFunctions'][0]['ProductName']=$ProductName;
		$_SESSION['ShoppingCartFunctions'][0]['ProductPrice']=$ProductPrice;
		$_SESSION['ShoppingCartFunctions'][0]['BuyQuantity']=$BuyQuantity;
		$_SESSION['ShoppingCartFunctions'][0]['Image1']=$Image;
	}
	echo "<script>window.location='shoppingcart.php'</script>";
}

function RemoveShoppingCart($ProductID)
{
	$Index=IndexOf($ProductID);
	unset($_SESSION['ShoppingCartFunctions'][$Index]);
	$_SESSION['ShoppingCartFunctions']=array_values($_SESSION['ShoppingCartFunctions']);

	echo "<script>window.location='shoppingcart.php'</script>";
}

function ClearShoppingCart()
{	
	unset($_SESSION['ShoppingCartFunctions']);
	echo "<script>window.location='shoppingcart.php'</script>";
}

function CalculateTotalAmount()
{
	$TotalAmount=0;

	$size=count($_SESSION['ShoppingCartFunctions']);

	for($i=0;$i<$size;$i++) 
	{ 
		$ProductPrice=$_SESSION['ShoppingCartFunctions'][$i]['ProductPrice'];
		$BuyQuantity=$_SESSION['ShoppingCartFunctions'][$i]['BuyQuantity'];
		$TotalAmount+=($ProductPrice * $BuyQuantity);
	}
	return $TotalAmount;
}

function CalculateVAT()
{
	$VAT=0;
	$VAT=CalculateTotalAmount() * 0.05;

	return $VAT;
}
function CalculateTotalQuantity()
{
	$TotalQuantity=0;
	$size=count($_SESSION['ShoppingCartFunctions']);

	for ($i=0; $i <$size ; $i++) 
	{ 
		$BuyQuantity=$_SESSION['ShoppingCartFunctions'][$i]['BuyQuantity'];
		$TotalQuantity+=$BuyQuantity;
	}
	return $TotalQuantity;
}

function IndexOf($ProductID)
{
	if (!isset($_SESSION['ShoppingCartFunctions'])) 
	{
		return -1;
	}

	$size=count($_SESSION['ShoppingCartFunctions']);

	if ($size < 1) 
	{
		return -1;
	}

	for ($i=0;$i<$size;$i++) 
	{ 
		if($ProductID == $_SESSION['ShoppingCartFunctions'][$i]['ProductID']) 
		{
			return $i;
		}
	}
	return -1;
}

?>
<?php
session_start();
include('connect.php');
if(isset($_GET['ProductID']))
{
    $ProductID = $_REQUEST['ProductID'];
    $select = "SELECT * FROM Product Where ProductID = '$ProductID'";
    $ret = mysqli_query($connect, $select);
    $row = mysqli_fetch_array($ret);

    $ProductID = $row ['ProductID'];
    $ProductName = $row ['ProductName'];
    $ProductPrice = $row ['ProductPrice'];
    $ProductQuantity = $row ['Quantity'];
    $ProductDes = $row ['Description'];
    // $ProductTypeID = $row ['ProductTypeID'];
    $ProductImage1=$row['Image1'];
    $ProductImage2=$row['Image2'];
    $ProductImage3=$row['Image3'];
}
if(isset($_POST['btnupdate']))
{
    $UProductID = $_POST['UProductID'];
    $UProductName = $_POST['UProductName'];
    $UProductPrice = $_POST['UProductPrice'];
    $UProductQuantity = $_POST['UProductQuantity'];
    $UProductDes = $_POST['UtxtDes'];
    // $UProductTypeID = $_POST['UcboType'];

    $UProductImage1=$_FILES['UProductImage1']['name'];
    $folder="entriedproductimages/";
    $filename1=$folder.'_'.$UProductImage1;
    $UProductImage1=copy($_FILES['UProductImage1']['tmp_name'],$filename1);

    $UProductImage2=$_FILES['UProductImage2']['name'];
    $folder="entriedproductimages/";
    $filename2=$folder.'_'.$UProductImage2;
    $UProductImage2=copy($_FILES['UProductImage2']['tmp_name'],$filename2);

    $UProductImage3=$_FILES['UProductImage3']['name'];
    $folder="entriedproductimages/";
    $filename3=$folder.'_'.$UProductImage3;
    $UProductImage3=copy($_FILES['UProductImage3']['tmp_name'],$filename3);

    if(!$UProductImage1)
    {
    echo"<p> Cannot Upload Product Image </p> ";
    exit();
    }
    if(!$UProductImage2)
    {
    echo"<p> Cannot Upload Product Image </p> ";
    exit();
    }
    if(!$UProductImage3)
    {
    echo"<p> Cannot Upload Product Image </p> ";
    exit();
    }
    echo $update = "UPDATE Product set ProductName = '$UProductName',
                    ProductPrice = '$UProductPrice',
                    Quantity = '$UProductQuantity', 
                    Description = '$UProductDes',
                    -- ProductTypeID = '$UProductTypeID',
                    Image1 = '$filename1',
                    Image2 = '$filename2',
                    Image3 = '$filename3'
                    WHERE ProductID = $UProductID";
    $Uret = mysqli_query($connect,$update);

    if($Uret)
    {
        echo "<script>window.alert(Successfully Updated)</script>";
        echo "<script>window.location = 'ProductEntry.php'</script>";
    }
    else
    {
        echo "<p>" .mysqli_error($connect). "</p>";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Product Update Form</title>
    </head>
    <body>
        <form method = "POST" enctype = "multipart/form-data">
            <fieldset>
                <legend>Product Info Details</legend>
                <table>
                <input type="hidden" name="UProductID" value="<?php echo $ProductID; ?>">
                    <tr>
                        <td>ProductName</td>
                        <td>
                            <input type="text" name="UProductName" value="<?php echo $ProductName; ?>" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Product Price</td>
                        <td>
                            <input type="text" name="UProductPrice" value="<?php echo $ProductPrice; ?>" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Product Quantity</td>
                        <td>
                            <input type="text" name="UProductQuantity" value="<?php echo $ProductQuantity; ?>" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Image1</td>
                        <td>
                            <input type="file" name="UProductImage1" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Image2</td>
                        <td>
                            <input type="file" name="UProductImage2" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Image3</td>
                        <td>
                            <input type="file" name="UProductImage3" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Description</td>
                        <td>
                            <textarea name="UtxtDes" id="" cols="20" rows="6"><?php echo $ProductDes; ?></textarea>
                        </td>
                    </tr>
                    <!-- <tr>
                        <td>Choose Type ID</td>
                        <td>
                            <select name="UcboType" id="">
                                <option value=""><?php echo $ProductTypeID; ?></option>
                                <?php
                                    $query = "SELECT * FROM ProductType";
                                    $ret = mysqli_query($connect,$query);
                                    $count = mysqli_num_rows($ret);

                                    for($i=0; $i < $count ; $i++){
                                        $row = mysqli_fetch_array($ret);
                                        $Type_ID = $row['ProductTypeID'];
                                        $Type_Name = $row['ProdductTypeName'];

                                        echo "<option value='$Type_ID'> $Type_ID - $Type_Name </option>";
                                    }
                                ?>
                            </select>
                        </td>
                    </tr> -->
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="btnupdate" value="Save">
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </body>
</html>
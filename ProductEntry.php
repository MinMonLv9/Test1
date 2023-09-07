<?php
    session_start();       
    include('connect.php');
    if(isset($_POST['btnsave']))
    {
        $productname=$_POST['txtproductname'];
        $productprice=$_POST['txtproductprice'];
        $equipmenttype=$_POST['txtequipmenttype'];
        $productquantity=$_POST['txtproductquantity'];
        $txtDes=$_POST['txtDes'];
        $cboType=$_POST['cboType'];

        $image1=$_FILES['productimage1']['name'];
        $folder="entriedproductimages/";
        $filename1=$folder.'_'.$image1;
        $image1=copy($_FILES['productimage1']['tmp_name'],$filename1);

        $image2=$_FILES['productimage2']['name'];
        $folder="entriedproductimages/";
        $filename2=$folder.'_'.$image2;
        $image2=copy($_FILES['productimage2']['tmp_name'],$filename2);

        $image3=$_FILES['productimage3']['name'];
        $folder="entriedproductimages/";
        $filename3=$folder.'_'.$image3;
        $image3=copy($_FILES['productimage3']['tmp_name'],$filename3);

        if(!$image1)
        {
        echo"<p> Cannot Upload Product Image 1</p> ";
        exit();
        }
        if(!$image2)
        {
        echo"<p> Cannot Upload Product Image 2</p> ";
        exit();
        }
        if(!$image3)
        {
        echo"<p> Cannot Upload Product Image 3</p> ";
        exit();
        }
    

    $select = "SELECT * FROM Product Where ProductName='$productname'";
    $ret = mysqli_query($connect, $select);
    $count = mysqli_num_rows($ret);

    if($count > 0){
        $row = mysqli_fetch_array($ret);
        echo "<script>window.alert('Product cannot Register');</script>";
        echo "<script>window.loaction='ProductEntry.php';</script>";
        exit();
    }
    else{
        $query = "INSERT INTO Product(ProductName,ProductPrice,EquipmentType,Quantity,ProductTypeID,Description,Image1,Image2,Image3)
        values('$productname','$productprice','$equipmenttype','$productquantity','$cboType','$txtDes','$filename1','$filename2','$filename3')";
        $result = mysqli_query($connect, $query);
    }
    if($result){
        echo "<script>window.alert('Product Register Complete')</script>";
        echo "<script>window.location='ProductEntry.php'</script>";
    }
    else{
        echo "<script>window.alert('Error in Product Key')</script>";
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Product Entry</title>
        <meta charset="utf-8">
        <script type="text/javascript" src="DatePicker/datepicker.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
<div class="page-wrapper">
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <form action="ProductEntry.php" method="POST" enctype="multipart/form-data">
                            <fieldset>
                                <legend>Product Information</legend>
                                <table>
                                    <tr>
                                        <td>ProductName</td>
                                        <td>
                                            <input type="text" name="txtproductname" placeholder="Enter Prdouct Name" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Product Price</td>
                                        <td>
                                            <input type="text" name="txtproductprice" placeholder="Enter Product Price" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Equipment Type</td>
                                        <td>
                                            <input type="text" name="txtequipmenttype" placeholder="Enter Equipment Type" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Product Quantity</td>
                                        <td>
                                            <input type="text" name="txtproductquantity" placeholder="Enter Product Quantity" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Image1</td>
                                        <td>
                                            <input type="file" name="productimage1" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Image2</td>
                                        <td>
                                            <input type="file" name="productimage2" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Image3</td>
                                        <td>
                                            <input type="file" name="productimage3" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Description</td>
                                        <td>
                                            <textarea name="txtDes" id="" cols="20" rows="6"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Choose Type ID</td>
                                        <td>
                                            <select name="cboType" id="">
                                                <option value="">Choose Type Name</option>
                                                <?php
                                                    $query = "SELECT * FROM ProductType";
                                                    $ret = mysqli_query($connect,$query);
                                                    $count = mysqli_num_rows($ret);

                                                    for($i=0; $i < $count ; $i++){
                                                        $row = mysqli_fetch_array($ret);
                                                        $Type_ID = $row['ProductTypeID'];
                                                        $Type_Name = $row['ProdductTypeName'];
                                                        echo "<option value='$Type_ID'> $Type_ID </option>";
                                                    }
                                                ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <input type="submit" name="btnsave" value="Save">
                                            <input type="reset" value="Clear">
                                        </td>
                                    </tr>
                                </table>
                                <legend>Products Listing</legend>
                                <?php
                                    $select = "SELECT * FROM Product";
                                    $ret = mysqli_query($connect,$select);
                                    $count = mysqli_num_rows($ret);
                                    if($count==0)
                                    {
                                        echo "<p>No record</p>";
                                        exit();
                                    }
                                ?>
                                <table style="width: 100%;" id="tabledesign" cellspacing=""15px border="1px solid">
                                    <tr>
                                        <th>ProductID</th>
                                        <th>ProductTypeID</th>
                                        <th>ProductName</th>
                                        <th>ProductPrice</th>
                                        <th>ProductQuantity</th>
                                        <th>ProductImage1</th>
                                        <th>ProductImage2</th>
                                        <th>ProductImage3</th>
                                        <th>Action</th>
                                    </tr>
                                    <?php
                                        for ($i=0 ; $i < $count ; $i++)
                                        {
                                            $row = mysqli_fetch_array($ret);
                                            $ProductID = $row ['ProductID'];
                                            $ProductTypeID = $row ['ProductTypeID'];
                                            $productname = $row ['ProductName'];
                                            $productprice = $row ['ProductPrice'];
                                            $productquantity = $row ['Quantity'];
                                            $image1 = $row ['Image1'];
                                            $image2 = $row ['Image2'];
                                            $image3 = $row ['Image3'];
                                            
                                            echo "<tr>";

                                            echo "<td>$ProductID</td>";
                                            echo "<td>$ProductTypeID</td>";
                                            echo "<td>$productname</td>";
                                            echo "<td>$productprice</td>";
                                            echo "<td>$productquantity</td>";
                                            echo "<td>$image1</td>";
                                            echo "<td>$image2</td>";
                                            echo "<td>$image3</td>";

                                            echo"<td>
                                                    <a href='ProductUpdate.php?ProductID=$ProductID'>Update</a>
                                                    <a href='ProductDelete.php?ProductID=$ProductID'>Delete</a>
                                                </td>";
                                        }
                                    ?>
                                </table>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
    </body>
</html>
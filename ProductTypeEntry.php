<?php
    session_start(); 
    include('connect.php');
    if(isset($_POST['btnsave'])){
        $txttype = $_POST['txttype'];
        $txttypedescription = $_POST['txttypedescription'];
        $query = "INSERT INTO ProductType(ProductType,Description) Values ('$txttype','$txttypedescription')";
        $result = mysqli_query($connect,$query);

        if($result){
            echo "<script>window.alert('Type Registeration Successful')</script>";
            echo "<script>window.location = 'ProductTypeEntry.php'</script>";
        }
        else{
            echo "<p>Error in Type Error : " . mysqli_error($connect) ."</p>";
        }
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Product Type Entry</title>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<body>
<div class="page-wrapper">
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    Search
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->
    </head>
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <form action="ProductTypeEntry.php" method="POST">
                    <fieldset>
                        <legend>Product Type</legend>
                        <table cellpadding="5px">
                            <tr>
                                <td>ProductTypeName</td>
                                <td>
                                    <input type="text" name="txttype" placeholder="Fill the name" required>
                                </td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td>
                                    <input type="text" name="txttypedescription" placeholder="Fill the description" required>
                                </td>
                            </tr>
                            <td></td>
                            <td>
                                <input type="submit" name="btnsave" value="Save">
                                <input type="reset" value="Clear">
                            </td>
                        </table>
                    </fieldset>
                </form>
            </div>
        </div>
    </body>
</html>
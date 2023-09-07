<?php 

    session_start();
    include('connect.php');
    $ProductID = $_REQUEST['ProductID'];
    $delete = "DELETE FROM Product WHERE ProductID = '$ProductID'";
    $ret = mysqli_query($connect,$delete);

    if($ret)
    {
        echo "<script>window.alert(Successfully Delete)</script>";
        echo "<script>window.location = 'ProductEntry.php'</script>";
    }
    else
    {
        echo "<p>" .mysqli_error($connect). "</p>";
    }
?>
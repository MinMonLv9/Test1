<?php
    include('connect.php');
    // $createordersdetail = "Create Table OrdersDetail
    // (
    //     OrderID varchar(30),
    //     ProductID int,
    //     ProductPrice int,
    //     BuyQuantity int,
    //     Primary Key (OrderID, ProductID),
    //     Foreign Key (OrderID) References Orders(OrderID),
    //     Foreign Key (ProductID) References Product(ProductID)
    // )";
    // $query = mysqli_query($connect,$createordersdetail);
    // if($query)
    // {
    //     echo "<p>Ordersdetail table created successfully.</p>";
    // }
    // else
    // {
    //     echo "<p>Something went wrong.</p>";
    // };
    // $createorders = "Create Table Orders
    // (
    //     OrderID varchar(30) NOT NULL primary key,
    //     OrderDate date,
    //     CustomerID int,
    //     OrderTotalAmount varchar(30),
    //     Tax varchar(30),
    //     AllTotal varchar(30),
    //     OrderQuantity int,
    //     Remark varchar(30),
    //     PaymentType varchar(30),
    //     OrderLocation varchar(30),
    //     OrderPhone varchar(30),
    //     OrderStatus varchar(30),
    //     Foreign Key (CustomerID) References Customer(CustomerID)
    // )";
    // $query = mysqli_query($connect,$createorders);
    // if($query)
    // {
    //     echo "<p>Orders table created successfully.</p>";
    // }
    // else
    // {
    //     echo "<p>Something went wrong.</p>";
    // };
    // $createbooking = "Create Table Booking
    // (
    //     BookingID int primary key NOT NULL Auto_Increment,
    //     BookingDate timestamp,
    //     CustomerUsername varchar(30),
    //     CustomerAddress varchar(30),
    //     Message varchar(30),
    //     Policy varchar(30)
    // )";
    // $query = mysqli_query($connect,$createbooking);
    // if($query)
    // {
    //     echo "<p>Booking table created successfully.</p>";
    // }
    // else
    // {
    //     echo "<p>Something went wrong.</p>";
    // };
    // $createcontactus = "Create Table ContactUs
    // (
    //     CustomerUsername varchar(30),
    //     CustomerEmail varchar(30),
    //     Subject varchar(30),
    //     Message varchar(30),
    //     Policy varchar(30)
    // )";
    // $query = mysqli_query($connect,$createcontactus);
    // if($query)
    // {
    //     echo "<p>Contact us table created successfully.</p>";
    // }
    // else
    // {
    //     echo "<p>Something went wrong.</p>";
    // };
    // $createproduct = "Create Table Product
    // (
    //     ProductID int NOT NULL primary key AUTO_INCREMENT,
    //     ProductName varchar(30),
    //     ProductPrice varchar(30),
    //     Quantity varchar(30),
    //     ProductTypeID int,
    //     Description varchar(30),
    //     Image1 text,
    //     Image2 text,
    //     Image3 text,
    //     Foreign Key (ProductTypeID) References ProductType(ProductTypeID)
    // )";
    // $query = mysqli_query($connect,$createproduct);
    // if($query)
    // {
    //     echo "<p>Product table created successfully.</p>";
    // }
    // else
    // {
    //     echo "<p>Something went wrong.</p>";
    // };
    // $createstaff = "Create Table Staff
    // (
    //     StaffID int NOT NULL primary key AUTO_INCREMENT,
    //     StaffName varchar(30),
    //     StaffJob varchar(30),
    //     StaffPhone varchar(30),
    //     StaffEmail varchar(30),
    //     StaffPassword varchar(30),
    //     StaffProfilePic text
    // )
    // ";
    // $query = mysqli_query($connect,$createstaff);
    // if($query)
    // {
    //     echo "<p>Staff table created successfully.</p>";
    // }
    // else
    // {
    //     echo "<p>Something went wrong.</p>";
    // };
    // $createcustomer = "Create Table Customer 
    // (
    //     CustomerID int NOT NULL primary key AUTO_INCREMENT,
    //     CustomerUsername varchar(30),
    //     CustomerEmail varchar(30),
    //     CustomerAddress varchar(50),
    //     CustomerPassword varchar(30),
    //     CustomerPhone varchar(30),
    //     ViewCount int
    // )";
    // $query = mysqli_query($connect,$createcustomer);
    // if($query)
    // {
    //     echo "<p>Customer table created successfully.</p>";
    // }
    // else
    // {
    //     echo "<p>Something went wrong.</p>";
    // };
    //  $createproducttype = "Create Table ProductType
    // (
    //     ProductTypeID int NOT NULL primary key AUTO_INCREMENT,
    //     ProductType varchar(30),
    //     Description text
    // )";
    // $query = mysqli_query($connect,$createproducttype);
    // if($query)
    // {
    //     echo "<p>Product Type table created successfully.</p>";
    // }
    // else
    // {
    //     echo "<p>Something went wrong.</p>";
    // };

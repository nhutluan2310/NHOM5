<?php 

    include('../Config/config.php'); 
    include('login-check.php');

?>


<html>
    <head>
        <title>Food Order Website - Home Page</title>

        <link rel="stylesheet" href="../css/admin.css">
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </head>
    
    <body>
        <!-- Menu Section Starts -->
        <div class="menu text-center">
            <div class="wrapper">
                <ul>
                    <li><a href="../admin/index.php">Home</a></li>
                    <li><a href="../admin/manage-admin.php">Admin</a></li>
                    <li><a href="../admin/manage-category.php">Category</a></li>
                    <li><a href="../admin/manage-food.php">Food</a></li>
                    <li><a href="../admin/manage-order.php">Order</a></li>
                    <li><a href="../admin/manage-user.php">User</a></li>
                    <li><a href="../admin/exercise.php">Exercise</a></li>
                    <li><a href="../admin/logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
        <!-- Menu Section Ends -->
    </body>
</html>
<?php session_start();
include '../Config/config.php';

$premium_id = $_GET['package_id'];

//2. Create SQL Query to Delete Admin
$sql = "DELETE FROM premiummembership WHERE premium_id=$premium_id";

//Execute the Query
$res = mysqli_query($conn, $sql);

// Check whether the query executed successfully or not
if($res==true)
{
    //Query Executed Successully and Admin Deleted
    //Create SEssion Variable to Display Message
    $_SESSION['response_admin'] = "<div class='success'>Package Deleted Successfully.</div>";
    $_SESSION['res_type'] = "success";
    //Redirect to Manage Admin Page
    header('location:'.SITEURL.'admin/manager-premium.php');
}
else
{
    //Failed to Delete Admin
    $_SESSION['response_admin'] = "<div class='error'>Failed to Delete Package. Try Again Later.</div>";
    $_SESSION['res_type'] = "danger";
    header('location:'.SITEURL.'admin/manager-premium.php');
}

//3. Redirect to Manage Admin page with message (success/error) ?>
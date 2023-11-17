<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>

        <br><br>

        <?php
        if (isset($_SESSION['add'])) //Checking whether the SEssion is Set of Not
        {
            echo $_SESSION['add']; //Display the SEssion Message if SEt
            unset($_SESSION['add']); //Remove Session Message
        }
        if(isset($_SESSION['rep_fullname']))
        {   echo $_SESSION['rep_fullname'];
            unset($_SESSION['rep_fullname']); //REmoving Session Message
        }

        if(isset($_SESSION['rep_username']))
        {
            echo $_SESSION['rep_username'];
            unset($_SESSION['rep_username']);
        }
        if(isset($_SESSION['rep_password'])){
            echo $_SESSION['rep_password']; 
            unset($_SESSION['rep_password']);
        }
        
        ?>

        <form action="" method="POST" autocomplete="off">

            <table class="tbl-30">
                <tr>
                    <td>Full Name: </td>
                    <td>
                        <input type="text" name="full_name" autocomplete="off" value="<?php if(isset($full_name))
            echo $full_name;  ?>" placeholder="Enter Your Name">
                      
                    </td>
                </tr>

                <tr>
                    <td>Username: </td>
                    <td>
                        <input type="text" name="username"  autocomplete="off" value="<?php if(isset($username))
            echo $username;  ?>" placeholder="Your Username">
                     
                    </td>
                </tr>

                <tr>
                    <td>Password: </td>
                    <td>
                        <input type="password" name="password" autocomplete="off" value="<?php if(isset($password))
            echo $password;  ?>"  placeholder="Your Password">
                    
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>


    </div>
</div>

<?php include('partials/footer.php'); ?>


<?php
//Process the Value from Form and Save it in Database

//Check whether the submit button is clicked or not

if (isset($_POST['submit'])) {
    // Button Clicked
    //echo "Button Clicked";

    //1. Get the Data from form
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $password = $_POST['password']; //Password Encryption with MD5

    if (empty($full_name)) {
        $_SESSION['rep_fullname'] = "Fullname is required!";
    } else if (!preg_match("/^[a-zA-Z-' ]*$/", $full_name)) {
        // check if name only contains letters and whitespace
        $_SESSION['rep_fullname'] = "Fullname: Only letters and white space allowed!";
    } else if (empty($username)) {
        $_SESSION['rep_username'] = "Username is required!";
    } else if (empty($password)) {
        $_SESSION['rep_password'] = "Password is required!";
    }else if(isset($username)){
        echo $username;
        // Check if the generated admin_id already exists in the database
        $sql_check_admin_username = "SELECT * FROM admin WHERE username='$username'";
        $res_check_admin_username = mysqli_query($conn, $sql_check_admin_username);
        $row_username = mysqli_num_rows($res_check_admin_username);
        if($row_username <> 0){
            //
        }else{
            $_SESSION['add'] = "<div class='error'>Username: Admin already exist! Please try new one.</div>";
        }
        // header("location:" . SITEURL . 'admin/add-admin.php');
    } else {
        $admin_id = rand(10000000, 99999999);

        // Check if the generated admin_id already exists in the database
        $sql_check_admin_id = "SELECT * FROM admin WHERE admin_id='$admin_id'";
        $res_check_admin_id = mysqli_query($conn, $sql_check_admin_id);

        // If the generated admin_id already exists, generate a new one
        while (mysqli_num_rows($res_check_admin_id) > 0) {
            $admin_id = rand(10000000, 99999999);
            $sql_check_admin_id = "SELECT * FROM admin WHERE admin_id='$admin_id'";
            $res_check_admin_id = mysqli_query($conn, $sql_check_admin_id);
        }

        //2. SQL Query to Save the data into database
        $sql = "INSERT INTO admin SET 
            admin_id='$admin_id',
            full_name='$full_name',
            username='$username',
            password='$password'
        ";

        //3. Executing Query and Saving Data into Datbase
        $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));

        //4. Check whether the (Query is Executed) data is inserted or not and display appropriate message
        if ($res == TRUE) {
            //Data Inserted
            //echo "Data Inserted";
            //Create a Session Variable to Display Message
            $_SESSION['add'] = "<div class='success'>Admin Added Successfully.</div>";
        
            //Redirect Page to Manage Admin
            header("location:" . SITEURL . 'admin/manage-admin.php');
        } else {
            //FAiled to Insert DAta
            //echo "Faile to Insert Data";
            //Create a Session Variable to Display Message
            $_SESSION['add'] = "<div class='error'>Failed to Add Admin.</div>";
            //Redirect Page to Add Admin
            header("location:" . SITEURL . 'admin/add-admin.php');
        }
    }
}

?>
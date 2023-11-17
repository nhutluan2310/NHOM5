<?php include('partials/menu.php'); ?>
        <!-- Main Content Section Starts -->
        <div class="main-content">
            <div class="wrapper">
                <h1>Manage User</h1>

                <br />

                <?php 
                    if(isset($_SESSION['add']))
                    {
                        echo $_SESSION['add']; //Displaying Session Message
                        unset($_SESSION['add']); //REmoving Session Message
                    }

                    if(isset($_SESSION['delete']))
                    {
                        echo $_SESSION['delete'];
                        unset($_SESSION['delete']);
                    }
                    
                    if(isset($_SESSION['update']))
                    {
                        echo $_SESSION['update'];
                        unset($_SESSION['update']);
                    }

                    if(isset($_SESSION['user-not-found']))
                    {
                        echo $_SESSION['user-not-found'];
                        unset($_SESSION['user-not-found']);
                    }

                    if(isset($_SESSION['pwd-not-match']))
                    {
                        echo $_SESSION['pwd-not-match'];
                        unset($_SESSION['pwd-not-match']);
                    }

                    if(isset($_SESSION['change-pwd']))
                    {
                        echo $_SESSION['change-pwd'];
                        unset($_SESSION['change-pwd']);
                    }

                ?>
                <br><br><br>

                <!-- Button to Add User -->
                <a href="../admin/add-user.php" class="btn-primary">Add User</a>
                <br /><br /><br />
                    
                <?php
                    if (!isset($_GET['page']))
                    { 
                        $_GET['page'] = 1;
                    }
                    $page = isset($_GET['page']) ? $_GET['page'] : 1;
                    $limit = 10; // Số lượng đơn hàng hiển thị trên mỗi trang
                    $offset = ($page - 1) * $limit;

                    //Query to Get all User
                    $sql = "SELECT * FROM users
                            join user_info on user.user_info_id = user_info.user_info_id
                            order by user_info.user_id desc
                            limit $limit offset $offset";
                    //Execute the Query
                    $res = mysqli_query($conn, $sql);
                    // Count Rows to CHeck whether we have data in database or not
                    $count = mysqli_num_rows($res); // Function to get all the rows in database

                    //CHeck the num of rows
                    if($count>0)
                    {
                ?>
                <table class="tbl-full">
                    <tr>
                        <th>STT</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Actions</th>
                    </tr>

                    
                    <?php 
                    
                            $sn = ($page - 1) * $limit + 1;
                            //WE HAve data in database
                            while($rows=mysqli_fetch_assoc($res))
                            {
                                //Using While loop to get all the data from database.
                                //And while loop will run as long as we have data in database

                                //Get individual DAta
                                $id=$rows['user_id'];
                                $name=$rows['fullname'];
                                $address=$rows['address'];
                                $age=$rows['age'];
                                $email=$rows['email'];
                                $username=$rows['username'];
                                

                                //Display the Values in our Table
                                ?>
                                
                                <tr>
                                    <td><?php echo $sn++; ?>. </td>
                                    <td><?php echo $name; ?></td>
                                    <td><?php echo $address; ?></td>
                                    <td><?php echo $age; ?></td>
                                    <td><?php echo $email; ?></td>
                                    <td><?php echo $username; ?></td>
                                    <td>
                                        <a href="<?php echo SITEURL; ?>admin/update-password-user.php?id=<?php echo $id; ?>" class="btn-primary">Change Password</a>
                                        <a href="<?php echo SITEURL; ?>admin/update-user.php?id=<?php echo $id; ?>" class="btn-secondary">Update</a>
                                        <a href="<?php echo SITEURL; ?>admin/delete-user.php?id=<?php echo $id; ?>" class="btn-danger">Delete</a>
                                    </td>
                                </tr>

                                <?php

                            }
                        }
                        else
                        {
                            //We Do not Have Data in Database
                        }

                    ?>
                </table>

                <?php
                    // Hiển thị liên kết phân trang
                    $total_pages_sql = "SELECT COUNT(*) FROM users";
                    $result = mysqli_query($conn, $total_pages_sql);
                    $total_rows = mysqli_fetch_array($result)[0];
                    $total_pages = ceil($total_rows / $limit);

                    echo "<div align = 'center'>";

                    if ($_GET['page'] > 1)
                    { echo "<a href=" .$_SERVER['PHP_SELF']."?page=".(1).">
                    <<
                    </a> ";
                    }
                    //Điều kiện để hiển thị nút Back là trang hiện tại > 1
                    if ($_GET['page'] > 1)
                    { echo "<a href=" .$_SERVER['PHP_SELF']."?page=".($_GET['page']-1).">
                    <
                    </a> ";
                    }

                    for ($i=1 ; $i<=$total_pages ; $i++) //tạo link tương ứng tới các trang
                    { if ($i == $_GET['page'])
                    echo '<b>Trang '. $i. '</b> '; //trang hiện tại sẽ được bôi đậm
                    else
                    echo "<a href="
                    .$_SERVER['PHP_SELF']."?page=".$i.">Trang".$i."</a> ";
                    }

                    //Điều kiện để hiển thị nút next là trang hiện tại < tổng số trang
                    if ($_GET['page'] < $total_pages)
                    { echo "<a href = ". $_SERVER['PHP_SELF']."?page=".($_GET['page']+1).">
                    >
                    </a>";
                    }
                    if ($_GET['page'] < $total_pages)
                    { echo "<a href=" .$_SERVER['PHP_SELF']."?page=".($total_pages).">
                    >>
                    </a> ";
                    }

                    echo "</div>"
                ?>
            </div>
        </div>
        <!-- Main Content Setion Ends -->

<?php include('partials/footer.php'); ?>
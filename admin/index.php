<?php include'./partials/menu.php'; ?>

<!-- Main Content Section Starts -->
<div class="main-content">
    <div class="wrapper">
        <h1>Dashboard</h1>
        <br><br>
        <?php
        if (isset($_SESSION['login'])) {
            echo $_SESSION['login'];
            unset($_SESSION['login']);
        }
        ?>
        <br><br>


        <div class="col-4 text-center">

            <?php
            //Sql Query 
            $sql2 = "SELECT * FROM users where status='Active now'";
            //Execute Query
            $res2 = mysqli_query($conn, $sql2);
            //Count Rows
            $count2 = mysqli_num_rows($res2);
            ?>

            <h1><?php echo $count2; ?></h1>
            <br />
            Online
        </div>

        <div class="col-4 text-center">

            <?php
            //Sql Query 
            $sql3 = "SELECT * FROM premiummembership";
            //Execute Query
            $res3 = mysqli_query($conn, $sql3);
            //Count Rows
            $count3 = mysqli_num_rows($res3);
            ?>

            <h1><?php echo $count3; ?></h1>
            <br />
            Total Package
        </div>

        <div class="col-4 text-center">

            <?php
            //Sql Query 
            $sql4 = "SELECT * FROM users";
            //Execute Query
            $res4 = mysqli_query($conn, $sql4);
            //Count Rows
            $count4 = mysqli_num_rows($res4);
            ?>

            <h1><?php echo $count4; ?></h1>
            <br />
            Users
        </div>

        <div class="col-12 text-center">

            <?php
            //Sql Query 
            $sql = "SELECT SUM(totalprice) AS TotalRevenue FROM orders where orderstatus = 'Delivered'";
            //Execute Query
            $res = mysqli_query($conn, $sql);
            //Fetch the value
            $row = mysqli_fetch_assoc($res);
            $total_revenue = $row['TotalRevenue'];
            ?>

            <h1><?php echo number_format($total_revenue, 0, ',', '.') . " VNĐ" ?></h1>

            <br />
            Total Revenue
        </div>

        <div class="col-12 text-center">
            <canvas id="revenueChart"></canvas>
            <script>
                var ctx = document.getElementById('revenueChart').getContext('2d');
                var chart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: [<?php
                                    $sql = "SELECT DATE(order_date) as OrderDate, SUM(totalprice) as DailyRevenue FROM orders  where orderstatus = 'Delivered' GROUP BY DATE(order_date) ";
                                    $res = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_assoc($res)) {
                                        echo '"' . $row['OrderDate'] . '",';
                                    }
                                    ?>],
                        datasets: [{
                            label: 'Doanh thu',
                            data: [<?php
                                    $res = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_assoc($res)) {
                                        echo $row['DailyRevenue'] . ',';
                                    }
                                    ?>],
                            backgroundColor: 'rgba(0, 123, 255, 0.1)',
                            borderColor: 'rgba(0, 123, 255, 1)',
                            borderWidth: 2
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            </script>
        </div>


        <div class="clearfix"></div>

    </div>
</div>
<!-- Main Content Setion Ends -->
<?php include('partials/footer.php'); ?>
<?php
            if(isset($_POST['submit'])){
                $con = new mysqli("localhost", "root", "", "horizon_gym");
                if (mysqli_connect_error()) {
                    die("Connection failed: " . mysqli_connect_error());
                } 
                $packageName=$_POST['packageName'];
                $packagePrice=$_POST['packagePrice'];
                $packageDuration=$_POST['packageDuration'];
                $query="UPDATE `package_details` SET `package_name`='$packageName',`package_price`='$packagePrice',`package_duration`='$packageDuration' WHERE package_name='$packageName'";
                $result=mysqli_query($con,$query);
                if(!$result)
                    die("query failed".mysqli_error());
                else{
                    header("location:../components/dashboard.php");
                    exit; 
                }
                mysqli_close($con);
            }


?>  
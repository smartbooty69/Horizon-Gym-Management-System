       <?php
       $servername="localhost";
        $username="root";
        $password="";
        $dbname="gymdb";

        $conn=mysqli_connect($servername,$username,$password,$dbname);
        if(mysqli_connect_errno()){
            die("connection failed:");
        }
        ?>
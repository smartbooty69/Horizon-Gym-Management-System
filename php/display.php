
    <?php
            require_once('dbconnection.php');
            $query="SELECT * FROM `membertb`";
            $result=mysqli_query($conn,$query);
            if(!$result)
            {
                echo "error".mysqli_query_error($result);
            }
            else{
    ?>
    <html>
        <body>
                <table border=1>
                    <tr>
                        <td>Id</td>
                        <td height=10px width=10px>Image:</td>
                        <td>Name</td>
                        <td>Package</td>
                        <td>phone</td>
                        <td>Email</td>
                        <td>Address</td>
                        <td>Gender</td>
                        <td>joindate</td>
                        <td>Age</td>
                    </tr>

    <?php
                while($row = mysqli_fetch_assoc($result))
                {
                    echo "
                    <tr>
                        <td>".$row['mem_id']."</td>
                        <td><img src='".$row['mem_img']."' alt='your image' height='100' width='100'></td>
                        <td>".$row['mem_name']." </td>
                        <td>".$row['package_name']." </td>
                        <td>".$row['mem_phone'] ."</td>
                        <td>".$row['mem_email'] ."</td>
                        <td>".$row['mem_address'] ."</td>
                        <td>".$row['mem_gender']." </td>
                        <td>".$row['mem_joindate']." </td>
                        <td>".$row['mem_age']."</td>
                    </tr>
                    "
                    ?>
    <?php
            }
        }
        
    ?>
            </table>

</body
</html>
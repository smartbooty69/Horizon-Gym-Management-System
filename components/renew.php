<html>
    <body>
<?php
    $con = new mysqli("localhost", "root", "", "horizon_gym");
    if (mysqli_connect_error()) {
        die("Connection failed: " . mysqli_connect_error());
    } 
    if(isset($_GET['id'])){
        $id=$_GET['id'];
 
        $query="SELECT `memberId`, `memberName` FROM `member_details` WHERE memberId='$id'";
        $result=mysqli_query($con,$query);
        if(!$result){
            die("query failed".mysqli_error());
        }
        else{
            $row=mysqli_fetch_assoc($result);
        }
    }
    ?>
        <form action="renew.php?id_new=<?php echo $id; ?>" method="post">
        <table>
        <th colspan=2><h3>UPDATE MEMBERSHIP</h3></th>
                    <tr>
                        <td>MEMBER NAME:</td>
                        <td><input type="text" name="memberName" value="<?php echo $row['memberName'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Membership Package</td>
                        <td>
                            <select id="membershipPackage" name="membershipPackage">
                                <option>demo</option>
                                <option>demo1</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                           <input type="submit" name="update" value="update">
                        </td>
                    </tr>
           
        </table>
        </form>
       
    <?php

        if(isset($_GET['update'])){
            if(isset($_GET['id_new'])){
            $id_new=$POST['id_new'];
            $package=$_POST['membershipPackage'];
            $query="UPDATE 'member_details' SET 'membershipPackage'='[$package]'  WHERE memberId='$id_new'";
            $result=mysqli_query($con,$query);
            if(!$result){
                die("query failed".mysqli_error());
            }
            else{
            echo "updated";
        }
        mysqli_close($con);
        }
    }
?>

</body>
</html>
    

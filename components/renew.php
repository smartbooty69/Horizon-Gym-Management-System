
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
            $query1="SELECT `package_name` FROM `package_details`";
            $result1=mysqli_query($con,$query1);
            if(!$result1)
                die("query failed".mysqli_error());
    ?>
<body>
        <form  method="POST" action="renew.php?id_new=<?php echo $row['memberId']; ?>">
        <table>
        <th colspan=2><h3>UPDATE MEMBERSHIP</h3></th>
                    <tr>
                        <td>MEMBER ID:</td>
                        <td><input type="text" name="memberId" value="<?php echo $row['memberId']; ?>"></td>
                    </tr>
                    <tr>
                        <td>MEMBER NAME:</td>
                        <td><input type="text" name="memberName" value="<?php echo $row['memberName']; ?>"></td>
                    </tr>
                    <tr>
                        <td>MEMBERSHIP PACKAGE:</td>
                        <td>
                            <select id="membershipPackage" name="membershipPackage">
                            <?php
                                while($row1=mysqli_fetch_assoc($result1))
                                {
                            ?>
                                <option><?php echo $row1['package_name']; ?></option>
                            <?php
                                }
                                mysqli_close($con);
                            ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                           <input type="submit" name="update" value="update">
                        </td>
                    </tr>
        </body>

<?php
}
}   

 ?>
    <?php
            if(isset($_POST['update'])){
                echo "hello";
                if(isset($_POST['memberId'])){
                        echo $id_new=$_POST['memberId'];
                        echo $memberName=$_POST['memberName'];
                        echo $package=$_POST['membershipPackage'];
                        $query="UPDATE `member_details` SET `memberId`='$id_new',`memberName`='$memberName',`membershipPackage`='$package' WHERE memberId='$id_new'";
                        $result=mysqli_query($con,$query);
                        if(!$result){
                            die("query failed".mysqli_error());
                        }
                        else{
                            header("location:../components/dashboard.php");
                            exit;
                    }
                    mysqli_close($con);
                }
            }
?> 


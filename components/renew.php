
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
                        echo "updated";
                    }
                    mysqli_close($con);
                }
            }
?> 


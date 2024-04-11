       <!-- The Modal DISPAY -->
       <html>
        <body>
            <?php
            if(isset($_GET['id'])){
                $con = new mysqli("localhost", "root", "", "horizon_gym");
                if (mysqli_connect_error()) {
                    die("Connection failed: " . mysqli_connect_error());
                } 
                $id=$_GET['id'];
                $query="SELECT * FROM `member_details` where memberId='$id'";
                $result=mysqli_query($con,$query);
                if(!$result)
                    die("query failed".mysqli_error());
                else{
                    while($row=mysqli_fetch_assoc($result))
                    {

            ?>  
                    <div id="full-member-detail" class="modal">
                                <!-- Modal content -->
                                <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <div class="modal-form">
                                        <form id="displayMemberForm" enctype="multipart/form-data">
                                            <table>
                                            <tr>
                                                    <td>
                                                        Member ID
                                                    </td>
                                                    <td><span id="displayMemberImage"><?php echo $row['memberId']; ?></span></td>
                                                </tr> 
                                                <tr>
                                                    <td>
                                                        Image
                                                    </td>
                                                    <td><img src="<?php echo $row['memberImage']; ?>" id="displayMemberImage" alt="Member Image"></td>
                                                </tr> 
                                                <tr>
                                                    <td>
                                                        Member Name
                                                    </td>
                                                    <td><span id="displayMemberName"><?php echo $row['memberName']; ?></span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Join Date
                                                    </td>
                                                    <td><span id="displayJoinDate"><?php echo $row['joinDate']; ?></span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Membership Package
                                                    </td>
                                                    <td><span id="displayMembershipPackage"><?php echo $row['membershipPackage']; ?></span></td>
                                                </tr>  
                                                <tr>
                                                    <td>
                                                        Phone Number
                                                    </td>
                                                    <td><span id="displayMemberPhone"><?php echo $row['memberPhone']; ?></span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Email
                                                    </td>
                                                    <td><span id="displayMemberEmail"><?php echo $row['memberEmail']; ?></span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Date of Birth
                                                    </td>
                                                    <td><span id="displayMemberAge"><?php echo $row['memberAge']; ?></span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Address
                                                    </td>
                                                    <td><span id="displayMemberAddress"><?php echo $row['memberAddress']; ?></span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Gender
                                                    </td>
                                                    <td><span id="displayMemberGender"><?php echo $row['memberGender']; ?></span></td>
                                                </tr> 
                                                <tr>
                                                <td><button class="blue-button btn btn-outline" id="show-data-button"><a href="dashboard.php">GO BACK</a></button></td> <!-- Added a class for easier selection -->
                                                </tr> 
                                            </table>
                                        </form>
                                    </div>
                                </div>
                            </div>   
                            <?php
                                            }
                                        }
                                    }
                            ?>
    </body>
    </html>
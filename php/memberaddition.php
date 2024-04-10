<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
            require_once('dbconnection.php');
            echo "connection sucess"; 
            $mem_img=$_FILES["img"]["name"];
            $tempname=$_FILES["img"]["tmp_name"];
            $folder="images/".$mem_img;
            move_uploaded_file($tempname,$folder);
            $mem_name=$_POST['memberName'];
            $mem_joindate=$_POST['joinDate'];
            $mem_package=$_POST['membershipPackage'];
            $mem_phone=$_POST['memberPhone'];
            $mem_email=$_POST['memberEmail'];
            $mem_age=$_POST['memberAge'];
            $mem_address=$_POST['memberAddress'];
            $mem_gender=$_POST['memberGender'];
            $sql="INSERT INTO `membertb`(`mem_img`, `mem_name`, `package_name`, `mem_phone`, `mem_email`, `mem_age`, `mem_address`, `mem_gender`, `mem_joindate`) VALUES ('[$folder]','[$mem_name]','[$mem_package]','[$mem_phone]','[$mem_email]','[$mem_age]','[$mem_address]','[$mem_gender]','[$mem_joindate]')";
            $result=mysqli_query($conn,$sql);
            if($result){
               echo "inserted";
            }else{
                echo "error:".$sql."<br>".mysqli_error($conn);
            }
            mysqli_close($conn);
            header("Location:../components/dashboard.html");
            exit; 
}
?>

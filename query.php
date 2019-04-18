<?php
        if(isset($_POST['submit']))
        {
            $name1=mysqli_real_escape_string($conn,$_POST['name']);
            $mobile1=mysqli_real_escape_string($conn,$_POST['mobile']);
            $course1=mysqli_real_escape_string($conn,$_POST['course']);
            $quali=mysqli_real_escape_string($conn,$_POST['qualification']);
            
            $sql="INSERT INTO register(name,mobile,course,qualification) VALUES('$name1','$mobile1','$course1','$quali')";
            if(mysqli_query($conn,$sql)){
                echo "new record inserted successfully";
            }
            else{
                echo "error occurred while inserting";
            }
        }
 
?>
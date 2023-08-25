<?php
include("config.php");
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
       $query="SELECT * FROM users  where username='johndoe123'";//update with session;***************************************************
       $run=mysqli_query($db,$query);
       $result=mysqli_fetch_assoc($run);
       $updaterow=[];//this thing is store the values which gets altered and not get altered(simply creating the new array)
       if(isset($_POST['name']))
       {
        $updaterow['name']=$_POST['name'];
       }
       else{
        $updaterow['name']=$result['name'];
       }
       if(isset($_POST['dob']))
       {
        $updaterow['dob']=$_POST['dob'];
       }
       else{
        $updaterow['dob']=$result['dob'];
       }
       if(isset($_POST['email']))
       {
        $updaterow['email']=$_POST['email'];
       }
       else{
        $updaterow['email']=$result['email'];
       }
       if(isset($_POST['upwd']))
       {
        $updaterow['upwd']=$_POST['upwd'];
       }
       else{
        $updaterow['upwd']=$result['upwd'];
       }
       if(isset($_POST['gender']))
       {
        $updaterow['gender']=$_POST['gender'];
       }
       else{
        $updaterow['gender']=$result['gender'];
       }
       if(isset($_POST['bio']))
       {
        $updaterow['bio']=$_POST['bio'];
       }
       else{
        $updaterow['bio']=$result['bio'];
       }
       if(isset($_POST['sec_question']))
       {
        $updaterow['sec_question']=$_POST['sec_question'];
       }
       else{
        $updaterow['sec_question']=$result['sec_question'];
       }
       if(isset($_POST['profilepic']))
       {
        $updaterow['profilepic']=$_POST['profilepic'];
       }
       else{
        $updaterow['profilepic']=$result['profilepic'];
       }

       $updatequery = "UPDATE users SET 
       name='{$updaterow['name']}', dob='{$updaterow['dob']}', email='{$updaterow['email']}',
       upwd='{$updaterow['upwd']}', gender='{$updaterow['gender']}', bio='{$updaterow['bio']}',
       sec_question='{$updaterow['sec_question']}', profilepic='{$updaterow['profilepic']}'
       WHERE username='johndoe123'";//update with the session part;
        $stmt=mysqli_query($db,$updatequery);
        if($stmt)
        {
            echo"<script>alert('updated seccesfully')</script>";
        }
        else{
            echo"<script>alert('not updated successfully')</script>";
        }


}
?>

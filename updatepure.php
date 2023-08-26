
<?php
include("config.php");
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $updateFields = array();

    if (!empty($_POST['name'])) {
        $updateFields[] = "name='" . $_POST['name'] . "'";
    }
    if (!empty($_POST['dob'])) {
        $updateFields[] = "dob='" . $_POST['dob'] . "'";
    }
    if (!empty($_POST['email'])) {
        $updateFields[] = "email='" . $_POST['email'] . "'";
    }
    if (!empty($_POST['upwd'])) {
        $updateFields[] = "upwd='" . $_POST['upwd'] . "'";
    }
    if (!empty($_POST['gender'])) {
        $updateFields[] = "gender='" . $_POST['gender'] . "'";
    }
    if (!empty($_POST['bio'])) {
        $updateFields[] = "bio='" . $_POST['bio'] . "'";
    }
    if (!empty($_POST['sec_question'])) {
        $updateFields[] = "sec_question='" . $_POST['sec_question'] . "'";
    }   
    if (!empty($_POST['profilepic'])) {
        $updateFields[] = "profilepic='" . $_POST['profilepic'] . "'";
    }

  /*  if ($_SESSION['username'] && !empty($updateFields)) {/////////////-----------sessionpart
        $usercnfrm = $_SESSION['username'];*/

        $updateFieldsStr = implode(', ', $updateFields);
        $query = "UPDATE users SET $updateFieldsStr WHERE username='johndoe1234'";
        
        $result = mysqli_query($db, $query);

        if ($result) {
            if (mysqli_affected_rows($db) > 0) {
                echo "<script>alert('Changes made successfully'); window.location.href='#';</script>";
            } else {
                echo "<script>alert('No changes made');</script>";
            }
        } else {
            echo "<script>alert('Failed to make changes');</script>";
        }
    }


?>

<?php
session_start();
 include '../conn.php';
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    $_SESSION["status"]="Please login your account here";
    $_SESSION["code"]="warning";
    header("location: ../index.php");
    exit;
}
$sqli = "DELETE FROM  emp_details WHERE id = '" . $_GET['id']. " ' ";
if(mysqli_query($con,$sqli))
{
	$_SESSION["title"]="Done";
    $_SESSION["status"]="Account deleted successfully";
    $_SESSION["code"]="success";
    header("location: emp_list.php");
    exit;
}
else
{
	$_SESSION["title"]="Done";
    $_SESSION["status"]="Account not deleted";
    $_SESSION["code"]="error";
    header("location: emp_list.php");
    exit;
}

?>
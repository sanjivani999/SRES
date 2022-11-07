<?php
$sname="localhost";
$uname="root";
$pass="";
$dbname="college";

$conn=mysqli_connect($sname,$uname,$pass,$dbname);
if(isset($_POST['submit'])){
    if(!empty($_POST['user']) && !empty($_POST['email']) && !empty($_POST['mobile']) && !empty($_POST['comment'])){
        $user=$_POST['user'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $comment=$_POST['comment'];

        $query="insert into student(user,email,mobile,comment)values('$user','$email','$mobile','$comment')";
        $run=mysqli_query($conn,$query) or die(mysqli_error());
   
 }
   
 if($run){
    echo  "<h1><center>Submitted</center></h1>";


 }
 else{
        echo "All feilds required";
    }

}


?>


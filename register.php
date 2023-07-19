<?php
$con = mysqli_connect("localhost","root", "", "ulk");

if(!$con){
  die("connection failed: " .mysqli_connect_error());
 }

echo"connected succ";

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $te = $_POST['te'];
   

    if(empty($name)){
        echo'<br>';
        echo'required name';
    }

if(empty($email)){
        echo'<br>';
        echo 'required email';
    }

if(empty($te)){
        echo'<br>';
        echo'required comment';
    }

$sql = "INSERT INTO messages VAlUES ('','$name','$email','$te')";

    if ($con->query($sql)===TRUE){
        echo "new record";
    }
    else {
        echo "Error :" .$sql . "<br>" .mysqli_error($con);
    }

     

}

else {
   header("location:index4.php");
}


?>
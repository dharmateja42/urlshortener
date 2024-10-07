<?php
$con=mysqli_connect("localhost","root","","urldb");
if($con ==false)
{
    die("Connection failed ".$con_connect_error());
}
else{
    echo"connected to data base";
}
?>
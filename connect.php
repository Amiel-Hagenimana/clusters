<?php
$localhost="";
$con=mysqli_connect('localhost','root',"",'db_data');
if($con){
    echo"DB Connected";
}else{
    echo"DB not connected";
}
?>
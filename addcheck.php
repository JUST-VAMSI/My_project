<?php
session_start();
// $conn=mysqli_connect("localhost","id20241156_root","Furniture@2662","id20241156_allinone");
include("db_conf.php");
if(isset($_POST['add_address']) && isset($_SESSION['uname']))
{
    $in=$_SESSION['uname'];
    $fname=$_POST['fname'];
    $mnumber=$_POST['mobile'];
    $gender=$_POST['r1'];
    $pin=$_POST['pin'];
    $state=$_POST['state'];
    $house=$_POST['house'];
    $road=$_POST['road'];

    $fname=mysqli_real_escape_string($fname);
    $mnumber=mysqli_real_escape_string($mnumber);
    $gender=mysqli_real_escape_string($gender);
    $pin=mysqli_real_escape_string($pin);
    $state=mysqli_real_escape_string($state);
    $house=mysqli_real_escape_string($house);
    $road=mysqli_real_escape_string($road);
    
    $chk=0;
    $edt="SELECT * FROM add_address";
    $edres=mysqli_query($conn,$edt);
    while($row=mysqli_fetch_assoc($edres))
    {
        if($row['email'] == isset($_SESSION['uname']))
        {
            $chk=1;
            $c=$row['email'];
            $sql="UPDATE add_address SET email='$c',fullname='$fname',mobile='$mnumber',gender='$gender',pincode='$pin',states='$state',house='$house',roadname='$road' WHERE email='$c'";
        }
    }
    if($chk==0)
    {
         $sql="INSERT INTO `add_address` VALUES('$in','$fname','$mnumber','$gender','$pin','$state','$house','$road')";

    }

    if(mysqli_query($conn,$sql))
    {
        if(isset($_GET['cart']))
        {
            $ca=$_GET['cart'];
            header("Location: cart.php?car='$ca'");
        }
        elseif(isset($_GET['buy']))
        {
            $se=$_GET['buy'];
            header("Location: beforesell.php?sell='$se'");
        }
        elseif(isset($_GET['edyes']))
        {
            $edchg=$_GET['edyes'];
            header("Location: atoc.php?edchange='$edchg'");
        }
    }
}
?>
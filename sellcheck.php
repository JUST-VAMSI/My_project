<?php
session_start();
// $con=mysqli_connect("localhost","id20241156_root","Furniture@2662","id20241156_allinone");
include("db_conf.php");
if(isset($_POST['sub']) && isset($_SESSION['uname']))
{
        if(isset($_GET['pp']))
        {
            if($_POST['payment'] == 'Online payment')
            {
                // echo $_POST['payment'];
                // exit(0);
                header("Location: https://www.youtube.com");
            }
            else{
                $p=$_GET['pp'];
                $query="SELECT * FROM products";
                $res=mysqli_query($conn,$query);
                $qust="SELECT * FROM add_address";
                $rrs=mysqli_query($conn,$qust);
                while($row=mysqli_fetch_assoc($rrs))
                {
                    if($_SESSION['uname'] == $row['email'])
                    {
                        $em=$row['email'];
                        while($yes=mysqli_fetch_assoc($res))
                        {
                            if($yes['proname']==$p)
                            {
                                $oname=$yes['proname'];
                                $oimg=$yes['proimg'];
                                $q="INSERT INTO orderpage(`email`,`oname`,`oimg`) VALUES('$em','$oname','$oimg')";
                                mysqli_query($conn,$q);
                                header("Location: conformorder.php?orderconfirm='yes'");
                            }
                        }

                    }

                }
            }
   
        }
        elseif(isset($_GET['addtoc']))
        {
            $u=$_SESSION['uname'];
            $detq="SELECT * FROM add_address";
            $rest=mysqli_query($conn,$detq);
            while($row=mysqli_fetch_assoc($rest))
            {
                if($u == $row['email'])
                {
                    $qu="SELECT * FROM cart";
                    $res1=mysqli_query($conn,$qu);
                    while($rem=mysqli_fetch_assoc($res1))
                    {
                        if($row['email'] == $rem['email'])
                        {
                            $ema=$row['email'];
                            $oname=$rem['proname'];
                            $oimg=$rem['proimg'];
                            $q="INSERT INTO orderpage(`email`,`oname`,`oimg`) VALUES('$ema','$oname','$oimg')";
                            mysqli_query($conn,$q);
                        }
                            
                    }
                    header("Location: conformorder.php?orderconfirm='yes'");

                }
            }


        }
        
 }
?>
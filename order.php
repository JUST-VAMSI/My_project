<?php
session_start();
// $conn=mysqli_connect("localhost","id20241156_root","Furniture@2662","id20241156_allinone");
include("db_conf.php");
if(isset($_SESSION['uname']) && isset($_GET['main']))
{
     $q="SELECT * FROM `orderpage`";
    $result=mysqli_query($conn,$q);
    if($result)
    {
      
      ?>
       <html>
                <head>
                <meta charset="UTF-8">
                <meta name="description" content="It is the website for booking home necessaries like cots, doors, dining tables, sofa's,etc.Our website is for you to get a good wood products.">
                <meta name="keywords" content="furnitureallinone1439,furnitureallinone,FURNITUREALLINONE1439,furniture,wood products,furnitureall">
                <meta name="author" content="vamsi veeramalla">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
                <style>
                *{
                    font-family:italic;
                }
                  body{
                    background-color:#f0f0f0;
                  }
                  .bi-list{
                    display:none;
                  }
                  .home{
                    margin:0% 5%;
                  }
                  .container-fluid h2{
                    margin-top:20%;
                  }
                  .container-fluid .buttonshop{
                    color:white;
                    background-color: #0d6efd!important;
                    border:none;
                    border-radius:5px;
                    width:15%;
                    height:8%;
                    font-size:20px;
                  }
                  .rowone{
                    width:100%;
                    margin:2% 0%;
                    background-color:white;
                    padding:2% 0%;
                    font-size:20px;
                  }
                  .row .col-lg-6 img{
                    margin:2% 0%;
                    box-shadow:2px 2px 4px 4px rgba(0,0,0,0.1);
                    border-radius:5px;
                    
                  }
                  .row .col-lg-6 img:hover{
                    transform:scale(1.06);
                    transition-duration:.2s;
                  }
                  .buttonview{
                    border-radius:5px;
                    border:none;
                    background-color:#0d6efd!important;
                    color:white;
                    margin-top:10%;
                    font-size:20px;
                    width:30%;
                    height:20%;
                  }
                  .buttonview:hover{
                    transform:scale(1.06);
                    transition-duration:.2s;
                  }
                  @media only screen and (max-width:1000px){
                    .bi-list{
                      display:inline-block;
                      color:#fff;
                      font-size:40px;
                    }
                    .nav-link{
                      font-size:25px;
                    }
                    .container-fluid h2{
                      margin-top:60%;
                      font-size:40px;
                    }
                    .container-fluid .buttonshop{
                      width:auto;
                      height:auto;
                      font-size:20px;
                    }
                    .rowone h1{
                      margin:10px;
                      font-size:20px;
                    }
                    .d-flex{
                      padding:4%;
                    }
                    .d-flex .col-lg-6 img{
                      /* margin:5% 0%; */
                      width:150px;
                      height:200px;
                      
                    }
                    .buttonview{
                      margin-top:20%;
                      font-size:20px;
                      width:80%;
                    }
                  }
                  </style>
                </head>
                <body class="text-center text-sm-center">
                <nav class="navbar navbar-expand-lg navbar-dark bg-primary mt-2 fw-bold text-center text-sm-center sticky-top"> 
                  <button class="navbar-toggler">
                  <i class="bi bi-list" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"></i>
                  </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0 home">
                <li class="nav-item">
                <a class="nav-link text-light" aria-current="page" href="index.php">HOME</a>
                </li>
              </ul>
            </div>
          </nav>
          <?php
          $got=0;
          while($row=mysqli_fetch_assoc($result))
          {
            if($row['email']==$_SESSION['uname'])
            {
               $got=1;
               ?>
                  <div class="d-flex rowone">
                        <div class="col-lg-6 col-sm-6 col-xs-6">
                             <img src="uploads/<?php echo $row['oimg']?>" alt="..." height="300px" width="250px" style="border-radius:5px;">
                        </div>
                        <div class="col-lg-6 col-sm-6 col-xs-6">
                            <h1 class="fw-bold"><?= $row['oname']; ?></h1>
                              <a href="product.php?prod=<?= $row['oname'] ?>"><button class="buttonview"> view more<i class="bi bi-arrow-right-circle-fill ms-2"></i></button></a>
                      </div>
                 </div>
                 </body>
                      </html>
               <?php

            }
            
          }
          if($got==0)
          {
              ?>
            <html>
                <head>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        </head>
        <body class="text-center">
            <div class="container-fluid">
                    <h2>No Orders!</h2>
                    <a href="index.php" aria-current="page"><button class="buttonshop"><i class="bi bi-cart-check-fill me-2"></i>Shop Now</button></a>
                    </div>
                    </body>
                    </html>
            <?php
          }
         
    }
   
   
    ?>
<?php
}
elseif(!isset($_SESSION['uname']))
       {
          header("Location: login.php");
       }
?>
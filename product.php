<?php
   session_start();
    // $connect=mysqli_connect("localhost","id20241156_root","Furniture@2662","id20241156_allinone");
    include("db_conf.php");
    if(!$conn)
    {
       die("connection failed: ".mysqli_connect_error());
    }
    $sql_query="SELECT * FROM `products`";
    $result=mysqli_query($conn,$sql_query);
    if(isset($_GET['prod']) && isset($_SESSION['uname']))
    {
      $product=$_GET['prod'];
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
 .bi-list{
  display:none;
 }
  .home{
    margin:0% 5%;
  }
  .he{
    font-family:italic;
    margin-top:5%;
    opacity:1;
  }
  .im{
    margin:5% 0%;
    box-shadow:2px 2px 4px 4px rgba(0,0,0,0.2);
    border-radius:5px;
  }
  .im:hover{
    transform:scale(1.06);
    transition-duration:0.5s;
  }
  .rowdiv{
    margin-top:5%;
    height:10%;
    width:100%;
    background-color:lightgreen;
    border-radius:5px;
    justify-content:center;
  }
  .rowdiv .col-lg-4 .hp{
    color:red;
    margin:10% 0%;
  }
  .rowdiv .col-lg-8 .hp{
    float:left;
    color:green;
    margin:5% 0%;
  }
  .hpi{
    float:left;
    opacity:0.8;
    margin-top:3%;
  }
  .hpii{
    float:left;
    opacity:0.8;
  }
  .hpi1{
    float:left;
    margin-left:5%;
    font-size:20px;
  }
  .button1{
    margin:5% 0%;
    width:50%;
    height:60%;
    border-radius:5px;
  }
  .button2{
    margin:5% 0%;
    width:50%;
    height:60%;
    background-color:gold;
    border:gold;
    border-radius:5px;
  }
  .magic{
    position:sticky;
    bottom:0;
  }
  .sticky{
    display:none;
  }
  .button1:hover,.button2:hover{
    transform:scale(1.06);
    transition-duration:0.2s;
  }
  
  @media only screen and (max-width:1000px)
  {
      .onerow{
        height:auto;
      }
      .row{
        width:auto;
      }
      .bi-list{
          display:inline-block;
          color:#fff;
          font-size:40px;
        }
        .nav-link,.ic{
          font-size:20px;
        }
        .col-lg-6 img{
          width:280px;
          height:400px;
        }
        .he{
          font-size:20px;
        }
        .rowdiv{
          width:auto;
          height:14%;
          border-radius:10px;
        }
        .rowdiv .col-lg-4 .hp{
          font-size:20px;
          margin-top:7%;
          margin-left:-20%;
        }
        .rowdiv .col-lg-8 .hp{
          font-size:20px;
          margin-top:-16%;
          margin-left:50%;
        }
        .hpi{
          font-size:20px;
          margin-left:1%;
        }
        .hpii{
          font-size:20px;
          margin-left:1%;
        }
        .hpi1{
          font-size:15px;
          margin-left:3%;
        }
        .magic{
          display:none;
        }
        .sticky{
          display:inline-block;
          position:sticky;
          bottom:0;
        }
        .button1{
          font-size:20px;
          height:50%;
          width:auto;
        }
        .button2{
          font-size:20px;
          height:50%;
          width:auto;
        }
  }
  </style>
</head>
<body style="background-color:#f0f0f0;" class="text-center text-sm-center"> 
      <?php
    while($row=mysqli_fetch_assoc($result))
        {
          if($row['proname']==$product){
            ?>
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
          
          
          <div class="row onerow">
            <div class="col-lg-6 col-sm-12">
              <img src= 'uploads/<?= $row['proimg'] ?>' width="500px" height="600px" class="im">
            </div>
            <div class="col-lg-6 col-sm-12">
              <h1 class="he"><?= $row['proname'] ?></h1>
              <div class="row rowdiv">
                <div class="col-lg-4 col-sm-4">
                <s><h4 class="hp"><span><?= $row['promrp'] ?></span></h4></s>
                </div>
                <div class="col-lg-8 col-sm-8">
                  <h3 class="hp"><i class="bi bi-currency-rupee"></i><span><?= $row['proprice'] ?></span></h3>
                </div>
              </div>
              <div class="row">
              <div class="col-lg-12 col-sm-12">
                <h4 class="hpi">Product small description</h4>
              </div>
              <div class="col-lg-12 col-sm-12">
                <p class="hpi1"><?= $row['prosdes'] ?></p>
              </div>
              <div class="col-lg-12 col-sm-12">
                <h4 class="hpii">Product Description</h4>
              </div>
              <div class="col-lg-12 col-sm-12">
                <p class="hpi1"><?= $row['prodes'] ?></p>
              </div>
              <div class="col-lg-12 col-sm-12">
                <h4 class="hpii">Product Meta title</h4>
              </div>
              <div class="col-lg-12 col-sm-12">
                <p class="hpi1"><?= $row['promtitle'] ?></p>
              </div>
              <div class="col-lg-12 col-sm-12">
                <h4 class="hpii">Product Meta Description</h4>
              </div>
              <div class="col-lg-12 col-sm-12">
                <p class="hpi1"><?= $row['promdes'] ?></p>
              </div>
              <div class="col-lg-12 col-sm-12">
                <h4 class="hpii">Product Meta Keywords</h4>
              </div>
              <div class="col-lg-12 col-sm-12">
                <p class="hpi1"><?= $row['promkeywords'] ?></p>
              </div>
            </div>
            </div>
            <div class="row magic">
              <div class="col-lg-6">
                 <a href="add_address.php?car=<?= $row['proname']?>"><button class="button1"><i class="bi bi-cart-check-fill me-2"></i>Add to Cart</button></a>
              </div>
              <div class="col-lg-6">
                <a href="add_address.php?sell=<?= $row['proname']?>"><button class="button2">BUY NOW</button></a>
              </div>
            </div>
            <div class="row sticky">
                <pre>
  <a href="add_address.php?car=<?= $row['proname']?>"><button class="button1"><i class="bi bi-cart-check-fill me-2"></i>Add to Cart</button></a>   <a href="add_address.php?sell=<?= $row['proname']?>"><button class="button2">   BUY NOW    </button></a>
                </pre>
          </div>
          </div>
             <?php
          }
             
        }
        mysqli_close($conn);
?>
<footer class="fot">
 <div
         class="text-center p-3 ic"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      © 2022 Copyright: carpenter's
    </div>
</footer>
</body>
<?php
}
elseif(!isset($_SESSION['uname']))
{
    header("Location: login.php");
}
?>
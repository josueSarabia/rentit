<!doctype html>
<html lang="en">
  <head>
    <title>RentIt</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body style="background-color: #eceff1">
  <?php
  require_once("database.php");
session_start();
if(isset($_POST['sub'])){
  $algo=$_POST['query'];

  header("location: search.php?search=$algo");



}
if(isset($_POST['contactar'])){
$id=$_SESSION['id'];
$mens=$_POST['contactText'];

$sql="SELECT * FROM users WHERE id=$id";
$rid=$_GET['id'];
$result = $conn->query($sql)->fetch_all(MYSQLI_ASSOC);
foreach ($result as $r) {
  
  $phone=$r['phone'];
}
$mens=$mens." My phone is ".$phone;
$sql2="SELECT * FROM renta WHERE rentID=$rid";
$result = $conn->query($sql2)->fetch_all(MYSQLI_ASSOC);
foreach ($result as $r) {
  
  $idDest=$r['userID'];
}
$spl1="INSERT INTO comments VALUES(null,'".$mens."',$id,$idDest,$rid)";
if ($conn->query($spl1) === TRUE) {
  echo"<script>alert('Sent succesfully');</script>";

} 
}
?>
  <form method="post" action="Index.php">
<nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #000000;">
    <a class="navbar-brand" style="margin-left: 150px;" href="#">RentIt</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse right" id="collapsibleNavId" >
        <div class="input-group mb-auto" style="width: 700px;margin-left: 40px;">

  <input  type="text" class="form-control"  aria-label="Recipient's username" aria-describedby="button-addon2" name="query">
  <div class="input-group-append" >
    <button name="sub" class="btn btn-outline-secondary" type="sumbit" id="button-addon2"> <i class="fa fa-search"></i></button>
  </div>
 
</div>
    </div>
    <?php error_reporting(0);
    $nom=$_SESSION['usuario'];
     if($_SESSION['usuario']!=null){

         
            echo  "<a class='navbar-brand' style='margin-left: 100px;' href='Usuario.php'>$nom</a>";
          }else{
            echo  "<a class='navbar-brand' style='margin-left: 100px;' href='Index.php'>Need Something? RentIt!</a>";  
        
          }?>
</nav>
</form>
<nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #000000;">
    </div>
    <ul class="navbar-nav" style="margin-left: 250px">
            <li class="nav-item dropdown active ">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Categories
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="search.php?category=Computers">Computers</a>
                      <a class="dropdown-item" href="search.php?category=Transportation">Transportation</a>
                      <a class="dropdown-item" href="search.php?category=Furnitures">Furnitures</a>
                      <a class="dropdown-item" href="search.php?category=Home Appliances">Home Appliances</a>
                      <a class="dropdown-item" href="search.php?category=Cameras y Accesories">Cameras y Accesories</a>
                      <a class="dropdown-item" href="search.php?category=Sports">Sports</a>
                      <a class="dropdown-item" href="search.php?category=Audio and Video">Audio and Video</a>
                      <a class="dropdown-item" href="search.php?category=Consoles and Videogames">Consoles and Videogames</a>
                      <a class="dropdown-item" href="search.php?category=Tools">>Tools</a>
                      <a class="dropdown-item" href="search.php?category=Instruments and Music">Instruments and Music</a>
                      <a class="dropdown-item" href="search.php?category=Books and Comics">Books and Comics</a>
                      <a class="dropdown-item" href="search.php?category=Cloth">Cloth</a>
                      <a class="dropdown-item" href="search.php?category=Movies and others">Movies and others</a>
                      <a class="dropdown-item" href="search.php?category=Other Categories">Other Categories</a>
                    </div>
                  </li>
            <?php error_reporting(0);
          if($_SESSION['usuario']!=null){
            echo "<li class='nav-item active'>
            <a class='nav-link' href='logout.php'>Logout</a>
          </li>";
          }else{

            echo  "<li class='nav-item active'>
            <a class='nav-link' href='login.php'>Login</a>
          </li>";
          echo " <li class='nav-item active'>
          <a class='nav-link' href='registro.php'>Sign up</a>
        </li>";
          }?>
           
           
          </ul>
</nav>

      

      <div class="row">

        <div class="col-x-12" style="width: 1000px">
            <div class="busqueda" style="margin-left: 100px;margin-top:100px;background-color: white">

                <?php 

require_once("database.php");
                if(isset($_GET['id'])){
                    $rid=$_GET['id'];
                    $sql="Select *  From renta WHERE rentID='$rid'";
                    $userID=0;
                    $result = $conn->query($sql)->fetch_all(MYSQLI_ASSOC);
  
                    echo $conn->error;
                    foreach ($result as $r) {?>
               

                        <div class="productInfo">
                            <div class="row">  
                                <div class="col">
                                    <h3 style="margin-top: 20px;margin-left: 20px"><?php echo $r['productName'];?></h3>
                
                                    <h6 style="margin-left: 20px"><?php echo $r['city'];?> </h6>
                                </div>
                                
                                <div class="col">
                                    <h1 style="margin-top: 10px"><?php echo "Price: $".$r['price'];?></h1>
                                </div>
                    
                            </div>
                        </div>
                        
                        <div class="fotoProduct" style="margin-top: 40px">
                        <img src="data:image/jpg;base64,<?php echo base64_encode($r['img']);?>"  style="max-width: 100%; max-height: 100%"/>
                        </div>
                
                        <div class="productDesc" style="margin-top: 50px">
                            <h1>Descripcion</h1>
                            <?php echo $r['units'];
                            echo "</br>";
                            echo "Units:".$r['units'];
                            $userID=$r['userID'];?>
                        </div>
                
                
                
                      </div>
                  </div>
                <?php }?>
        

            <?php
                 $sql="Select *  From users WHERE id='$userID'";
                 $result = $conn->query($sql)->fetch_all(MYSQLI_ASSOC);
  
                foreach($result as $r){?>
        <div class="col-xs-12" style="height: 430px;width: 238px;background-color: #e3e6e9;margin-left: 90px;margin-top:100px;margin-right: 40px">
            <h1 style="text-align: center"> <?php echo $r['name'];?></h1>

            <h3 style="margin-left: 10px"> <?php echo $r['phone'];?> </h3>

            <form method="post" >
                  <?php 
                  if($_SESSION['usuario']!=null){
                    echo "<textarea style='width: 200px;resize: none;padding-left:10px;margin-left:15px' name='contactText' id='' cols='30' rows='10'>Hi,i am interest in this article that i saw in RENTIT and i wish you contact me for more information</textarea>";
                  }
                  ?>
                  
                  <div style="width: 150px;height: 40px;padding-top: 50px;margin-left: 20px;margin-bottom: 0px">
                    <button name="contactar" class="btnfeaturedad">Contactar</button>  
                  </div>

            </form>

            
            
        </div>
                <?php }}?>
      </div>


    </body>

</html>
    
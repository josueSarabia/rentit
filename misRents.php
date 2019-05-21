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
  <?php
  require_once("database.php");
?>
  <?php
session_start();
if(isset($_POST['sub'])){
  $algo=$_POST['query'];

  header("location: search.php?search=$algo");


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

         
            echo  "<a class='navbar-brand' style='margin-left: 100px;' href='Usuario.php'>.$nom</a>";
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



    <h1 style="padding-left: 210px;margin-top: 40px"> MY RENTS</h1>
    <div class="busqueda" style="margin-top:60px;">

        <div class="row">
            <div class="col " >
                 <ul class="items-list">
                 
<?php 
$id=$_SESSION['id'];
$sql="SELECT img,price,rentID,productName FROM renta WHERE userID= $id";
$result = mysqli_query($conn, $sql);
while($r = mysqli_fetch_assoc($result)) {?>
 <li class="item featuredad  highlighted">
                    <div class="row">

                        <div class="col-xs-12 my-custom-width">
                            <figure class="items-image lines" style="margin-bottom: 0px;padding-left: 20px;">
                               <!-- <img src="https://apollo-virginia.akamaized.net/v1/files/jbs9zhmgkayc-CO/image%3Bp%3Dthumb" alt="Renault Logan 2014 - 55000 km"> -->
                               <img src="data:image/jpg;base64,<?php echo base64_encode($r['img']);?>"  style="max-width: 100%; max-height: 100%"/>
                              </figure>
                        </div>

                      <div class="col-xs-12 " style= "width: 250px;height: 40px;">
                          <div style="padding-left: 25px;padding-right: 10px;padding-bottom: 30;margin-bottom: 0px">
                          <h3 style="margin-bottom: 0px; width: 300px"> <?php echo $r['productName']; ?> </h3>
                            </div>
                      </div>
                    
                      <div class="col-xs-12 " style= "width: 150px;height: 40px;">
                          <div style="padding-left: 25px;padding-right: 10px;padding-bottom: 30;margin-bottom: 0px">
                          <h3 style="margin-bottom: 0px; width: 300px"><?php echo "Price ".$r['price']; ?></h3>
                            </div>
                      </div>
                      
                      <div class="col-xs-12 " style= "width: 150px;height: 40px;padding-top: 100px;">
                          <div style="padding-left: 25px;padding-right: 10px;padding-bottom: 30;margin-bottom: 0px">
                          <a  href= "updateProduct.php?id=<?php echo $r['rentID'];?>" class="btnfeaturedad" >View more</a>
                            </div>
                      </div>
                    
                  </li>
<?php }?>


                 </ul>

            </div>
        </div>

   
    

  </div>
  
  </body>


</html>
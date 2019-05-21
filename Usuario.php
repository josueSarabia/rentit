<html>
    <head>
        <title>RentIt</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/usuario.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/css.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      </head>
<body>
<?php 
  session_start();

  ?>
<form method="post" action="Index.php" style="margin-bottom: 0px;">
<nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #000000;">
    <a class="navbar-brand" style="margin-left: 150px;" href="Index.php">RentIt</a>
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

         
            echo  "<a class='navbar-brand' style='margin-left: 100px;' href='Index.php'>$nom</a>";
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
  
<div class="left-sidebar">
<h1><?php error_reporting(0);
if($_SESSION['usuario']!=null){
echo "Welcome ".$_SESSION['usuario'];

}else{
  echo "your account";
}?></h1>
<ul>
    <li><a href="misRents.php"style="text-decoration:none;">Your rents</a></li>
    <li><a href="subir.php"style="text-decoration:none;">Rents</a></li>
    <li><a href="updateUser.php"style="text-decoration:none;">Configuration</a></li>    
</ul>
</div>
<div class="center" style="padding-left: 350px;padding-top:100px; width: 90%" >
<h5>Resume</h5>
<div class="resume">
    <hr width="100%">
    <h6>Posted</h6>
    
    <div class="container" style="font-size: 1.5rem;font-weight: 500;padding: 50px">
        <div>
          <h4>Recents post</h4>
        </div>
          <div class="row">
          <?php
            require_once("database.php");
          $id=$_SESSION['id'];
       
          $sql="Select img,rentID From renta WHERE userID='$id'ORDER BY date  DESC LIMIT 6"  ;
     
          $result = $conn->query($sql)->fetch_all(MYSQLI_ASSOC);
     
          foreach($result as $r){?>

  
          <div class="col caja" >
          <img src="data:image/jpg;base64,<?php echo base64_encode($r['img']);?>"  style="max-width: 100%; max-height: 100%"/>
    
          </div>
  <?php }?>
      </div>
      </div>
    <hr width="100%">
    <h6>Comments</h6>
    <div class="busqueda" style="margin-top:60px;">

        <div class="row">
            <div class="col " >
                 <ul class="items-list">
                <?php 
                $id=$_SESSION['id'];
                $sql="SELECT * FROM comments WHERE idDest= $id";
                $result = $conn->query($sql)->fetch_all(MYSQLI_ASSOC);
                foreach ($result as $r) {
  
                ?>
                  <li class="item featuredad  highlighted">

                   

                      
                              <?php echo $r['mensaje'];?></h3>
                              </br>
                              
                       
                    
                  </li>
                <?php }?>


                 </ul>
                 

            </div>
        </div>

   
    

  </div>
</div>

</div>

</body>
</html>
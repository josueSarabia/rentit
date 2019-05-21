<!DOCTYPE html>
<html lang="en">
<head>
  
  <!--  Meta  -->
  <meta charset="UTF-8" />
  <title>My New Product!</title>
  
  <!--  Styles  -->
  <link rel="stylesheet" href="css/index.processed.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>

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


        <?php 
require_once 'database.php';
session_start();
$name=$_SESSION['usuario'];
$sql1 =  "SELECT id FROM users WHERE name LIKE '$name'";
$result = $conn->query($sql1)->fetch_all(MYSQLI_ASSOC);

           echo $conn->error;
           #var_dump($result);
$s=0;
foreach ($result as $r) { 
$s= $r['id'] ;# code..
}
           

if(isset($_POST['sub'])){
    $ima=addslashes(file_get_contents($_FILES['img']['tmp_name']));    
    $sql ="INSERT INTO renta  (productName, category,userID ,img, date, units, price, description, city)VALUES ('".$_POST["pro"]."','".$_POST["cate"]."','".$s."','".$ima."',curdate(),'".$_POST["unit"]."','".$_POST["price"]."','".$_POST["descrip"]."','".$_POST["city"]."')";
    if ($conn->query($sql) === TRUE) {
        echo "<script> alert('bien') </script> ";
        header("Location:usuario.php");#problema de brandon :)
    } else {
        
        echo $conn->error;
    }

}
?>

<form  action="uploadProd.php" method="POST" enctype="multipart/form-data">
  <section class="cont">
    <section class="todo">
   
      <h5><strong>Categoria</strong> </h5>
        <!--<a  href=""><i class="fas fa-car" > </i> vehiculo</a><br> -->
     <nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="height: 50px">
      
    <!--<li class="breadcrumb-item"><a href="#">Home</a></li>-->
    <li class="breadcrumb-item active" aria-current="page"><?php echo $_GET['cat'] ?></li>
    <input name="cate" type="hidden" value="<?php echo $_GET['cat'] ?>">
  </ol>
</nav>
      
      <label for="f" class="h"> <i class="fas fa-camera" style="font-size:3em"></i>  <p>Add</p> </label>
<input required id="f" type="file"name="img">
     
      <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Productos</label>
    <div class="col-sm-6">
      <input required name="pro" type="text" class="form-control" id="inputEmail3" placeholder="Nombre producto">
    </div>
  </div>
       <div class="form-group row">
    <label   class="col-sm-2 col-form-label">units</label>
    <div class="col-sm-5">
      <input required name="unit" type="text" class="form-control"   placeholder="units">
    </div>
         <div class="col-sm-5">
      <input required name="price" type="text" class="form-control"   placeholder="price">
    </div>
  </div>
         <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Pais</label>
        <div class="col-sm-10">
          <select required class="form-control" name="city" id="">
            <option value="Barranquilla">Barranquilla</option>
            <option value="Bogota">Bogota</option>
            <option value="cali">cali</option>
            <option value="medellin">medellin</option>
          </select>
        </div>
        
      </div>
      
       <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Descripcion</label>
    <div class="col-sm-10">
       <textarea required  class="form-control"  name="descrip" id="" cols="30" rows="10"></textarea>
    </div>
  </div>
  
</section>
    <div class="end">
    
        <button type="submit" name="sub" class="btn btn-info" >Continuar</button>
        <a href="subir.php"> volver</a>
      
      
    </div>
  </section>  
</form>

  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
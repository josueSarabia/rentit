<html>
        <title>RentIt</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <!--<link rel="stylesheet" href="css/css.css"> -->
        <link rel="stylesheet" href="css/style.css">
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      </head>
      <?php
session_start();
if(isset($_POST['sub'])){
  $algo=$_POST['query'];

  header("location: search.php?search=$algo");


}
?>
<form method="post" action="Index.php"style="margin-bottom:0px; ">
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


      <body style="background: #eceff1">



      <div class="container" style="font-size: 1.5rem;font-weight: 500;padding: 50px">
        <div>
                <h4> Select Categories</h4>
        </div>

        <div class="row" >
           <div class="col caja" onclick="redirect('Transportation')">
                <i class="fas fa-car" style="font-size:5em;"></i>
             <div>
                Transportation
             </div>
        </div>
        <div class="col caja" onclick="redirect('Computers')">
                <i class="fas fa-desktop"  style="font-size:5em;"></i>
                <div>
                Computers
                </div>
        </div>
     <div class="col caja" onclick="redirect('Furnitures')">
        <i class="fas fa-couch" style="font-size:5em;"></i>
       <div>
          Furnitures
       </div>
    </div>
      <div class="col caja"  onclick="redirect('Home Appliances')">
      <i class="fas fa-blender" style="font-size:5em;"></i>
        <div>
            Home Appliances
        </div>
    </div>
    <div class="col caja"  onclick="redirect('Cameras and Accesories')">
        <i class="fas fa-camera" style="font-size:5em;" ></i>
      <div>
          Cameras and Accesories
      </div>
    </div>
     <div class="col caja" onclick="redirect('Sports')">
      <i class="fas fa-futbol " style="font-size:5em;"></i>
      <div>
          Sports
      </div>
    </div>
      <div class="col caja"onclick="redirect('Audio and Video')">
          <i class="fas fa-microphone" style="font-size:5em;"></i>
        <div>
            Audio and Video
        </div>
    </div>
  
  </div>


  <div class="row">
   <div class="col caja"onclick="redirect('Consoles and Videogames')">
      <i class="fas fa-gamepad" style="font-size:5em;"></i>
     <div>
        Consoles and Videogames
     </div>
       
    </div>
    <div class="col caja"onclick="redirect('Tools')">
        <i class="fas fa-tools" style="font-size:5em;"></i>
      <div>
          Tools
      </div>
    </div>
     <div class="col caja"onclick="redirect('Instruments and Music')">
        <i class="fas fa-guitar" style="font-size:5em;"></i>
       <div>
        Instruments and Music
       </div>
    </div>
      <div class="col caja"onclick="redirect('Books and Comics')">
          <i class="fas fa-book" style="font-size:5em;"></i>
        <div>
            Books and Comics
        </div>
    </div>
    <div class="col caja"onclick="redirect('Cloth')">
        <i class="fas fa-tshirt" style="font-size:5em;"></i>
      <div>
          Cloth
      </div>
    </div>
     <div class="col caja"onclick="redirect('Movies and Others')">
        <i class="fas fa-film" style="font-size:5em;"></i>
        <div>
            Movies and others
        </div>
    </div>
      <div class="col caja" onclick="redirect('Other Categories')">
          <i class="fas fa-plus" style="font-size:5em;"></i>
          <div>
              Other Categories
           </div>
      </div>
  </div>
</div>

        </body>

        <script>
      function redirect(param){
        var link="uploadProd.php?cat="+param;
      
        window.location=link;
      }
      </script>
       
</html>

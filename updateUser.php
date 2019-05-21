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
        <link rel="stylesheet" href="css/css.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      </head>
<body>

    <?php
      require_once("database.php");
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
            <?php 
            
            if(isset($_POST['sub'])){
                $phone=$_POST['phone'];
                $email=$_POST['email'];
                $pass=$_POST['pass'];
                $cont=0;
                if($phone !=null || $email!=null || $pass!=null ){
                    $sql="UPDATE users SET ";
                    if($phone!=null){
                        
                            $sql=$sql."phone=$phone ";
                            $cont=1;
                        
                    }
                    if($email!=null){
                        if($cont==0){
                            $sql=$sql."email=$email ";
                            $cont=1;
                        }else{

                            $sql=$sql." ,email=$email ";
                        }
                        
                    }
                    if($pass!=null){
                        if($cont==0){
                            $sql=$sql."password=$pass ";
                            
                        }else{
                            $sql=$sql." ,password=$email ";
                        }
                    }
                    $id=$_SESSION['id'];
                    $sql=$sql."WHERE id='$id'";
                    if ($conn->query($sql) === TRUE) {
                        echo "<script> alert('successfully');</script>";
                      
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }

                }
            }
            ?>
<div class="left-sidebar">
<h1>your account</h1>
<ul>
    <li><a href="misRents.php"style="text-decoration:none;">Your rents</a></li>
    <li><a href="subir.php"style="text-decoration:none;">Rents</a></li> 
</ul>
</div>

<div style=" width: 120px" >
    
      <body style="background: #eceff1">
       
            <div class="box" style="width:500px; padding: 20px;">
              <form method="post">
                    <div>
                            <input type="phone" name="phone" >
                            <label>phone</label>
                        </div>
                    
                    <div>
                            <input type="email" name="email">
                            <label>email</label>
                        </div>
                        <div>
                                <input type="password" name="pass" >
                                <label>Password</label>
                            </div>
                    <input type="submit" name="sub" value="Update Account  ">
                    </form>
            </div>
               
        </body>
</div>

</body>
</html>
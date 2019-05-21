<html>
        <title>RentIt</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/css.css">
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      </head>
      <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #000000;">
            <a class="navbar-brand" style="margin-left: 150px;" href="Index.html">RentIt</a>
            
        </nav>
        <?php require "database.php";
      
        if(isset($_POST['sub'])){
            $email=$_POST['email'];
            $pass=$_POST['pass'];
           session_start();
           $sql1 =  "SELECT name,id FROM users WHERE email LIKE '$email' AND password LIKE'$pass'";
           echo $sql1;
           $result = $conn->query($sql1)->fetch_all(MYSQLI_ASSOC);
           var_dump($result);
           $name="";
           
           foreach ($result as $r) {
             $name= $r['name'] ;# code..
             $id=$r['id'];
           }
           if($name!=""){
           $_SESSION['usuario']=$name;
           $_SESSION['id']=$id;
           header('Location: usuario.php');
           }else{
            echo "<script type=\"text/javascript\">alert(\"Error\");</script>";  
           }
        }
          
         ?>
      <h1 style="padding-left:38%;">Create your account</h1>
      <body style="background: #eceff1">
            <div class="box" style="width:700px;">
              <form   method="POST">
                    <div>
                            <input type="email" name="email" required>
                            <label>email</label>
                        </div>
                        <div>
                                <input type="password" name="pass" required>
                                <label>Password</label>
                            </div>
                    <input type="submit" name="sub" value="Create account  ">
           
            </div>
               </form>
        </body>
       
</html>

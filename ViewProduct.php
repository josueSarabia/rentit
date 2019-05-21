<?php
require_once("database.php");
if(isset($_GET['id'])){

    echo $_GET['id'];
    $rid=$_GET['id'];
                    $sql="Select *  From renta WHERE rentID='$rid'";
                    
                    $result = $conn->query($sql)->fetch_all(MYSQLI_ASSOC);
  
                    echo $conn->error;
                    foreach ($result as $r) {

                        echo  $r['productName'];
                    }
}
?>
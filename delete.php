<?php 
include'db_connect.php' ;

if(isset($_GET['deleteid'])){
    $id=$conn->query("delete from 'cellule' where id = ".$_GET["deleteid"]);
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "Deleted successfull";
   
}

}





?>

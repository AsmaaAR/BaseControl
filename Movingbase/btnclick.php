<?php

// connection to data base:
$con = new mysqli('localhost','root','','baseinterface');

if(isset($_POST["lift"])){
  $query = "UPDATE directions set directions= 'L' where id = 0 ";        
       $res2 = mysqli_query($con,$query);
       if ($con->query($query)==TRUE) {
         echo "moved lift";
       } else {
         echo "Eroo". $query. "<br>" . $con->error;
       }        
}
if(isset($_POST["right"])){
 $query = "UPDATE directions set directions= 'R' where  id = 0 ";        
       $res2 = mysqli_query($con,$query);        
          if ($con->query($query)==TRUE) {
         echo "moved right";
       } else {
         echo "Eroo". $query. "<br>" . $con->error;
       }     
}
if(isset($_POST["forward"])){
 $query = "UPDATE directions set directions= 'F' where  id = 0 ";        
       $res2 = mysqli_query($con,$query);
        if ($con->query($query)==TRUE) {
         echo "moved forward";
       } else {
         echo "Eroo". $query. "<br>" . $con->error;
       }     
}
if(isset($_POST["backward"])){
 $query = "UPDATE directions set directions= 'B' where  id = 0 ";        
       $res2 = mysqli_query($con,$query);
          if ($con->query($query)==TRUE) {
         echo "moved backward";
       } else {
         echo "Eroo". $query. "<br>" . $con->error;
       }     
}
if(isset($_POST["stop"])){
 $query = "UPDATE directions set directions= 'S' where  id = 0 ";        
       $res2 = mysqli_query($con,$query);
         if ($con->query($query)==TRUE) {
         echo "Stoped";
       } else {
         echo "Eroo". $query. "<br>" . $con->error;
       }     
}
?>
<?php 
        $host='localhost';
        $username='root';
        $password="";
        $dbname="details";
        $conn=mysqli_connect($host,$username,$password,$dbname);
        if(!$conn){
            die("couldn't connect to the database".mysqli_connect_error());
        }
        ?>
      

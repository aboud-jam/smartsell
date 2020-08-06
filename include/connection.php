<?php

//connection
     $connection=mysqli_connect("127.0.0.1","root","","smartsell");

     if ($connection === false) {
         die("can not connect to the server " . mysqli_connect_error());

	}


?>
<?php
    $conn = pg_connect("postgres://xtbolcttgoxqfm:03f3b9493f05123deb10310048637d0c42e2ee7fd54c4c6ce391e3efe9800c5b@ec2-54-211-77-238.compute-1.amazonaws.com:5432/d1ad4q35f1e5tb");
    if(!$conn){
        die("Can not connect database");
    } 
?>
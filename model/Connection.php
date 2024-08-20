<?php

class Connection {

    protected function connect(){
        try {
            $con = new PDO('mysql:host=localhost:8889;dbname=shirt','root','root');
            return $con;
        } catch (PDOException $e) {
            return "Error!: ". $e->getMessage()."<br>";
        }
// FOR WINDOWS
        // try {
        //     $con = new PDO('mysql:host=localhost;dbname=shirt','root','');
        //     return $con;
        // } catch (PDOException $e) {
        //     return "Error!: ". $e->getMessage()."<br>";
        // }

// $servername = "localhost";
// $username = "root";
// $password = "root";
// $ddbb = "shirt";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $ddbb);

// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// return $conn;

     }
}
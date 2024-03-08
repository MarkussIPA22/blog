<?php

class Database {

private $connection;




    public function __construct($config) { 
   
        $connection_string = "mysql:" . http_build_query($config,"", ";");     
        $this->connection = new PDO($connection_string);
    }
       //Metode
public function execute ($query_string) {
 
   
// 1. Padot, sagatavot SQL vaicājumu
$query = $this->connection->prepare($query_string);

// 2. Izpildīt SQL vaicājumu
$query->execute();

// 3. Saņemt datus no mySQL uz PHP
 return $posts = $query->fetchAll(PDO::FETCH_ASSOC);

}
}
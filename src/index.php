<?php

echo "Hello from the docker container!!";

$mysqli = new mysqli("db","root","example","company1");

$sql = "INSERT INTO users (name , fav_color) VALUES('Ahmed Ashraf' , 'Blue')";
$result = $mysqli->query($sql);
$sql = "INSERT INTO users (name , fav_color) VALUES('Ahmed Tarek' , 'Black')";
$result = $mysqli->query($sql);
$sql = "INSERT INTO users (name , fav_color) VALUES('Ahmed Mustafa' , 'Yellow')";
$result = $mysqli->query($sql);

$sql = 'SELECT * FROM users';

if($result = $mysqli->query($sql)){
    while($data = $result->fetch_object()){
        $users[] = $data;
    }
}

foreach($users as $user){
    echo "<br>";
    echo $user->name . " " . $user->fav_color;
    echo "<br>";
}
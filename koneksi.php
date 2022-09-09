<?php
$dbh = NEW PDO("mysql:host=localhost;dbname=rumahsakitsyifa","root","");
$query = $dbh->query("SELECT * FROM user");

while ($data = $query->fetch()){
    echo"<p>".$data["id"]."</p>";
}
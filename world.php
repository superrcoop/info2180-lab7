<?php

$host = getenv('IP');
$username = getenv('C9_USER');
$password = '';
$dbname = 'world';
$country = $_GET['q'];

// Create connection
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if ($_GET['q']=='all'){
  $sql="SELECT * FROM countries";
  $stmt = $conn->query($sql);
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  echo '<ul>';
  foreach ($result as $row) {
  echo '<li>Code: '.$row["code"]."</br>Name: ".$row["name"]."</br>Continent: ".$row["continent"]."</br>Region: ".$row["region"].
  "</br>Surface Area: ".$row["surface_area"]."</br>Independence: ".$row["independence_year"].
  "</br>Population: ".$row["population"]."</br>Life Expectancy: ".$row["life_expectancy"].
  "</br>GNP: ".$row["gnp"]."</br>Last GNP: ".$row["gnp_old"]."</br>Local Name: ".$row["local_name"].
  "</br>Government: ".$row["government_form"]."</br>Head of State: ".$row["head_of_state"]."</br>Capital: ".$row["capital"].
  "</br>Code2: ".$row["code2"].'</br></li>';
  }
  echo '</ul>';
}else{
  $sql="SELECT * FROM countries WHERE name = '$country'";
  $stmt = $conn->query($sql);
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  echo '<ul>';
  foreach ($result as $row) {
    echo '<li>Code: '.$row["code"]."</br>Name: ".$row["name"]."</br>Continent: ".$row["continent"]."</br>Region: ".$row["region"].
    "</br>Surface Area: ".$row["surface_area"]."</br>Independence: ".$row["independence_year"].
    "</br>Population: ".$row["population"]."</br>Life Expectancy: ".$row["life_expectancy"].
    "</br>GNP: ".$row["gnp"]."</br>Last GNP: ".$row["gnp_old"]."</br>Local Name: ".$row["local_name"].
    "</br>Government: ".$row["government_form"]."</br>Head of State: ".$row["head_of_state"]."</br>Capital: ".$row["capital"].
    "</br>Code2: ".$row["code2"].'</li>';
  }
  echo '</ul>';
}
?>


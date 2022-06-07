<?php



require_once("login.php");
try{
    $pdo = new PDO($attribute, $user, $password);
    // echo "Cdo gje ne rregull";
} catch(PDOException $e){
    // echo "Gabim ne lidhje". $e->getMessage();
}

if(isset($_POST["name"])){
    $emer = $_POST["name"];
    
$query="SELECT * FROM `receta` WHERE name LIKE '%$emer%' ;";
$result=$pdo->query($query);

if(!$result=$pdo->query($query)){
     echo "Gabim ne ekzekutim";
}
   
else {
    while($row=$result->fetch(PDO::FETCH_BOTH))
    {
        
      echo "<br>Name: ".$row["name"]."<br>";
      echo "Category: ".$row["category"]."<br>";
      echo "Ingredients: ".$row["ingredients"]."<br>";
      echo "Prep Time: ".$row["prepTime"]."<br>";
      echo "Cooking Time: ".$row["cookingTime"]."<br>";
      echo "Total Time: ".$row["totalTime"]."<br>";
      echo "Notes Time: ".$row["notes"]."<br>";
      echo "Instructions Time: ".$row["instructions"]."<br>";
      echo <<<_OUT


      _OUT;


      echo "-------------------------------";
    }
}
} $pdo=null;






if(isset($_POST["name"]) && isset($_POST["ingredients"])  && isset($_POST["category"]) )
{

$emer = $_POST["name"];
$Ingredients = $_POST["ingredients"];
$Category = $_POST["category"];
}

$query="SELECT * FROM `receta` WHERE name LIKE '%$emer%'  
AND ingredients LIKE '%$Ingredients%'
AND category = $Category";


if(!$result=$pdo->query($query)){
     echo "Gabim ne ekzekutim";
}
   
else {
    while($row=$result->fetch(PDO::FETCH_BOTH))
    {
        
      echo "<br>Name: ".$row["name"]."<br>";
      echo "Category: ".$row["category"]."<br>";
      echo "Ingredients: ".$row["ingredients"]."<br>";
      echo "Prep Time: ".$row["prepTime"]."<br>";
      echo "Cooking Time: ".$row["cookingTime"]."<br>";
      echo "Total Time: ".$row["totalTime"]."<br>";
      echo "Notes Time: ".$row["notes"]."<br>";
      echo "Instructions Time: ".$row["instructions"]."<br>";
      


      echo "-------------------------------";
    }
}
 $pdo=null;
?>
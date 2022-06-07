<?php
require_once("login.php");

if(isset($_POST['name']) && isset($_POST['surname']) && $_POST['email'] && isset($_POST['password'])){
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
} $hashPassword=password_hash($password, PASSWORD_DEFAULT);


addAdmin($pdo, $name, $surname, $email, $hashPassword);


function addAdmin($pdo, $n, $s, $email, $p)
{
  $statement=$pdo->prepare("INSERT INTO admin(id, name, surname,email,password) VALUES('',:name, :surname, :email, :password)");

  if($statement->bindParam(':name', $n )&&
      $statement->bindParam(':surname', $s )&&
      $statement->bindParam(':email', $email )&&
      $statement->bindParam(':password', $p ))
{
      if($statement->execute())
      ?>
      <html>
      <head>
        <meta >
        <title> Tastylicious </title>
      <link rel="stylesheet" href="adding.css">
  
      </head>
      <body>
      <div class="Background"> 
    
        
        <img src="background.png" class="BackFoto" > 
      </div>
  <div class="UPPart"> 
      
  
        <form  action="lidhja.php" class="form" method="post" enctype='multipart/form-data'>
         <img src="Tastylicious1.png" class="UPLOGO"> 
          <?php
  
//   echo "<br>Add a new recipe for the audience :) ";


}}
?><fieldset class="fieldset">
              <legend>ADD A NEW RECIPE</legend>
             


                <div class="first">
              <label for="name" class="label">  Name </label> 
              <input type="text" name="name">
              <p></p>
              Category
              <select name="category" id=""> <option ></option>
          <option> Breakfast</option>
          <option > Dinner</option>
          <option > Snack</option></select>
         
              <p></p>
                <label for="surname" class="label"> Igredients </label>  <br>
                <textarea name="Ingredients" id="" cols="40" rows="4"  placeholder="1."></textarea>
                
              <p></p>
              <label for="time" class="label"> Cooking Time</label>
               <input type="text" name="CookingTime">
              <p></p>
              <p></p>
              <label for="time" class="label"> Preping Time</label> 
              <input type="text" name="PrepingTime" >
              <p></p>
             
              
            </div>
           
     
            <div class="second">
                <label for="text" class="label"> Notes <p></p>
              </label> <textarea  id="" cols="40" rows="4" name="Notes"></textarea> 
              <input type="file" name="image"> 
              <label for="instructions" class="label"> Instructions <p></p>
                <textarea  id="" cols="40" rows="4" placeholder="1." name="Instruction"></textarea> 
                
           
            </div>  
            <div>  <input type="submit" name="add" class="button" value="ADD " > </div>
           
          
          </fieldset>
          
      </form>
  </div>
    
  
  </body>
  </html>
 

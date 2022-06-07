<?php
require_once("login.php");
?>
<html>
    <head>
      <meta >
      <title> Tastylicious </title>
    <link rel="stylesheet" href="dish.css">
 
    </head>
    <body>
     <nav>
        
        <a href="projekti.php"> Home </a>
           <a href="recipes.html"> Recipes </a>
              <a href="Contact.html"> Contact </a>
               <input class="search" type="text" placeholder="Search...">
      
     </nav>

<div class="page">
    <?php
$query="SELECT * FROM  receta WHERE id=112 ;"; 

if(!$result=$pdo->query($query)){
             echo "Gabim ne ekzekutim";
        }
           
        else {
            // echo "Sakte ne ekzekutim";
          if($row=$result->fetch(PDO::FETCH_BOTH)){
       ?>
    <img src="dish3.png" class="mainFoto">
    
    <h2><?php echo $row["name"];?></h2>

    <table>
        <thead>
            <th> Prep Time</th>
         <th> Cook Time </th>
         <th> Total Time</th> </tr>
        </thead> 
         <tbody>
             <tr> <td> <?php echo $row["prepTime"];?> min</td>
        <td><?php echo $row["cookingTime"];?> min</td>
    <td><?php echo $row["totalTime"];?> min</td></tr>
</tbody>
    </table>

    
        <h3> Ingredients:</h3 >
       <div class="Ingredients"> 
           <ul>
            <li> <?php echo $row["ingredients"];?> </li>
              
        </ul>

    </div>
    
        <h3>Instructions: </h3>
       <div class="Instructions"> 
            
             <?php echo $row["instructions"];?>
           
           
              
       
        <h3> Notes:</h3>
        <p> <b><?php echo $row["notes"];?></b></p>
  <?php
          }}?>
    </div>
<!-- 
    <a href="Order.html">
        <button type="button" class="TOPBUTTON"> I want to order</button>
    </a> -->
    
</div>





    <div class="BottomPart" >
        <img class="downLogo" src="Tastylicious1.png" alt="">
        <div id="ikonat">
          <a href="icon"> <img class="ikon" src="insta.png" alt=""></a>
          <a href="icon"> <img class="ikon" src="fb.png" alt=""></a>
          <a href="icon"> <img class="ikon" src="twitter.jpg" alt=""></a>
        </div>
        <div class="LogIn">
        <label for=""> Would you like to be part of our team? <br>
          We would love to have people help us explore new recipes! <br> </label>
          <label for=""> Sign in: </label>
      <input class="SignIn" type="email" name=""  placeholder="Enter your email"> 
      </div>
      </div>
      <footer>
       <!-- <h3> Developed with Love <3 by Esmeralda Çala  </h3>*/ -->
      </footer>
    </div>
    </body>
  </html>
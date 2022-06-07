<?php
  require_once("login.php");
  ?>
<html>
  <head>
    <meta >
    <title> Tastylicious </title>
  <link rel="stylesheet" href="styling.css" type="text/css">
<style>
  .BottomPart{
    position: static;
  }
  
</style>
  </head>
  <body>
   <nav>
       <ul >
      <li> <a href="projekti.php"> Home </a></li>
       
        
            <li> <a href="Contact.html"> Contact </a></li>
            <li> <a href="SignIn.html"> Admin </a></li>
            <a href="search.html"><button class="search"  > </button></a>  
    </ul>
   </nav>
  
    
    <div class="OverlayFoto">
      <img src="TastyliciousWhite.png" class="UPLOGO">
    </div>
    <div class="BackVideo">
      <video id="backgroundVideo" src="backgroundVideo.mp4" autoplay loop muted poster="VideoFoto.png"></video>
      

        <h1 class="TOPTEXT">   HEALTHY LIFESTYLE  </h1>
        <p class="TOPTEXT1"> doesn't have to be boring </p>
     
<!-- <a href="Order.html">
 <button type="button" class="TOPBUTTON"> I want to order</button> -->
</a> -->

    </div>

     <div id="BelowVideo"> 
     
          <div class="RecentRecipes">
            <h3 class="RRText">  Recipes</h3>
            
            <div id="AboutUs"> 
    <article >
        <h3 class="AboutUs"> <u> About Us </u> </h3>
        <p class="Pershkrimi"> <b>Hello there! </b> Nice to see you here. <br> Tastylicious eshte nje platforme virtuale e krijuar me shume dashuri e cila shtyn drejt gatimit
        te ushqimit te shendetshem ne shtepi. Ideja per ktijimin e kesaj platforme lindi rastesisht dhe papritur pikerisht ne vendin ku ndohdin magjirat: <b>kuzhine</b>. </p>
    <img class="chef" src="main/chef.jpg" alt="">
      </article>
  </div>
  
            <div class="foto">
              <?php
        $query="SELECT * FROM `receta`";

        if(!$result=$pdo->query($query)){
             echo "Gabim ne ekzekutim";
        }
           
        else {
            // echo "Sakte ne ekzekutim";
          while($row=$result->fetch(PDO::FETCH_BOTH)) {
       ?>
      <figure>
         <img class="dish" src="<?php echo $row['images'] ?>" > 
        <figcaption> <?php echo $row["name"];?></figcaption>
   <input type=submit class="butoni" value="Get Recipe">  </input>  
            
        
      </figure> </div>
      <?php
          }}
       ?> 
       <a href="Adding.html">
  <button class="TOPBUTTON"> Add a recipe</button>
</a>


  


  



</div>

<div class="Store">
  <div class="delivering"> 
     <a href="Order.html"><img src="delivery.png" class="delivery"></a>
  <p> <b>You don't have time to cook? </b> <br>
   We bring to you everything you want. <br>
<b> Delivery is absolutely free!</b> </p>
  </div>
 
  <div class="Payment">
    <a href="Order.html"><img src="wallet.png" class="delivery"></a>
    <p> You can pay in cash or with a credit card. <br>
      <b> You choose! </b>
    </p>
  </div>
</div>
    </div>
    
    <div class="BottomPart" >
      <img class="downLogo"src="Tastylicious1.png" alt="">
      <div id="ikonat">
        <a href="https://www.instagram.com/"> <img class="ikon" src="insta.png" alt=""></a>
        <a href="https://www.facebook.com/"> <img class="ikon" src="fb.png" alt=""></a>
        <a href="https://twitter.com/"> <img class="ikon" src="twitter.jpg" alt=""></a>
      </div>
      
    </div>
    <footer>
     <!-- <h3> Developed with Love <3 by Esmeralda Çala  </h3>*/ -->
    </footer>
  </div>
  </body>
  
</html>

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
    

      <form  action="lidhja.php" class="form" method="post">
       <img src="Tastylicious1.png" class="UPLOGO"> 
       <fieldset class="fieldset">
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
              <textarea name="Ingredients" id="" cols="10" rows="2"  placeholder="1."></textarea>
              
            <p></p>
            <label for="time" class="label"> Cooking Time</label>
             <input type="text" name="CookingTime">
            <p></p>
            <p></p>
            <label for="time" class="label"> Preping Time</label> 
            <input type="text" name="PrepingTime" >
            <p></p>
            <label for="text" class="label"> Notes <p></p>
            </label> <textarea  id="" cols="40" rows="4" name="Notes"></textarea> 
            <input type="file" name="Nutritions"> 
            <?php
             $photo = $_FILES['Nutritions']['name'];
             move_uploaded_file($_FILES['Nutritions']['tmp_name'], $photo);
                echo "Uploaded image '$photo'<br><img src='$photo'>";
                ?>
            <p></p>
            
            
          </div>
          <div class="second">
            <label for="instructions" class="label"> Instructions <p></p>
              <textarea  id="" cols="30" rows="3" placeholder="1." name="Instruction"></textarea> 
              <input type="file" name="1InstructionFoto">
            <p></p>
            <textarea name="" id="" cols="30" rows="3" placeholder="2." name="2Instruction"></textarea>  <input type="file" name="2InstructionFoto" > <p></p> 
            <textarea name="" id="" cols="30" rows="3" placeholder="3." name="3Instruction"></textarea> <input type="file" name="3InstructionFoto"> <p></p>
            <textarea name="" id="" cols="30" rows="3" placeholder="4." name="4Instruction"></textarea><input type="file" name="4InstructionFoto">  <p></p>
            <textarea name="" id="" cols="30" rows="3" placeholder="5." name="5Instruction"></textarea> <input type="file" name="5InstructionFoto"> <p></p>
           
         
          </div>  
          <div>  <input type="submit" name="add" class="button" value="ADD " > </div>
         
        
        </fieldset>
        
    </form>
</div>
  

</body>
</html>
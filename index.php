<?php 


?>

<!DOCTYPE html>
<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css\style.css">
   </head>
   <body>
   <h2> Registeration Form-add User </h2>
   <p> Use this form to register a new user in the system. </p>
   <div class="container">
      <form action="sqlinsert.php" method="post">
         <div class="row">
            <div class="col-25">
               <label for="fname"> First Name </label>
            </div>
            <div class="col-75">
               <input type="text" id="fname" name="firstname" placeholder="Your name..">
            </div>
         </div>
         <div class="row">
            <div class="col-25">
               <label for="lname"> Last Name </label>
            </div>
            <div class="col-75">
               <input type="text" id="lname" name="lastname" placeholder="Your Last name...">
            </div>
         </div>
         <div class="row">
            <div class="col-25">
               <label for="acesslevel"> Acess Level </label>
            </div>
            <div class="col-75">
               <select id="acesslevel" name="acesslevel">
                  <option value="ordinaryuser"> Ordinary User </option>
                  <option value="supervosoryuser"> Supervisory User </option>
                  <option value="superuser"> Super User </option>
               </select>
            </div>
         </div>
         <div class="row">
            <div class="col-25">
               <label for="address"> Address </label>
            </div>
            <div class="col-75">
               <textarea id="address" name="address" placeholder="Your address" style="height: 70px"> </textarea>
            </div>
         </div>
         <div class="row">
            <div class="col-25">
               <label for="address"> Password </label>
            </div>
            <div class="col-75">
               <textarea id="address" name="password" placeholder="Your password" style="height: 70px"> </textarea>
            </div>
         </div>
         <div class="row">
            <input type="submit" value="Save!" name="save">
         </div>
      </form>
   </div>
   </body>
</html>
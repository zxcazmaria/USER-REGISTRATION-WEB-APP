<?php
include 'db.php';
	
$id = $_GET['id'];
function getUserTable($id, $table)
{
global $conn;
$query = "SELECT * FROM users WHERE id='$id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
return $row[''.$table.''];     
}
	
	
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
      <form action="editaction.php?id=<?php echo $id ?>" method="post">
		
         <div class="row">
            <div class="col-25">
               <label for="fname"> First Name </label>
            </div>
            <div class="col-75">
               <input type="text" id="fname" name="firstname" value="<?php echo getUserTable($id, "fname"); ?>" placeholder="Your name..">
            </div>
         </div>
         <div class="row">
            <div class="col-25">
               <label for="lname"> Last Name </label>
            </div>
            <div class="col-75">
               <input type="text" id="lname" name="lastname" value="<?php echo getUserTable($id, "lname"); ?>" placeholder="Your Last name...">
            </div>
         </div>
         <div class="row">
            <div class="col-25">
               <label for="acesslevel"> Acess Level </label>
            </div>
            <div class="col-75">
               <select id="acesslevel" name="acesslevel">
                  <option value="ordinaryuser" <?php if(getUserTable($id, "accesslevel") == "ordinaryuser") { echo"selected"; } ?>> Ordinary User </option>
                  <option value="supervosoryuser" <?php if(getUserTable($id, "accesslevel") == "supervosoryuser") { echo"selected"; } ?>> Supervisory User </option>
                  <option value="superuser" <?php if(getUserTable($id, "accesslevel") == "superuser") { echo"selected"; } ?>> Super User </option>
               </select>
            </div>
         </div>
         <div class="row">
            <div class="col-25">
               <label for="address"> Address </label>
            </div>
            <div class="col-75">
               <textarea id="address" name="address" placeholder="Your address" style="height: 70px"><?php echo getUserTable($id, "address"); ?></textarea>
            </div>
         </div>
         <div class="row">
            <div class="col-25">
               <label for="address"> Password </label>
            </div>
            <div class="col-75">
               <textarea id="address" name="password" placeholder="Your password" style="height: 70px"><?php echo getUserTable($id, "password"); ?></textarea>
            </div>
         </div>
         <div class="row">
            <input type="submit" value="Edit!" name="edit">
         </div>
      </form>
   </div>
   </body>
</html>